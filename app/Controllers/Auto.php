<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AutoModel;   // Make sure your model is named AutoModel.php

class Auto extends Controller
{
    protected $usermodel;

    public function __construct()
    {
        $this->usermodel = new AutoModel();
    }

    public function index()
    {
        $data["users"] = $this->usermodel->findAll();
        echo "<pre>";
        return view("usersview", $data);
    }
}
