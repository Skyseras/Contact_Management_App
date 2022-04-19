<?php
require_once('connectDb.php');
class user extends connectDb {



    public $id;
    public $name;
    public $password;
 




    public function getUser() {
        $result = $this -> getData("select * from comptes where name =?");
        $result -> execute([$this -> name]);
        return $result;
    }





    public function addUser() {
        try {
            $numrows = $this->getUser();
            if($numrows->rowCount()>0){
                return false;
            } else {
                $exec = $this->getData("insert into comptes (name, password) values (?,?)");
                $this->password = password_hash( $this->password, PASSWORD_DEFAULT);
                $exec->execute([$this->name,$this->password]); 
                return true;
            }
        } 
        catch (Exception $exc) {
            echo $exc->getMessage();
        }  
    }





    public function login() {
        try{
            $numrows = $this->getUser();
            $res = $numrows->fetch(PDO::FETCH_ASSOC);
            $res;
            if($res AND password_verify($this->password,$res['password']))
            {
                $_SESSION['name']               = $res['name'];
                $_SESSION['id']                 = $res['id'];
                $_SESSION['datelog']            = date(DATE_RFC2822);
                return $res;
            } else {
                return false;
            }
        }
        catch (Exception $exc) { 
            echo $exc->getMessage();
            return false;
        }    
    }





    public function Select() {
      try {
        $result = $this->getData("select * from comptes where id =?");
        $result->execute([$this->id]);
        return $result->fetch(PDO::FETCH_ASSOC);
      }
      catch (Exception $exc) {
          echo $exc->getMessage();
        }
    }



    public function SetName($name){$this->name=$name;}
    public function SetPassword($password){$this->password=$password;}
    public function SetId($id){$this->id=$id;} 
}
