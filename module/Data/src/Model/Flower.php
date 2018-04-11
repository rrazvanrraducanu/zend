<?php
namespace Data\Model;

class Flower
{
    protected $id;
    protected $nume;
    protected $culoare;
    protected $marime;
    protected $pret;
    public function exchangeArray(array $data)
    {
        $this->id=$data['id'];
        $this->nume=$data['nume'];
        $this->culoare=$data['culoare'];
        $this->marime=$data['marime'];
        $this->pret=$data['pret'];
    }
     public function getArrayCopy()
    {
         return [
             'id'=>$this->id,
             'nume'=>$this->nume,
             'culoare'=>$this->culoare,
             'marime'=>$this->marime,
             'pret'=>$this->pret
         ];
    }
    public function getId()
    {
        return $this->id;
    }
    public function getNume()
    {
        return $this->nume;
    }
     public function getCuloare()
    {
        return $this->culoare;
    }
     public function getMarime()
    {
        return $this->marime;
    }
     public function getPret()
    {
        return $this->pret;
    }
}

