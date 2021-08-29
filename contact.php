<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>starlearn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <style>
  
    /* Add a dark background color with a little bit see-through */
.navbar {
    margin-bottom: 0;
    background-color:black ;
    border: 0;
    font-size: 15px !important;
    letter-spacing: 3px;
    opacity: 0.9;
}

/* Add a gray color to all navbar links */
.navbar li a{
font-size: 15px;
color: white !important;
}
 .navbar .navbar-brand {
    color: white !important;
	font-size: 30px;
	
}
/* Dropdown links */
.dropdown-menu {
 background-color: #f9f9f9;
 font-weight: bold;
    color: #000 !important;
	font-size: 15px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	min-width: 380px;
}

/* The active link */
.navbar-nav li.active a {
    color: #fff !important;
    background-color:#29292c !important;
}
.btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
   footer {
      background-color: black;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  } 
.container
{
background-color: black;
color:white;
}
 .padg{
   width: 500px;
  padding-left: 00cm;
  padding-top: 00cm;
  }
  .padg 2{
  
   padding-left: 50%;
   padding-top: 00cm;
   }
  .dropdown-me{
  background-color: black;
      color: #f5f5f5;
      padding: 60px;
	  }
	  
  .dropdown-he{
  letter-spacing: 3px;
  font-size: 20px;
  font-family: "Times New Roman", Times, serif;
   color: white;
   text-align: left;
   text-transform: capitalize;
    }
  
 </style>
</head>
<body>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">StarLearn</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="home3.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
	   
       
       <li class="active"><a href="#Contact"> Contact</a></li>
        </ul>
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>
<!-- Container (Contact Section) -->
<div class="container">
<div class="center-block";width:200px;">
  <h3 class="text-center">Contact</h3>
 <br>

  <div class="row">
    <div class="col-md-4">
      <p>contact us on</p>
      <p><span class="glyphicon glyphicon-envelope"></span>EMAIL: starlearnwebsite@gmail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
	   <form method="post" action="p.php">

        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required  >
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" input type="submit" name="save" value="submit"> send </button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<br><br>
<br>
<br>
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>This website is NOT official website of Maharashtra state board of technical education (MSBTE).
  This website is developed to help the student preparing diploma engineering exams under MSBTE.
  This website aims to provide the study resources such as question papers of privious years,model answers papers, simple notes,
  and some videos link related to subjects needed for preparing the exam of MSBTE.</p>
  
  <p>for the other exam related info you visit on <a href="https://msbte.org.in" data-toggle="tooltip" title="msbte.org.in">www.msbte.org.in</a></p> 
</footer>

</body>
</html>
