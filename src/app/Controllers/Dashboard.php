<?php

namespace App\Controllers;
use App\Models\ScheduleModel;
use App\Models\CoursesModel;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        $model = new ScheduleModel();
        $courseModel = new CoursesModel();
        $data['schedule'] = $model->getProviderSchedule($session->get('id'), 3);
        $data['course'] = $courseModel->getDataCourseByProviderId($session->get('id'));
        return view('navbar').view('dashboard', $data).view('footer');
    }
}
