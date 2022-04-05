function calculate()
{
    var select1=document.getElementById("select1").value;
    var select2=document.getElementById("select2").value;
    var n=select1.localeCompare(select2);
    if(n==0)
    {
        alert("Invalid Conversions!!!");
        document.getElementById("input1").disabled=true;
    }
    else if(select1!="select1" && select2!="select2")
    {
        document.getElementById("input1").disabled=false;
        var result=document.getElementById("input2");
        var val=document.getElementById("input1").value;
        if(select1=="s" && select2=="m")
        result.value=parseFloat(val)*0.016667;
        else if(select1=="s" && select2=="h")
        result.value=parseFloat(val)*0.000278;
        else if(select1=="s" && select2=="d")
        result.value=parseFloat(val)*0.000012;
        else if(select1=="s" && select2=="w")
        result.value=parseFloat(val)*0.000002;
        else if(select1=="s" && select2=="y")
        result.value=parseFloat(val)*0.000000031688088;
        else if(select1=="m" && select2=="s")
        result.value=parseFloat(val)*60;
        else if(select1=="m" && select2=="h")
        result.value=parseFloat(val)*0.016667;
        else if(select1=="m" && select2=="d")
        result.value=parseFloat(val)*0.000694;
        else if(select1=="m" && select2=="w")
        result.value=parseFloat(val)*0.000099;
        else if(select1=="m" && select2=="y")
        result.value=parseFloat(val)*0.000002;
        else if(select1=="h" && select2=="s")
        result.value=parseFloat(val)*3600;
        else if(select1=="h" && select2=="m")
        result.value=parseFloat(val)*60;
        else if(select1=="h" && select2=="d")
        result.value=parseFloat(val)*0.041667;
        else if(select1=="h" && select2=="w")
        result.value=parseFloat(val)*0.005952;
        else if(select1=="h" && select2=="y")
        result.value=parseFloat(val)*0.000114;
        else if(select1=="d" && select2=="s")
        result.value=parseFloat(val)*86400;
        else if(select1=="d" && select2=="m")
        result.value=parseFloat(val)*1440;
        else if(select1=="d" && select2=="h")
        result.value=parseFloat(val)*24;
        else if(select1=="d" && select2=="w")
        result.value=parseFloat(val)*0.142857;
        else if(select1=="d" && select2=="y")
        result.value=parseFloat(val)*0.002738;
        else if(select1=="w" && select2=="s")
        result.value=parseFloat(val)*604800;
        else if(select1=="w" && select2=="m")
        result.value=parseFloat(val)*10080;
        else if(select1=="w" && select2=="h")
        result.value=parseFloat(val)*168;
        else if(select1=="w" && select2=="d")
        result.value=parseFloat(val)*7;
        else if(select1=="w" && select2=="y")
        result.value=parseFloat(val)*0.019165;
        else if(select1=="y" && select2=="s")
        result.value=parseFloat(val)*31557600;
        else if(select1=="y" && select2=="m")
        result.value=parseFloat(val)*525960;
        else if(select1=="y" && select2=="h")
        result.value=parseFloat(val)*8766;
        else if(select1=="y" && select2=="d")
        result.value=parseFloat(val)*365.25;
        else if(select1=="y" && select2=="w")
        result.value=parseFloat(val)*52.17857;
    }
    else
    {
        document.getElementById("input1").disabled=true;
    }
}