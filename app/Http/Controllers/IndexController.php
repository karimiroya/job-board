<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;



class IndexController extends Controller
{
public function index(){


    return view('front.index');
}





}