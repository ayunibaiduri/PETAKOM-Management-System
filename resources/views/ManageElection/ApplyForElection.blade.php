@extends('ManageElection/electionlayout')
@section('content') 
<title>APPLY FOR ELECTION</title>
<br>
<h2 class="formheader">APPLY FOR ELECTION</h2>
<br>


  <div style="padding-left: 50px;padding-right: 50px;">

            <div class="card">
                <div class="card-header">
                    <h4>Add Application</h4>
                </div>
                <div class="card-body">

                    <!--<form method="post" action="{{url('add.store') }}">
                        @csrf-->
    <label>Name: </label>
    <input type="text" class="form-control" name="candidatename"> 
  </div>
  <div style="padding-left: 50px;padding-right: 50px;">
    <label>Year of Study: </label>
    <input type="number" class="form-control" name="yearofstudy"> 
  </div>
  <div style="padding-left: 50px;padding-right: 50px;">
    <label>Course: </label>
    <input type="text" class="form-control" name="course"> 
  </div>

  <!--only one category for one candidate to apply for-->
  <div style="padding-left: 50px;padding-right: 50px;">
    <label>Category:</label>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="category" value="President" checked>
          <label class="form-check-label" for="President">
              President
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="category" value="Vice President">
          <label class="form-check-label" for="Vice President">
              Vice President
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="category" value="Secretary">
          <label class="form-check-label" for="Secretary">
              Secretary
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="category" value="Treasurer">
          <label class="form-check-label" for="Treasurer">
              Treasurer
          </label>
      </div>
  </div>

  <div style="padding-left: 50px;padding-right: 50px;">
    <label>Manifesto: </label>
    <input type="text" class="form-control" name="manifesto"> 
  </div>
    <div style="padding-left: 40px;padding-right: 50px;">
    <label>Picture: </label>
    <input class="form-control" type="file" name="picture">
  </div>
  <br>
  <div style="padding-left: 50px;padding-right: 50px;">
    <button type="submit" class="btn btn-primary" style="float:right">SAVE</button>
  </div>
</form>



</body>

@endsection