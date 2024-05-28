<?php
namespace app\Http\Controllers\v2;
class testClass{
    private $username = "dummyname";
    public function get_name(){
        return $this->username;
    }
}
