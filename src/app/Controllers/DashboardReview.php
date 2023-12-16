<?php

namespace App\Controllers;

use App\Models\DashboardModel;

class DashboardReview extends BaseController
{
    protected $dashboardReviewModel;
    public function __construct(){
        $this->dashboardReviewModel = new DashboardModel();
    }

    public function index($id): string
    {
        $dashboardReview = $this->dashboardReviewModel->getCourseById($id);
        
        // Exception untuk halaman dengan id tidak ditemukan
        if (empty($dashboardReview)){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Course dengan id ' . $id . ' tidak ditemukan!');
        }

        $data = [
            'name' => $dashboardReview['name'],
            'url_img' => $dashboardReview['url_img'],
            'desc' => $dashboardReview['desc'],
            'price' => $dashboardReview['price'],
            'tags' => $dashboardReview['tags'],
            'locations' => $dashboardReview['locations'],
            'participants' => 99,
            'data_review' => [
                [
                    'name' => 'Aan Bejir',
                    'rating' => 5,
                    'desc' => 'Everything on this course is a goldmine except for the GUI since it\'s specific for Jupyter Notebooks and it\'s missing the video for GUI Events. Still it was a nice introduction to GUI. Don\'t let that disappoint you though. THIS IS A MUST HAVE COURSE. I have already recommended it to few people and always will. Do yourself a favor and do this course if you want to learn Python 3. Thank you so much for this course, Jose-sensei!!'
                ],
                [
                    'name' => 'Naura Bejir',
                    'rating' => 4.8,
                    'desc' => 'TST matkulnya sangat bermutu dan keren dan berbobot sekalih!!!'
                ]
            ],
            'courseBenefit' => $dashboardReview['what_you_will_learn'],
            'courseContent' => $dashboardReview['course_content']
        ];
       
        // dd($courseReview);

        return view('header').view('dashboardReview', $data);
    }
}
