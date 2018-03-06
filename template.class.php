<?php
/* Micro CMS v2 Release Under GPL3 By dyewilliam (DOCS) */

class template{
  
  private $tpl;
  
  public function __construct($path){
    if(file_exists($path)){
      $this->tpl = implode("", file($path));
    }else{
      throw new \Exception("Error: The requested template is not available", 1);
    }
    return($this);
  }
  
  private function buffer_tpl($data){
    ob_start();
    include($data);
    $val = ob_get_contents();
    ob_end_clean();
    return($val);
  }
  
  public function parse_tpl($tags = array()){
    if(count($tags) >= 0){
      foreach($tags as $key => $val){
        $handle = (file_exists($val))? $this->buffer_tpl($val): $val;
        $this->tpl = preg_replace("/{{$key}}/", $handle, $this->tpl);
      }
      return($this);
    }
  }
  
  public function display_tpl(){
    echo("{$this->tpl}");
  }
}

?>
