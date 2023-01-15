<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PETAKOM Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

<style>
 /** Define the margins of your page **/
 @page {
                margin: 100px 25px;
}

header {
  background-color: #04ada5;
  padding: 60px;
  text-align: center;
  font-size: 35px;
  color: white;
}
nav {
  float: left;
  width: 100%;
  height: 50px;
  background: #04ada5;
  padding: 20px;
  font-size: 25px;
  
}
footer{
  width: 100%;
  height: 50px; 
  background: #04ada5;
  position:absolute;
  bottom: -450px;
  text-align: center;
  font-size: 25px;
  color: white;
}

.bg-image{
  margin: 0%;
  position: relative;           
}
  
.bg-text {
  position: absolute;
  top: 15px;
  left: 400px;
  font-size: 50px;
  color: white;
}
</style>

<body>
<header>
  <img src="{{URL::asset('/image/logoUMP.png')}}" alt="LOGOUMP" height="180" width="330" style="float:left">
  <img src="{{URL::asset('/image/logoPETAKOM-removebg.png')}}" alt="LOGOPETAKOM" height="180" width="220" style="float:right">
  <h1>PETAKOM MANAGEMENT SYSTEM</h1>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</header> 
  <br><br>
  
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MANAGE PROPOSAL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MANAGE ACTIVITY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="electionCommittee">ELECTION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BULLETIN</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>

<br><br>
<div class="bg-image">
        <img src="{{URL::asset('/image/backgroundump.jpg')}}" style="width:1302px;height:800px;">
        <h3 class="bg-text">
        WELCOME TO PETAKOM MANAGEMENT SYSTEM
        </h3>
</div>
<footer>
  --- Double Dot Sdn. Bhd. --- Copyright © <?php echo date("Y");?> ---
</footer>
</body>
</html>