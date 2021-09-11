@extends('master')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  html,
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Roboto", sans-serif
  }
</style>
@section('content')
@if(Session::has('message'))
<div class="alert alert-success" role="alert">
  {{Session::get('message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="w3-light-grey">
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="../Images/{{$cv['image']}}" style="width:100%" alt="profile.jpg">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2>{{ $cv['first_name'] }}&nbsp{{ $cv['last_name'] }}</h2>
            </div>
          </div>

          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$category['name']}}</p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$cv['address']}}</p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$cv['email']}}</p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>+880 {{$cv['mobile_number']}}</p>
            <hr>

            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
            <p>{{$cv['skill_1']}}</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:{{$cv['ability_1']}}%">{{$cv['ability_1']}}%</div>
            </div>
            <p>{{$cv['skill_2']}}</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:{{$cv['ability_2']}}%">
                <div class="w3-center w3-text-white">{{$cv['ability_2']}}%</div>
              </div>
            </div>
            <p>{{$cv['skill_3']}}</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:{{$cv['ability_3']}}%">{{$cv['ability_3']}}%</div>
            </div>
            <p>{{$cv['skill_4']}}</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:{{$cv['ability_4']}}%">{{$cv['ability_4']}}%</div>
            </div>
            <br>

            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
            <p>{{$cv['ln_1']}}</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:{{$cv['lnab_1']}}%"></div>
            </div>
            <p>{{$cv['ln_2']}}</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:{{$cv['lnab_2']}}%"></div>
            </div>
            <p>{{$cv['ln_3']}}</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:{{$cv['lnab_3']}}%"></div>
            </div>
            <br>
          </div>
        </div><br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom job1" data-target="{{$cv['job_title_1']}}">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>{{$cv['job_title_1']}} / {{$cv['company_name_1']}}</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$cv['duration_1']}}</h6>
            <p>{{$cv['description_1']}}</p>
            <hr class="job2" data-target="{{$cv['job_title_2']}}">
          </div>
          <div class="w3-container job2" data-targe="{{$cv['job_title_2']}}">
            <h5 class="w3-opacity">{{$cv['job_title_2']}} / {{$cv['company_name_2']}}</h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$cv['duration_2']}}</h6>
            <p>{{$cv['description_2']}}</p>
            <hr class="job3" data-target="{{$cv['job_title_3']}}">
          </div>
          <div class="w3-container job3" data-target="{{$cv['job_title_3']}}">
            <h5 class="w3-opacity">{{$cv['job_title_3']}} / {{$cv['company_name_3']}}</h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$cv['duration_3']}}</h6>
            <p>{{$cv['description_3']}}</p>
            <hr class="job4" data-target="{{$cv['job_title_4']}}">
          </div>
          <div class="w3-container job4" data-target="{{$cv['job_title_4']}}">
            <h5 class="w3-opacity">{{$cv['job_title_4']}} / {{$cv['company_name_4']}}</h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$cv['duration_4']}}</h6>
            <p>{{$cv['description_4']}}</p>
            <hr class="job5" data-target="{{$cv['job_title_5']}}">
          </div>
          <div class="w3-container job5" data-target="{{$cv['job_title_5']}}">
            <h5 class="w3-opacity">{{$cv['job_title_5']}} / {{$cv['company_name_5']}}</h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$cv['duration_5']}}</h6>
            <p>{{$cv['description_5']}}</p>
          </div>
        </div>

        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Exam Name : {{$cv['exam_name_1']}}</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Passing Year : {{$cv['passing_year_1']}}</h6>
            <p>Institution Name : {{$cv['institution_name_1']}}<br>Bord : {{$cv['bord_1']}}<br> Grade : {{$cv['grade_1']}}</p>
            <hr class="exam2" data-target="{{$cv['exam_name_2']}}">
          </div>
          <div class="w3-container exam2" data-target="{{$cv['exam_name_2']}}">
            <h5 class="w3-opacity"><b>Exam Name : {{$cv['exam_name_2']}}</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Passing Year : {{$cv['passing_year_2']}}</h6>
            <p>Institution Name : {{$cv['institution_name_2']}}<br>Bord : {{$cv['bord_2']}}<br> Grade : {{$cv['grade_2']}}</p>
            <hr class="exam3" data-target="{{$cv['exam_name_3']}}">
          </div>
          <div class="w3-container exam3" data-target="{{$cv['exam_name_3']}}">
            <h5 class="w3-opacity"><b>Exam Name : {{$cv['exam_name_3']}}</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Passing Year : {{$cv['passing_year_3']}}</h6>
            <p>Institution Name : {{$cv['institution_name_3']}}<br>Bord : {{$cv['bord_3']}}<br> Grade : {{$cv['grade_3']}}</p>
            <hr class="exam4" data-target="{{$cv['exam_name_4']}}">
          </div>
          <div class="w3-container exam4" data-target="{{$cv['exam_name_4']}}">
            <h5 class="w3-opacity"><b>Exam Name : {{$cv['exam_name_4']}}</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Passing Year : {{$cv['passing_year_4']}}</h6>
            <p>Institution Name : {{$cv['institution_name_4']}}<br>Bord : {{$cv['bord_4']}}<br> Grade : {{$cv['grade_4']}}</p>
            <hr class="exam5" data-target="{{$cv['exam_name_5']}}">
          </div>
          <div class="w3-container exam5" data-target="{{$cv['exam_name_5']}}">
            <h5 class="w3-opacity"><b>Exam Name : {{$cv['exam_name_5']}}</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Passing Year : {{$cv['passing_year_5']}}</h6>
            <p>Institution Name : {{$cv['institution_name_5']}}<br>Bord : {{$cv['bord_5']}}<br> Grade : {{$cv['grade_5']}}</p>
          </div>
        </div>
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-plus-circle fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Extra Curriculam Activities</h2>
          <div class="w3-container">
            <p>{{$cv['extra_curriculam_activie']}}</p>
          </div>
        </div>
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-user fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>References</h2>
          <div class="w3-container">
            <p>{{$cv['reference']}}</p>
          </div>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
</div>
<br>

@endsection
@push('scripts')
<script>
  $(document).ready(function() {
    //Not Exist Work Hide
    var job1 = $('.job1').attr('data-target');
    if (job1 != null && job1 != '' && job1 != undefined) {
      $('.job1').show()
    } else {
      $('.job1').hide()
    }

    var job2 = $('.job2').attr('data-target');
    if (job2 != null && job2 != '' && job2 != undefined) {
      $('.job2').show()
    } else {
      $('.job2').hide()
    }

    var job3 = $('.job3').attr('data-target');
    if (job3 != null && job3 != '' && job3 != undefined) {
      $('.job3').show()
    } else {
      $('.job3').hide()
    }

    var job4 = $('.job4').attr('data-target');
    if (job4 != null && job4 != '' && job4 != undefined) {
      $('.job4').show()
    } else {
      $('.job4').hide()
    }
    var job5 = $('.job5').attr('data-target');
    if (job5 != null && job5 != '' && job5 != undefined) {
      $('.job5').show()
    } else {
      $('.job5').hide()
    }

    var exam1 = $('.exam1').attr('data-target');
    if (exam1 != null && exam1 != '' && exam1 != undefined) {
      $('.exam1').show()
    } else {
      $('.exam1').hide()
    }

    var exam2 = $('.exam2').attr('data-target');
    if (exam2 != null && exam2 != '' && exam2 != undefined) {
      $('.exam2').show()
    } else {
      $('.exam2').hide()
    }

    var exam3 = $('.exam3').attr('data-target');
    if (exam3 != null && exam3 != '' && exam3 != undefined) {
      $('.exam3').show()
    } else {
      $('.exam3').hide()
    }

    var exam4 = $('.exam4').attr('data-target');
    if (exam4 != null && exam4 != '' && exam4 != undefined) {
      $('.exam4').show()
    } else {
      $('.exam4').hide()
    }

    var exam5 = $('.exam5').attr('data-target');
    if (exam5 != null && exam5 != '' && exam5 != undefined) {
      $('.exam5').show()
    } else {
      $('.exam5').hide()
    }
  })
</script>
@endpush