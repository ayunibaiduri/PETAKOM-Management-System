@extends('ManageElection/electionlayout')
@section('content') 
<body>

<h2>COMMITEE ELECTION</h2>
<br><br>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <a href="apply_election">
      <div class="menuimage">
        <img src="{{URL::asset('/image/menu2.jpg')}}"  style="width:350px;height:150px;">
        <h3 class="menutext">
            APPLY FOR ELECTION
        </h3></a>
      </div></div>

      <div class="col-md-4">
      <a href="approve_application">
      <div class="menuimage">
        <img src="{{URL::asset('/image/menu3.jpg')}}" style="width:350px;height:150px;">
        <h3 class="menutext" >
           APPROVE CANDIDATES APPLICATION
        </h3></a>
      </div></div>

      <div class="col-md-4">
      <a href="viewapplicationstatus">
      <div class="menuimage">
        <img src="{{URL::asset('/image/menu2.jpg')}}" style="width:350px;height:150px;">
          <h3 class="menutext">
            VIEW APPLICATION STATUS
          </h3></a>
      </div></div>    
    </div>  
  </div>
</div>

<br><br><br>

<div class="container">
  <div class="row">
    <div class="col-md-4">
    <a href="viewcandidates">
      <div class="menuimage">        
        <img src="{{URL::asset('/image/menu3.jpg')}}" style="width:350px;height:150px;">
        <h3 class="menutext">
            VIEW CANDIDATES 
        </h3></a>
      </div></div>

      <div class="col-md-4">       
      <a  href="viewpetakomcommittee">
      <div class="menuimage">
        <img src="{{URL::asset('/image/menu2.jpg')}}" style="width:350px;height:150px;">
        <h3 class="menutext">
           VIEW PETAKOM COMMITTEE
        </h3></a>
      </div></div>

      <div class="col-md-4">       
      <a href="manageresultselection">
      <div class="menuimage">
        <img src="{{URL::asset('/image/menu3.jpg')}}" style="width:350px;height:150px;">
          <h3 class="menutext" >
            MANAGE RESULTS OF ELECTION
          </h3></a> 
      </div></div> 
    </div>  
  </div>
</div></body>

@endsection