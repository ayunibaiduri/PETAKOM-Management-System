@extends('ManageElection/electionlayout')
@section('content') 
<title>APPROVE CANDIDATES APPLICATION</title>

<br>
<h2>CANDIDATES LIST</h2><br>
<body>
  <div class="paddingtable">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">NO.</th>
          <th scope="col">APPLICATION FORM</th>
          <th scope="col">CATEGORY</th>
          <th scope="col">STATUS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>AHMAD</td>
          <td>President</td>
          <td><button type="button" class="btn btn-danger">PENDING</button></td>         
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>ALI</td>
          <td>Vice President</td>
          <td><button type="button" class="btn btn-danger">PENDING</button></td>         
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>ANIS</td>
          <td>Secretary</td>
          <td><button type="button" class="btn btn-info">APPROVED</button></td>         
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>ALIA</td>
          <td>Treasurer</td>
          <td><button type="button" class="btn btn-info">APPROVED</button></td>         
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>ALIMAN</td>
          <td>President</td>
          <td><button type="button" class="btn btn-info">APPROVED</button></td>         
        </tr>
       
      </tbody>
    </table>
  </div>

@endsection