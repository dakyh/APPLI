<?php
use App\Http\Controllers\AdminFirstController;

namespace App\Http\Controllers;

class AdminFirstController extends Controller
{
    public function index()
    {
        // Logique spécifique à la page d'administration pour les utilisateurs "FIRST"
        return view('admin.first');
    }
}
