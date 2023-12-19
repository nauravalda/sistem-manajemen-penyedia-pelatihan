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

        $apiUrl = getenv('API_URL');
        $apiKey = getenv('API_KEY');
        $scheduleModel = new ScheduleModel();
        $data['course'] = $courseModel->getDataCourseById($id)[0];
        $data['schedule'] = $scheduleModel->getCourseScheduleRepetitions($id);

        $url2 = $apiUrl . 'review/' . $id . '?apiKey=' . $apiKey ;
        $curl2 = curl_init($url2);
        curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl2, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        $response2 = curl_exec($curl2);
        curl_close($curl2);
        $res2 = json_decode($response2, true);
        $data['reviews'] = $res2['course_review'];

        $url3 = $apiUrl . '/totalparticipant/?apiKey=' . $apiKey . '&courses=' . '(' . $id . ')';
        $curl3 = curl_init($url3);
        curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl3, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        $response3 = curl_exec($curl3);
        curl_close($curl3);
        $res3 = json_decode($response3, true);
        $data['total_participants'] = $res3['total_participants']['total_participants'];

        $url5 = $apiUrl . '/averagecoursesrating/?apiKey=' . $apiKey . '&courses=' . '(' . $id . ')';
        $curl5 = curl_init($url5);
        curl_setopt($curl5, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl5, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        $response5 = curl_exec($curl5);
        curl_close($curl5);
        $res5 = json_decode($response5, true);
        $data['avg_rating'] = $res5['average_rating_courses']['AVG(rating)'];


        return view('navbar').view('dashboardReview', $data).view('footer');
        // return $this->response->setJSON($data);
    }
}
