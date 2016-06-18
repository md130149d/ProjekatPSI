<?php

/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 6/17/2016
 * Time: 11:55 PM
 */

class Admin_modelTest extends TestCase
{
    
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('Admin_model');
        $this->obj= $this->CI->Admin_model;
    }

    public function test_model()
    {
        $expected['SifZ'] = "tubic";
        $expected['Sifra'] = "tubic";
        $expected['Ime']= "Stefan";
        $expected['Prezime'] = "Tubic";
        $expected['Pol']= "m";
        $expected['Status'] = "profesor";
        $expected['Slika']="http://localhost/psipro/images/tubic.jpg";
        $actual = $this->obj->nadjiprofesora('tubic');
        $this->assertEquals($expected,$actual[0]);
    }
}
