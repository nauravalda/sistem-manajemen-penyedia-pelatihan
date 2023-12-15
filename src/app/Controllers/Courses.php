<?php

namespace App\Controllers;
use App\Models\CoursesModel;

class Courses extends BaseController
{
    public function index(): string
    {
        $model = new CoursesModel();
        $data['course'] = $model->getDataCourse();
        return view('navbar').view('courses', $data).view('footer');
    }
}