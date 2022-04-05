<!DOCTYPE html>
<html lang="en">
<head>
    <title>Determinant of a Matrix Calculator</title>
    <link href="icon.ico" type="image" rel="icon">
    <link href="matrix_adj.css" rel="stylesheet" type="text/css">
    <link href="matrix_adj_small.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width:768px)">
    <link href="font/bootstrap-icons.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tool to compute a matrix determinant. The determinant of a square matrix M is a useful value computed from its inner elements and denoted det(M) or |M|.">
    <meta name="keywords" content="matrix inverse calculator,matrix calculator,determinant calculator,matrix rank calculator,find inverse of matrix,the determinant of identity matrix is,if determinant of a matrix a is zero then,online matrix calculator,matrices and determinants,determinant of 3x3 matrix,matrix determinant calculator,matrix calculator with steps,det a,det calculator,3x3 determinant,jacobian transformation">
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
            <div class="subframe_1"><div class="text_1">Determinant Of A Matrix</div></div>
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
                    <div class="text_1" id="result"></div>
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
        <h3>Determinant of a matrix</h3>
<p>The determinant of a matrix is a value that can be computed from the elements of a square matrix. It is used in linear algebra, calculus, and other mathematical contexts. For example, the determinant can be used to compute the inverse of a matrix or to solve a system of linear equations.</p>
<p>There are a number of methods and formulas for calculating the determinant of a matrix. The Leibniz formula and the Laplace formula are two commonly used formulas.</p>
<p><b>Determinant of a 2 &#215; 2 matrix:</b></p>
<p>The determinant of a <b><i>2 &#215; 2</i></b> matrix can be calculated using the Leibniz formula, which involves some basic arithmetic. Given matrix <b><i>A</i></b>:</p>
<table align="center"><tr><td>A = </td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>a</td><td>b</td></tr>
	<tr><td>c</td><td>d</td></tr>
</table></th><th></th></tr></table></td></tr></table>
<p>The determinant of <b><i>A</i></b> using the Leibniz formula is:</p>
<table align="center"><tr><td>|A| = </td><td><table class="matrixTable">
	<tr><td>a</td><td>b</td></tr>
	<tr><td>c</td><td>d</td></tr>
</table></td><td> = ad - bc</td></tr></table>
<p>Note that taking the determinant is typically indicated with "| |" surrounding the given matrix. Given:</p>
<table align="center"><tr><td>A = </td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>2</td><td>4</td></tr>
	<tr><td>6</td><td>8</td></tr>
</table></th><th></th></tr></table></td></tr></table>
<table align="center"><tr><td>|A| = </td><td><table class="matrixTable">
	<tr><td>2</td><td>4</td></tr>
	<tr><td>6</td><td>8</td></tr>
</table></td><td>= </td><td>2&#215;8 - 4&#215;6</td><td>= </td><td>-8</td></tr>
</table>
<p><b>Determinant of a 3 &#215; 3 matrix:</b></p>
<p>One way to calculate the determinant of a <b><i>3 &#215; 3</i></b> matrix is through the use of the Laplace formula. Both the Laplace formula and the Leibniz formula can be represented mathematically, but involve the use of notations and concepts that won't be discussed here. Below is an example of how to use the Laplace formula to compute the determinant of a <b><i>3 &#215; 3</i></b> matrix:</p>
<table align="center"><tr><td>|A| = </td><td><table class="matrixTable">
	<tr><td>a</td><td>b</td><td>c</td></tr>
	<tr><td>d</td><td>e</td><td>f</td></tr>
	<tr><td>g</td><td>h</td><td>i</td></tr>
</table></td></tr>
<tr><td align="right"> = </td><td>
<table><tr>
<td>a</td><td><table class="matrixTable"><tr><td>e</td><td>f</td></tr><tr><td>h</td><td>i</td></tr></table></td>
<td>- b</td><td><table class="matrixTable"><tr><td>d</td><td>f</td></tr><tr><td>g</td><td>i</td></tr></table></td>
<td>+ c</td><td><table class="matrixTable"><tr><td>d</td><td>e</td></tr><tr><td>g</td><td>h</td></tr></table></td>
</tr></table>
</td></tr>
</table>
<p>From this point, we can use the Leibniz formula for a <b><i>2 &#215; 2</i></b> matrix to calculate the determinant of the 2 &#215; 2 matrices, and since scalar multiplication of a matrix just involves multiplying all values of the matrix by the scalar, we can multiply the determinant of the <b><i>2 &#215; 2</i></b> by the scalar as follows:</p>
<table align="center"><tr><td>|A| = </td><td><table class="matrixTable">
	<tr><td>a</td><td>b</td><td>c</td></tr>
	<tr><td>d</td><td>e</td><td>f</td></tr>
	<tr><td>g</td><td>h</td><td>i</td></tr>
</table></td></tr>
<tr><td align="right"> = </td><td>
a(ei-fh) - b(di-fg) + c(dh-eg)
</td></tr>
</table>
<p>This can further be simplified to:</p>
<p style="text-align:center;">|A| = aei + bfg + cdh - ceg - bdi - afh</p>
<p>This is the Leibniz formula for a <b><i>3 &#215; 3</i></b> matrix.</p>
<p><b>Determinant of a 4 &#215; 4 matrix and higher:</b></p>
<p>The determinant of a <b><i>4 &#215; 4</i></b> matrix and higher can be computed in much the same way as that of a <b><i>3 &#215; 3</i></b>, using the Laplace formula or the Leibniz formula. As with the example above with <b><i>3 &#215; 3</i></b> matrices, you may notice a pattern that essentially allows you to "reduce" the given matrix into a scalar multiplied by the determinant of a matrix of reduced dimensions, i.e. a <b><i>4 &#215; 4</i></b> being reduced to a series of scalars multiplied by <b><i>3 &#215; 3</i></b> matrices, where each subsequent pair of <b><i>scalar &#215; reduced matrix</i></b> has alternating positive and negative signs (i.e. they are added or subtracted).</p>
<p>The process involves cycling through each element in the first row of the matrix. Eventually, we will end up with an expression in which each element in the first row will be multiplied by a lower-dimension (than the original) matrix. The elements of the lower-dimension matrix is determined by blocking out the row and column that the chosen scalar are a part of, and having the remaining elements comprise the lower dimension matrix. Refer to the example below for clarification.</p>
<p>Here, we first choose element <b><i>a</i></b>. The elements in blue are the scalar, <b><i>a</i></b>, and the elements that will be part of the <b><i>3 &#215; 3</i></b> matrix we need to find the determinant of:</p>
<table align="center"><tr><td>|A| = </td><td><table class="matrixTable">
	<tr><td><font color="blue">a</font></td><td><font color="red">b</font></td><td><font color="red">c</font></td><td><font color="red">d</font></td></tr>
	<tr><td><font color="red">e</font></td><td><font color="blue">f</font></td><td><font color="blue">g</font></td><td><font color="blue">h</font></td></tr>
	<tr><td><font color="red">i</font></td><td><font color="blue">j</font></td><td><font color="blue">k</font></td><td><font color="blue">l</font></td></tr>
	<tr><td><font color="red">m</font></td><td><font color="blue">n</font></td><td><font color="blue">o</font></td><td><font color="blue">p</font></td></tr>
</table></td></tr>
<tr><td align="right"> = </td><td>
<table><tr><td>a</td><td>
<table class="matrixTable">
	<tr><td>f</td><td>g</td><td>h</td></tr>
	<tr><td>j</td><td>k</td><td>l</td></tr>
	<tr><td>n</td><td>o</td><td>p</td></tr>
</table>
</td><td> - ...</td></tr></table>
</td></tr>
</table>
<p>Next, we choose element <b><i>b</i></b>:</p>
<table align="center"><tr><td><table class="matrixTable">
	<tr><td><font color="red">a</font></td><td><font color="blue">b</font></td><td><font color="red">c</font></td><td><font color="red">d</font></td></tr>
	<tr><td><font color="blue">e</font></td><td><font color="red">f</font></td><td><font color="blue">g</font></td><td><font color="blue">h</font></td></tr>
	<tr><td><font color="blue">i</font></td><td><font color="red">j</font></td><td><font color="blue">k</font></td><td><font color="blue">l</font></td></tr>
	<tr><td><font color="blue">m</font></td><td><font color="red">n</font></td><td><font color="blue">o</font></td><td><font color="blue">p</font></td></tr>
</table></td><td align="right"> &rArr; </td><td>
<table><tr><td>b</td><td>
<table class="matrixTable">
	<tr><td>e</td><td>g</td><td>h</td></tr>
	<tr><td>i</td><td>k</td><td>l</td></tr>
	<tr><td>m</td><td>o</td><td>p</td></tr>
</table>
</td></tr></table>
</td></tr>
</table>
<p>Continuing in the same manner for elements <b><i>c</i></b> and <b><i>d</i></b>, and alternating the sign (+ - + - ...) of each term:</p>
<table align="center"><tr><td><table><tr><td>|A| = </td><td><table class="matrixTable">
	<tr><td>a</td><td>b</td><td>c</td><td>d</td></tr>
	<tr><td>e</td><td>f</td><td>g</td><td>h</td></tr>
	<tr><td>i</td><td>j</td><td>k</td><td>l</td></tr>
	<tr><td>m</td><td>n</td><td>o</td><td>p</td></tr>
</table></td></tr></table></td></tr>
<tr><td><table><tr><td>= 
a</td><td><table class="matrixTable">
	<tr><td>f</td><td>g</td><td>h</td></tr>
	<tr><td>j</td><td>k</td><td>l</td></tr>
	<tr><td>n</td><td>o</td><td>p</td></tr>
</table></td>
<td> - b</td><td><table class="matrixTable">
	<tr><td>e</td><td>g</td><td>h</td></tr>
	<tr><td>i</td><td>k</td><td>l</td></tr>
	<tr><td>m</td><td>o</td><td>p</td></tr>
</table></td>
<td> + c</td><td><table class="matrixTable">
	<tr><td>e</td><td>f</td><td>h</td></tr>
	<tr><td>i</td><td>j</td><td>l</td></tr>
	<tr><td>m</td><td>n</td><td>p</td></tr>
</table></td>
<td> - d</td><td><table class="matrixTable">
	<tr><td>e</td><td>f</td><td>g</td></tr>
	<tr><td>i</td><td>j</td><td>k</td></tr>
	<tr><td>m</td><td>n</td><td>o</td></tr>
</table></td>
</tr></table>
</td></tr></table>
<p>We continue the process as we would a <b><i>3 &#215; 3</i></b> matrix (shown above), until we have reduced the <b><i>4 &#215; 4</i></b> matrix to a scalar multiplied by a <b><i>2 &#215; 2</i></b> matrix, which we can calculate the determinant of using Leibniz's formula. As can be seen, this gets tedious very quickly, but it is a method that can be used for <b><i>n &#215; n</i></b> matrices once you have an understanding of the pattern. There are other ways to compute the determinant of a matrix that can be more efficient, but require an understanding of other mathematical concepts and notations.</p>
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
    <script src="matrix_det.js"></script>
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