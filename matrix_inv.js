var row='0';
var column='0';
function construct(){
row = document.getElementById("selectRow").value;
var mat_1 = document.getElementById("matrix_1");
if(row!="row")
{
    column=parseInt(row);
    document.getElementById("selectColumn").value=row;
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
function determinantOfMatrix(gfg,m,n){
    var value,current_column,sign,sub_det,p,q;
    if(m==1 || n==1)
    {
         return gfg[0][0];
    }
    var cofactor =new Array(m-1);
    for (var i = 0; i < m-1; i++) { 
        cofactor[i] = new Array(n-1);
    }
    if(m == 2 || n == 2){
        value = gfg[0][0] * gfg[1][1] - gfg[1][0] * gfg[0][1];
        return value;
      }
    var Sum = 0;
    for(current_column=0;current_column<m;current_column++){
        p=0;
        sign = Math.pow((-1),(current_column));
        for(var i=0;i<m;i++)
    	{
            q=0;
    	for(var j=0;j<m;j++)
    	{
    		if(j==current_column || i==0){
    		continue;}
    		else{   
    		cofactor[p][q]=gfg[i][j];
            q++;
            }
        }
        if(q>0){
		p++;}
        }
		sub_det=determinantOfMatrix(cofactor,m-1,n-1);
        Sum += (sign * gfg[0][current_column] * sub_det);
       }
    return Sum;
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
    var adj = new Array(r); 
    for (var i = 0; i < adj.length; i++) { 
        adj[i] = new Array(c); 
    }
    var cofactor =new Array(r-1);
    for (var i = 0; i < r-1; i++) { 
        cofactor[i] = new Array(c-1);
    }
    var q;
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
    var det=determinantOfMatrix(gfg,r,c);
    if(det!=0){
    for(var i=0;i<r;i++)
    {
        for(var j=0;j<c;j++)
        {
            p=0;
            sign=Math.pow(-1,(i+j));
            for(var e=0;e<r;e++)
    	    {
                q=0;
    	        for(var f=0;f<r;f++)
    	        {
    		        if(e==i || f==j){
    		        continue;}
    		        else{   
    		        cofactor[p][q]=gfg[e][f];
                    q++;
                    }
                }
                if(q>0){
		        p++;}
            }
            var s=determinantOfMatrix(cofactor,r-1,c-1);
            adj[j][i]=sign*s;
        }
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
            result.innerHTML+="<div style='position:relative;width:60px;height:40px;float:left;border:1px solid black;'><input type='number' class='yyy' style='width:100%;height:100%;border-style:none;' value='"+adj[i][j]/det+"'></div>";
        }
    }
    }
    else{
        alert("Inverse is not possible because determinant of given matrix is ZERO ....");
    }
    }
}
}