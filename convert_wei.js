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
        if(select1=="ca" && select2=="g")
        result.value=parseFloat(val)*0.2;
        else if(select1=="ca" && select2=="kg")
        result.value=parseFloat(val)*0.0002;
        else if(select1=="ca" && select2=="pd")
        result.value=parseFloat(val)*0.000441;
        else if(select1=="ca" && select2=="mt")
        result.value=parseFloat(val)*0.0000002;
        else if(select1=="ca" && select2=="mg")
        result.value=parseFloat(val)*200;
        else if(select1=="g" && select2=="ca")
        result.value=parseFloat(val)*5;
        else if(select1=="g" && select2=="kg")
        result.value=parseFloat(val)*0.001;
        else if(select1=="g" && select2=="pd")
        result.value=parseFloat(val)*0.002205;
        else if(select1=="g" && select2=="mt")
        result.value=parseFloat(val)*0.000001;
        else if(select1=="g" && select2=="mg")
        result.value=parseFloat(val)*1000;
        else if(select1=="kg" && select2=="ca")
        result.value=parseFloat(val)*5000;
        else if(select1=="kg" && select2=="g")
        result.value=parseFloat(val)*1000;
        else if(select1=="kg" && select2=="pd")
        result.value=parseFloat(val)*2.204623;
        else if(select1=="kg" && select2=="mt")
        result.value=parseFloat(val)*0.001;
        else if(select1=="kg" && select2=="mg")
        result.value=parseFloat(val)*1000000;
        else if(select1=="pd" && select2=="ca")
        result.value=parseFloat(val)*2267.962;
        else if(select1=="pd" && select2=="g")
        result.value=parseFloat(val)*453.5924;
        else if(select1=="pd" && select2=="kg")
        result.value=parseFloat(val)*0.453592;
        else if(select1=="pd" && select2=="mt")
        result.value=parseFloat(val)*0.000454;
        else if(select1=="pd" && select2=="mg")
        result.value=parseFloat(val)*453592.4;
        else if(select1=="mt" && select2=="ca")
        result.value=parseFloat(val)*5000000;
        else if(select1=="mt" && select2=="g")
        result.value=parseFloat(val)*1000000;
        else if(select1=="mt" && select2=="kg")
        result.value=parseFloat(val)*1000;
        else if(select1=="mt" && select2=="pd")
        result.value=parseFloat(val)*2204.623;
        else if(select1=="mt" && select2=="mg")
        result.value=parseFloat(val)*1000000000;
        else if(select1=="mg" && select2=="ca")
        result.value=parseFloat(val)*0.005;
        else if(select1=="mg" && select2=="g")
        result.value=parseFloat(val)*0.001;
        else if(select1=="mg" && select2=="kg")
        result.value=parseFloat(val)*0.000001;
        else if(select1=="mg" && select2=="pd")
        result.value=parseFloat(val)*0.000002;
        else if(select1=="mg" && select2=="mt")
        result.value=parseFloat(val)*0.000000001;
    }
    else
    {
        document.getElementById("input1").disabled=true;
    }
}