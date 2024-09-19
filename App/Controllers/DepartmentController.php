<?php
/*
 * This file is part of the Abc package.
 *
 * This source code is for educational purposes only.
 * It is not recommended using it in production as it is.
 */

namespace App\Controllers;

use Abc\Base\BaseController;
use App\Models\HomeModel;

class DepartmentController extends BaseController
{
    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->view('home/index');
    }
}

// class DepartmentController extends BaseController
// {
//     protected $departmentModel;
//     public function __construct()
//     {
//         parent ::__construct('department');
//     }


    // public function index() {
   
    //     $departments = $this->departmentModel->getAll();

    //     include '../views/departments/index.php';
    // }

    // // Show the form to add a new department
    // public function create() {
    //     // Include the create view
    //     include '../views/departments/create.php';
    // }

    // Store a new department in the database
//     public function store() {
//         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//             // Retrieve form data
//             $name = $_POST['name'];
//             $description = $_POST['description'];

//             // Insert new department into the database
//             $this->departmentModel->insert([
//                 'name' => $name,
//                 'description' => $description,
//             ]);

//             // Redirect back to the departments index page
//             header('Location: index.php');
//             exit();
//         }
//     }
// }

