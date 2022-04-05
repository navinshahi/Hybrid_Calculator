var row;
var column;
function construct(){
row = document.getElementById("selectRow").value;
column = document.getElementById("selectColumn").value;
var mat_1 = document.getElementById("matrix_1");
var mat_2 = document.getElementById("matrix_2");
if((row!="row") && (column!="column"))
{
    var v=parseInt(column)*60;
    var x=v.toString(10);
    var v1=parseInt(row)*40;
    var x1=v1.toString(10);
    mat_1.style.width=x+"px";
    mat_1.style.height=x1+"px";
    mat_2.style.width=x+"px";
    mat_2.style.height=x1+"px";
    mat_1.innerHTML="";
    mat_2.innerHTML="";
    for(var i=0;i<parseInt(row);i++)
    {
        for(var j=0;j<parseInt(column);j++)
        {
            mat_1.innerHTML+="<div style='position:relative;width:60px;height:40px;float:left;border:1px solid black;'><input type='number' class='yyy' style='width:100%;height:100%;border-style:none;'></div>";
            mat_2.innerHTML+="<div style='position:relative;width:60px;height:40px;float:left;border:1px solid black;'><input type='number' class='zzz' style='width:100%;height:100%;border-style:none;'></div>";
        }
    }
}
else
{
    mat_1.innerHTML="";
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
    var c=parseInt(column);
    var gfg = new Array(r); 
    for (var i = 0; i < gfg.length; i++) { 
        gfg[i] = new Array(c); 
    }
    var gfg1 = new Array(r); 
    for (var i = 0; i < gfg.length; i++) { 
        gfg1[i] = new Array(c); 
    }
    var sum = new Array(r); 
    for (var i = 0; i < sum.length; i++) { 
        sum[i] = new Array(c); 
    }
    var k=0;
    var l=0;
    var p=0;
    for(var i=0;i<r;i++)
    {
        for(var j=0;j<c;j++)
        {   if(parseInt(val[k].value)==parseFloat(val[k].value)) {
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
                sum[i][j]=gfg[i][j]-gfg1[i][j];
            }
        }
    var result=document.getElementById("result");
    var v=parseInt(column)*60;
    var x=v.toString(10);
    var v1=parseInt(row)*40;
    var x1=v1.toString(10);
    result.style.width=x+"px";
    result.style.height=x1+"px";
    result.innerHTML="";
    document.getElementById("second_frame").style.display="block";
    for(var i=0;i<r;i++)
    {
        for(var j=0;j<c;j++)
        {
            result.innerHTML+="<div style='position:relative;width:60px;height:40px;float:left;border:1px solid black;'><input type='number' class='yyy' style='width:100%;height:100%;border-style:none;' value='"+sum[i][j]+"'></div>";
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
    var c=parseInt(column);
    var gfg = new Array(r); 
    for (var i = 0; i < gfg.length; i++) { 
        gfg[i] = new Array(c); 
    }
    var gfg1 = new Array(r); 
    for (var i = 0; i < gfg.length; i++) { 
        gfg1[i] = new Array(c); 
    }
    var sum = new Array(r); 
    for (var i = 0; i < sum.length; i++) { 
        sum[i] = new Array(c); 
    }
    var k=0;
    var l=0;
    var p=0;
    for(var i=0;i<r;i++)
    {
        for(var j=0;j<c;j++)
        {   if(parseInt(val[k].value)==parseFloat(val[k].value)) {
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
                sum[i][j]=gfg[i][j]-gfg1[i][j];
            }
        }
    }
    var k=0;
    for(var i=0;i<r;i++)
    {
        for(var j=0;j<c;j++)
        {
            if(parseInt(val[k].value)==parseFloat(val[k].value)) {
                val[k].value=parseInt(sum[i][j]); }
                else {
                val[k].value=parseFloat(sum[i][j]);
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