<!DOCTYPE html>
<html lang="en">
<head>
    <title>Scientific Calculator</title>
    <link href="icon.ico" type="image" rel="icon">
    <link href="basic_calc.css" rel="stylesheet" type="text/css">
    <link href="basic_calc_small.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width:768px)">
    <link href="font/bootstrap-icons.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="basic_calc.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A beautiful, free online scientific calculator with advanced features for evaluating percentages, fractions, exponential functions, logarithms, trigonometry, statistics and many more...">
    <meta name="keywords" content="scientific notation calculator,casio calculator,scientific calculator online,casio scientific calculator,online full screen scientific calculator,sci cal,scientific calculator google,casio calculator online,scientific calculator price,scientific calculator casio online,hp 35s,casio calculator price,best scientific calculator,programmable calculator,casio fx 991 es plus,non programmable calculator,casio fx 991ms,scientific calculator online use,casio 991ex">
    <meta name="author" content="Navin Shahi">
</head>
<body>
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
    <div class="first_frame">
        <div class="subframe1"></div>
        <div class="subframe2">
            <div class="calc_screen">
                <input type="text" class="form-control" placeholder="0" name="Hybrid" id="screen" autofocus>
            </div>
            <div class="calc_key">
                <a href="#"><div class="keyboard1" onclick="fkey1()"><div class="key_text">%</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey2()"><div class="key_text">CE</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey3()"><div class="key_text"><i class="bi bi-arrow-left-circle"></i></div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey4()"><div class="key_text">.</div></div></a>
                <a href="#"><div class="keyboard2" onclick="fkey5()" id="result"><div class="key_text">=</div></div>
                <div class="keyboard3"></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey6()"><div class="key_text">sin</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey7()"><div class="key_text">cos</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey8()"><div class="key_text">tan</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey9()"><div class="key_text">7</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey10()"><div class="key_text">8</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey11()"><div class="key_text">9</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey12()"><div class="key_text">+</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey13()"><div class="key_text">2<sup>x</sup></div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey14()"><div class="key_text">ln</div></div></a>
                <div class="keyboard3"></div>
                <a href="#"><div class="keyboard4" onclick="fkey15()"><div class="key_text">cosec</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey16()"><div class="key_text">sec</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey17()"><div class="key_text">cot</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey18()"><div class="key_text">4</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey19()"><div class="key_text">5</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey20()"><div class="key_text">6</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey21()"><div class="key_text">-</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey22()"><div class="key_text">&#8730;</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey23()"><div class="key_text">1/x</div></div></a>
                <div class="keyboard3"></div>
                <a href="#"><div class="keyboard4" onclick="fkey24()"><div class="key_text">&</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey25()"><div class="key_text">|</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey26()"><div class="key_text">~</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey27()"><div class="key_text">1</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey28()"><div class="key_text">2</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey29()"><div class="key_text">3</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey30()"><div class="key_text">*</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey31()"><div class="key_text">&#8731;</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey32()"><div class="key_text">(</div></div></a>
                <div class="keyboard3"></div>
                <a href="#"><div class="keyboard4" onclick="fkey33()"><div class="key_text">bin</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey34()"><div class="key_text">dec</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey35()"><div class="key_text">>></div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey36()"><div class="key_text">^</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey37()"><div class="key_text">0</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey38()"><div class="key_text">!</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey39()"><div class="key_text">/</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey40()"><div class="key_text">e<sup>x</sup></div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey41()"><div class="key_text">)</div></div></a>
                <div class="keyboard3"></div>
                <a href="#"><div class="keyboard4" onclick="fkey42()"><div class="key_text"><<</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey43()"><div class="key_text">&#8968;x&#8969;</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey44()"><div class="key_text">&#8970;x&#8971;</div></div></a>

                <a href="#"><div class="keyboard5" onclick="fkey6()"><div class="key_text">sin</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey7()"><div class="key_text">cos</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey8()"><div class="key_text">tan</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey14()"><div class="key_text">ln</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey15()"><div class="key_text">cosec</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey16()"><div class="key_text">sec</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey17()"><div class="key_text">cot</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey24()"><div class="key_text">&</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey25()"><div class="key_text">|</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey26()"><div class="key_text">~</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey32()"><div class="key_text">(</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey33()"><div class="key_text">bin</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey34()"><div class="key_text">dec</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey35()"><div class="key_text">>></div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey41()"><div class="key_text">)</div></div></a>
        </div>
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
var inp=document.getElementById("screen");
inp.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
      console.log("hh");
    // Trigger the button element with a click
    fkey5();
  }
})
</script>
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