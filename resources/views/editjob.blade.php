@extends('master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3>Create Job
                            <a class="btn btn-success float-right btn-sm" href="{{route('viewjob')}}">
                                <i class="fa fa-list"></i>View Job</a>
                        </h3>
                    </div>
                    <form id="quickForm" method="POST" action="{{route('updatejob', $jobs['id'])}}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                            <div class="form-group col-md-6">
                                    <label for="category">Category</label>
                                    <select name="category" id="category" class="form-control select" style="width: 100%;">
                                        @foreach($categories as $category)
                                        <option value="{{$category['id']}}">{{$category['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="j_organization">Organization</label>
                                    <input type="text" value="{{$jobs['j_organization']}}" name="j_organization" class="form-control" id="j_organization" placeholder="Enter Organization name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="j_title">Job Title</label>
                                    <input type="text" value="{{$jobs['j_title']}} name="j_title" class="form-control" id="j_title" placeholder="Enter job title">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="j_vacancy">Vacancy</label>
                                    <input type="number" value="{{$jobs['j_vacancy']}} class="form-control" name="j_vacancy" id="j_vacancy" placeholder="Enter vacancy">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="j_skill">Job Skills</label>
                                    <input type="text" value="{{$jobs['j_skill']}} class="form-control" name="j_skill" id="j_skill" placeholder="Enter skills">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="j_status">Employment Status</label>
                                    <input type="text" value="{{$jobs['j_status']}} class="form-control" name="j_status" id="j_status" placeholder="Enter employment status">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="j_edu_req">Education Requirement</label>
                                    <input type="text" value="{{$jobs['j_edu_req']}} class="form-control" name="j_edu_req" id="j_edu_req" placeholder="Enter Education Requirment">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="j_ex_req">Experience Requirement</label>
                                    <input type="text" value="{{$jobs['j_ex_req']}} class="form-control" name="j_ex_req" id="j_ex_req" placeholder="Enter Experience requirement">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="j_add_req">Additional Requirement</label>
                                    <input type="text" value="{{$jobs['j_add_req']}} class="form-control" name="j_add_req" id="j_add_req" placeholder="Enter Additional Requirement">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="j_loc">Job Lcation</label>
                                    <input type="text" value="{{$jobs['j_loc']}} class="form-control" name="j_loc" id="j_loc" placeholder="Enter Job Lcation">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="j_salary">Salary</label>
                                    <input type="text" value="{{$jobs['j_salary']}} class="form-control" name="j_salary" id="j_salary" placeholder="Enter Salary">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="j_pub_date">Job Publish On</label>
                                    <input type="text" value="{{$jobs['j_pub_date']}} class="form-control" name="j_pub_date" id="j_pub_date" placeholder="Enter publish date">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="j_end_date">Application Deadline</label>
                                    <input type="text" value="{{$jobs['j_end_date']}} class="form-control" name="j_end_date" id="j_end_date" placeholder="Enter deadline">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="j_description">Description</label>
                                    <textarea value="{{$jobs['j_description']}} placeholder="Enter Description" class="form-control" name="j_description" id="j_description" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection