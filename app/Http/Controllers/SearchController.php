<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use illuminate\Http\jsonResponse;
use App\Models\User;
class SearchController extends Controller
{
   
    function log() {
        $input = [
            'name' => 'controller',
            'email'=> 'abs@gmail.com',
        ];
        User::create($input);
    }
}
