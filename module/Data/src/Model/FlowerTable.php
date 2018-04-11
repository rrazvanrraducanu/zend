<?php

namespace Data\Model;

use Zend\Db\TableGateway\TableGatewayInterface;

class FlowerTable
{
    protected $tableGateway;
    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway=$tableGateway;
    }
    public function fetchAll()
    {
        return $this->tableGateway->select();
    }
    public function saveFlower(Flower $flower)
    {
        $data=[     
       'nume'=>$flower->getNume(),
       'culoare'=>$flower->getCuloare(),
       'marime'=>$flower->getMarime(),
       'pret'=>$flower->getPret()
                ];
        if($flower->getId()){
            $this->tableGateway->update($data,[
                'id'=>$flower->getId()
            ]);
        }else{
        $this->tableGateway->insert($data);
        }
    }
    public function getFlower(int $id)
    {
        $current=$this->tableGateway->select(['id'=>$id]);
        return $current->current();
    }
     public function deleteFlower(int $id)
    {
        $current=$this->tableGateway->delete(['id'=>$id]);
      
    }
}
