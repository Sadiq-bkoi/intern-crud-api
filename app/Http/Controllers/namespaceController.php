<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\v2\testClass;

class namespaceController extends Controller
{
    public function getname(){
        $name = new testClass();
        return response($name->get_name())->Json();
    }
}
