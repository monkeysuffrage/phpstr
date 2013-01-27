<?php
class Str{ 
  var $text;

  function __construct($str){
    $this->text = $str;
  }

  function match($regex, $group_number = 0){
    if(!preg_match($regex, $this->text, $m)) return false;
    return $m[$group_number];
  }

  function scan($regex){
    preg_match_all($regex , $this->text, $m);
    return $m[0];
  }

  function gsub($regex, $replacement, $limit = -1){
    return preg_replace($regex, $replacement, $this->text, $limit);
  }

  function sub($regex, $replacement){
    return $this->gsub($regex, $replacement, 1);
  }

  function split($regex, $limit = -1){
    return preg_split($regex, $this->text, $limit);
  }
}

function str($str){
  return new Str($str);
}
?>
