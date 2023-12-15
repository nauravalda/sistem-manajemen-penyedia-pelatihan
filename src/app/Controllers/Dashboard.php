<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $data = [
            'data_courses' => [
                [
                'id' => '1',
                'course_name' => 'Course Name',
                'price' => 100000,
                'participants' => 109,
                'margin' => 10900000,
                'rating' => 4.8,
                'reviews' => 129
                ],
                [
                'id' => '2',
                'course_name' => 'Course Name',
                'price' => 100000,
                'participants' => 109,
                'margin' => 10900000,
                'rating' => 4.8,
                'reviews' => 129
                ],
                [
                'id' => '3',
                'course_name' => 'Course Name',
                'price' => 100000,
                'participants' => 109,
                'margin' => 10900000,
                'rating' => 4.8,
                'reviews' => 129
                ]
            ]
        ];
        return view('dashboard', $data);
    }
}
