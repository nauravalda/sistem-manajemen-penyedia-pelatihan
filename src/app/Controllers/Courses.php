<?php

namespace App\Controllers;
use App\Models\CoursesModel;
use App\Models\ScheduleModel;

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
        $what_you_will_learn = $this->request->getVar('what_you_will_learn');
        $course_content = $this->request->getVar('course_content');
        $desc = $this->request->getVar('desc');
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
        return view('navbar').view('courses-detail', ['id' => $id]).view('footer');
    }

    public function edit(int $id)
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        return view('navbar').view('courses-edit', ['id' => $id]).view('footer');
    }
}