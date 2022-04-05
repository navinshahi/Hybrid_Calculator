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
        if(select1=="b" && select2=="kb")
        result.value=parseFloat(val)/1024;
        else if(select1=="b" && select2=="mb")
        result.value=parseFloat(val)/1048576;
        else if(select1=="b" && select2=="gb")
        result.value=parseFloat(val)/1073741824;
        else if(select1=="b" && select2=="tb")
        result.value=parseFloat(val)/1099511627776;
        else if(select1=="b" && select2=="pb")
        result.value=parseFloat(val)/1125899906842624;
        else if(select1=="kb" && select2=="b")
        result.value=parseFloat(val)*1024;
        else if(select1=="kb" && select2=="mb")
        result.value=parseFloat(val)/1024;
        else if(select1=="kb" && select2=="gb")
        result.value=parseFloat(val)/1048576;
        else if(select1=="kb" && select2=="tb")
        result.value=parseFloat(val)/1073741824;
        else if(select1=="kb" && select2=="pb")
        result.value=parseFloat(val)/1099511627776;
        else if(select1=="mb" && select2=="b")
        result.value=parseFloat(val)*1048576;
        else if(select1=="mb" && select2=="kb")
        result.value=parseFloat(val)*1024;
        else if(select1=="mb" && select2=="gb")
        result.value=parseFloat(val)/1024;
        else if(select1=="mb" && select2=="tb")
        result.value=parseFloat(val)/1048576;
        else if(select1=="mb" && select2=="pb")
        result.value=parseFloat(val)/1073741824;
        else if(select1=="gb" && select2=="b")
        result.value=parseFloat(val)*1073741824;
        else if(select1=="gb" && select2=="kb")
        result.value=parseFloat(val)*1048576;
        else if(select1=="gb" && select2=="mb")
        result.value=parseFloat(val)*1024;
        else if(select1=="gb" && select2=="tb")
        result.value=parseFloat(val)/1024;
        else if(select1=="gb" && select2=="pb")
        result.value=parseFloat(val)/1048576;
        else if(select1=="tb" && select2=="b")
        result.value=parseFloat(val)*1099511627776;
        else if(select1=="tb" && select2=="kb")
        result.value=parseFloat(val)*1073741824;
        else if(select1=="tb" && select2=="mb")
        result.value=parseFloat(val)*1048576;
        else if(select1=="tb" && select2=="gb")
        result.value=parseFloat(val)*1024;
        else if(select1=="tb" && select2=="pb")
        result.value=parseFloat(val)/1024;
        else if(select1=="pb" && select2=="b")
        result.value=parseFloat(val)*1125899906842624;
        else if(select1=="pb" && select2=="kb")
        result.value=parseFloat(val)*1099511627776;
        else if(select1=="pb" && select2=="mb")
        result.value=parseFloat(val)*1073741824;
        else if(select1=="pb" && select2=="gb")
        result.value=parseFloat(val)*1048576;
        else if(select1=="pb" && select2=="tb")
        result.value=parseFloat(val)*1024;
    }
    else
    {
        document.getElementById("input1").disabled=true;
    }
}