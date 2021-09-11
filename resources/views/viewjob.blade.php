@extends('master')
@section('content')
<div class="content">
    <div class="row">
        @foreach($jobs as $job)
        <div class="col-5">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $job['j_title'] }}</h3>
                    <h5>{{$job['j_organization']}}</h5>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{route('jobdetailsemployee', $job->id)}}" class="small-box-footer">
                    Details<i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection