<?php

namespace App\Controllers;
use App\Models\APIModel;
use App\Models\UserModel;

class APIController extends BaseController
{
    public function courses($email, $password)
    {
        $user = new UserModel();
        if ($user->checkUser($email, hash('sha256', $password))) {
            $model = new APIModel();
            $data = [
                'message' => 'success',
                'data' => [
                    'courses' => $model->getDataCourse()
                ]
                ];
            return $this->response->setJSON($data);
        } else {
            $data = [
                'message' => 'failed',
                'data' => [
                    'courses' => []
                ]
                ];
            return $this->response->setJSON($data);
        }
    }

    public function course($email, $password, $id)
    {
        $user = new UserModel();
        if (!$user->checkUser($email, hash('sha256', $password))) {
            $data = [
                'message' => 'failed',
                'data' => [
                    'course' => []
                ]
                ];
            return $this->response->setJSON($data);
        } else {
            $parameterArray = explode('&', $id);
            $model = new APIModel();
            $data = [
                'message' => 'success',
                'data' => [
                    'course' => $model->getDataCourseById($parameterArray)
                ]
                ];
            return $this->response->setJSON($data);
        }
    }

    public function schedule($email, $password, $id)
    {
        $user = new UserModel();
        if (!$user->checkUser($email, hash('sha256', $password))) {
            $data = [
                'message' => 'failed',
                'data' => [
                    'schedule' => []
                ]
                ];
            return $this->response->setJSON($data);
        } else {
            $parameterArray = explode('&', $id);
            $model = new APIModel();
            $data = [
                'message' => 'success',
                'data' => [
                    'schedule' => $model->getDataScheduleByCourseId($parameterArray)
                ]
                ];
            return $this->response->setJSON($data);
        }
    }

    public function schedule_day($email, $password, $id)
    {
        $user = new UserModel();
        if (!$user->checkUser($email, hash('sha256', $password))) {
            $data = [
                'message' => 'failed',
                'data' => [
                    'schedule_day' => []
                ]
                ];
            return $this->response->setJSON($data);
        } else {
            $model = new APIModel();
            $data = [
                'message' => 'success',
                'data' => [
                    'schedule_day' => $model->getCourseScheduleDay($id)
                ]
                ];
            return $this->response->setJSON($data);
        }
    }
}