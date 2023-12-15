<?php

namespace App\Controllers;

class CoursesReview extends BaseController
{
    public function index(): string
    {
        return view('header').view('coursesReview');
    }
}
