<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adjoint of a Matrix Calculator</title>
    <link href="icon.ico" type="image" rel="icon">
    <link href="matrix_adj.css" rel="stylesheet" type="text/css">
    <link href="matrix_adj_small.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width:768px)">
    <link href="font/bootstrap-icons.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tool to compute an Adjoint Matrix for a square matrix. Adjoint/Adjugate/Adjacency Matrix is name given to the transpose of the cofactors matrix...">
    <meta name="keywords" content="cofactor of a matrix,adjoint of 2x2 matrix,adj matrix,adjoint matrix calculator,adjoint of a matrix 3x3,adjoint of matrix 2x2,adjoint of a matrix formula,find the adjoint of the matrix,adjoint of 3x3 matrix,find adjoint of a matrix,adj of 2x2 matrix,cofactor matrix 2x2,cofactor matrix 3x3,cofactor matrix calculator,adjugate matrix calculator,adj matrix calculator,adjugate calculator,adjoint of 3 by 3 matrix,find cofactor matrix">
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
    <div class="main_frame">
        <div class="frame_1"></div>
        <div class="frame_2">
            <div class="subframe_1"><div class="text_1">Adjoint Of A Matrix</div></div>
            <div class="subframe_2">
                <div class="subsub1">
                <div class="text_0">
                    <div class="select1">
                    <select class="form-control" id="selectRow" onchange="construct()">
                        <option value="row">Row</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select></div>
                    <div class="select1">
                     x 
                    </div>
                    <div class="select1">
                    <select class="form-control" id="selectColumn" disabled>
                        <option value="column">Column</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                    </div>
                </div>
                </div>
                <div class="subsub2">
                    <div class="text_0">
                        Result
                    </div>
                </div>
            </div>
            <div class="subframe_3">
                <div class="mat1">
                    <div class="submat2">
                    <div class="matrix1" id="matrix_1"></div>
                    </div>
                </div>
                <div class="mat2">
                <div class="submat1">
                        <div class="text_1">Result</div>
                    </div>
                    <div class="submat2">
                    <div class="matrix1" id="matrix_2"></div>
                    </div>
                </div>
            </div>
            <div class="subframe_4">
            <div class="text_1"><button type="button" class="btn btn-success" style="width:200px;height:50px;font-size:20px;" onclick="calculate()">Calculate</button></div>
            </div>
        </div>
    </div>
    <div class="card text-center mt-5">
        <div class="card-header">
            Ads
        </div>
        <div class="card-body" style="overflow-x:auto;">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8017005562602175"
     crossorigin="anonymous"></script>
<!-- Navin -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8017005562602175"
     data-ad-slot="6591883726"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 item">
                        <h3>Matrix Calculator</h3>
                        <a href="matrix_add.php" class="list-group-item list-group-item-action">Addition Of Matrices</a>
                        <a href="matrix_sub.php" class="list-group-item list-group-item-action">Subtraction Of Matrices</a>
                        <a href="matrix_mul.php" class="list-group-item list-group-item-action">Multiplication Of Matrices</a>
                        <a href="matrix_adj.php" class="list-group-item list-group-item-action">Adjoint Of A Matrix</a>
                        <a href="matrix_tra.php" class="list-group-item list-group-item-action">Transpose Of A Matrix</a>
                        <a href="matrix_inv.php" class="list-group-item list-group-item-action">Inverse Of A Matrix</a>
                        <a href="matrix_det.php" class="list-group-item list-group-item-action">Determinant Of A Matrix</a>
                        <a href="matrix_pow.php" class="list-group-item list-group-item-action">Power Of A Matrix</a>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Unit Conversion</h3>
                        <a href="convert_len.php" class="list-group-item list-group-item-action">Length Conversion</a>
                        <a href="convert_temp.php" class="list-group-item list-group-item-action">Temperature Conversion</a>
                        <a href="convert_area.php" class="list-group-item list-group-item-action">Area Conversion</a>
                        <a href="convert_data.php" class="list-group-item list-group-item-action">Data Conversion</a>
                        <a href="convert_wei.php" class="list-group-item list-group-item-action">Weight Conversion</a>
                        <a href="convert_time.php" class="list-group-item list-group-item-action">Time Conversion</a>
                        <a href="angle_clock.php" class="list-group-item list-group-item-action">Angle B/w Hour & Minute</a>
                        <a href="age_calculator.php"class="list-group-item list-group-item-action">Age Calculator</a>
                    </div>
                </div>
                <p class="copyright">Hybrid Calculator © 2021</p>
            </div>
        </footer>
    <script src="matrix_adj.js"></script>
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