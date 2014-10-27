<?php

class Layout {
  private $theme="default";
  
  /**
   *
   **/
  public function set_theme($theme){
    $this->theme=$theme;
  }
   
   public function view($name, $data=array()){
        $CI=get_instance();
        $param['content_for_layout']=$CI->load->view();
   }
   
}
?>