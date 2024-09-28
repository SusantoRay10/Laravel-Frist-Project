<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
{
    // Declare variables
    $nameVar = "Donal Trump";
    $age = "75";

    // Create an associative array with the variables
    $data = [
        'id' => $id,
        'name' => $nameVar,
        'age' => $age
    ];

    // Set cookie variables
    $name = 'access_token';
    $value = '123-XYZ';
    $minutes = 1;
    $path = '/';
    $domain = $_SERVER['SERVER_NAME'];
    $secure = false;
    $httpOnly = true;

    // Create the cookie using the declared variables
    $cookie = cookie(
        $name,
        $value,
        $minutes,
        $path,
        $domain,
        $secure,
        $httpOnly
    );

    // Return the response with the data and set the cookie
    return response()->json($data, 200)->cookie($cookie);
}

}
