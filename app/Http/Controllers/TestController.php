<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function printMessage() {
        return "Hallo from TestController 🎮";
    }

    public function showName($vorname, $nachname) {
        return "Hallo ".$vorname." ".$nachname . "🏴" . "vom TestController.php";
    }

    public function showUsername($name = null) {
        return "Der User hat folgenden Namen: ".$name . "Info vom TestController.php";
    } 
}
