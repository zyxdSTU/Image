<?php

  function is_mobile()
  {
    $agent=strtolower($_SERVER['HTTP_USER_AGENT']);
    $is_pc=(strpos( $agent,'windows nt'))?true:false;
    $is_mac=(strpos( $agent,'mac os'))?true:false;
    $is_phone=(strpos( $agent,'iphone'))?true:false;
    $is_android=(strpos( $agent,'android'))?true:false;
    $is_ipad=(strpos( $agent,'ipad'))?true:false;
    
    if($is_pc){
        return false;
    }
    if($is_mac){
        return false;
    }
    if($is_iphone){
        return true;
    }
    if($is_android){
        return true;
    }
    if($is_ipad){
        return true;
    }   
    return true;
  }
  
  if(is_mobile()){
      header("Location:https://img.alicdn.com/imgextra/i1/344823075/O1CN01Hj87I81YaOPjhrqon_!!344823075.jpg");//for mobile
  }else{
      header("Location:https://img.alicdn.com/imgextra/i1/344823075/O1CN01g39nry1YaOPh2A6zX_!!344823075.jpg");//for pc
  }  
?>  

