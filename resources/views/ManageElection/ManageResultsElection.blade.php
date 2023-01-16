@extends('ManageElection/electionlayout')
@section('content') 
<title>MANAGE ELECTION RESULTS</title>
<br>
<h2 class="formheader">MANAGE ELECTION RESULTS</h2>
<br>

<body>
<div class="category">
<div class="container">
  <div class="row">
    <div class="col-md-4">
        <h3>
           CATEGORY: PRESIDENT
        </h3>
    </div>

    <div class="col-md-4">
        <h3>
           CATEGORY: VICE PRESIDENT
        </h3>
    </div>

    <div class="col-md-4">
        <h3>
           CATEGORY: SECRETARY
        </h3>
    </div>   
</div>
</div> 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div style="padding-left: 50px;padding-right: 50px;">
        <button type="submit" class="btn btn-primary" style="float:right">UPDATE ELECTION RESULT</button>
    </div>
</div>



</body>

@endsection