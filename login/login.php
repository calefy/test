<?php
session_start();
require_once('../includes/common/CSmarty.php');
require_once('../includes/common/CDatabase.php');

class Login{
	function run(){
		$this->smarty = new CSmarty();

		if( isset( $_POST['account'] ) ){//提交表单
			$this->login_submit();
		}else{ //初始进入
			$this->goto_form();
		}
	}
	function goto_form(){
		$this->smarty->assign('title', '用户登录');
		$this->smarty->display('login/index.html');
	}
	function goto_index(){
		header('Location:/');
	}

	function login_submit(){
		$this->form_data = array(
			'account' => $_POST['account'],
			'password' => $_POST['password']
		);

		if( empty($this->form_data['account']) ){
			$error = '请输入账号';
		}elseif( empty($this->form_data['password']) ){
			$error = '请输入密码';
		}else{
		
			$db = new CDatabase();
			$sql = "select * from m_user where account='{$this->form_data['account']}' and password='{$this->form_data['password']}'";
			if( $rs = $db->query($sql) ){
				if( $rs->num_rows == 1 ){
					$row = $rs->fetch_object();
					$_SESSION['user'] = array(
						'account' => $row->account,
						'email' => $row->email,
						'password' => $row->password
					);
					$this->goto_index();
					$rs->free();
				}else{
					$error = '用户名或密码错误！';
				}
			}else{
				$error = '查询用户失败，请稍后再试....';
			}
		}
		
		if( isset($error) ){
			$this->smarty->assign('data', $this->form_data);
			$this->smarty->assign('error', $error);
			$this->goto_form();
		}
	}
}

$login = new Login();
$login->run();

?>
