<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;

class postJobController extends Controller
{
public function postJob(){
    
$companyes=Company::where('user_id',Auth::user()->id)->first();
if($companyes){
$jobs=Job::where('company_id',$companyes->id)->paginate(10);

    return view('front.company.postJob',compact('companyes','jobs'));
}

return view('front.company.postJob',compact('companyes'));
}

public function saveCompanyInfo(Request $request ){


    
        $validator = Validator::make($request->all(), [
            "nameCompany" => "required",
            "EmailCompany" => "required",
            "webCompany" => "required",
            "country" => "required",
            "city" => "required",
            "address" => "required",
            "desCompany" => "required",
           
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ], 400);
        } else {
   Company::updateOrCreate([
    'user_id'   => Auth::user()->id],[
        'nameCompany'=>$request->nameCompany,
        'emailCompany'=>$request->EmailCompany,
        'web'=>$request->webCompany,
        'country'=>$request->country,
        'city'=>$request->city,
        'address'=>$request->address,
        'descriptionCompany'=>$request->desCompany,
    ]);
    
    return response()->json(['success' => true], 200);
          }

             }
public function saveJobInfo(Request $request ){


  
   
        $validator = Validator::make($request->all(), [
            "namejob" => "required",
           
            "nature" => "required",
            "category" => "required",
            "desJob" => "required",
            "knowledge" => "required",
            "experience" => "required",
           
           
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ], 400);
        } else {
            $companyId= Company::where('user_id',Auth::user()->id)->first()->id;
   Job::create([
   
        'nameJob'=>$request->namejob,
        'salary'=>$request->Salary,
        'nature'=>$request->nature,
        'category'=>$request->category,
        'descriptionJob'=>$request->desJob,
        'knowledge'=>$request->knowledge,
        'experience'=>$request->experience,
        'company_id'=>$companyId,
    ]);
    $companyes=Company::where('user_id',Auth::user()->id)->first();

$jobs=Job::where('company_id',$companyes->id)->paginate(10);
$table = view('front.company.jobComanytable', compact('companyes', 'jobs'))->render();
    
    return response()->json(['success' => true,'table' => $table], 200);
          }

             }

             


}