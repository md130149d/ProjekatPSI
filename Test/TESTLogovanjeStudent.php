<?php

/**
 * Created by PhpStorm.
 * User: snezanatanic
 * Date: 6/18/16
 * Time: 2:31 PM
 */
class LogovanjeStudent extends TestCase
{

    public function testStudentUlogovan(){
        $output = $this->request('POST', "Student/validacijaLogovanja", ['kIme' => 'ts130237d', 'sifra' => 'sneza']);
        $this->assertContains("<h1>OBAVEŠTENJA</h1>", $output);
    }
}
