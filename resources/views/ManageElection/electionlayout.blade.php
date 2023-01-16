<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layout for Committee Election Management</title>
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
  
  width: 100%;
  height: 50px; 
  background: #04ada5;
  padding: 20px;
  font-size: 25px;
  
}

.menuimage{
  margin: 0%;
  position: relative;
            
}
  
.menutext {
  position: absolute;
  top: 15px;
  left: 30px;
  font-size: 35px;
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

a {
  text-align: center;
  font-size: 35px;
  color: white;
}

.formheader{
   
   width: 100%;
   height: 50px; 
   background: #04ada5;
   padding: 20px;
   text-align: center;
   font-size: 25px;
   color: white;
   
 }
 
 
.paddingtable{
  padding-left: 50px;
  padding-right: 50px;
}
.category{
        margin-left: 20px;
        background: #d9d9e3;
        height: 600px;
    }
</style>

<body>
<header>
  <img src="{{URL::asset('/image/logoUMP.png')}}" alt="LOGOUMP" height="180" width="330" style="float:left">
  <img src="{{URL::asset('/image/logoPETAKOM-removebg.png')}}" alt="LOGOPETAKOM" height="180" width="220"style="float:right">
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

            <li class="nav-item">  
              <img src="{{URL::asset('/image/searchicon.png')}}" style="width:50px;height:50px;float:right">
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <footer>
  --- Double Dot Sdn. Bhd. --- Copyright © <?php echo date("Y");?> ---
</footer>   
</body>


@yield('content')
</html>