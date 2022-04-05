var row='0';
var column='0';
function construct(){
row = document.getElementById("selectRow").value;
column = document.getElementById("selectColumn").value;
var mat_1 = document.getElementById("matrix_1");
if(row!="row" && column!="column")
{
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
function calculate()
{
    var val=document.getElementsByClassName("yyy");
    if(val.length==0)
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
    var tra = new Array(c); 
    for (var i = 0; i < tra.length; i++) { 
        tra[i] = new Array(r); 
    }
    var k=0;
    var p=0;
    for(var i=0;i<r;i++)
    {
        for(var j=0;j<c;j++)
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
    if(p==1)
    {
        alert("First input numbers in matrix!!!");
    }
    else {
    for(var i=0;i<r;i++)
    {
        for(var j=0;j<c;j++)
        {
            tra[j][i]=gfg[i][j];
        }
    }
    var result=document.getElementById("matrix_2");
    var v=r*60;
    var x=v.toString(10);
    var v1=c*40;
    var x1=v1.toString(10);
    result.style.width=x+"px";
    result.style.height=x1+"px";
    result.innerHTML="";
    for(var i=0;i<c;i++)
    {
        for(var j=0;j<r;j++)
        {
            result.innerHTML+="<div style='position:relative;width:60px;height:40px;float:left;border:1px solid black;'><input type='number' class='yyy' style='width:100%;height:100%;border-style:none;' value='"+tra[i][j]+"'></div>";
        }
    }
    }
}
}