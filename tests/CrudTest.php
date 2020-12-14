<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class CrudTest extends TestCase
{
    public function testFailure(): void
    {
        include ('../js/formsValidation.js');
        $this->assertTrue(true);
    }
    
    public function testlogin(): void
    {
        $this->assertIsWritable('../login');
    }
    public function testPatients(): void
    {
        $this->assertIsReadable('../patients');
    }
    public function testDrugs(): void
    {
        $this->assertIsReadable('../patients');
    }
    public function testEmployees(): void
    {
        $this->assertIsReadable('../patients');
    }
    public function testIndex(): void
    {
        $this->assertFileExists('../index.html');
    }
    public function testlandingPage(): void
    {
        $this->assertDirectoryExists('../landing_page');
    }
    public function jsoncrud(): void
    {
        include('../composer.json');
        $this->assertJsonStringEqualsJsonString(
            json_encode(['Mascot' => 'Tux']),
            json_encode(['Mascot' => 'ux'])
        );
    }
  

    
}