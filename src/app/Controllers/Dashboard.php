<?php

namespace App\Controllers;

use App\Models\DashboardModel;

class Dashboard extends BaseController
{
    protected $dashboardModel;
    public function __construct(){
        $this->dashboardModel = new DashboardModel();
    }

    public function index(): string
    {
        $dashboard = $this->dashboardModel->getAllCourse();
        $data = [
            'data_courses' => [
                'id' => '1',
                'course_name' => 'course name',
                'price' => 100000,
                'participants' => 109,
                'margin' => 10900000,
                'rating' => 4.8,
                'reviews' => 129
            ]
        ];
        return view('dashboard', $data);
    }
}
