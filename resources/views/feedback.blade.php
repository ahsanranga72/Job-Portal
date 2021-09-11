@extends('master')
@section('content')
<div class="container">
    <form action="{{route('storefeedback')}}" method="post">
        @csrf
        <div class="form-group col-md-6">
            <lebel for="f_Name">Name: </lebel>
            <Input type="text" class="form-control" name="feedback_name" value="{{$cv['name']}} {{$cv['last_name']}}"></Input>
            <lebel for="email">Email: </lebel>
            <Input type="email" class="form-control" name="feedback_email" value="{{$cv['email']}}"></Input>
            <lebel for="des">Description: </lebel>
            <textarea type="text" class="form-control" name="feedback_description" col="10" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-left: 16px;">Submit</button>
    </form>
</div>
@endsection