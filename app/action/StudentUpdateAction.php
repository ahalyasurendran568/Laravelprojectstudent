<?php
namespace App\action;
use App\Models\Student;
use Illuminate\Support\Collection;

class StudentUpdateAction
{
    public function execute(Collection $collection,Student $student)
    {

        $student->Firstname=$collection->get('Fname');
        $student->Lastname=$collection->get('Lname');
        $student->Email=$collection->get('Email');
        $student->Password=$collection->get('Password');
        $student->Date_Of_Birth=$collection->get('dob');
        $student->Status=$collection->get('Status');
        $student->save();

        return true;
    }
}
?>
