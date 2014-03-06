<?php
/**
 * PHPStr - Add regex functionality to PHP strings
 * Website: https://github.com/monkeysuffrage/phpstr
 *
 * @author P Guardiario <pguardiario@gmail.com>
 * @version 0.2
 */

/**
 * Str
 */
 class Str{ 
  var $text;

  function __construct($str){
    $this->text = $str;
  }

  function match($regex, $group_number = 0){
    if(!preg_match($regex, $this->text, $m)) return false;
    $val = $m[$group_number];
    return new Str($val);
  }

  function scan($regex, $group_number = 0){
    preg_match_all($regex , $this->text, $m);
    return $m[$group_number];
  }

  function gsub($regex, $replacement, $limit = -1){
    if('Closure' == @get_class($replacement)){
      $val = preg_replace_callback($regex, $replacement, $this->text, $limit);
    } else {
      $val = preg_replace($regex, $replacement, $this->text, $limit);
    }
    return new Str($val);
  }

  function sub($regex, $replacement){
    $val = $this->gsub($regex, $replacement, 1);
    return new Str($val);
  }

  function split($regex, $limit = -1){
    return preg_split($regex, $this->text, $limit);
  }

  public function __toString(){ return $this->text; }
  public function to_s(){ return $this->text; }
}

function str($str){
  return new Str($str);
}

?>
