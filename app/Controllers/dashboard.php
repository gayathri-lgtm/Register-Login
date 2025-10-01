<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $session = session();

        if(!$session->get('logged_in')){
            return redirect()->to('/login');
        }

        $data = [
            'user_name'  => $session->get('user_name'),
            'user_email' => $session->get('user_email')
        ];

        return view('dashboard', $data);
    }
}
