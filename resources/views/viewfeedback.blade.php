@extends('master')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Feedbacks</h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($feeds as $feed)
                <tr>
                    <td>{{$feed->id}}</td>
                    <td>{{$feed->feedback_name}}</td>
                    <td>{{$feed->feedback_email}}</td>
                    <td>{{$feed->feedback_description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection