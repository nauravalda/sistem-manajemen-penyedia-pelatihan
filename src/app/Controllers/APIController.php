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

    public function courses()
    {
        $request = service('request');
        $apiKey = $request->getVar('apiKey');

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

    public function search_courses()
    {
        $request = service('request');
        $searchQuery = $request->getVar('q');
        $courseList = $request->getVar('courses');
        $apiKey = $request->getVar('apiKey');

        log_message('info', 'Search query: ' . $searchQuery);
        log_message('info', 'Course list: ' . $courseList);
        log_message('info', 'API Key: ' . $apiKey);

        $user = new UserModel();
        $user = $user->getUserByToken($apiKey);
        if ($user) {
            $model = new APIModel();
            $data = [
                'message' => 'success',
                'data' => [
                    'courses' => $model->searchDataCourse($searchQuery, $courseList)
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

    public function course()
    {
        $request = service('request');
        $id = $request->getVar('id');
        $apiKey = $request->getVar('apiKey');

        $user = new UserModel();
        $user = $user->getUserByToken($apiKey);
        if (!$user) {
            $data = [
                'message' => 'failed',
                'data' => [
                    'course' => [],
                    'schedule' => []
                ]
                ];
            return $this->response->setJSON($data);
        } else {
            $parameterArray = explode(',', $id);
            $model = new APIModel();
            $data = [
                'message' => 'success',
                'data' => [
                    'course' => $model->getDataCourseById($parameterArray)[0],
                    'schedule' => [
                        'day' => $model->getCourseSchedule($parameterArray, 3),
                        'repetition' => $model->getCourseScheduleRepetitions($parameterArray),
                    ]
                ]
                ];
            return $this->response->setJSON($data);
        }
    }

    public function schedule($day)
    {
        $request = service('request');
        $id = $request->getVar('id');
        $apiKey = $request->getVar('apiKey');

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
            $parameterArray = explode(',', $id);
            $model = new APIModel();
            $data = [
                'message' => 'success',
                'data' => [
                    'schedule' => $model->getDataScheduleByCourseId($parameterArray, $day)
                ]
                ];
            return $this->response->setJSON($data);
        }
    }
}