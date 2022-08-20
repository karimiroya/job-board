<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use PDF;

use App\Models\Company;
use App\Mail\sendResume;
use App\Models\Userprofile;
use Illuminate\Http\Request;

class applyJobController extends Controller
{
public function applyJob($id){
    
    $profileUser=Userprofile::where('user_id',Auth::user()->id)->first()->toArray();
//    dd($profileUser["emailUser"]);
    if($profileUser){
        $Company=Company::where('id',$id)->first()->toArray();

$pdf=PDF::loadView('mails.resume',$profileUser);


Mail::to($Company["emailCompany"])->send(new sendResume($pdf));

return back()->with([
    'success' => true,
    'message' => "sent your resume to company",
]);
    }
    else{
        // redirect('/Userprofile');
        return view('front.Userprofile');
    }

}
public function saveUserInfo(Request $request){
    

    $validator = Validator::make($request->all(), [
        "fullName" => "required",
       
        "emailUser" => "required",
        "phoneNumber" => "required",
        "country" => "required",
        "city" => "required",
        "address" => "required",
        "descriptionUser" => "required",
        "Expertise" => "required",
        "CareerRecords" => "required",
        "EducationalRecords" => "required",
       
       
    ]);
    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors' => $validator->getMessageBag()->toArray()
        ], 400);
    } else {
       
        Userprofile::updateOrCreate([
    'user_id'   => Auth::user()->id],[

    'fullName'=>$request->fullName,
    
    'emailUser'=>$request->emailUser,
    'phoneNumber'=>$request->phoneNumber,
    'country'=>$request->country,
    'city'=>$request->city,
    'address'=>$request->address,
    'descriptionUser'=>$request->descriptionUser,
    'Expertise'=>$request->Expertise,
    'CareerRecords'=>$request->CareerRecords,
    'EducationalRecords'=>$request->EducationalRecords,
    
]);


return response()->json(['success' => true], 200);
      }


    }


      public function Userprofile(){
    $profileUser=Userprofile::where('user_id',Auth::user()->id)->first();

    return view('front.Userprofile',compact('profileUser'));
}   

   




}