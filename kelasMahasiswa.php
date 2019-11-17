<?php

class mahasiswa{
    
    public $dataMhs=[
        ["NAMA"=>"Febri", "PROGDI"=> "TI", "KELAMIN"=>"L"],
        ["NAMA"=>"Wisnu", "PROGDI"=> "SI", "KELAMIN"=>"L"],
        ["NAMA"=>"Budi", "PROGDI"=> "DKV", "KELAMIN"=>"P"]
    ];

    public function menampilkan(){
        return $this->dataMhs;
    }

    public function getProgdi(){
        return array_column($this->dataMhs, 'PROGDI');
    }

    public function tampilData($x){
        foreach ($this->dataMhs as $key){
            if($key['NAMA']==$x){
                return $key;
            }
        }
    }

    public function cekKelamin($x){
        foreach ($this->dataMhs as $kay){
            if($kay['KELAMIN']==$x){
                return true;
            }
         }
    }
}

?>