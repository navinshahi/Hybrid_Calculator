<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hybrid Calculator: About Us</title>
    <link href="icon.ico" type="image" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="about.css" rel="stylesheet" type="text/css">
    <link href="about_small.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width:768px)">
    <link href="font/bootstrap-icons.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="description" content="You can calculate anything from this digital calculator. The founder of this calculator is Navin Kumar Shahi. Here you can perform Matrix Calculations, Scientific calculations, Unit conversions and many more...">
    <meta name="keywords" content="about us,about hybrid calculator,about calculator,about matrix calculator,about unit converter,about scientific calculator,hybrid calculator,calculator,all calculator,online calculator">
    <meta name="author" content="Navin Shahi">
</head>
<body style="background-color:#43e97b;">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top"> Hybrid Calculator</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 300px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house"></i> Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-calculator"></i> Calculators
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="index.php"><i class="bi bi-braces"></i> Matrix Calculator</a></li>
            <li><a class="dropdown-item" href="index.php"><i class="bi bi-arrow-left-right"></i> Unit Converter</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="basic_calc.php"><i class="bi bi-calculator-fill"></i> Scientific Calculator</a></li>
          </ul>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="https://www.mygov.in/covid-19" target="_blank"><i class="bi bi-vinyl"></i> COVID-19</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php"><i class="bi bi-telephone"></i> Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php"><i class="bi bi-person"></i> About Us</a>
        </li>
      </ul>
        <button class="btn btn-outline-primary login" type="submit">Login / SignUp</button>
    </div>
  </div>
</nav>
    <div class="box">
          <div class="box1">About Us</div>
          <div class="box2"><ul >
            <li id="list3">You can calculate anything from this digital calculator...</li><br>
            <li id="list3">The founder of this calculator is <b>'Navin Kumar Shahi'</b>.</li><br>
            <li id="list3">Here you can perform Matrix Calculations, Scientific calculations, Unit conversions and many more...
            </li><br>
            <li id="list3">Follow us on:-  <a href="https://twitter.com/NavinSh98034159" style="margin-left: 5px;" target="_blank"><img src="twitter.png" width="30" height="30"></a> <a href="https://www.youtube.com/channel/UChMO9oJx-0iLvohjcZvtbMA" style="margin-left: 5px;" target="_blank"><img src="youtube.png" width="35" height="35"></a> <a href="https://www.linkedin.com/company/hybrid-calculator/" style="margin-left: 5px;" target="_blank"><img src="linkedin.png" width="30" height="30"></a>  <a href="https://api.whatsapp.com/send?phone=916306043265&text=Give%20me%20further%20information%20about.." style="margin-left: 5px;" target="_blank"><img src="whatsapp.png" width="33" height="33"></a>
            <a href="https://www.facebook.com/HybridCalculator123/" style="margin-left: 5px;" target="_blank"><img src="facebook.png" width="33" height="33"></a>
            </li>
            </ul>
        </div>
          <div class="box3">For more enquiry: <a href="mailto:navinkumarshahi0@gmail.com" target="_blank">Email us</a></div>
        </div>
        <script type="text/javascript">
            document.addEventListener('contextmenu',  
                        event => event.preventDefault()); 
                el_down.innerHTML = "Right click disabled";
    </script>
    <button
        type="button"
        class="btn btn-danger btn-floating btn-lg"
        id="btn-back-to-top"
        >
  <i class="bi bi-arrow-up"></i>
</button>
<script type="text/javascript">
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", function(){
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
});
</script>
    </body>
    </html>