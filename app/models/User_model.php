<?php 

class User_model {
    private $nama = 'Rd. Rizal Nugraha';
    private $umur = '18';

    public function getUser()
    {
        return $this->nama;
    }
}