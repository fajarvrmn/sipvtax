<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

use App\Models\Role;
use App\Models\User;

if(!function_exists('getRole')){

    function getRole(){

        $data = Role::all();

        return $data;

    }

}


?>