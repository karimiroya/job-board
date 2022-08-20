<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;


class jobListingController extends Controller
{
public function job_listing(){
    $allCompany = Company::with('job')->paginate(5);
    $countjob=Job::count();
    return view('front.job_listing',compact('allCompany','countjob'));
}


public function filterJob(Request $request){
   
   
        $allCompany = Company::where(function ($query) use ($request) {
            $query
            ->orWhere('city', 'like', '%' . $request->city . '%')
            
             ->sourcenature($request->nature.'%' )
             ->sourcesalary($request->price.'%' )
             ->sourcecategory($request->category.'%' );
            
            // ->orWhere('category', 'like', '%' . $request->category . '%')
            //     ->orWhere('nature', 'like', '%' . $request->nature . '%')
            //     ->orWhere('salary', 'like', '%' . $request->price . '%')
            //     ->sourceName($request->city . '%');
            
                
        });

        $allCompany=$allCompany->with('job')->get();
    
// dd($allCompany);
        $table = view('front.jobstable', compact('allCompany'))->render();
    
        return response()->json(['success' => true,'table' => $table], 200);
              



}

}