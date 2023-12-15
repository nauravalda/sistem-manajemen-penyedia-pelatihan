<?php

namespace App\Controllers;

class DashboardReview extends BaseController
{
    public function index(): string
    {
        return view('header').view('dashboardReview');
    }
}
