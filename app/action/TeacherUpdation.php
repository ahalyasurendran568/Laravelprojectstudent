<?php
namespace App\action;
use App\Models\Teacher;
use Illuminate\Support\Collection;

class StudentUpdateAction
{
    public function execute(Collection $collection,Teacher $teacher)
    {
        $teacher->name=$collection->get('Name');
        $teacher->email=$collection->get('Email');
        $teacher->password=$collection->get('Password');
        $teacher->department=$collection->get('Department');
        $teacher->phone=$collection->get('Phone');
        $teacher->save();
        return true;
    }
}
?>
