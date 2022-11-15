<?php

//class for showing user data 

class SHOW{
    public $id,$fullname,$email,$username,$password,$status,$role,$created;
    function datashow($array,$count){
        $this->id=$array['id'];
        $this->fullname=$array['fullname'];
        $this->email=$array['email'];
        $this->username=$array['username'];
        $this->password=$array['password'];
        $this->status=$array['status'];
        $this->role=$array['role'];
        $this->created=$array['created'];
        return "<th>USER".$count."</th><th>".$this->id."</th><th>".$this->fullname."</th><th>".$this->email."</th><th>".$this->username."</th><th>".$this->password."</th><th>".$this->status."</th><th>".$this->role."</th><th>".$this->created."</th>" ;
}
}