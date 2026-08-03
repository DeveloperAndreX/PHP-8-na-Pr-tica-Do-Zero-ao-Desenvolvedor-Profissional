<?php

class Strings
{
  public static function len($a){
    return mb_strlen($a,'UTF-8');
  }
  public static function charAt($a,$i){
    return self::substr($a,$i,1);
  }
  public static function substr($a,$x,$y=null){
    if($y===NULL){
      $y=self::len($a);
    }
    return mb_substr($a,$x,$y,'UTF-8');
  }
  public static function letters($a){
    $len = self::len($a);
    if($len==0){
      return array();
    }else if($len == 1){
      return array($a);
    }else{
      return Arrays::concat(
        self::letters(self::substr($a,0,$len>>1)),
        self::letters(self::substr($a,$len>>1))
      );
    }
  }
}

?>