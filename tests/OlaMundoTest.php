<?php

namespace Test;
use PHPUnit\Framework\TestCase;
use TDD\OlaMundo;

class OlaMundoTest extends \PHPUnit\Framework\TestCase {
  public function testDeveRetornarUmaMensagem()
  {
    $ola = new OlaMundo();
    $current = $ola->ola();
    $expexted = "Ola Mundo, PHPUnit";
    $this->assertEquals($expexted, $current);
  }
}
