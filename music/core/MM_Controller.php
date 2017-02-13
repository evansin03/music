<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MM_Controller extends CI_Controller
{
    protected $layout = 'layout/main';
    private   $js_files = array();
    private   $css_files = array();
    public    $need_login = false;
    
    var $role = '';
    var $uid = 0;
    var $username = '';
    
    var $_ckey='';
    var $_akey='';
    var $_mkey='';

    public function __construct()
    {
        parent::__construct();
        
//         $this->load->library(array('Acl','common'));
        
        //假设现在角色为admin，这里可以自已定义获取角色权限的方法。
        $this->role = 'gm';
        //执行权限判断
        if(!$this->acl->checkAcl( $this->role )){
            if( method_exists($this,'_on_access_denied') ) $this->_on_access_denied();
        }
    }

    // 添加js文件
    public function add_js($filepath)
    {
        array_push($this->js_files, "<script type='text/javascript' src='". $filepath ."'></script>");
    }

    // 添加css文件
    public function add_css($filepath){
          array_push($this->css_files, "<link href='".$filepath."' rel='stylesheet' type='text/css'>");
    }

    // 渲染视图
    protected function render($file = NULL, $viewData = array(), $globalData= array())
    {
        if($this->js_files){
            $globalData['js_files'] = $this->js_files;
        }
        if($this->css_files){
            $globalData['css_files'] = $this->css_files;
         }
        if( !is_null($file) ) {
            $data['content'] = $this->load->view($file, $viewData, TRUE);
            $data['layout'] = $globalData;
            $this->load->view($this->layout, $data);
        } else {
            $this->load->view($this->layout, $viewData);
        }
        $viewData = array();
    }
    
    /*
     * @name _on_access_denied 访问无权限时处理方法
     * @return null
     */
    protected function _on_access_denied()
    {
        header('Content-type: text/html; charset=utf-8');
        echo '无权限';exit;
    }
    
    protected function _db_error(){
        echo 'DB_error();';exit;
    }
    
    protected function _redirectMessage($heading,$message,$url,$time=5,$hidden_script='')
    {
        $this->load->view('common/show_msg',array('message_caption'=>$heading,'message_body'=>$message,'redirect_url'=>$url,'redirect_delay'=>$time,'hidden_script'=>$hidden_script));
        return;
    }
    
    protected function _FailMessage($info,$msg,$url = array()){
        if(is_array($url)) $url = $this->common->Get_Url($url);
        return $this->_redirectMessage($this->common->Get_ErrorMsg($info),$this->common->Get_ErrorMsg($msg),$url);
    }
    
}