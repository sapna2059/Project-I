<?php 

namespace App\Controllers;
use Config\Database;

class Student extends BaseController
{


    public function index()
    {
        $db = Database::connect();
        // die("Test");
        $query = $db->query("select * from student");
        $studentList =
        $query->getResultArray();
       return view('student/index',['students'=> $studentList]);
    }
     public function new(){
        //if($this->request->is('post'))
        return view('student/new');
    }
    }

?>