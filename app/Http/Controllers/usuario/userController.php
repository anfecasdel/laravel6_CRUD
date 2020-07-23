<?php

namespace App\Http\Controllers\usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function user($nombre)
    {
        return 'Usuario ' . $nombre;
    }

    public function user1($id)
    {
        return 'Usuario ' . $id;
    }
}
