
<!DOCTYPE html>
<html lang="en">
<head>
<title>iitp-tpc</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>IIT Patna TPC</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="stud_login\index.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Student</a> 
    <a href="company\c_login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Company</a> 
    <a href="alumni\login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Alumni</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Packages</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">&#9776;</a>
  <span>IIT Patna TPC</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Training and Placement Cell</b></h1>
    <img src="/iitp2.png" style="width:100%" onclick="onClick(this)" alt="">
   
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>About Us</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>The Indian Institute of Technology Patna epitomizes and reveres this limitless power in every way of its life and functioning. Established as an institute of national importance through an act of parliament in 2008,
       IIT Patna strives to provide world class education and an intellectually stimulating environment in an endeavor to develop well rounded individuals with technical and professional competence of the highest degree.</p>
    <p>The Training and Placement Cell of the institute handles all aspects of placements at IIT Patna for the graduating students of all departments. Right from contacting companies to managing all logistics of arranging for tests, 
      pre-placement talks and conducting final interviews the Training and Placement Cell officials and volunteers provide their best possible assistance to the recruiters.
    </p>
  </div>
  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Director's Message</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>The Indian Institute of Technology Patna is one of the new IITs established by an Act of the Indian Parliament on 
      August 6, 2008 and is recognized as an Institute of National Importance by the Government of India. Currently, IIT Patna
       has ten departments which offer B.Tech., M.Tech., M.Sc., and Ph.D. programs. Since its inception, IIT Patna has pursued 
       excellence with steadfast determination. The Institute has developed modern facilities that are fully equipped with state-of-the-art 
       facilities that are routinely used to train and educate students. Also, we keep our curriculum updated and provide ample extra-curricular opportunities for the students. As a result, our students excel both in knowledge and leadership skills.</p>
    <p>Patna has been a center of knowledge and a land of visionaries since long and has been attracting visitors and scholars from many parts of the world. Some of the legends from this region include Lord Gautam Buddha, Lord Mahavir, Guru Gobind Singh, the famous astronomer Aryabhatta, and the first President of India, Dr. Rajendra Prasad. IIT Patna strives to carry the baton passed through these visionaries to become a beacon of knowledge and wisdom.
    </p>
    <p><b>Prof. T.N. Singh,
Director, Indian Institute of Technology Patna</b>:</p>
  </div>

 
<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.iitp.ac.in" title="IITP" target="_blank" class="w3-hover-opacity">IITP</a></p>
<p class="w3-left">Login for DBA.Click <a href="dba\dba_login.html">here</a>
</p>
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}


</script>

</body>
</html>
