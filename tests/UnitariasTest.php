<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UnitariasTest extends TestCase
{
    use DatabaseTransactions;
    
    public function testInicio()
    {
        $this->visit('/')
             ->see('Sistema de Nombramiento y Seguimiento Docente');
    }

    public function testLogin()
    {
         $this->visit('/')
              ->seePageIs('/login');
    }

    public function testFormRegister()
    {
         $this->visit('/')
              ->click('Desea Registrarse?')
              ->seePageIs('/register');
    }

    
}
