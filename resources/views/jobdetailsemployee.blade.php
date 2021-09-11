@extends('master')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Job Details</h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>SL</th>
                    <td>{{$jobs['id']}}</td>
                </tr>
                <tr>
                    <th>Job Title</th>
                    <td>{{$jobs['j_title']}}</td>
                </tr>
                <tr>
                    <th>Job Organization</th>
                    <td>{{$jobs['j_organization']}}</td>
                </tr>
                <tr>
                    <th>Vacancy</th>
                    <td>{{$jobs['j_vacancy']}}</td>
                </tr>
                <tr>
                    <th>Skills</th>
                    <td>{{$jobs['j_skill']}}</td>
                </tr>
                <tr>
                    <th>Employment Status</th>
                    <td>{{$jobs['j_status']}}</td>
                </tr>
                <tr>
                    <th>Edu Req</th>
                    <td>{{$jobs['j_edu_req']}}</td>
                </tr>
                <tr>
                    <th>Exp Req</th>
                    <td>{{$jobs['j_exp_req']}}</td>
                </tr>
                <tr>
                    <th>Additional Req</th>
                    <td>{{$jobs['j_add_req']}}</td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td>{{$jobs['j_loc']}}</td>
                </tr>
                <tr>
                    <th>Salary</th>
                    <td>{{$jobs['j_salary']}}</td>
                </tr>
                <tr>
                    <th>Publish date</th>
                    <td>{{$jobs['j_pub_date']}}</td>
                </tr>
                <tr>
                    <th>Deadline</th>
                    <td>{{$jobs['j_end_date']}}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{$jobs['j_description']}}</td>
                </tr>
                <tr>
                    <th>Action</th>
                    <td>
                    <a href="{{ route('editjob',$jobs->id)}}" class="btn btn-sm btn-primary" title="edit"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('deletejob',$jobs->id)}}" id="delete" class="btn btn-sm btn-danger" title="delete"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection