<?php

namespace App\Controllers;

use App\Models\ScheduleModel;
use App\Models\CoursesModel;

class DashboardReview extends BaseController
{
    public function index($id)
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        $courseModel = new CoursesModel();
        $course = $courseModel->getDataCourseById($id)[0];
        if ($course['provider_id'] != $session->get('id')) {
            return redirect()->to('/courses');
        }


        $scheduleModel = new ScheduleModel();
        $data['course'] = $courseModel->getDataCourseById($id)[0];
        $data['schedule'] = $scheduleModel->getCourseScheduleRepetitions($id);

        return view('navbar').view('dashboardReview', $data).view('footer');
        // return $this->response->setJSON($data);
    }
}
