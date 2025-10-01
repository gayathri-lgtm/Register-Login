<?php
namespace App\Models;

use CodeIgniter\Model;

class AutoModel extends Model
{
    protected $table = 'emp';        // your table name
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ["name", "email", "city", "department", "salary"];

    // Validation rules
    protected $validationRules = [
        'name'       => 'required|max_length[225]|alpha_numeric_space|min_length[3]',
        'email'      => 'required|max_length[225]|valid_email|is_unique[emp.email]',
        'salary'     => 'required|numeric',
        'city'       => 'required|max_length[225]',
        'department' => 'required|max_length[100]',
    ];

    protected $validationMessages = [
        'email' => [
            'is_unique'   => 'Sorry. That email has already been taken. Please choose another.',
            'required'    => 'Email is required',
            'valid_email' => 'Valid Email required',
        ],
        'name' => [
            'required' => 'Name is required',
        ],
        'salary' => [
            'required' => 'Salary is required',
            'numeric'  => 'Salary must be a number',
        ],
    ];
}
