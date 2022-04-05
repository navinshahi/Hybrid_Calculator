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
        if(select1=="C" && select2=="F")
        result.value=(parseFloat(val)*1.8)+32;
        else if(select1=="C" && select2=="K")
        result.value=parseFloat(val)+273.15;
        else if(select1=="F" && select2=="C")
        result.value=(parseFloat(val)-32)*0.55555;
        else if(select1=="F" && select2=="K")
        result.value=((parseFloat(val)-32)*0.55555)+273.15;
        else if(select1=="K" && select2=="C")
        result.value=parseFloat(val)-273.15;
        else if(select1=="K" && select2=="F")
        result.value=((parseFloat(val)-273.15)*1.8)+32;
    }
    else
    {
        document.getElementById("input1").disabled=true;
    }
}