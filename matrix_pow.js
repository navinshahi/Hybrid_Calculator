var row='0';
var column='0';
var power='0';
function construct(){
row = document.getElementById("selectRow").value;
power=document.getElementById("selectColumn").value;
var mat_1 = document.getElementById("matrix_1");
if(row!="row" && power!="column")
{
    column=parseInt(row);
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
        alert("First select order and power of matrices!!!");
    }
    else {
    var r=parseInt(row);
    var c=parseInt(column);
    var p1=parseInt(power);
    var gfg = new Array(r); 
    for (var i = 0; i < gfg.length; i++) { 
        gfg[i] = new Array(c); 
    }
    var mul =new Array(r);
    for (var i = 0; i < mul.length; i++) { 
        mul[i] = new Array(c);
    }
    var mul1 =new Array(r);
    for (var i = 0; i < mul1.length; i++) { 
        mul1[i] = new Array(c);
    }
    var mul2 =new Array(r);
    for (var i = 0; i < mul2.length; i++) { 
        mul2[i] = new Array(c);
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
                    mul[i][j]=0;
            }
        }
        var x=2;
        for(var i=0;i<r;i++)
        {
            for(var j=0;j<c;j++)
            {
                for(var e=0;e<c;e++)
                    {
                    mul[i][j]+=gfg[i][e]*gfg[e][j];
                }
                mul1[i][j]=mul[i][j];
            }
        }
        while(x<p1)
        {
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
                for(var e=0;e<c;e++)
                    {
                    mul[i][j]+=(mul1[i][e]*gfg[e][j]);
                }
                mul2[i][j]=mul[i][j];            
            }
            }
            for(var i=0;i<r;i++)
            {
            for(var j=0;j<c;j++)
            {
                mul1[i][j]=mul2[i][j];
            }
            }
            x++;
        }
        var result=document.getElementById("matrix_2");
    var v=c*60;
    var x=v.toString(10);
    var v1=r*40;
    var x1=v1.toString(10);
    result.style.width=x+"px";
    result.style.height=x1+"px";
    result.innerHTML="";
    for(var i=0;i<r;i++)
    {
        for(var j=0;j<c;j++)
        {
            result.innerHTML+="<div style='position:relative;width:60px;height:40px;float:left;border:1px solid black;'><input type='number' class='yyy' style='width:100%;height:100%;border-style:none;' value='"+mul1[i][j]+"'></div>";
        }
    }
    }
}
}