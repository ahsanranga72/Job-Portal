@extends('master')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Applicant List</h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Job Title</th>
                    <th>Candidate name</th>
                    <th>Candidate email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($info as $key => $inf)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$inf->j_title}}</td>
                    <td>{{$inf->first_name}}&nbsp{{$inf->last_name}}</td>
                    <td>{{$inf->email}}</td>
                    <td>
                    <a href="{{route('viewcandidatedetails', $inf->candidate)}}" class="btn btn-success" title="Click For View Deatils">View Deatils</a>
                    </td>
                </tr>
                @endforeach
                </tfoot>
        </table>
    </div>
</div>
@endsection