<?php

/**
 * Created by PhpStorm.
 * User: Jovana
 * Date: 6/18/2016
 * Time: 1:51 PM
 */
class Profesor_zakazivanje_termina extends TestCase
{
    

    public function setUp()
    {
        $this->request('POST', ['Welcome', 'logInProfesor'], ['SifZ'=>'Zorz', 'Sifra'=>'zorz']);
    }

    public function test_p()
    {
        $output = $this->request('POST',['Profesor','zakazivanjeTermina'],['SifP'=>'algor','Datum'=>'2020-02-02','Sala'=>'60','VremeOd'=>'16:50','VremeDo'=>'18:40']);
        $this->assertRedirect("http://localhost/psipro/index.php/Profesor/pocetna");
    }

}