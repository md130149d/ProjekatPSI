<?php

/**
 * Created by PhpStorm.
 * User: snezanatanic
 * Date: 6/18/16
 * Time: 2:32 PM
 */
class RegistracijaStudent extends TestCase
{
    function setUp(){
        @session_start();
    }
    public function testUspesnoPoslatZahtevZaReg() {
        $output = $this->request('POST', "Student/zahtevZaReg", ['ime' => 'Snezana', 'prezime' => 'Tanic', 'broj_indeksa' => '2013/0237', 'smer' => 'SI', 'korisnicko_ime' => 'Snezana', 'sifra' =>'1234', 'potvrdi_sifru' => '1234', 'br_telefona' => '0655777396', 'godina_studija' => '3', 'pol' => 'z', 'prosek' => '9.06']);
        $this->assertContains('<h1 class="text-center login-title">Logovanje za studenta</h1>', $output);
    }
}