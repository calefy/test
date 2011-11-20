<?php
session_start();
require('../includes/common/CSmarty.php');
require('../includes/common/CDatabase.php');

class Regist{

	function run(){
		$this->smarty = new CSmarty();

		if( isset( $_POST['account'] ) ){ //提交表单
			$this->reg_submit();
		}else{ //初始进入
			$this->goto_form();
		}	
	}
	function goto_form(){
		$this->smarty->assign('title', '用户注册');
		$this->smarty->display( 'reg/index.html' );
	}
	function goto_index(){
		header( 'Location:/' );
	}
	
	function reg_submit(){
		//提取表单数据
		$this->form_data = array(
			'account' => $_POST['account'],
			'password' => $_POST['password'],
			'password2' => $_POST['password2'],
			'email' => $_POST['email']
		);

		if( empty($this->form_data['account']) ){
			$error = '账号不能为空';
		}elseif( $this->form_data['password'] != $this->form_data['password2'] ){
			$error = '两次密码输入不一致';
		}else{
			$db = new CDatabase();
			$sql = "select * from m_user where account='{$this->form_data['account']}'";
			$r = $db->query( $sql );
			if( $r ){
				if( $r->num_rows > 0 ){
					$error = '已存在该用户名，请修改';
				}else{
					$sql = "insert into m_user(account,password,email) values('{$this->form_data['account']}','{$this->form_data['password']}','{$this->form_data['email']}')";
					$rs = $db->query( $sql );
					if( $rs ){
						$_SESSION['user'] = array(
							'account' => $this->form_data['account'],
							'email' => $this->form_data['email'],
							'password' => $this->form_data['password'],
						);
						$this->goto_index();
						$rs->free();
					}else{
						$error = '插入数据库操作出错，请稍后重试。';
					}
				}
				$r->free();
			}
		}
		
		//出错
		if( isset($error) ){
			$this->smarty->assign('data', $this->form_data);
			$this->smarty->assign('error', $error);
			$this->goto_form();
		}
		
	}
}

$reg = new Regist();
$reg->run();


?>
