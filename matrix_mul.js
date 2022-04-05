var row='0';
var column='0';
var row1='0';
var column1='0';
function construct(){
row = document.getElementById("selectRow").value;
column = document.getElementById("selectColumn").value;
var mat_1 = document.getElementById("matrix_1");
if((row!="row") && (column!="column"))
{
    row1=column;
    document.getElementById("selectRow1").value=column;
    construct1();
    var v=parseInt(column)*60;
    var x=v.toString(10);
    var v1=parseInt(row)*40;
    var x1=v1.toString(10);
    mat_1.style.width=x+"px";
    mat_1.style.height=x1+"px";
    mat_1.innerHTML="";
    for(var i=0;i<parseInt(row);i++)
    {
        for(var j=0;j<parseInt(column);j++)
        {
            mat_1.innerHTML+="<div style='position:relative;width:60px;height:40px;float:left;border:1px solid black;'><input type='number' class='yyy' style='width:100%;height:100%;border-style:none;'></div>";
        }
    }
}
else
{
    mat_1.innerHTML="";
}
}
function construct1()
{
    column1 = document.getElementById("selectColumn1").value;
    var mat_2 = document.getElementById("matrix_2");
    if((row1!="row1") && (column1!="column1"))
    {
    var v=parseInt(column1)*60;
    var x=v.toString(10);
    var v1=parseInt(row1)*40;
    var x1=v1.toString(10);
    mat_2.style.width=x+"px";
    mat_2.style.height=x1+"px";
    mat_2.innerHTML="";
    for(var i=0;i<parseInt(row1);i++)
    {
        for(var j=0;j<parseInt(column1);j++)
        {
            mat_2.innerHTML+="<div style='position:relative;width:60px;height:40px;float:left;border:1px solid black;'><input type='number' class='zzz' style='width:100%;height:100%;border-style:none;'></div>";
        }
    }
    }
    else
    {
    mat_2.innerHTML="";
    }   
}
function calculate()
{
    var val=document.getElementsByClassName("yyy");
    var val1=document.getElementsByClassName("zzz");
    if(val.length==0 || val1.length==0)
    {
        alert("First select row and column of matrices!!!");
    }
    else {
    var r=parseInt(row);
    var c=parseInt(column1);
    var d=parseInt(column);
    var gfg = new Array(r); 
    for (var i = 0; i < gfg.length; i++) { 
        gfg[i] = new Array(d); 
    }
    var gfg1 = new Array(d); 
    for (var i = 0; i < gfg1.length; i++) { 
        gfg1[i] = new Array(c); 
    }
    var mul = new Array(r); 
    for (var i = 0; i < mul.length; i++) { 
        mul[i] = new Array(c); 
    }
    var k=0;
    var l=0;
    var p=0;
    for(var i=0;i<r;i++)
    {
        for(var j=0;j<d;j++)
        {   
            if(parseInt(val[k].value)==parseFloat(val[k].value)) {
            gfg[i][j]=parseInt(val[k].value); }
            else {
                gfg[i][j]=parseFloat(val[k].value);
            }
            if(Number.isNaN(gfg[i][j]))
            {
                p=1;
                break;
            }
            k=k+1;
        }
    }
    for(var i=0;i<d;i++)
    {
        for(var j=0;j<c;j++)
        {   
            if(parseInt(val1[l].value)==parseFloat(val1[l].value)) {
            gfg1[i][j]=parseInt(val1[l].value); }
            else {
                gfg1[i][j]=parseFloat(val1[l].value);
            }
            if(Number.isNaN(gfg1[i][j]))
            {
                p=1;
                break;
            }
            l=l+1;
        }
    }
    if(p==1)
    {
        alert("First input numbers in matrix!!!");
    }
    else {
        for(var i=0;i<r;i++)
        {
            for(var j=0;j<c;j++)
            {
                    mul[i][j]=0;
            }
        }
        for(var i=0;i<r;i++)
        {
            for(var j=0;j<c;j++)
            {
                for(var e=0;e<d;e++)
                    {
                    mul[i][j]+=gfg[i][e]*gfg1[e][j];
                }
            }
        }
    var result=document.getElementById("result");
    var v=c*60;
    var x=v.toString(10);
    var v1=r*40;
    var x1=v1.toString(10);
    result.style.width=x+"px";
    result.style.height=x1+"px";
    result.innerHTML="";
    document.getElementById("second_frame").style.display="block";
    for(var i=0;i<r;i++)
    {
        for(var j=0;j<c;j++)
        {
            result.innerHTML+="<div style='position:relative;width:60px;height:40px;float:left;border:1px solid black;'><input type='number' class='yyy' style='width:100%;height:100%;border-style:none;' value='"+mul[i][j]+"'></div>";
        }
    }
    window.scrollTo({top:780,behavior:'smooth'})
    }
}
}
function further()
{
    var val=document.getElementsByClassName("yyy");
    var val1=document.getElementsByClassName("zzz");
    if(val.length==0 || val1.length==0)
    {
        alert("First select row and column of matrices!!!");
    }
    else {
    var r=parseInt(row);
    var c=parseInt(column1);
    var d=parseInt(column);
    var gfg = new Array(r); 
    for (var i = 0; i < gfg.length; i++) { 
        gfg[i] = new Array(d); 
    }
    var gfg1 = new Array(d); 
    for (var i = 0; i < gfg1.length; i++) { 
        gfg1[i] = new Array(c); 
    }
    var mul = new Array(r); 
    for (var i = 0; i < mul.length; i++) { 
        mul[i] = new Array(c); 
    }
    var k=0;
    var l=0;
    var p=0;
    for(var i=0;i<r;i++)
    {
        for(var j=0;j<d;j++)
        {   
            if(parseInt(val[k].value)==parseFloat(val[k].value)) {
            gfg[i][j]=parseInt(val[k].value); }
            else {
                gfg[i][j]=parseFloat(val[k].value);
            }
            if(Number.isNaN(gfg[i][j]))
            {
                p=1;
                break;
            }
            k=k+1;
        }
    }
    for(var i=0;i<d;i++)
    {
        for(var j=0;j<c;j++)
        {   
            if(parseInt(val1[l].value)==parseFloat(val1[l].value)) {
            gfg1[i][j]=parseInt(val1[l].value); }
            else {
                gfg1[i][j]=parseFloat(val1[l].value);
            }
            if(Number.isNaN(gfg1[i][j]))
            {
                p=1;
                break;
            }
            l=l+1;
        }
    }
    if(p==1)
    {
        alert("First input numbers in matrix!!!");
    }
    else {
        for(var i=0;i<r;i++)
        {
            for(var j=0;j<c;j++)
            {
                    mul[i][j]=0;
            }
        }
        for(var i=0;i<r;i++)
        {
            for(var j=0;j<c;j++)
            {
                for(var e=0;e<d;e++)
                    {
                    mul[i][j]+=gfg[i][e]*gfg1[e][j];
                }
            }
        }
        document.getElementById("selectRow").value=r;
        document.getElementById("selectColumn").value=c;
        document.getElementById("selectRow1").value=c;
        var k=0;
        construct();
    for(var i=0;i<r;i++)
    {
        for(var j=0;j<c;j++)
        {
            if(parseInt(val[k].value)==parseFloat(val[k].value)) {
                val[k].value=parseInt(mul[i][j]); }
                else {
                val[k].value=parseFloat(mul[i][j]);
                }
                k=k+1;
                if(Number.isNaN(gfg1[i][j]))
                {
                    p=1;
                    break;
                }
                l=l+1;
        }
    }
    window.scrollTo({top:100,behavior:'smooth'});
    }
}   
}