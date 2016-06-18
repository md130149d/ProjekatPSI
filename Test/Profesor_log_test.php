<?php

/**
 * Created by PhpStorm.
 * User: Jovana
 * Date: 6/18/2016
 * Time: 1:17 PM
 */
class Profesor_log_test extends TestCase
{
    public $output;
    public function setUp()
    {

      $output =  $this->request('POST', ['Welcome', 'logInProfesor'], ['SifZ'=>'Zorz', 'Sifra'=>'zorz']); // inicijalizacija

    }

    public function test_Logovanje()
    {
       $this->assertRedirect("http://localhost/psipro/index.php/Profesor/pocetna");
    }


}