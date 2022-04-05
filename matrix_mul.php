<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Multiplication Calculator</title>
    <link href="icon.ico" type="image" rel="icon">
    <link href="matrix_mul.css" rel="stylesheet" type="text/css">
    <link href="matrix_mul_small.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width:768px)">
    <link href="font/bootstrap-icons.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The main condition of matrix multiplication is that the number of columns of the 1st matrix must equal to the number of rows of the 2nd one. · As a result of ...">
    <meta name="keywords" content="matrix math,strassen's matrix multiplication,matrix multiplication python,matrix multiplication online,matrix multiplication rules,2x2 matrix multiplication,3x3 matrix multiplication,multiplication of two matrix,matrix multiplication,numpy matrix multiplication,dot product of matrices,multiplication formula,multiply two matrices,mathematica matrix,sparse matrix multiplication,matrix multiplication matlab,multiplying matrices">
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
            <div class="subframe_1"><div class="text_1">Multiplication Of Matrices</div></div>
            <div class="subframe_2">
                <div class="subsub1">
                <div class="text_0">
                    <div class="select1">
                    <select class="form-control" id="selectRow" onchange="construct()">
                        <option value="row">Row1</option>
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
                        <option value="column">Column1</option>
                        <option value="1">1</option>
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
                    <div class="select1">
                    <select class="form-control" id="selectRow1" disabled>
                        <option value="row">Row2</option>
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
                    <select class="form-control" id="selectColumn1" onchange="construct1()">
                        <option value="column">Column2</option>
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
        <h3>Matrix multiplication</h3>
<p><b>Scalar multiplication:</b></p>
<p>Matrices can be multiplied by a scalar value by multiplying each element in the matrix by the scalar. For example, given a matrix <b><i>A</i></b> and a scalar <b><i>c</i></b>:</p>
<table align="center"><tr><td>A =</td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>1</td><td>2</td></tr>
	<tr><td>3</td><td>4</td></tr>
</table></th><th></th></tr></table></td><td>; c = 5</td></tr></table>
<p>The product of <b><i>c</i></b> and <b><i>A</i></b> is:</p>
<table align="center"><tr><td>5 &#215;</td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>1</td><td>2</td></tr>
	<tr><td>3</td><td>4</td></tr>
</table></th><th></th></tr></table></td><td>=</td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>5</td><td>10</td></tr>
	<tr><td>15</td><td>20</td></tr>
</table></th><th></th></tr></table></td></tr></table>
<p><b>Matrix-matrix multiplication:</b></p>
<p>Multiplying two (or more) matrices is more involved than multiplying by a scalar. In order to multiply two matrices, the number of columns in the first matrix must match the number of rows in the second matrix. For example, you can multiply a <b><i>2 &#215; <font color="blue">3</font></i></b> matrix by a <b><i><font color="blue">3</font> &#215; 4</i></b> matrix, but not a <b><i>2 &#215; <font color="red">3</font></i></b> matrix by a <b><i><font color="red">4</font> &#215; 3</i></b>.</p>
<p>Can be multiplied:</p>
<table align="center"><tr><td>A = </td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td><font color="blue">a<sub>1,1</sub></font></td><td><font color="blue">a<sub>1,2</sub></font></td><td><font color="blue">a<sub>1,3</sub></font></td></tr>
	<tr><td>a<sub>2,1</sub></td><td>a<sub>2,2</sub></td><td>a<sub>2,3</sub></td></tr>
</table></th><th></th></tr></table></td>
<td>;	 B =</td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td><font color="blue">b<sub>1,1</sub></font></td><td>b<sub>1,2</sub></td><td>b<sub>1,3</sub></td><td>b<sub>1,4</sub></td></tr>
	<tr><td><font color="blue">b<sub>2,1</sub></font></td><td>b<sub>2,2</sub></td><td>b<sub>2,3</sub></td><td>b<sub>2,4</sub></td></tr>
	<tr><td><font color="blue">b<sub>3,1</sub></font></td><td>b<sub>3,2</sub></td><td>b<sub>3,3</sub></td><td>b<sub>3,4</sub></td></tr>
</table></th><th></th></tr></table></td></tr></table>
<p>Cannot be multiplied:</p>
<table align="center"><tr><td>A = </td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td><font color="red">a<sub>1,1</sub></font></td><td><font color="red">a<sub>1,2</sub></font></td><td><font color="red">a<sub>1,3</sub></font></td></tr>
	<tr><td>a<sub>2,1</sub></td><td>a<sub>2,2</sub></td><td>a<sub>2,3</sub></td></tr>
</table></th><th></th></tr></table></td>
<td>;	 B =</td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td><font color="red">b<sub>1,1</sub></font></td><td>b<sub>1,2</sub></td><td>b<sub>1,3</sub></td></tr>
	<tr><td><font color="red">b<sub>2,1</sub></font></td><td>b<sub>2,2</sub></td><td>b<sub>2,3</sub></td></tr>
	<tr><td><font color="red">b<sub>3,1</sub></font></td><td>b<sub>3,2</sub></td><td>b<sub>3,3</sub></td></tr>
	<tr><td><font color="red">b<sub>4,1</sub></font></td><td>b<sub>4,2</sub></td><td>b<sub>4,3</sub></td></tr>
</table></th><th></th></tr></table></td></tr></table>
<p>Note that when multiplying matrices, <b><i>A &#215; B</i></b> does not necessarily equal <b><i>B &#215; A</i></b>. In fact, just because <b><i>A</i></b> can be multiplied by <b><i>B</i></b> doesn't mean that <b><i>B</i></b> can be multiplied by <b><i>A</i></b>.</p>
<p>If the matrices are the correct sizes, and can be multiplied, matrices are multiplied by performing what is known as the dot product. The dot product involves multiplying the corresponding elements in the row of the first matrix, by that of the columns of the second matrix, and summing up the result, resulting in a single value. The dot product can only be performed on sequences of equal lengths. This is why the number of columns in the first matrix must match the number of rows of the second.</p>
<p>The dot product then becomes the value in the corresponding row and column of the new matrix, <b><i>C</i></b>. For example, from the section above of matrices that can be multiplied, the blue row in <b><i>A</i></b> is multiplied by the blue column in <b><i>B</i></b> to determine the value in the first column of the first row of matrix <b><i>C</i></b>. This is referred to as the dot product of row 1 of <b><i>A</i></b> and column 1 of <b><i>B</i></b>:</p>
<p style="text-align:center;">a<sub>1,1</sub>&#215;b<sub>1,1</sub> + a<sub>1,2</sub>&#215;b<sub>2,1</sub> + a<sub>1,3</sub>&#215;b<sub>3,1</sub> = c<sub>1,1</sub></p>
<p>The dot product is performed for each row of <b><i>A</i></b> and each column of <b><i>B</i></b> until all combinations of the two are complete in order to find the value of the corresponding elements in matrix <b><i>C</i></b>. For example, when you perform the dot product of row 1 of <b><i>A</i></b> and column 1 of <b><i>B</i></b>, the result will be <b><i>c<sub>1,1</sub></i></b> of matrix <b><i>C</i></b>. The dot product of row 1 of <b><i>A</i></b> and column 2 of <b><i>B</i></b> will be <b><i>c<sub>1,2</sub></i></b> of matrix <b><i>C</i></b>, and so on, as shown in the example below:</p>
<table align="center"><tr><td>A = </td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>1</td><td>2</td><td>1</td></tr>
	<tr><td>3</td><td>4</td><td>1</td></tr>
</table></th><th></th></tr></table></td><td>; B =</td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>5</td><td>6</td><td>1</td><td>1</td></tr>
	<tr><td>7</td><td>8</td><td>1</td><td>1</td></tr>
	<tr><td>1</td><td>1</td><td>1</td><td>1</td></tr>
</table></th><th></th></tr></table></td></tr></table>
<p>When multiplying two matrices, the resulting matrix will have the same number of rows as the first matrix, in this case <b><i>A</i></b>, and the same number of columns as the second matrix, <b><i>B</i></b>. Since <b><i>A</i></b> is <b><i><font color="purple">2</font> &#215; <font color="green">3</font></i></b> and <b><i>B</i></b> is <b><i><font color="green">3</font> &#215; <font color="blue">4</font></i></b>, <b><i>C</i></b> will be a <b><i><font color="purple">2</font> &#215; <font color="blue">4</font></i></b> matrix. The colors here can help determine first, whether two matrices can be multiplied, and second, the dimensions of the resulting matrix. Next, we can determine the element values of <b><i>C</i></b> by performing the dot products of each row and column, as shown below:</p>
<table align="center"><tr><td>C = </td><td><table class="matrixTable"><tr><th></th><th><table>
	<tr><td>20</td><td>23</td><td>4</td><td>4</td></tr>
	<tr><td>44</td><td>51</td><td>8</td><td>8</td></tr>
</table></th><th></th></tr></table></td></tr></table>
<p>Below, the calculation of the dot product for each row and column of <b><i>C</i></b> is shown:</p>
<table align="center"><tr><td>c<sub>1,1</sub> = 1&#215;5 + 2&#215;7 + 1&#215;1 = 20</td></tr>
<tr><td>c<sub>1,2</sub> = 1&#215;6 + 2&#215;8 + 1&#215;1 = 23</td></tr>
<tr><td>c<sub>1,3</sub> = 1&#215;1 + 2&#215;1 + 1&#215;1 = 4</td></tr>
<tr><td>c<sub>1,4</sub> = 1&#215;1 + 2&#215;1 + 1&#215;1 = 4</td></tr>
<tr><td>c<sub>2,1</sub> = 3&#215;5 + 4&#215;7 + 1&#215;1 = 44</td></tr>
<tr><td>c<sub>2,2</sub> = 3&#215;6 + 4&#215;8 + 1&#215;1 = 51</td></tr>
<tr><td>c<sub>2,3</sub> = 3&#215;1 + 4&#215;1 + 1&#215;1 = 8</td></tr>
<tr><td>c<sub>2,4</sub> = 3&#215;1 + 4&#215;1 + 1&#215;1 = 8</td></tr></table>
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
    <script src="matrix_mul.js"></script>
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