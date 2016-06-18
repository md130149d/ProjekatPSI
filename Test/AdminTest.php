<?php


class AdminTest extends TestCase
{

    private $controler;

    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('Admin_model');
        $this->obj= $this->CI->Admin_model;
        $this->controler=$this->request('POST', ['Welcome', 'logInProfesor'], ['SifZ'=>'admin', 'Sifra'=>'admin']);
    }
    public function test_Dodavanje()
    {
        $output=$this->request('Get', ['Admin', 'dodavanje']);
        $this->assertContains('<input type="button" value = "Dodaj predmet" class="btn btn-danger" onclick="javascript:prikaziTabelu()"/>
', $output);
    }

    public function test_DodavanjeError(){
        $output=$this->request('POST', ['Admin', 'dodajpredmet'],['sifraP'=>'nesto','naziv'=>'nesto','godina'=>'nesto','cenaposatu'=>'nesto','sifra'=>'nesto']);
        $this->assertContains('<h2>Godina treba da je između 1 i 4!</h2>', $output);
    }

    public function test_Zahtevi(){
        $output=$this->request('GET', ['Admin','index']);
        //$this->assertResponseCode(404);
        //$this->assertRedirect("http://localhost/psipro/index.php/Profesor/zakljucivanjeTermina");
        $this->assertContains('<h1>Obaveštenja</h1>', $output);
    }
}
