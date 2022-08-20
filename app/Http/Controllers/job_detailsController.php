<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Company;
use App\Models\Job;

use Illuminate\Http\Request;


class job_detailsController extends Controller
{
public function job_details($id){
// dd($id);
$job=Job::find($id);
 $company = $job->company;
// dd($job,$company);

    return view('front.job_details',compact('company','job'));
}




}