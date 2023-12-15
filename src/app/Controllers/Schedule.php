<?php

namespace App\Controllers;
use App\Models\ScheduleModel;

class Schedule extends BaseController
{
    public function index(int $day): string
    {
        // schedule data from company with id 1
        $model = new ScheduleModel();
        $data['schedule'] = $model->getProviderSchedule(1, $day);
        return view('navbar').view('schedule', $data).view('footer');
    }
}