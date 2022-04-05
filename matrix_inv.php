<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inverse of a Matrix Calculator</title>
    <link href="icon.ico" type="image" rel="icon">
    <link href="matrix_adj.css" rel="stylesheet" type="text/css">
    <link href="matrix_adj_small.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width:768px)">
    <link href="font/bootstrap-icons.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Here you can calculate inverse matrix with decimal numbers online for free.">
    <meta name="keywords" content="inverses,inverse of 2x2 matrix,inverse of 3x3 matrix,find the inverse of the matrix,inverse matrix formula,a inverse formula,the inverse of a symmetric matrix is,multiplicative inverse of 5,inverse formula,inverse matrix matlab,inverse of symmetric matrix,inverse of identity matrix,pseudo inverse,inverse online,moore penrose inverse,inverse of diagonal matrix,inverse matrix numpy,inverse of a 4x4 matrix">
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
            <div class="subframe_1"><div class="text_1">Inverse Of A Matrix</div></div>
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
        <h3>Inverse of a matrix</h3>
<p>The inverse of a matrix <b><i>A</i></b> is denoted as <b><i>A<sup>-1</sup></i></b>, where <b><i>A<sup>-1</sup></i></b> is the inverse of <b><i>A</i></b> if the following is true:</p>
<p style="text-align:center;">A&#215;A<sup>-1</sup> = A<sup>-1</sup>&#215;A = I, where <b><i>I</i></b> is the identity matrix</p>
<p><b>Identity matrix:</b></p>
<p>The identity matrix is a square matrix with "1" across its diagonal, and "0" everywhere else. The identity matrix is the matrix equivalent of the number "1." For example, the number 1 multiplied by any number <b><i>n</i></b> equals <b><i>n</i></b>. The same is true of an identity matrix multiplied by a matrix of the same size: <b><i>A &#215; I = A</i></b>. Note that an identity matrix can have any square dimensions. For example, all of the matrices below are identity matrices. From left to right respectively, the matrices below are a <b><i>2 &#215; 2</i></b>, <b><i>3 &#215; 3</i></b>, and <b><i>4 &#215; 4</i></b> identity matrix:</p>
<table align="center"><tr><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>1</td><td>0</td></tr>
	<tr><td>0</td><td>1</td></tr>
</table></th><th></th></tr></table></td><td>; &nbsp;</td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>1</td><td>0</td><td>0</td></tr>
	<tr><td>0</td><td>1</td><td>0</td></tr>
	<tr><td>0</td><td>0</td><td>1</td></tr>
</table></th><th></th></tr></table></td><td>; &nbsp;</td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>1</td><td>0</td><td>0</td><td>0</td></tr>
	<tr><td>0</td><td>1</td><td>0</td><td>0</td></tr>
	<tr><td>0</td><td>0</td><td>1</td><td>0</td></tr>
	<tr><td>0</td><td>0</td><td>0</td><td>1</td></tr>
</table></th><th></th></tr></table></td><td>...</td></tr></table>
<p>The <b><i>n &#215; n</i></b> identity matrix is thus:</p>
<table align="center"><tr><td>I<sub>n</sub> = </td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>1</td><td>0</td><td>0</td><td>...</td><td>0</td></tr>
	<tr><td>0</td><td>1</td><td>0</td><td>...</td><td>0</td></tr>
	<tr><td>0</td><td>0</td><td>1</td><td>...</td><td>0</td></tr>
	<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
	<tr><td>0</td><td>0</td><td>0</td><td>...</td><td>1</td></tr>
</table></th><th></th></tr></table></td></tr></table>
<p><b>Inverse of a 2 &#215; 2 matrix:</b></p>
<p>To invert a <b><i>2 &#215; 2</i></b> matrix, the following equation can be used:</p>
<table align="center"><tr><td>A<sup>-1</sup> =</td><td><table><tr><td style="padding-top:6px;"><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>a</td><td>b</td></tr>
	<tr><td>c</td><td>d</td></tr>
</table></th><th></th></tr></table></td><td valign="top"><sup>-1</sup></td></tr></table></td>
</tr><tr><td align="right">=</td>
<td><table cellpadding="0" cellspacing="0"><tr><td align="center">1</td><td rowspan="3">&nbsp;</td><td rowspan="3"><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>d</td><td>-b</td></tr>
	<tr><td>-c</td><td>a</td></tr>
</table></th><th></th></tr></table></td></tr><tr><td height="1" bgcolor="#000000"></td></tr><tr><td>det(A)</td></tr></table></td>
</tr><tr><td align="right">=</td>
<td><table cellpadding="0" cellspacing="0"><tr><td align="center">1</td><td rowspan="3">&nbsp;</td><td rowspan="3"><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>d</td><td>-b</td></tr>
	<tr><td>-c</td><td>a</td></tr>
</table></th><th></th></tr></table></td></tr><tr><td height="1" bgcolor="#000000"></td></tr><tr><td>ad - bc</td></tr></table></td>
</tr></table>
<p>For example, given:</p>
<table align="center"><tr><td>A =</td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>2</td><td>4</td></tr>
	<tr><td>3</td><td>7</td></tr>
</table></th><th></th></tr></table></td></tr></table>
<table align="center"><tr><td>A<sup>-1</sup> =</td>
<td><table cellpadding="0" cellspacing="0"><tr><td align="center">1</td><td rowspan="3">&nbsp;</td><td rowspan="3"><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>7</td><td>-4</td></tr>
	<tr><td>-3</td><td>2</td></tr>
</table></th><th></th></tr></table></td></tr><tr><td height="1" bgcolor="#000000"></td></tr><tr><td>2&#215;7 - 4&#215;3</td></tr></table></td>
</tr><tr><td align="right">=</td>
<td><table cellpadding="0" cellspacing="0"><tr><td align="center">1</td><td rowspan="3">&nbsp;</td><td rowspan="3"><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>7</td><td>-4</td></tr>
	<tr><td>-3</td><td>2</td></tr>
</table></th><th></th></tr></table></td></tr><tr><td height="1" bgcolor="#000000"></td></tr><tr><td>2</td></tr></table></td>
</tr><tr><td align="right">=</td>
<td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>3.5</td><td>-2</td></tr>
	<tr><td>-1.5</td><td>1</td></tr>
</table></th><th></th></tr></table></td>
</tr></table>
<p>If you were to test that this is, in fact, the inverse of <b><i>A</i></b> you would find that both:</p>
<table align="center"><tr><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>2</td><td>4</td></tr>
	<tr><td>3</td><td>7</td></tr>
</table></th><th></th></tr></table></td><td>&#215;</td>
<td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>3.5</td><td>-2</td></tr>
	<tr><td>-1.5</td><td>1</td></tr>
</table></th><th></th></tr></table></td>
<td>and</td>
<td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>3.5</td><td>-2</td></tr>
	<tr><td>-1.5</td><td>1</td></tr>
</table></th><th></th></tr></table></td><td>&#215;</td>
<td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>2</td><td>4</td></tr>
	<tr><td>3</td><td>7</td></tr>
</table></th><th></th></tr></table></td>
</tr></table>
<p>are equal to the identity matrix:</p>
<table align="center"><tr><td>I =</td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>1</td><td>0</td></tr>
	<tr><td>0</td><td>1</td></tr>
</table></th><th></th></tr></table></td></tr></table>
<p><b>Inverse of a 3 &#215; 3 matrix:</b></p>
<p>The inverse of a <b><i>3 &#215; 3</i></b> matrix is more tedious to compute. An equation for doing so is provided below, but will not be computed. Given:</p>
<table align="center"><tr><td>M =</td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>a</td><td>b</td><td>c</td></tr>
	<tr><td>d</td><td>e</td><td>f</td></tr>
	<tr><td>g</td><td>h</td><td>i</td></tr>
</table></th><th></th></tr></table></td></tr></table>
<table align="center"><tr><td>M<sup>-1</sup> =</td><td><table><tr><td><table cellpadding="0" cellspacing="0"><tr><td align="center">1</td></td></tr><tr><td height="1" bgcolor="#000000"></td></tr><tr><td>det(M)</td></tr></table></td><td style="padding-top:6px;"><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>A</td><td>B</td><td>C</td></tr>
	<tr><td>D</td><td>E</td><td>F</td></tr>
	<tr><td>G</td><td>H</td><td>I</td></tr>
</table></th><th></th></tr></table></td><td valign="top"><sup>T</sup></td></tr></table></td>
</tr><tr><td align="right">=</td>
<td><table><tr><td><table cellpadding="0" cellspacing="0"><tr><td align="center">1</td></td></tr><tr><td height="1" bgcolor="#000000"></td></tr><tr><td>det(M)</td></tr></table></td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>A</td><td>D</td><td>G</td></tr>
	<tr><td>B</td><td>E</td><td>H</td></tr>
	<tr><td>C</td><td>F</td><td>I</td></tr>
</table></th><th></th></tr></table></td></tr></table></td>
</tr></table>
<p>where:</p>
<p style="text-align:center;"><b>A</b>=ei-fh; <b>B</b>=-(di-fg); <b>C</b>=dh-eg
<b>D</b>=-(bi-ch); <b>E</b>=ai-cg; <b>F</b>=-(ah-bg)
<b>G</b>=bf-ce; <b>H</b>=-(af-cd); <b>I</b>=ae-bd</p>
<p><b><i>4 &#215; 4</i></b> and larger get increasingly more complicated, and there are other methods for computing them.</p>
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
    <script src="matrix_inv.js"></script>
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