@extends('ManageElection/electionlayout')
@section('content') 

<br>

<h2>COMMITEE ELECTION (STUDENT HOMEPAGE)</h2>
<br>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <a href="apply_election">
        <div class="menuimage">
          <img src="{{URL::asset('/image/menu2.jpg')}}" style="width:350px;height:150px;">
            <h3 class="menutext">
              APPLY FOR ELECTION
            </h3></a>
        </div>
    </div>

    <div class="col-md-4">
      <a href="viewapplicationstatus">
        <div class="menuimage">
          <img src="{{URL::asset('/image/menu3.jpg')}}" style="width:350px;height:150px;">
            <h3 class="menutext">
              VIEW APPLICATION STATUS
            </h3></a>
        </div>
    </div>

    <div class="col-md-4">
      <a href="viewcandidates">
        <div class="menuimage">
          <img src="{{URL::asset('/image/menu2.jpg')}}" style="width:350px;height:150px;">
            <h3 class="menutext">
             VIEW CANDIDATES
            </h3></a> 
        </div>
    </div>   
      
  </div>
</div>

<br><br><br>

<div class="container">
  <div class="row">

    <div class="col-6">
      <a  href="vote">
        <div class="menuimage">
          <img src="{{URL::asset('/image/menu2.jpg')}}" style="width:350px;height:150px;">
            <h3 class="menutext">
             VOTE 
          </h3></a>
        </div>
    </div>

    <div class="col-6">
      <a  href="viewpetakomcommittee">
        <div class="menuimage">
          <img src="{{URL::asset('/image/menu3.jpg')}}" style="width:500px;height:150px;">
            <h3 class="menutext">
              VIEW PETAKOM COMMITTEE
            </h3></a>
        </div>
    </div>
    
      
  </div>
</div>

@endsection