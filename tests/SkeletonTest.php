<?php

use Vagovszky\Skeleton\Skeleton;
use PHPUnit\Framework\TestCase;

class SkeletonTest extends TestCase {

    private $skeleton;

    protected function setUp() {
        $this->skeleton = new Skeleton();
    }

    public function testSkeletonHasCheese() {
        $this->assertTrue($this->skeleton->hasCheese(true));
    }
}
