@extends('master')
@section('content')
@if(Session::has('message'))
<div class="alert alert-success" role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{Session::get('message')}}
</div>
@endif
<div class="content">
    <div class="row">
        @foreach($jobs_for_candidate as $job)
        <div class="col-5">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $job->j_title}}</h3>
                    <h5>{{$job->j_organization}}</h5>
                    <h6>Vacancy: {{$job->j_vacancy}}</h6>
                    <h6>Deadline: {{$job->j_end_date}}</h6>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{route('jobdetailsforcandidate', $job->id)}}" class="small-box-footer">
                    Details<i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection