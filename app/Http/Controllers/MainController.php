<?php

namespace App\Http\Controllers;
use App\Postjob;
use App\Applicant;
use Auth;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){

    	return view('frontend.main.main');
    }

    //admin jobpost


    public function postjob(){

    	return view('employe.postjob');
    }

     public function jobview(Request $request){

     $postjob = new Postjob();
     $postjob->title = $request ->title;
     $postjob->description = $request ->description;
     $postjob->salary = $request ->salary;
     $postjob->location = $request ->location;
     $postjob->country = $request ->country;
     $postjob->save();

     return redirect('postjob')->with('message' ,'Job Post Successfully');
    }
    public function alljob(){
         $postjobs = Postjob::all();
    	return view('employe.adminjoblist',['postjobs' => $postjobs ]);
    }

    //applicant side

    public function applicantjob(){
         $postjobs = Postjob::all();
        return view('applicant.aplicantjoblist',['postjobs' => $postjobs ]);
    }

    public function upload(Request $request){
        $applicant = new Applicant();
     $applicant->fname = $request->fname;
     $applicant->lname = $request->lname;
     $applicant->email = $request->email;
     $applicant->skill = $request->skill;
     $applicant->image = $request->image->store('public/file');
     $applicant->pdf = $request->pdf->store('public/file');
     $applicant->save();

     return redirect('updateprofile')->with('message' ,'Upload Successfully');
    }
public function updateprofile(){
        
        return view('applicant.updateprofile');
    }
    
    public function viewprofile(){
        $applicants = Applicant::all();
        return view('applicant.profile',['applicants' => $applicants]);
    }

    public function profile1(){
        $applicant = Applicant::find(Auth::user()->id);
        //$applicants = Applicant::all();
        return view('applicant.profile1',compact('applicant'));
    }
    

    //admin side applicant list

     public function applicantlist(){
        $applicants = Applicant::all();
    	return view('employe.applicantlist',['applicants' => $applicants]);
    }


    



}
