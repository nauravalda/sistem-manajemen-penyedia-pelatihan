<?php

namespace App\Controllers;
use App\Models\CoursesModel;
use App\Models\ImageModel;

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
        // Getting user id from session
        $session = session();
        $user_id = $session->get('id');

        // Getting data from form
        $name = $this->request->getPost('name');
        $price = $this->request->getPost('price');
        $tags = $this->request->getPost('tags');
        $locations = $this->request->getPost('locations');
        $what_you_will_learn = $this->request->getPost('what_you_will_learn');
        $course_content = $this->request->getPost('course_content');
        $desc = $this->request->getPost('desc');

        // Getting image file and moving it to public/uploads/
        $img = $this->request->getFile('image');
        if ($img->getError() == 4) {
            $imgName = 'default.png';
        } else {
            $imgName = $img->getRandomName();
            $img->move('uploads', $imgName);
        }

        // Creating data array
        $data = [
            'provider_id' => $user_id,
            'name' => $name,
            'url_img' => $imgName,
            'what_you_will_learn' => $what_you_will_learn,
            'course_content' => $course_content,
            'desc' => $desc,
            'price' => $price,
            'tags' => $tags,
            'locations' => $locations,
        ];

        // Creating new course and getting the id of the new course
        $model = new CoursesModel();
        $id = $model->createCourse($data);

        // Creating new schedule
        $dates = $this->request->getPost('dates');
        $times = $this->request->getPost('times');
        $repeatNums = $this->request->getPost('repeatNums');

        for ($i = 0; $i < count($dates); $i++) {
            $date = $dates[$i];
            $time = $times[$i];
            $repeatNum = $repeatNums[$i];
            $start = $date.' '.$time;
            $model->createSchedule($id, $start, $repeatNum);
        }

        $this->session->setFlashdata('success','Course created successfully');
        
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