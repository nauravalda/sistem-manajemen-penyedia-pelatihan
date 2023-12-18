<?php

namespace App\Controllers;
use App\Models\APIModel;
use App\Models\UserModel;

class APIController extends BaseController
{
    public function request_token()
    {
        // get session
        $session = session();

        // if user is logged in
        if ($session->get('isLoggedIn')) {    
            // get user data
            $user = new UserModel();

            // generate token based on time and user id
            $token = hash('sha256', time() . $session->get('id'));
            log_message('info', 'User ' . $session->get('name') . ' requested token');
            log_message('info', 'Token generated: ' . $token);

            
            // update user data with token
            $user->update($session->get('id'), ['api_token' => $token]);

            return $this->response->setJSON($token);
        } else {
            return redirect()->to('/login');
        }

    }

    public function courses($apiKey)
    {
        $user = new UserModel();
        $user = $user->getUserByToken($apiKey);
        if ($user) {
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

    public function course($id, $apiKey)
    {
        $user = new UserModel();
        $user = $user->getUserByToken($apiKey);
        if (!$user) {
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

    public function schedule($id, $apiKey)
    {
        $user = new UserModel();
        $user = $user->getUserByToken($apiKey);
        if (!$user) {
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

    public function schedule_day($id, $apiKey)
    {
        $user = new UserModel();
        $user = $user->getUserByToken($apiKey);
        if (!$user) {
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
                    'schedule_day' => $model->getCourseScheduleRepetitions($id)
                ]
                ];
            return $this->response->setJSON($data);
        }
    }
}