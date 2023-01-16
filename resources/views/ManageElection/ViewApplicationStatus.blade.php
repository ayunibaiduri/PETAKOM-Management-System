@extends('ManageElection/electionlayout')
@section('content') 
<title>VIEW APPLICATION STATUS</title>
<br>
<h2 class="formheader">VIEW APPLICATION STATUS</h2>
<br>

<form>
  <div style="padding-left: 50px;padding-right: 50px;">
    <label for="candidatename" class="form-label">Name: </label>
    <input type="text" class="form-control" id="candidatename"> 
  </div>
  <div style="padding-left: 50px;padding-right: 50px;">
    <label for="yearofstudy" class="form-label">Year of Study: </label>
    <input type="number" class="form-control" id="yearofstudy"> 
  </div>
  <div style="padding-left: 50px;padding-right: 50px;">
    <label for="course" class="form-label">Course: </label>
    <input type="text" class="form-control" id="course"> 
  </div>

  <!--only one category for one candidate to apply for-->
  <div style="padding-left: 50px;padding-right: 50px;">
    <label for="category">Category:</label>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
              President
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
              Vice President
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
              Secretary
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
              Treasurer
          </label>
      </div>
  </div>

  <div style="padding-left: 50px;padding-right: 50px;">
    <label for="manifesto" class="form-label">Manifesto: </label>
    <input type="text" class="form-control" id="manifesto"> 
  </div>
    <div style="padding-left: 40px;padding-right: 50px;">
    <label for="picture" class="form-label">Picture: </label>
    <input class="form-control" type="file" id="picture">
  </div>
  <br>
  <div style="padding-left: 50px;padding-right: 50px;">
  <label for="STATUS" class="form-label">Status: </label>
    <button type="submit" class="btn btn-danger">PENDING</button>
  </div>
  <div style="padding-left: 50px;padding-right: 50px;">
    <button type="submit" class="btn btn-primary" style="float:right">BACK</button>
  </div>
</form>


</body>

@endsection