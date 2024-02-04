<?php
namespace App\action;
use App\Models\Student;
use Illuminate\Support\Collection;

class StudentRegistrationAction
{
    public function execute(Collection $collection)
    {
        $data=new Student;
        $data->Firstname=$collection->get('Fname');
        $data->Lastname=$collection->get('Lname');
        $data->Email=$collection->get('Email');
        $data->Password=$collection->get('Password');
        $data->Date_Of_Birth=$collection->get('dob');
        $data->Status=$collection->get('Status');
        $data->save();
    }
}
?>
