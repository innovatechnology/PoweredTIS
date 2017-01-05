<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IntegracionTest extends TestCase
{
    use DatabaseTransactions;


    public function testRegistro()
    {
        $this->visit('/register')
        	 ->type('usernew','name')
        	 ->type('usernew@gmail.com','email')
        	 ->type('control123','password')
        	 ->type('control123','password_confirm')
        	 ->press('Registro')
             ->seePageIs('/exito');
    }

    public function testLoginIncorrecto()
    {
        $this->visit('/login')
        	 ->type('incorrecto@gmail.com','email')
        	 ->type('incorrecto','password')
        	 ->press('Iniciar...')
             ->seePageIs('/login');
    }

    public function testLoginCorrecto()
    {
        $this->visit('/login')
        	 ->type('user123@gmail.com','email')
        	 ->type('Control123','password')
        	 ->press('Iniciar...')
             ->seePageIs('/blog');
    }
}
