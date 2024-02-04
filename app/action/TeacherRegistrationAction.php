<?php
namespace App\action;
use App\Models\Teacher;
use Illuminate\Support\Collection;

class TeacherRegistrationAction
{
    public function execute(Collection $collection)
    {
        $data=new Teacher;
        $data->name=$collection->get('Name');
        $data->email=$collection->get('Email');
        $data->password=$collection->get('Password');
        $data->department=$collection->get('Department');
        $data->phone=$collection->get('Phone');
        $data->save();
    }
}
?>
