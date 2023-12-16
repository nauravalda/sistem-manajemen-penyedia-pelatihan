<?php

namespace App\Controllers;
use App\Models\ScheduleModel;

class Schedule extends BaseController
{
    public function index(int $day)
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        if ($day != 3 && $day != 5 && $day != 7) {
            $day = 3;
        }

        $model = new ScheduleModel();
        $data['schedule'] = $model->getProviderSchedule($session->get('id'), $day);
        $data['day'] = $day;
        return view('navbar').view('schedule', $data).view('footer');
    }
}