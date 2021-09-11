<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\cv_information;
use App\Models\JobDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function jobtips(){
        return view('jobtips');
    }

    public function createjob(){
        $categories = Category::all();
        return view('createjob', compact('categories'));
    }

    public function storejob(Request $req){
        $job = new JobDetails;
        $job->uuid = auth()->user()->id;
        $job->category = $req->category;
        $job->j_organization = $req->j_organization;
        $job->j_title = $req->j_title;
        $job->j_vacancy = $req->j_vacancy;
        $job->j_skill = $req->j_skill;
        $job->j_status = $req->j_status;
        $job->j_edu_req = $req->j_edu_req;
        $job->j_ex_req = $req->j_ex_req;
        $job->j_add_req = $req->j_add_req;
        $job->j_loc = $req->j_loc;
        $job->j_salary = $req->j_salary;
        $job->j_pub_date = $req->j_pub_date;
        $job->j_end_date = $req->j_end_date;
        $job->j_description = $req->j_description;
        $job->save();

        return redirect()->route('viewjob')->with('message' , 'Job added succesfully.');
    }

    public function viewjob(){
        $id = auth()->user()->id;
        $jobs = JobDetails::where('uuid', $id)->get();

        return view('viewjob', compact('jobs'));
    }

    public function jobdetailsemployee($id){
        $jobs = JobDetails::where('id',$id)->first();
        return view('jobdetailsemployee', compact('jobs'));
    }

    public function editjob($id)
    {
        $categories = Category::all();
        $jobs = JobDetails::where('id', $id)->first();
        return view('editjob', compact('jobs','categories'));
    }

    public function updatejob(Request $req, $id)
    {
        $job = JobDetails::find($id);
        $job->uuid = auth()->user()->id;
        $job->category = $req->category;
        $job->j_organization = $req->j_organization;
        $job->j_title = $req->j_title;
        $job->j_vacancy = $req->j_vacancy;
        $job->j_skill = $req->j_skill;
        $job->j_status = $req->j_status;
        $job->j_edu_req = $req->j_edu_req;
        $job->j_ex_req = $req->j_ex_req;
        $job->j_add_req = $req->j_add_req;
        $job->j_loc = $req->j_loc;
        $job->j_salary = $req->j_salary;
        $job->j_pub_date = $req->j_pub_date;
        $job->j_end_date = $req->j_end_date;
        $job->j_description = $req->j_description;
        $job->save();

        return redirect()->route('viewjob')->with('message' , 'Job updated succesfully.');

    }

    public function deletejob($id)
    {
        $job = JobDetails::find($id);
        $job->delete();
        return redirect()->route('viewjob')->with('message', 'Job Deleted Successfully');
    }

    public function appliedcandidates(){
        $info = DB::table('applies')
            ->join('cv_informations', 'applies.candidate', 'cv_informations.uuid')
            ->join('job_details', 'applies.job_id', 'job_details.uuid')
            ->get();
        return view('appliedcandidates', compact('info'));
    }

    public function viewcandidatedetails($id){
        $cv = cv_information::where('uuid',$id)->first();
        $category = Category::Where('id',$cv->category)->first();
        return view('viewcandidatedetails',compact('cv','category'));
    }
}
