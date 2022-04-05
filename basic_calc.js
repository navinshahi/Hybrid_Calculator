function fkey1() {
    var input=document.getElementById("screen");
    input.value+=" % ";
}
function fkey2() {
    var input=document.getElementById("screen");
    input.value="";
}
function fkey3() {
    var input=document.getElementById("screen");
    var st=input.value;
    input.value=st.slice(0,st.length-1);
}
function fkey4() {
    var input=document.getElementById("screen");
    input.value+=".";
}
function fkey5() {
    var input=document.getElementById("screen");
    var x=input.value;
    x=x.replace('^','**');
    if(x.length==0)
    alert("First input some values..");
    else
    input.value=eval(x);
}
function fkey6() {
    var input=document.getElementById("screen");
    var st=input.value;
    if(st.length==0)
    alert("First input an angle ...");
    else{
    var x=Math.sin(parseInt(st)*(Math.PI/180));
    if(x>1)
    input.value="infinity";
    else if(x<0)
    input.value=0;
    else
    input.value=x;
    }
}
function fkey7() {
    var input=document.getElementById("screen");
    var st=input.value;
    if(st.length==0)
    alert("First input an angle ...");
    else{
    var x=Math.cos(parseInt(st)*(Math.PI/180));
    if(x>1)
    input.value="infinity";
    else if(x<0)
    input.value=0;
    else
    input.value=x;
    }
}
function fkey8() {
    var input=document.getElementById("screen");
    var st=input.value;
    if(st.length==0)
    alert("First input an angle ...");
    else{
    var x=Math.tan(parseInt(st)*(Math.PI/180));
    if(x>1)
    input.value="infinity";
    else if(x<0)
    input.value=0;
    else
    input.value=x;
    }
}
function fkey9() {
    var input=document.getElementById("screen");
    input.value+="7";
}
function fkey10() {
    var input=document.getElementById("screen");
    input.value+="8";
}
function fkey11() {
    var input=document.getElementById("screen");
    input.value+="9";
}
function fkey12() {
    var input=document.getElementById("screen");
    input.value+="+";
}
function fkey13() {
    var input=document.getElementById("screen");
    var st=input.value;
    if(st.length==0)
    alert("First input a number...");
    else
    input.value=Math.pow(2,parseInt(st));
}
function fkey14() {
    var input=document.getElementById("screen");
    var st=input.value;
    if(st.length==0)
    alert("First input a number...");
    else
    input.value=Math.log(st);
}
function fkey15() {
    var input=document.getElementById("screen");
    var st=input.value;
    if(st.length==0)
    alert("First input an angle ...");
    else{
    var x=Math.sin(parseInt(st)*(Math.PI/180));
    if(x>1)
    input.value=0;
    else if(x<0)
    input.value="infinity";
    else
    input.value=1/x;
    }
}
function fkey16() {
    var input=document.getElementById("screen");
    var st=input.value;
    if(st.length==0)
    alert("First input an angle ...");
    else{
    var x=Math.cos(parseInt(st)*(Math.PI/180));
    if(x>1)
    input.value=0;
    else if(x<0)
    input.value="infinity";
    else
    input.value=1/x;
    }
}
function fkey17() {
    var input=document.getElementById("screen");
    var st=input.value;
    if(st.length==0)
    alert("First input an angle ...");
    else{
    var x=Math.tan(parseInt(st)*(Math.PI/180));
    if(x>1)
    input.value=0;
    else if(x<0)
    input.value="infinity";
    else
    input.value=1/x;
    }
}
function fkey18() {
    var input=document.getElementById("screen");
    input.value+="4";
}
function fkey19() {
    var input=document.getElementById("screen");
    input.value+="5";
}
function fkey20() {
    var input=document.getElementById("screen");
    input.value+="6";
}
function fkey21() {
    var input=document.getElementById("screen");
    input.value+="-";
}
function fkey22() {
    var input=document.getElementById("screen");
    var st=input.value;
    if(st.length==0)
    alert("First input a number...");
    else
    input.value=Math.sqrt(parseInt(st));
}
function fkey23() {
    var input=document.getElementById("screen");
    var st=input.value;
    if(st.length==0)
    alert("First input a number...");
    else
    input.value=1/parseInt(st);
}
function fkey24() {
    var input=document.getElementById("screen");
    input.value+=" & ";
}
function fkey25() {
    var input=document.getElementById("screen");
    input.value+=" | ";
}
function fkey26() {
    var input=document.getElementById("screen");
    input.value+=" ~ ";
}
function fkey27() {
    var input=document.getElementById("screen");
    input.value+="1";
}
function fkey28() {
    var input=document.getElementById("screen");
    input.value+="2";
}
function fkey29() {
    var input=document.getElementById("screen");
    input.value+="3";
}
function fkey30() {
    var input=document.getElementById("screen");
    input.value+="*";
}
function fkey31() {
    var input=document.getElementById("screen");
    var st=input.value;
    if(st.length==0)
    alert("First input a number...");
    else
    input.value=Math.cbrt(parseInt(st))
}
function fkey32() {
    var input=document.getElementById("screen");
    input.value+="(";
}
function fkey33() {
    var input=document.getElementById("screen");
    var st=input.value;
    if(st.length==0)
    alert("First input a decimal number...");
    else 
    input.value=(parseInt(st) >>> 0).toString(2);
}
function fkey34() {
    var input=document.getElementById("screen");
    var st=input.value;
    if(st.length==0)
    alert("First input a binary number...");
    else 
    input.value=parseInt((parseInt(st) + '').replace(/[^01]/gi, ''), 2);
}
function fkey35() {
    var input=document.getElementById("screen");
    input.value+=" >> ";
}
function fkey36() {
    var input=document.getElementById("screen");
    input.value+=" ^ ";
}
function fkey37() {
    var input=document.getElementById("screen");
    input.value+="0";
}
function fkey38() {
    var input=document.getElementById("screen");
    var st=input.value;
    if(st.length==0)
    alert("First input a number...");
    else 
    {
        var c,fact=1;
        for (c = 1; c <= parseInt(st); c++)
            fact = fact * c;
        input.value=fact;
    }
}
function fkey39() {
    var input=document.getElementById("screen");
    input.value+="/";
}
function fkey40() {
    var input=document.getElementById("screen");
    var st=input.value;
    if(st.length==0)
    alert("First input a number...");
    else
    input.value=Math.pow((2.718),parseInt(st));
}
function fkey41() {
    var input=document.getElementById("screen");
    input.value+=")";
}
function fkey42() {
    var input=document.getElementById("screen");
    input.value+=" << ";
}
function fkey43() {
    var input=document.getElementById("screen");
    var st=input.value;
    if(st.length==0)
    alert("First input a number...");
    else 
    input.value=Math.ceil(parseFloat(st));
}
function fkey44() {
    var input=document.getElementById("screen");
    var st=input.value;
    if(st.length==0)
    alert("First input a number...");
    else 
    input.value=Math.floor(parseFloat(st));
}