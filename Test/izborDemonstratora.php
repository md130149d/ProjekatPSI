<?php

/**
 * Created by PhpStorm.
 * User: marijanaprpa
 * Date: 6/18/16
 * Time: 12:42 AM
 */
class izborDemonstratora extends TestCase
{
    public function setUp()
    {
        $this->request('POST', "Welcome/logInProfesor", ['SifZ' => 'sanja', 'Sifra' => '12']);
    }

    public function testIzabranTermin()
    {
        $output = $this->request('POST', "Profesor/tabelaID", ["pred" => "6"]);
        $this->assertContains("<form name='tabelaID' id='izborD'>", $output);

    }

    public function testIzabraniStudenti()
    {
        $output = $this->request('POST', 'Profesor/odaberiStudente', ['SifP' => 'si2os', 'check_list[1]' => 'pm130442d', 'brD' => '1', 'SifT' => '6', 'oR' => 'Prosek']);
        $this->assertContains("<form name='tabelaID' id='izborD'>", $output);
    }
}
