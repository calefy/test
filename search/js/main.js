/**
 * main.js
 * 
 * @date 2012/11/5
 */
(function (global, undefined) {

	var document = global.document;
	
	// 获取dom
	function $ (id) {
		return document.getElementById(id);
	}
	// 去除空格
	function trim (s) {
		return s.replace(/^\s+|\s+$/g, '');
	}
	// 添加事件句柄
	function addEvent (dom, type, callback) {
		if (!dom) {return;}

		if (dom.addEventListener) {
			dom.addEventListener(type, callback, false);
		}
		else if (dom.attachEvent) {
			dom.attachEvent('on' + type, callback);
		}
		else {
			dom['on' + type] = callback;
		}
	}
	// 删除事件监视
	function removeEvent (dom, type, callback) {
		if (!dom) {return;}

		if (dom.removeEventListener) {
			dom.removeEventListener(type, callback, false);
		}
		else if (dom.detachEvent) {
			dom.detachEvent('on' + type, callback);
		}
	}
	// 为obj绑定方法
	function bind (func, obj) {
		return function () {
			func.apply(obj, arguments);
		};
	}
	// 添加tap事件(touchstart,touchmove,touchend)
	function addEventTap (dom, callback) {
		var moved = false;
		addEvent(dom, 'touchstart', function () {
			addEvent(dom, 'touchmove', function () {
				moved = true;
			});
		});

		addEvent(dom, 'touchend', function (e) {
			if (moved) {
				moved = false;
			}
			else {
				callback.call(null, e);
			}
		});
	}


	/**
	 * 查找
	 * @Search
	 * @param {String} config.suggestUrl 输入时动态建议的地址
	 * @param {String} config.prefixCallback 动态建议数据反回时回调函数的前缀
	 */
	function Search (config) {
		this.dom = {};
		// 必要的dom节点
		this.dom.form =   $('searchForm');
		this.dom.input =  $('searchInput');
		this.dom.submit = $('searchSubmit');
		this.dom.list =   $('searchList');
		this.dom.del =    $('searchDel');
		this.dom.back =   $('searchBack');
		// 底部额外搜索部分
		this.dom.footInput = $('searchInputFoot');
		this.dom.footSubmit = $('searchInputSubmit');

		// 一旦提交就不可再次提交
		this._submitLock = false;

		// suggest请求地址
		this._suggestUrl = config.suggestUrl;
		// suggest返回数据的回调函数前缀
		this._funcPrev = config.prefixCallback || '_cbfnc_';
		this._oldSuggestFunctionName;

		// 保证所需id都存在
		if (this.dom.input && this.dom.submit && this.dom.list) {
			// 记录最先的推荐数据
			this._defaultList = this.dom.list.innerHTML || '';
			this._init();
		}
	}
	Search.prototype = {
		/**
		 * 初始化事件
		 */
		_init: function () {
			addEvent(this.dom.input, 'focus', bind(this._eFocus, this));
			addEvent(this.dom.input, 'keyup', bind(this._eKeyup, this));
			addEventTap(this.dom.del, bind(this._eClearInput, this));
			addEventTap(this.dom.list, bind(this._eSuggestClick, this));
			addEventTap(this.dom.submit, bind(this._eSubmit, this));
			addEventTap(this.dom.back, bind(this._eBack, this));
			// 底部额外搜索框
			addEvent(this.dom.footInput, 'focus', bind(function (evt) {
				this.dom.footInput.blur();
				this.dom.input.focus();

				evt = evt || global.event;
				if (evt.preventDefault) {
					evt.preventDefault();
					evt.stopPropagation();
				}
				else {
					evt.returnValue = false;
					eve.cancelBubble = true;
				}
			}, this));
			addEventTap(this.dom.footSubmit, bind(function (evt) {
				this.dom.submit.click();

				evt = evt || global.event;
				if (evt.preventDefault) {
					evt.preventDefault();
					evt.stopPropagation();
				}
				else {
					evt.returnValue = false;
					eve.cancelBubble = true;
				}
			}, this));
		},
		/**
		 * 事件处理
		 */
		_eFocus: function (evt) {
			var wrap = this.dom.form.parentNode,
				className = wrap.className;
			// 一直查找到最上层“..._wrap”
			while (className.indexOf('_wrap') === -1) {
				wrap = wrap.parentNode;
				className = wrap.className;
			}
			if (className.indexOf('search_onfocus') === -1) {
				wrap.className = className + ' search_onfocus';
			}

			if (!this.getValue()) {
				this.dom.list.innerHTML = this._defaultList;
				this.showList();
				this.hideDel();
			}
			else {
				this.showDel();
				this.requestNewSuggest();
			}
		},
		_eKeyup: function (evt) {
			evt = evt || global.event;

			// 回车键提交
			if (evt.which === 13) {
				this.submit();
				if (evt.preventDefault) {
					evt.preventDefault();
					evt.stopPropagation();
				}
				else {
					evt.returnValue = false;
					evt.cancelBubble = true;
				}
			}
			else {
				this.requestNewSuggest();
			}
		},
		_eClearInput: function (evt) {
			this.dom.input.value = '';
			this.hideDel();
			this.dom.list.innerHTML = this._defaultList;

			evt = evt || global.event;
			if (evt.preventDefault) {
				evt.preventDefault();
			}
			else {
				evt.returnValue = false;
			}
		},
		_eBack: function (evt) {
			var wrap = this.dom.form.parentNode,
				className = wrap.className;
			while (className.indexOf('_wrap') === -1) {
				wrap = wrap.parentNode;
				className = wrap.className;
			}
			wrap.className = className.replace('search_onfocus', '');

			this.hideList();
			this.hideDel();

			this.dom.input.blur();
			
			evt = evt || global.event;
			if (evt.preventDefault) {
				evt.preventDefault();
			}
			else {
				evt.returnValue = false;
			}
		},
		_eSubmit: function (evt) {
			this.submit();

			evt = evt || global.event;
			if (evt.preventDefault) {
				evt.preventDefault();
			}
			else {
				evt.returnValue = false;
			}
		},
		_eSuggestClick: function (evt) {
			var target, className;

			evt = evt || global.event;
			target = evt.target || evt.srcElement;
			className = target.className || '';

			this.dom.input.value =
				trim(target.tagName.toUpperCase() === 'LI' ? target.innerText : target.parentNode.innerText);
			if (className.indexOf('icon_add') === -1) {
				this.hideList();
				this.submit();
			}
			else {
				this.dom.input.focus();
				this.requestNewSuggest();
			}

			if (evt.preventDefault) {
				evt.preventDefault();
				evt.stopPropagation();
			}
			else {
				evt.returnValue = false;
				evt.cancelBubble = true;
			}
		},
		showList: function () {
			var list = this.dom.list;
			if(list) { list.style.display = 'block'; }
		},
		hideList: function () {
			var list = this.dom.list;
			if(list) { list.style.display = 'none'; }
		},
		showDel: function () {
			var del = this.dom.del;
			if(del) { del.style.display = 'block'; }
		},
		hideDel: function () {
			var del = this.dom.del;
			if (del) { del.style.display = 'none'; }
		},
		/**
		 * 获取value值
		 * @return {String} 输入值
		 */
		getValue: function () {
			return trim(this.dom.input.value);
		},
		/**
		 * 提交
		 */
		submit: function () {
			var v = this.getValue();

			if (!this._submitLock && v) {
				this._submitLock = true;
				// form提交
				if (this.dom.form) {
					this.dom.form.submit();
				}
			}
		},
		requestNewSuggest: function () {
			var v = this.getValue(),
				oldScriptDom,
				script, funcName;

			if (v) {
				this.showDel();
				// 与上次不同则新请求
				if (v === this._oldValue) {
					this.showList();
				}
				else {
					this._oldValue = v;
					// 保证返回顺序
					if (this._oldSuggestFunctionName) { // 删除旧的
						oldScriptDom = $(this._oldSuggestFunctionName);
						oldScriptDom.parentNode.removeChild(oldScriptDom);
						delete global[this._oldSuggestFunctionName];
					}
					// 每次回调函数不同，保证返回顺序
					funcName = this._funcPrev + (new Date().getTime() + Math.round(Math.random() * 1000)); 
					funcName = this._funcPrev + '1234567'; // 本行测试用，实际中直接删除
					this._oldSuggestFunctionName = funcName;
					global[funcName] = bind(function (data) {
						this.showNewSuggest(data);
						delete global[funcName];
					}, this);
					// 请求新的数据
					script = document.createElement('script');
					script.id = funcName;
					script.src = this._suggestUrl + '?value=' + v + '&callback=' + funcName;
					document.getElementsByTagName('head')[0].appendChild(script);
				}
			}
			// 空白
			else {
				this.hideDel();
				this.dom.list.innerHTML = this._defaultList;
			}
		},
		/**
		 * 显示新的suggest
		 */
		showNewSuggest: function (data) {
			var len = data.list && data.list.length,
				i = 0,
				html = ['<ul>'],
				className;
			if (len > 0) {
				for (; i < len; i++) {
					html.push(
						'<li>' +
						'	<i class="icon icon_search"></i>' +
						'	<span class="word">' + data.list[i] + '</span>' +
						'	<i class="icon icon_add"></i>' +
						'</li>'
					);
				}
				html.push('</ul>');
				this.dom.list.innerHTML = html.join('');
				this.showList();
			}
			else if (len === 0) {
				this.hideList();
			}
		}
	};


	/**
	 * ajax请求
	 *
	 * @method	ajax
	 *
	 * @param {Object} options 一个配置对象
	 * @return {Object} ajax 返回一个ajax对象
	 */
	function Ajax (){
		this.request = this.getRequest();
	}
	Ajax.prototype = {
		getRequest: function () {
			var request,
				versions,
				i, len;

			if (global.XMLHttpRequest) {
				request= new XMLHttpRequest;
				//有些浏览器需要设置mime类型，如果存在重写mime类型的属性就进行设置
				if(request.overrideMimeType) {
					request.overrideMimeType('text/xml');
				}   
			}
			else if (global.ActiveXObject) {
		　　　　 //搞定兼容性
				versions = ['Microsoft.XMLHTTP', 'MSXML.XMLHTTP', 'Microsoft.XMLHTTP', 'Msxml2.XMLHTTP.7.0', 'Msxml2.XMLHTTP.6.0', 'Msxml2.XMLHTTP.5.0', 'Msxml2.XMLHTTP.4.0', 'MSXML2.XMLHTTP.3.0', 'MSXML2.XMLHTTP'];
				for (i=0, len = versions.length; i < len; i++) {
					try{
						request=new ActiveXObject(versions[i]);
						if(request){
							return request;
						}
					}catch(e){
						request=false;
					}   
				}
			}
			return request;
		},
		get: function(url,func){
			this.request.open('get',url);
			this.request.send(null);
			this.onreadystatechange(func);      
		},
		post: function(url,data,func){
			this.request.open('post',url);
			this.request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			this.request.send(data);
		},
		//回调函数
		onreadystatechange: function(func){
			var me = this;
			this.request.onreadystatechange=function(){
				if(me.request.readyState==4){
					if(me.request.status==200){
						func(me.request.responseText);
					}
				}   
			};
		}
	};




	// -------------------------------------------
	// 页面实例
	// 注册搜索功能
	new Search({
			'suggestUrl':     'data/new_suggest.js',
			'prefixCallback': '_cbfnc_'
		});

	// 加载下一页
	(function () {
		var nextPage = $('nextPage'),
			nextPageLoading = $('nextPageLoading'),
			pageNumber = 1,
			// 测试数据路径(请求下一页数据)
			url = 'data/new_page_data.js';

		addEventTap(nextPage, function (evt) {
				var target;
				evt = evt || global.event;
				target = evt.target || evt.srcElement;

				// 返回顶部
				if (target.className.indexOf('return_top') >= 0) {
					// 浏览器返回顶部
					global.document.getElementsByTagName('body')[0].scrollTop = 0;
				}
				// 加载下一页
				else {
					nextPage.style.display = 'none';
					nextPageLoading.style.display = 'block';
					
					new Ajax().get(url, function (data) {
							var div, page;
							if (data) {
								page = '<a class="page_num" href="#">第' + (++pageNumber) + '页</a>';
								div = global.document.createElement('div');
								div.innerHTML = page + data;
								nextPage.parentNode.insertBefore(div, nextPage);

								nextPage.innerHTML = '<div class="page_foot"><a href="#" class="next_page">下一页<i class="icon return_top"></i></a></div>';
								nextPage.style.display = 'block';
								nextPageLoading.style.display = 'none';
							}
							else {
								nextPageLoading.innerHTML = '已是最后一页';
							}
						});
				}

				if (evt.preventDefault) {
					evt.preventDefault();
				}
				else {
					evt.returnValue = false;
				}
			});
	})();

})(this);
