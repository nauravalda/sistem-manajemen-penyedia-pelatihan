<?php

namespace App\Controllers;
use App\Models\ScheduleModel;
use App\Models\CoursesModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        $courseModel = new CoursesModel();
        $apiUrl = getenv('API_URL');
        $apiKey = getenv('API_KEY');
        $array_course = $courseModel->getDataCourseByProviderId($session->get('id'));



        $url1 = $apiUrl . '/totalparticipant/?apiKey=' . $apiKey . '&courses=' . '(' . implode(',', array_column($array_course, 'id')) . ')';
        $curl1 = curl_init($url1);
        curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl1, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        $response1 = curl_exec($curl1);
        curl_close($curl1);
        $res1 = json_decode($response1, true);

        log_message('info', 'URL: ' . $url1);
        log_message('info', 'Response: ' . $response1);


        $url2 = $apiUrl . '/totalparticipantsthismonth/?apiKey=' . $apiKey . '&courses=' . '(' . implode(',', array_column($array_course, 'id')) . ')';
        $curl2 = curl_init($url2);
        curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl2, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        $response2 = curl_exec($curl2);
        curl_close($curl2);
        $res2 = json_decode($response2, true);

        $participantspercourse = [];
        foreach ($array_course as $course) {
            $url3 = $apiUrl . '/totalparticipant/?apiKey=' . $apiKey . '&courses=' . '(' . $course['id'] . ')';
            $curl3 = curl_init($url3);
            curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl3, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json'
            ]);
            $response3 = curl_exec($curl3);
            curl_close($curl3);
            $res3 = json_decode($response3, true);
            $participantspercourse[] = $res3['total_participants']['total_participants'];
        }

        $url4 = $apiUrl . '/averagecoursesrating/?apiKey=' . $apiKey . '&courses=' . '(' . implode(',', array_column($array_course, 'id')) . ')';
        $curl4 = curl_init($url4);
        curl_setopt($curl4, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl4, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        $response4 = curl_exec($curl4);
        curl_close($curl4);
        $res4 = json_decode($response4, true);

        $ratings = [];
        foreach ($array_course as $course) {
            $url5 = $apiUrl . '/averagecoursesrating/?apiKey=' . $apiKey . '&courses=' . '(' . $course['id'] . ')';
            $curl5 = curl_init($url5);
            curl_setopt($curl5, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl5, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json'
            ]);
            $response5 = curl_exec($curl5);
            curl_close($curl5);
            $res5 = json_decode($response5, true);
            $ratings[] = $res5['average_rating_courses']['AVG(rating)'];

        }

        if (empty($ratings)) {
            $ratings = [0];
        }
        $idxmaxRating = array_keys($ratings, max($ratings));


        
        

        $model = new ScheduleModel();

        // checking if user has no course
        if (empty($array_course)) {
            $data['user'] = $session->get('name');
            $data['schedule'] = $model->getProviderSchedule($session->get('id'), 3);
            $data['course'] = $courseModel->getDataCourseByProviderId($session->get('id'));
            $data['total_participants'] = 0;
            $data['total_participants_this_month'] = 0;
            $data['participants_per_course'] = 0;
            $data['rating_all'] = 0;
            $data['rating_per_course'] = 0;
            $data['idx_max_rating'] = 0;
            return view('navbar').view('dashboard', $data).view('footer');
        }
        
        $data['user'] = $session->get('name');
        $data['schedule'] = $model->getProviderSchedule($session->get('id'), 3);
        $data['course'] = $courseModel->getDataCourseByProviderId($session->get('id'));
        $data['total_participants'] = $res1['total_participants']['total_participants'];
        $data['total_participants_this_month'] = $res2['total_participants_this_month']['total_participants_this_month'];
        $data['participants_per_course'] = $participantspercourse;
        $data['rating_all'] = $res4['average_rating_courses']['AVG(rating)'];
        $data['rating_per_course'] = $ratings;
        $data['idx_max_rating'] = $idxmaxRating[0];
        log_message('info', 'Total participants: ' . $res1['total_participants']['total_participants']);
        return view('navbar').view('dashboard', $data).view('footer');
        // return $this->response->setJSON($data);
    }
}
