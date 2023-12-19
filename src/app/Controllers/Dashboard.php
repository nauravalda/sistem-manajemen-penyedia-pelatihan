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

        $apiUrl = getenv('API_URL');
        $apiKey = getenv('API_KEY');
        $url1 = $apiUrl . '/courseparticipants/?apiKey=' . $apiKey;
        $url2 = $apiUrl . '/providerparticipants?apiKey=' . $apiKey;
        $url3 = $apiUrl . '/courserating?apiKey=' . $apiKey;
        $url4 = $apiUrl . '/providerrating?apiKey=' . $apiKey;
        $url5 = $apiUrl . '/providerparticipantsthismonth?apiKey=' . $apiKey;

        $curl1 = curl_init($url1);
        $curl2 = curl_init($url2);
        $curl3 = curl_init($url3);
        $curl4 = curl_init($url4);
        $curl5 = curl_init($url5);

        curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl4, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl5, CURLOPT_RETURNTRANSFER, true);

        $response1 = curl_exec($curl1);
        $response2 = curl_exec($curl2);
        $response3 = curl_exec($curl3);
        $response4 = curl_exec($curl4);
        $response5 = curl_exec($curl5);

        curl_close($curl1);
        curl_close($curl2);
        curl_close($curl3);
        curl_close($curl4);
        curl_close($curl5);

        if ($response1 && $response2 && $response3 && $response4 && $response5) {
            $data1 = json_decode($response1, true);
            $data2 = json_decode($response2, true);
            $data3 = json_decode($response3, true);
            $data4 = json_decode($response4, true);
            $data5 = json_decode($response5, true);
            $providerIdToFind = $session->get('id');
            $data['courseparticipants'] = $data1['data']['course_participants'];
            
            
            
            foreach ($data2['provider_participants'] as $provider) {
                if ($provider['provider_id'] == $providerIdToFind) {
                    $data['totalparticipants'] = $provider['total_participants'];
                    break;
                }
            }
            
            $data['courserating'] = $data3['data']['courserating'];

            foreach ($data4['provider_rating'] as $provider) {
                if ($provider['provider_id'] == $providerIdToFind) {
                    $data['providerrating'] = $provider['rating'];
                    break;
                }
            }
            $data['providerparticipantsthismonth'] = $data5['data']['providerparticipantsthismonth'];
        } else {
            $data['courseparticipants'] = 0;
            $data['providerparticipants'] = 0;
            $data['courserating'] = 0;
            $data['providerrating'] = 0;
            $data['providerparticipantsthismonth'] = 0;
        }
        

        $model = new ScheduleModel();
        $courseModel = new CoursesModel();
        $data['user'] = $session->get('name');
        $data['schedule'] = $model->getProviderSchedule($session->get('id'), 3);
        $data['course'] = $courseModel->getDataCourseByProviderId($session->get('id'));
        return view('navbar').view('dashboard', $data).view('footer');
        // return $this->response->setJSON($data);
    }
}
