<?php
require_once('connectDb.php');
class contact extends connectDb {
    
    public $id;
    public $name;
    public $phone;
    public $email;
    public $address;
    public $id_contact;
   
     
    public function Select() {
        try {
            $result= $this->getData("select * from contacts where id =?");
            $result->execute([$this->id]);
            return $result->fetchAll();   
        }
        catch (Exception $exc) {
            return $exc->getMessage();
        }
    }

    public function SelectOne() {
        try {
            $result= $this->getData("select * from contacts where id_contact =?");
            $result->execute([$this->id_contact]);
            return $result->fetch();
        }
        catch(Exception $exc) {
            return $exc->getMessage();
        }  
    }
  
    public function Add() {
        try {
            $start =$this->getData("insert into contacts(name, email, phone, address, id) values (?,?,?,?,?)");
            $start->execute([$this->name, $this->email, $this->phone, $this->address, $this->id]);
            return $start;
        }
        catch(Exception $exc) {
            return $exc->getMessage();
        }
    }

    public function Delete(){
        try {
            $start =$this->GetData("delete from contacts where id_contact  =?");
            $start->execute([$this->id_contact]);
            return $start;
        }
        catch(Exception $exc){
            return $exc->getMessage();
        }
    }

    public function Update(){
        try{
            $start =$this->getData("update contacts set name=?,email=?,phone=?,address=?  where id_contact =?");
            $start->execute([$this->name, $this->email , $this->phone, $this->address,$this->id_contact]);
            return $start;
        }catch(Exception $exc){
            return $exc->getMessage();
        } 
    }





    public function SetIdContact($id_contact)
    {
       $this->id_contact=$id_contact;
    }

    public function SetName($name) {
        $this->name=$name;
    }

    public function SetEmail($email) {
        $this->email=$email;
    }

    public function SetPhone($phone) { 
        if($phone==null){
            $this->phone="No added phone number";
        } else {
            $this->phone=$phone;
        }
    }

    public function SetAddress($address) {
        $this->address=$address;
    }

    public function SetId($id) {
       $this->id=$id;
    }
}
