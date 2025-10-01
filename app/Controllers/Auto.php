<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AutoModel;

class Auto extends Controller
{
    protected $usermodel;

    public function __construct()
    {
        $this->usermodel = new AutoModel();
        helper(['form', 'url']);
    }

    // Add employee
    public function addemp()
    {
        $session = session();

        if ($this->request->getMethod() == "POST") {
            $data = [
                "name"       => $this->request->getVar("name", FILTER_SANITIZE_SPECIAL_CHARS),
                "email"      => $this->request->getVar("email", FILTER_SANITIZE_EMAIL),
                "city"       => $this->request->getVar("city", FILTER_SANITIZE_SPECIAL_CHARS),
                "department" => $this->request->getVar("department", FILTER_SANITIZE_SPECIAL_CHARS),
                "salary"     => $this->request->getVar("salary", FILTER_SANITIZE_NUMBER_INT),
            ];
        
        // print_r($data);
        // exit;


            if ($this->usermodel->save($data)) {
                $session->setFlashdata('success', 'Employee added successfully!');
                return redirect()->to('/auto/addemp');
            } else {
                $errors = $this->usermodel->errors();
                return view("addemp", ["errors" => $errors]);
            }
        }

        return view("addemp");
    }

    // View all employees
    public function viewemp()
    {
        $data['emp'] = $this->usermodel->findAll();
        return view("usersview", $data);
    }
      public function delemp($id=null)
    {
       
        return view("usersview", ["emp"=>$this->usermodel->find($id)]);
    }

  public function updemp($id = null)
{
    $emp = $this->usermodel->find($id);

    if (!$emp) {
        return redirect()->to('/auto/viewemp')->with('error', 'Employee not found.');
    }

    $session = session();

    if ($this->request->getMethod() == "post") {
        $data = [
            "name"       => $this->request->getVar("name", FILTER_SANITIZE_SPECIAL_CHARS),
            "email"      => $this->request->getVar("email", FILTER_SANITIZE_EMAIL),
            "city"       => $this->request->getVar("city", FILTER_SANITIZE_SPECIAL_CHARS),
            "department" => $this->request->getVar("department", FILTER_SANITIZE_SPECIAL_CHARS),
            "salary"     => $this->request->getVar("salary", FILTER_SANITIZE_NUMBER_INT),
        ];

        if ($this->usermodel->update($id, $data)) {
            $session->setFlashdata('success', 'Employee updated successfully!');
            return redirect()->to('/auto/viewemp');
        } else {
            $errors = $this->usermodel->errors();
            return view("updview", ["errors" => $errors, "emp" => $emp]);
        }
    }

    return view("updview", ["emp" => $emp]);
}

}