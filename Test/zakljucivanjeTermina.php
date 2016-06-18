<?php

/**
 * Created by PhpStorm.
 * User: marijanaprpa
 * Date: 6/18/16
 * Time: 1:34 PM
 */
class zakljucivanjeTermina extends TestCase
{
    public function setUp()
    {
        $this->request('POST', "Welcome/logInProfesor", ['SifZ' => 'sanja', 'Sifra' => '12']);
    }

    public function testZakljTabela()
    {
        $output = $this->request('POST', "Profesor/zakljTabela", ["ter" => "6"]);
        $this->assertContains("<form id='formaZakTer' method='post'>", $output);
    }

    public function testPotvrdjivanjeDemonstratora()
    {
        $output = $this->request('POST', 'Profesor/potvrdjivanjePrisutnosti', ['DatumOd' => '2016-06-22 21:00:00', 'DatumDo' => '2016-06-22 22:00:00', 'indeks' => array('pm130442d'), 'SifT' => '6', 'SifP' => 'si2os']);
        $this->assertEquals("", $output);
    }
}
