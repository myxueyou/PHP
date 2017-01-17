<?php

/**
 * Created by PhpStorm.
 * User: 学友
 * Date: 2017/1/17
 * Time: 17:29
 */
class Test
{
    public $width;
    public $height;
      public function __construct ($width,$height) {
                     $this->width = $width ;
                     $this->height = $height ;
                     echo "宽:$this->width，高:$this->height<br/>";
      }
}