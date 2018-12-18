<?php
namespace App\Model;


use Mora\Core\Data\Model;

class HomeModel extends Model
{
    /**
     * @return array
     */
    public function getMenu(){
       return $this->ReadAll("LIMIT 10");
   }

   public function countRecords(){
        return $this->Count();
   }
    /**
     * @param string $name
     * @return bool|\PDOStatement
     */
    public function newHome($name){
        return $this->Insert([$name],"text");
   }

    /**
     * @param int $id
     * @return bool|\PDOStatement
     */
    public function deleteHome($id){
        return $this->Delete("WHERE id = :i",[":i" => $id]);
   }

}