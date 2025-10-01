<?php
namespace App\Models;

use CodeIgniter\Model;

class AutoModel extends Model
{
    protected $table = 'users';       // DB table name
    protected $primaryKey = 'id';     // Primary key column
    protected $returnType = 'array';  // Return as array
    
}
