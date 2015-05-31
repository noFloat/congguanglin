<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        if(isset($_SESSION['isLogin'])){
            $user=M('user');
            $user=$user->select();
            $this->assign('user,$user');
             $article_list= M('article');
            $count= $article_list->count();
            $Page = new  \Think\Page($count, 5);
            $show = $Page->show();
            $orderby['id']='desc';
            $content=$article_list->select();
            $this->assign('content',$content);
            $list = $article_list->order($orderby)->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('list',$list);
            $this->assign('page',$show);
            $this->display();           
        }else{
            $this->redirect('Login/index');
        }

    }
     public function _before_index(){
        
    }

    public function _after_index(){
     $this->display('footer');
    }
    public function _empty($name){
     echo "";
    }
    public function userunset(){
        session('[start]');
            if(isset($_SESSION['isLogin']))
        {
             $this->redirect('index');
             session('isLogin',null);
            echo"<script type='text/javascript'>alert('注销成功');history.back(-1);</script>"; 
        

        }
    }
    public function uploading(){
        $this->display();
    }
    public function checkArticle(){
        session('[start]');
        if(isset($_SESSION['isLogin'])){
            $article=M('article');
            $data['user_name']= $_SESSION['adminname']; 
            $data['content']=I('post.content','','htmlspecialchars');
            $data['kind'] =$_POST['kind'];
            $data['time']=date('Y-m-d H:i:s',time());
            $article->data($data)->add();
            $this->redirect('Index/index');
        }else{
            $this->error('上传失败');
        }


    }
    public function articleshow(){
        $needid=I('get.page','get.page+1'); 
        $_SESSION['needpage']=$needid;
        $article_list= M('article');
        $article=$article_list->where(array('id'=>$needid))->find();
        $this->assign('article',$article);
        $remark_list=M('remark');
        $remark=$remark_list->where(array('article_id'=>$needid))->find();
        $this->assign('remark',$remark);
        $this->display();
    }


    public function deleteArticle(){
        session('[start]');
        $needid =$_SESSION['needpage']; 
        $article_list= M('article');
        $article=$article_list->where(array('id'=>$needid))->delete();
        if($article){
         $this->redirect('Index/index');
        }else{
            echo "guile ";
            // $this->error('失败');
        }
    }
    public function edit(){
        session('[start]');
        $needid =$_SESSION['needpage']; 
        $data['content']=I('post.content','','htmlspecialchars');  
        $article_list= M('article');
        $article=$article_list->where(array('id'=>$needid))->setField('content',$data['content']);
        // $this->ajaxReturn($article,'html');
        $this->redirect('Index/index');
    }
    public function checkremark(){
        $this->display();
    }
    public function remark(){
        session('[start]');
        $needid =$_SESSION['needpage'];
        $data['remark_content']=I('post.content','','htmlspecialchars');
        $remark_user=$_SESSION['adminname'];
        $data['article_id']=$needid;
        $data['remark_user']=$remark_user;
        $data['remark_time']=date('Y-m-d H:i:s',time());
        $remarker = M('remark');
        $remarker->data($data)->add();
        $this->redirect('Index/index');
    }
    public function _after_articleshow(){
     $this->display('footer');
    }
     public function _after_uploading(){
     $this->display('footer');
    }
   public function _after_checkArticle(){
     $this->display('footer');
    }    
    public function _after_deleteArticle(){
     $this->display('footer');
    }

}