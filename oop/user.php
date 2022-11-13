<?php 
#class adalah kerangka awal yang isinya properti construct dan method
class User {
    #membuat prperty
    public $nama;
    public $jurusan;
    public $asal;

    #membaut constructot
    public function __construct($nama, $jurusan, $asal){
        $this -> nama = $nama ;
        $this -> jurusan = $jurusan;
        $this -> asal = $asal;
    }

    #membuat method
    public function getNama (){
        return $this -> nama ;
    }
    public function getJurusan (){
        return $this -> jurusan ;
    }
}

#membuat object
$adip = new User("Iqbal Adiib", "Informatika", "Bekasi");

#menmanggil method
echo $adip -> getNama();
echo $adip -> getJurusan();