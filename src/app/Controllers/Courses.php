<?php

namespace App\Controllers;
use App\Models\CoursesModel;
use App\Models\ScheduleModel;
use CodeIgniter\CLI\Console;

class Courses extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        $model = new CoursesModel();
        $data['course'] = $model->getDataCourseByProviderId($session->get('id'));
        // print data to console
        return view('navbar').view('courses', $data).view('footer');
    }

    public function new()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        return view('navbar').view('courses-new').view('footer');
    }

    public function create()
    {
        helper(['form']);

        // Getting user id from session
        $session = session();
        $user_id = $session->get('id');

        // Getting data from form
        $name = $this->request->getPost('course_name');
        $price = $this->request->getPost('price');
        $tags = $this->request->getPost('tags');
        $locations = $this->request->getPost('locations');
        $what_you_will_learn = $this->request->getPost('what_you_will_learn');
        $course_content = $this->request->getPost('course_content');
        $desc = $this->request->getPost('desc');
        $image = $this->request->getFile('userfile');

        // Checking if there is an image
        if (!$image->isValid()) {
            // if its not valid, save with url_img = null
            $img_url = null;
        } else {
            // if its valid, save the image
            $img_url = $image->getRandomName();
            $image->move('./uploads', $img_url);

            // Construct the image URL
            $img_url = base_url('uploads/' . $img_url);
        }
        
        $data = [
            'provider_id' => $user_id,
            'name' => $name,
            'url_img' => $img_url,
            'what_you_will_learn' => $what_you_will_learn,
            'course_content' => $course_content,
            'desc' => $desc,
            'price' => $price,
            'tags' => $tags,
            'locations' => $locations,
        ];
        
        // Creating new course and getting the id of the new course
        $courseModel = new CoursesModel();
        $id = $courseModel->createCourse($data);

        // Creating new schedule
        $scheduleModel = new ScheduleModel();
        $dates = $this->request->getPost('dates');
        $times = $this->request->getPost('times');
        $repeatNums = $this->request->getPost('repeatNums');

        for ($i = 0; $i < count($dates); $i++) {
            $date = $dates[$i];
            $time = $times[$i];
            $repeatNum = $repeatNums[$i];
            $start = $date.' '.$time;
            $scheduleModel->createSchedule($id, $start, $repeatNum);
        }


        // Redirecting to the new course page
        return redirect()->to('/courses/'.$id);
    }

    public function detail(int $id)
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
        $url5 = $apiUrl . '/averagecoursesrating/?apiKey=' . $apiKey . '&courses=' . '(' . $id . ')';
        $curl5 = curl_init($url5);
        curl_setopt($curl5, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl5, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        $response5 = curl_exec($curl5);
        curl_close($curl5);
        $res5 = json_decode($response5, true);
        $data['rating'] = $res5['average_rating_courses']['AVG(rating)'];

        $url1 = $apiUrl . '/totalparticipant/?apiKey=' . $apiKey . '&courses=' . '(' . $id . ')';
        $curl1 = curl_init($url1);
        curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl1, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        $response1 = curl_exec($curl1);
        curl_close($curl1);
        $res1 = json_decode($response1, true);
        $data['total_participants'] = $res1['total_participants']['total_participants'];
        
        $url2 = $apiUrl . 'review/' . $id . '?apiKey=' . $apiKey ;
        $curl2 = curl_init($url2);
        curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl2, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        $response2 = curl_exec($curl2);
        curl_close($curl2);
        $res2 = json_decode($response2, true);
        if ($res2['course_review'] == null) {
            $data['featuredReview']['name'] = 'No review yet';
            $data['featuredReview']['rating'] = 0;
            $data['featuredReview']['content'] = 'No review yet';
        } else {
        $data['featuredReview'] = $res2['course_review'][0];
        }

        $scheduleModel = new ScheduleModel();
        $data['course'] = $courseModel->getDataCourseById($id)[0];
        $data['schedule'] = [
            'day' => $scheduleModel->getCourseSchedule($id, 3),
            'repetition' => $scheduleModel->getCourseScheduleRepetitions($id),
        ];



        return view('navbar').view('courses-detail', $data).view('footer');
        // return $this->response->setJSON($data);
    }

    public function edit(int $id)
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // check if the course is owned by the user
        $courseModel = new CoursesModel();
        $course = $courseModel->getDataCourseById($id)[0];
        if ($course['provider_id'] != $session->get('id')) {
            return redirect()->to('/courses');
        }


        $scheduleModel = new ScheduleModel();
        $data['course'] = $courseModel->getDataCourseById($id)[0];
        $data['schedule'] = $scheduleModel->getCourseScheduleRepetitions($id);
        return view('navbar').view('courses-edit', $data).view('footer');
        // return $this->response->setJSON($data);
    }

    public function update($id)
    {
        helper(['form']);

        // Getting user id from session
        $session = session();
        $user_id = $session->get('id');

        // Getting data from form
        $name = $this->request->getPost('course_name');
        $price = $this->request->getPost('price');
        $tags = $this->request->getPost('tags');
        $locations = $this->request->getPost('locations');
        $what_you_will_learn = $this->request->getPost('what_you_will_learn');
        $course_content = $this->request->getPost('course_content');
        $desc = $this->request->getPost('desc');

        $data = [];
        
        // checking if the image is updated
        if ($this->request->getFile('userfile')->isValid()) {
            log_message('debug', 'There is an image');
            // deleting the old image
            $courseModel = new CoursesModel();
            $old_img_url = $courseModel->getDataCourseById($id)[0]['url_img'];
            if ($old_img_url != null) {
                try {
                    unlink($old_img_url);
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }

            $image = $this->request->getFile('userfile');
            $newName = $image->getRandomName();
            $image->move('./uploads', $newName);
            // Construct the image URL
            $img_url = base_url('uploads/' . $newName);
            $data = [
                'provider_id' => $user_id,
                'name' => $name,
                'url_img' => $img_url,
                'what_you_will_learn' => $what_you_will_learn,
                'course_content' => $course_content,
                'desc' => $desc,
                'price' => $price,
                'tags' => $tags,
                'locations' => $locations,
            ];
        
            // Updating course
            $courseModel = new CoursesModel();
            $courseModel->updateCourse($id, $data);        
        } else {
            // getting the old image url
            $courseModel = new CoursesModel();
            $old_img_url = $courseModel->getDataCourseById($id)[0]['url_img'];
            log_message('debug', 'There is no image');
            $data = [
                'provider_id' => $user_id,
                'name' => $name,
                'url_img' => $old_img_url,
                'what_you_will_learn' => $what_you_will_learn,
                'course_content' => $course_content,
                'desc' => $desc,
                'price' => $price,
                'tags' => $tags,
                'locations' => $locations,
            ];
        }

        log_message('debug', 'Data: ' . json_encode($data));

        // Updating course
        $courseModel = new CoursesModel();
        $courseModel->updateCourse($id, $data);

        // Updating schedule
        // Deleting all schedule with course_id = $course_id
        $scheduleModel = new ScheduleModel();
        $scheduleModel->deleteSchedule($id);

        // Creating new schedule
        $dates = $this->request->getPost('dates');
        $times = $this->request->getPost('times');
        $repeatNums = $this->request->getPost('repeatNums');

        for ($i = 0; $i < count($dates); $i++) {
            $date = $dates[$i];
            $time = $times[$i];
            $repeatNum = $repeatNums[$i];
            $start = $date.' '.$time;
            $scheduleModel->createSchedule($id, $start, $repeatNum);
        }

        // Redirecting to the new course page
        return redirect()->to('/courses/'.$id);
    }

    public function delete($id)
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // check if the course is owned by the user
        $courseModel = new CoursesModel();
        $course = $courseModel->getDataCourseById($id)[0];
        if ($course['provider_id'] != $session->get('id')) {
            return redirect()->to('/courses');
        }

        // loggin the deletion
        log_message('debug', 'Course deleted: ' . $course['name']);

        $courseModel->deleteCourse($id);
        return redirect()->to('/courses');
    }
}