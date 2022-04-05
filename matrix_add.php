<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Addition Calculator</title>
    <link href="icon.ico" type="image" rel="icon">
    <link href="matrix_add.css" rel="stylesheet" type="text/css">
    <link href="matrix_add_small.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width:768px)">
    <link href="font/bootstrap-icons.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Matrix addition. World's simplest math tool. Free online matrix adder. Just enter two matrices and you'll automatically get a sum of ">
    <meta name="keywords" content="two matrices a and b are added if,matrix addition in python,we can add two matrices having,addition of two matrix,addition of matrix example,adding two matrices,sum of two matrices,matrix addition in python user input,matrix addition example,add two matrices in python,addition of 2 matrix,matrix addition online,addition of a matrix,addition of matrix definition">
    <meta name="author" content="Navin Shahi">
    <style>
        .matrixTable{border-spacing: 0px;border-collapse: separate;border-left: 1px solid black;border-right: 1px solid black;}
        .matrixTable th{padding:0px;}
        .matrixTable th:nth-child(1){border-top: 1px solid black;border-bottom: 1px solid black;width:3px;}
        .matrixTable th:nth-child(3){border-top: 1px solid black;border-bottom: 1px solid black;width:3px;}
        .matrixTable td{padding: 0px 5px;text-align:right;}
    </style>
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
            <div class="subframe_1"><div class="text_1">Addition Of Matrices</div></div>
            <div class="subframe_2">
                <div class="subsub1">
                    <div class="text_1">Select no. of rows and columns :</div>
                </div>
                <div class="subsub2">
                    <div class="text_1">
                    <div class="select1">
                    <select class="form-control" id="selectRow" onchange="construct()">
                        <option value="row">Row</option>
                        <option value="1">1</option>
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
                    <select class="form-control" id="selectColumn" onchange="construct()">
                        <option value="column">Column</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select></div>
                    </div>
                </div>
            </div>
            <div class="subframe_3">
                <div class="mat1">
                    <div class="submat1">
                        <div class="text_1">Matrix - 1</div>
                    </div>
                    <div class="submat2">
                    <div class="matrix1" id="matrix_1"></div>
                    </div>
                </div>
                <div class="mat2">
                    <div class="submat1">
                        <div class="text_1">Matrix - 2</div>
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
    <div class="main_frame1" id="second_frame">
        <div class="frame_3"></div>
        <div class="frame_4">
            <div class="subframe5">
                <div class="text_1">Result</div>
            </div>
            <div class="subframe6">
            <div class="matrix1" id="result"></div>
            </div>
            <div class="subframe7"><div class="text_1"><button type="button" class="btn btn-success" style="width:auto;height:40px;font-size:auto;" onclick="further()">Calculate further with this result</button></div></div>
        </div>
    </div>
    <div class="card text-center mt-5">
  <div class="card-header">
    Ads
  </div>
  <div class="card-body" style="overflow-x:auto;">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8017005562602175"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-8017005562602175"
     data-ad-slot="4047659941"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
  </div>
</div>
    <div class="container-fluid border mt-5 pt-2 mb-5 pb-1">
    <h3>Matrix addition</h3>
<p>Matrix addition can only be performed on matrices of the same size. This means that you can only add matrices if both matrices are <b><i>m &#215; n</i></b>. For example, you can add two or more <b><i>3 &#215; 3, 1 &#215; 2</i></b>, or <b><i>5 &#215; 4</i></b> matrices. You cannot add a <b><i>2 &#215; 3</i></b> and a <b><i>3 &#215; 2</i></b> matrix, a <b><i>4 &#215; 4</i></b> and a <b><i>3 &#215; 3</i></b>, etc. The number of rows and columns of all the matrices being added must exactly match.</p>
<p>If the matrices are the same size, matrix addition is performed by adding the corresponding elements in the matrices. For example, given two matrices, <b><i>A</i></b> and <b><i>B</i></b>, with elements <b><i>a<sub>i,j</sub></i></b>, and <b><i>b<sub>i,j</sub></i></b>, the matrices are added by adding each element, then placing the result in a new matrix, <b><i>C</i></b>, in the corresponding position in the matrix:</p>
<table align="center"><tr><td>A =</td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>1</td><td>2</td></tr>
	<tr><td>3</td><td>4</td></tr>
</table></th><th></th></tr></table></td><td>; B =</td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>5</td><td>6</td></tr>
	<tr><td>7</td><td>8</td></tr>
</table></th><th></th></tr></table></td></tr></table>
<p>In the above matrices, <b><i>a<sub>1,1</sub> = 1</i></b>; <b><i>a<sub>1,2</sub> = 2</i></b>; <b><i>b<sub>1,1</sub> = 5</i></b>; <b><i>b<sub>1,2</sub> = 6</i></b>; etc. We add the corresponding elements to obtain <b><i>c<sub>i,j</sub></i></b>. Adding the values in the corresponding rows and columns:</p>
<table align="center"><tr><td>a<sub>1,1</sub> + b<sub>1,1</sub> = 1 + 5 = 6 = c<sub>1,1</sub></td></tr>
<tr><td>a<sub>1,2</sub> + b<sub>1,2</sub> = 2 + 6 = 8 = c<sub>1,2</sub></td></tr>
<tr><td>a<sub>2,1</sub> + b<sub>2,1</sub> = 3 + 7 = 10 = c<sub>2,1</sub></td></tr>
<tr><td>a<sub>2,2</sub> + b<sub>2,2</sub> = 4 + 8 = 12 = c<sub>2,2</sub></td></tr></table>
<p>Thus, matrix <b><i>C</i></b> is:</p>
<table align="center"><tr><td>C =</td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>6</td><td>8</td></tr>
	<tr><td>10</td><td>12</td></tr>
</table></th><th></th></tr></table></td></tr></table></div>
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
    <script src="matrix_add.js"></script>
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