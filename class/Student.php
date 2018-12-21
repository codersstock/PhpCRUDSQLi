<?php

class Student{
    public $id;
    private $class;
    private $section;
    private $db;  


    function __construct($id,$code,$section){
    $this->id = $id;
    $this->class = $code;
    $this->section = $section;
        }



    public function Add(){
    $query = "INSERT INTO class(id,code,section)";
    $query.= " VALUES('$this->id','$this->class','$this->section')";
    $this->db = new open_connection();
       if($this->db->query($query)){
        return true;
       }
    else{
        return false;
        }
   
   
    }


    public function Update(){
            $query = "UPDATE class SET ";
            $query.= "code='$this->class', section='$this->section'";
            $query.= " WHERE id='$this->id'";
            $this->db = new open_connection();
            if($this->db->query($query)){
                echo "Updated Sucessfully";
            }
            else{
                echo "Update query failed";
            }

        }


public function Delete(){
    $this->db = new open_connection();
        $query= "DELETE FROM class";
        $query.= " WHERE id='$this->id' LIMIT 1";    // here limit use for security
        if($this->db->query($query))return true;
         else {return false;}
    }




    

    }
?>