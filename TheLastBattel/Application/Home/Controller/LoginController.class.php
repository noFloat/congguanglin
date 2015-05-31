<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
	public function checkLogin(){
		session('[start]');
		$admin =M('user');
		$code=I('post.code');
		$Verify = new \Think\Verify();
		$password=I('post.password','','htmlspecialchars'); 
		$password=MD5(MD5($password)."cgl");
		$re=$admin->field('id,user,password')->where(array('user'=>$_POST['username'],'password'=>$password))->select();
		if(!$Verify->check($code)){
			echo "验证码错误";
			$this->error();
		}elseif(!$re){
			echo "密码错误";
			$this->error();
		}else{
			$_SESSION['isLogin']="1";
			$_SESSION['adminname']=$_POST['username'];
			$this->redirect('Index/index');
		}
	}

	public function code(){
		$config = array(
				'fontsize'=>30,
				'length'=>5,
				'useNoise'=>false
			);
		$Verify=new \Think\Verify();
		$Verify->fontttf='5.ttf';
		$Verify->useImgBg=true;
		$Verify->codeSet='0123456789qwertyuioplkjhgfdsazxcvbnm';
		$Verify->entry();
	}

	public function register(){
		$this->display();
	}

	public function checkRegister(){
		$check = M('user');
		$user=trim($_POST['username']);
		$data['user']=$_POST['username'];
		$password=I('post.password','','htmlspecialchars');
		$passwordCheck=I('post.passwordCheck','','htmlspecialchars');  
		$password=MD5(MD5($password)."cgl");
		$passwordCheck = MD5(MD5($passwordCheck)."cgl");
		$data['password']=$password;
		$re = $check->field('id,user,password')->where(array('user'=>$user))->select();
		if($re){
			echo "用户名已注册";
			$this->error();
		}elseif($password!=$passwordCheck){
			echo "密码不一样";
			$this->error("");
		}else{
			$check->data($data)->add();
			$_SESSION['isLogin']="1";
			$_SESSION['adminname']=$_POST['username'];
			$this->display('Index/index');
		}
	}

}