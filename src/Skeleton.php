<?php

namespace Vagovszky\Skeleton;

class Skeleton{
  
  public function helloWorld()
  {
    echo "Hello World!";
  }
  
  public function __invoke() {
      $this->helloWorld();
  }
}