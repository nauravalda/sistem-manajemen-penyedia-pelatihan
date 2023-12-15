<?php

namespace App\Controllers;
use App\Models\ScheduleModel;

class Schedule extends BaseController
{
    public function index(int $day): string
    {
        // getting user id from session
        // $session = session();
        // $id = $session->get('id');
        // schedule data from company with id 1
        if ($day != 3 && $day != 5 && $day != 7) {
            $day = 3;
        }

        $model = new ScheduleModel();
        $data['schedule'] = $model->getProviderSchedule(1, $day);
        $data['day'] = $day;
        return view('navbar').view('schedule', $data).view('footer');
    }
}