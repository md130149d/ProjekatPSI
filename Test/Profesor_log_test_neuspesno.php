<?php

/**
 * Created by PhpStorm.
 * User: Jovana
 * Date: 6/18/2016
 * Time: 1:48 PM
 */
class Profesor_log_test_neuspesno extends TestCase
{
    public function setUp()
    {

        $this->request('POST', ['Welcome', 'logInProfesor'], ['SifZ'=>'x', 'Sifra'=>'x']); // inicijalizacija

    }

    public function test_Logovanje()
    {
        $this->assertRedirect("http://localhost/psipro/index.php/Profesor/pocetna");
    }


}
{

}