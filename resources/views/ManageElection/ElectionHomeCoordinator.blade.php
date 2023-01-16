@extends('ManageElection/electionlayout')
@section('content') 

<br><br><br>

<h2>COMMITEE ELECTION (COORDINATOR HOME PAGE)</h2>

<br><br><br>

<div class="container">
  <div class="row">
    <div class="col-md-6">
    <a href="viewcandidates">
      <div class="menuimage">
        <img src="{{URL::asset('/image/menu3.jpg')}}" style="width:350px;height:150px;">
        <h3 class="menutext">
            VIEW CANDIDATES 
        </h3></a>
      </div></div>

      <div class="col-md-6">
      <a  href="viewpetakomcommittee">
      <div class="menuimage">
        <img src="{{URL::asset('/image/menu2.jpg')}}" style="width:500px;height:150px;">
        <h3 class="menutext">
           VIEW PETAKOM COMMITTEE
        </h3></a>
      </div></div>
   
    </div>  
  </div>
</div>

@endsection