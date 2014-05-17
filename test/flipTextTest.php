<?php

require_once('../flipText.php');

class FlipTextTest extends PHPUnit_Framework_TestCase {
    public function testFlipTextCreation() {
        $obj = new FlipText('test');
        $this->assertEquals('tset', $obj->getText());
    }
    public function testFlipTextEmpty() {
        $obj = new FlipText('');
        $this->assertEquals(null, $obj->getText());
    }
}