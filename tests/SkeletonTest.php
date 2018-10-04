<?php

use Vagovszky\Skeleton\Skeleton;
use PHPUnit\Framework\TestCase;

class SkeletonTest extends TestCase {

    private $skeleton;

    protected function setUp() {
        $this->skeleton = new Skeleton();
    }

    public function testSkeletonPrintsOutput() {
        $this->expectOutputString("Hello World!");
        $this->skeleton->helloWorld();
    }
    
    public function testSkeletonInvoke(){
        $this->expectOutputString("Hello World!");
        $this->skeleton->__invoke();
    }
}
