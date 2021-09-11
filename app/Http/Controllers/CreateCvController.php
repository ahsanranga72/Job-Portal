<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;
use App\Models\cv_information;
use App\Models\User;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\JobDetails;
use Illuminate\Support\Facades\DB;

class CreateCvController extends Controller
{
    //CATEGORY
    public function addcategory(){
        return view('addcategory');
    }

    public function storecategory(Request $req){
        $validated = $req->validate([
            'name' => 'required|unique:categories|max:50',
        ]);
        $category = new Category;
        $category->name = $req->name;
        $category->save();

        return redirect()->route('viewcategory')->with('message' , 'Category store successfully !!');
    }

    public function viewcategory(){
        $categories = Category::all();
        return view('viewcategory', compact('categories'));
    }

    public function editcategory($id)
    {
        $category = Category::where('id', $id)->first();
        return view('editcategory', compact('category'));
    }

    public function updatecategory(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:50',
        ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('viewcategory')->with('message', 'Category Updated Successfully !!');

    }

    public function deletecategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('viewcategory')->with('message', 'Category Deleted Successfully');
    }

    //CV
    public function CreateCV(){
        $id = auth()->user()->id;
        $cv = cv_information::Where('uuid',$id)->first();
        $categories = Category::all();
        if($cv==null){
            return view('createcv', compact('categories'));
        } else {
            return redirect()->route('viewcv')->with('message' , 'CV alraedy exist !!');
        }
        
    }

    public function StoreCV(Request $request){
        $cv_information = New cv_information;
        $cv_information->uuid = auth()->user()->id;
        $cv_information->category = $request->Category;
        $cv_information->first_name = $request->FirstName;
        $cv_information->last_name = $request->LastName;
        $cv_information->mobile_number = $request->MobileNumber;
        $cv_information->email = $request->Email;
        $cv_information->address = $request->Addresss;
        $cv_information->job_title_1 = $request->JobTitle1;
        $cv_information->company_name_1 = $request->CompanyName1;
        $cv_information->duration_1 = $request->Duration1;
        $cv_information->description_1 = $request->Description1;
        $cv_information->job_title_2 = $request->JobTitle2;
        $cv_information->company_name_2 = $request->CompanyName2;
        $cv_information->duration_2 = $request->Duration2;
        $cv_information->description_2 = $request->Description2;
        $cv_information->job_title_3 = $request->JobTitle3;
        $cv_information->company_name_3 = $request->CompanyName3;
        $cv_information->duration_3 = $request->Duration3;
        $cv_information->description_3 = $request->Description3;
        $cv_information->job_title_4 = $request->JobTitle4;
        $cv_information->company_name_4 = $request->CompanyName4;
        $cv_information->duration_4 = $request->Duration4;
        $cv_information->description_4 = $request->Description4;
        $cv_information->job_title_5 = $request->JobTitle5;
        $cv_information->company_name_5 = $request->CompanyName5;
        $cv_information->duration_5 = $request->Duration5;
        $cv_information->description_5 = $request->Description5;
        $cv_information->exam_name_1 = $request->ExamName1;
        $cv_information->institution_name_1 = $request->InstitutionName1;
        $cv_information->bord_1 = $request->Bord1;
        $cv_information->grade_1 = $request->Grade1;
        $cv_information->passing_year_1 = $request->PassingYear1;
        $cv_information->exam_name_2 = $request->ExamName2;
        $cv_information->institution_name_2 = $request->InstitutionName2;
        $cv_information->bord_2 = $request->Bord2;
        $cv_information->grade_2 = $request->Grade2;
        $cv_information->passing_year_2 = $request->PassingYear2;
        $cv_information->exam_name_3 = $request->ExamName3;
        $cv_information->institution_name_3 = $request->InstitutionName3;
        $cv_information->bord_3 = $request->Bord3;
        $cv_information->grade_3 = $request->Grade3;
        $cv_information->passing_year_3 = $request->PassingYear3;
        $cv_information->exam_name_4 = $request->ExamName4;
        $cv_information->institution_name_4 = $request->InstitutionName4;
        $cv_information->bord_4 = $request->Bord4;
        $cv_information->grade_4 = $request->Grade4;
        $cv_information->passing_year_4 = $request->PassingYear4;
        $cv_information->exam_name_5 = $request->ExamName5;
        $cv_information->institution_name_5 = $request->InstitutionName5;
        $cv_information->bord_5 = $request->Bord5;
        $cv_information->grade_5 = $request->Grade5;
        $cv_information->passing_year_5 = $request->PassingYear5;
        $cv_information->skill_1 = $request->Skill1;
        $cv_information->ability_1 = $request->Ability1;
        $cv_information->skill_2 = $request->Skill2;
        $cv_information->ability_2 = $request->Ability2;
        $cv_information->skill_3 = $request->Skill3;
        $cv_information->ability_3 = $request->Ability3;
        $cv_information->skill_4 = $request->Skill4;
        $cv_information->ability_4 = $request->Ability4;
        $cv_information->ln_1 = $request->Ln1;
        $cv_information->lnab_1 = $request->LnAb1;
        $cv_information->ln_2 = $request->Ln2;
        $cv_information->lnab_2 = $request->LnAb2;
        $cv_information->ln_3 = $request->Ln2;
        $cv_information->lnab_3 = $request->LnAb3;
        $cv_information->extra_curriculam_activie = $request->ExtraCurriculamActivities;
        $cv_information->reference = $request->References;
       

        if ($request->file('Image')) {
            $file = $request->file('Image');
            $filename =date('YmdHi').$file->getClientORiginalName();
            $file->move(public_path('Images'), $filename);
            $cv_information['Image'] = $filename;
        }
        $cv_information->save();
        return redirect()->route('viewcv')->with('message' , 'Information added succesfully.');
    }

    public function ViewCV(){
        $id = auth()->user()->id;
        $cv = cv_information::Where('uuid',$id)->first();
        $category = Category::Where('id',$cv->category)->first();
        return view('viewcv',compact('cv','category'));
       
    }

    public function EditCV(){
        $id = auth()->user()->id;
        $cv = cv_information::Where('uuid',$id)->first();
        $categories = Category::all();
        if($cv==null){
            return redirect()->route('createcv')->with('message' , 'First craete CV !!');
            
        } else {
            return view('editcv', compact('cv','categories'));
        }
    }
    public function UpdateCV(Request $request){
        $id = auth()->user()->id;
        $cv_information = cv_information::Where('uuid',$id)->first();
        $cv_information->category = $request->Category;
        $cv_information->first_name = $request->FirstName;
        $cv_information->last_name = $request->LastName;
        $cv_information->mobile_number = $request->MobileNumber;
        $cv_information->email = $request->Email;
        $cv_information->address = $request->Addresss;
        $cv_information->job_title_1 = $request->JobTitle1;
        $cv_information->company_name_1 = $request->CompanyName1;
        $cv_information->duration_1 = $request->Duration1;
        $cv_information->description_1 = $request->Description1;
        $cv_information->job_title_2 = $request->JobTitle2;
        $cv_information->company_name_2 = $request->CompanyName2;
        $cv_information->duration_2 = $request->Duration2;
        $cv_information->description_2 = $request->Description2;
        $cv_information->job_title_3 = $request->JobTitle3;
        $cv_information->company_name_3 = $request->CompanyName3;
        $cv_information->duration_3 = $request->Duration3;
        $cv_information->description_3 = $request->Description3;
        $cv_information->job_title_4 = $request->JobTitle4;
        $cv_information->company_name_4 = $request->CompanyName4;
        $cv_information->duration_4 = $request->Duration4;
        $cv_information->description_4 = $request->Description4;
        $cv_information->job_title_5 = $request->JobTitle5;
        $cv_information->company_name_5 = $request->CompanyName5;
        $cv_information->duration_5 = $request->Duration5;
        $cv_information->description_5 = $request->Description5;
        $cv_information->exam_name_1 = $request->ExamName1;
        $cv_information->institution_name_1 = $request->InstitutionName1;
        $cv_information->bord_1 = $request->Bord1;
        $cv_information->grade_1 = $request->Grade1;
        $cv_information->passing_year_1 = $request->PassingYear1;
        $cv_information->exam_name_2 = $request->ExamName2;
        $cv_information->institution_name_2 = $request->InstitutionName2;
        $cv_information->bord_2 = $request->Bord2;
        $cv_information->grade_2 = $request->Grade2;
        $cv_information->passing_year_2 = $request->PassingYear2;
        $cv_information->exam_name_3 = $request->ExamName3;
        $cv_information->institution_name_3 = $request->InstitutionName3;
        $cv_information->bord_3 = $request->Bord3;
        $cv_information->grade_3 = $request->Grade3;
        $cv_information->passing_year_3 = $request->PassingYear3;
        $cv_information->exam_name_4 = $request->ExamName4;
        $cv_information->institution_name_4 = $request->InstitutionName4;
        $cv_information->bord_4 = $request->Bord4;
        $cv_information->grade_4 = $request->Grade4;
        $cv_information->passing_year_4 = $request->PassingYear4;
        $cv_information->exam_name_5 = $request->ExamName5;
        $cv_information->institution_name_5 = $request->InstitutionName5;
        $cv_information->bord_5 = $request->Bord5;
        $cv_information->grade_5 = $request->Grade5;
        $cv_information->passing_year_5 = $request->PassingYear5;
        $cv_information->skill_1 = $request->Skill1;
        $cv_information->ability_1 = $request->Ability1;
        $cv_information->skill_2 = $request->Skill2;
        $cv_information->ability_2 = $request->Ability2;
        $cv_information->skill_3 = $request->Skill3;
        $cv_information->ability_3 = $request->Ability3;
        $cv_information->skill_4 = $request->Skill4;
        $cv_information->ability_4 = $request->Ability4;
        $cv_information->ln_1 = $request->Ln1;
        $cv_information->lnab_1 = $request->LnAb1;
        $cv_information->ln_2 = $request->Ln2;
        $cv_information->lnab_2 = $request->LnAb2;
        $cv_information->ln_3 = $request->Ln2;
        $cv_information->lnab_3 = $request->LnAb3;
        $cv_information->extra_curriculam_activie = $request->ExtraCurriculamActivities;
        $cv_information->reference = $request->References;
       

        if ($request->file('Image')) {
            $file = $request->file('Image');
            $filename =date('YmdHi').$file->getClientORiginalName();
            $file->move(public_path('Images'), $filename);
            $cv_information['Image'] = $filename;
        }
        $cv_information->save();
        return redirect()->route('viewcv')->with('message' , 'Information updated succesfully.');
    }

    public function cvtips(){
        return view('cvtips');
    }

    Public function feedback(){
        $id = auth()->user()->id;
        $cv = User::Where('id',$id)->first();
        return view('feedback',['cv'=>$cv]);
    }

    public function storefeedback(Request $req){
        $feed = new Feedback;
        $feed->feedback_name = $req->feedback_name;
        $feed->feedback_email = $req->feedback_email;
        $feed->feedback_description = $req->feedback_description;
        $feed->save();

        return redirect()->route('home')->with('message','Thank you for your valuable comment');
    }

    public function viewfeedback(){
        $feeds = Feedback::all();
        return view('viewfeedback', compact('feeds'));
    }

    public function jobforcandidate(){
        $jobs_for_candidate = DB::table('cv_informations')
        ->join('job_details', 'job_details.category', 'cv_informations.category')
        ->get();
        return view('jobforcandidate',compact('jobs_for_candidate'));
    }

    public function jobdetailsforcandidate($id){
        $jobs = JobDetails::where('id',$id)->first();
     
        return view('jobdetailsforcandidate',compact('jobs'));
    }

    public function jobapply($id){
        $app = new Apply;
        $app->job_id = $id;
        $app->candidate = auth()->user()->id;
        $app->save();

        return redirect()->route('jobforcandidate')->with('message', 'Applied Job Successdully.');
    }
}
