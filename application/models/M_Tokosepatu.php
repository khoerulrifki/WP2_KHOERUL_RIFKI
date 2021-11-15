<?php
class M_Tokosepatu extends CI_Model
{
    public $merek, $harga;

    public function getBiaya($merek = null)
    {
        $this->merek=$merek;
        if($this->merek == "Nike"){
            $this->harga = 375000;
        }elseif($this->merek == "Adidas"){
            $this->harga = 300000;
        }elseif($this->merek == "Kickers"){
            $this->harga = 250000;
        }elseif($this->merek == "Eiger"){
            $this->harga = 275000;
        }elseif($this->merek == "Bucherri"){
            $this->harga = 400000;
        }

        return $this->$harga;
    }
}
