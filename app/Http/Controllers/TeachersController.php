<?php

namespace App\Http\Controllers;




use Illuminate\Http\Response;

class TeachersController extends Controller
{
    public function TeacherDashboard(){
        return view('teacher.dashboardteacher');
    } }