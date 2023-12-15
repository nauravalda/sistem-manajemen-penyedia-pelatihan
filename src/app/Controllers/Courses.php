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

    public function new(): string
    {
        return view('navbar').view('courses-new').view('footer');
    }

    // public function store(Request $request): string
    // {
        
    //     $model = new CoursesModel();
    //     $data = [
    //         'name' => $request->getVar('name'),
    //         'price' => $request->getVar('price'),
    //         'tags' => $request->getVar('tags'),
    //         'locations' => $request->getVar('locations'),
    //         'desc' => $request->getVar('description'),

    //     ];
    // }

    public function detail(int $id): string
    {
        return view('navbar').view('courses-detail', ['id' => $id]).view('footer');
    }

    public function edit(int $id): string
    {
        return view('navbar').view('courses-edit', ['id' => $id]).view('footer');
    }
}