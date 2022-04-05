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
        if(select1=="skm" && select2=="h")
        result.value=parseFloat(val)*100;
        else if(select1=="skm" && select2=="sm")
        result.value=parseFloat(val)*1000000;
        else if(select1=="skm" && select2=="scm")
        result.value=parseFloat(val)*1e10;
        else if(select1=="skm" && select2=="smm")
        result.value=parseFloat(val)*1e12;
        else if(select1=="skm" && select2=="sft")
        result.value=parseFloat(val)*10763910.4;
        else if(select1=="skm" && select2=="smi")
        result.value=parseFloat(val)*0.386102159;
        else if(select1=="skm" && select2=="ac")
        result.value=parseFloat(val)*247.105407;
        else if(select1=="h" && select2=="skm")
        result.value=parseFloat(val)*0.01;
        else if(select1=="h" && select2=="sm")
        result.value=parseFloat(val)*10000;
        else if(select1=="h" && select2=="scm")
        result.value=parseFloat(val)*100000000;
        else if(select1=="h" && select2=="smm")
        result.value=parseFloat(val)*1e10;
        else if(select1=="h" && select2=="sft")
        result.value=parseFloat(val)*107639.104;
        else if(select1=="h" && select2=="smi")
        result.value=parseFloat(val)*0.00386102159;
        else if(select1=="h" && select2=="ac")
        result.value=parseFloat(val)*2.47105407;
        else if(select1=="sm" && select2=="skm")
        result.value=parseFloat(val)*1e-6;
        else if(select1=="sm" && select2=="h")
        result.value=parseFloat(val)*0.0001;
        else if(select1=="sm" && select2=="scm")
        result.value=parseFloat(val)*10000;
        else if(select1=="sm" && select2=="smm")
        result.value=parseFloat(val)*1000000;
        else if(select1=="sm" && select2=="sft")
        result.value=parseFloat(val)*10.7639104;
        else if(select1=="sm" && select2=="smi")
        result.value=parseFloat(val)*3.86102159e-7;
        else if(select1=="sm" && select2=="ac")
        result.value=parseFloat(val)*0.000247105407;
        else if(select1=="scm" && select2=="skm")
        result.value=parseFloat(val)*1e-10;
        else if(select1=="scm" && select2=="h")
        result.value=parseFloat(val)*1e-8;
        else if(select1=="scm" && select2=="sm")
        result.value=parseFloat(val)*0.0001;
        else if(select1=="scm" && select2=="smm")
        result.value=parseFloat(val)*100;
        else if(select1=="scm" && select2=="sft")
        result.value=parseFloat(val)*0.00107639104;
        else if(select1=="scm" && select2=="smi")
        result.value=parseFloat(val)*3.86102159e-11;
        else if(select1=="scm" && select2=="ac")
        result.value=parseFloat(val)*2.47105407e-8;
        else if(select1=="smm" && select2=="skm")
        result.value=parseFloat(val)*1e-12;
        else if(select1=="smm" && select2=="h")
        result.value=parseFloat(val)*1e-10;
        else if(select1=="smm" && select2=="sm")
        result.value=parseFloat(val)*1e-6;
        else if(select1=="smm" && select2=="scm")
        result.value=parseFloat(val)*0.01;
        else if(select1=="smm" && select2=="sft")
        result.value=parseFloat(val)*1.07639104e-5;
        else if(select1=="smm" && select2=="smi")
        result.value=parseFloat(val)*3.86102159e-13;
        else if(select1=="smm" && select2=="ac")
        result.value=parseFloat(val)*2.47105407e-10;
        else if(select1=="sft" && select2=="skm")
        result.value=parseFloat(val)*9.290304e-8;
        else if(select1=="sft" && select2=="h")
        result.value=parseFloat(val)*9.290304e-6;
        else if(select1=="sft" && select2=="sm")
        result.value=parseFloat(val)*0.09290304;
        else if(select1=="sft" && select2=="scm")
        result.value=parseFloat(val)*929.0304;
        else if(select1=="sft" && select2=="smm")
        result.value=parseFloat(val)*92903.04;
        else if(select1=="sft" && select2=="smi")
        result.value=parseFloat(val)*3.58700643e-8;
        else if(select1=="sft" && select2=="ac")
        result.value=parseFloat(val)*2.29568435e-5;
        else if(select1=="smi" && select2=="skm")
        result.value=parseFloat(val)*2.58998811;
        else if(select1=="smi" && select2=="h")
        result.value=parseFloat(val)*258.998811;
        else if(select1=="smi" && select2=="sm")
        result.value=parseFloat(val)*2589988.11;
        else if(select1=="smi" && select2=="scm")
        result.value=parseFloat(val)*2.58998811e10;
        else if(select1=="smi" && select2=="smm")
        result.value=parseFloat(val)*2.58998811e12;
        else if(select1=="smi" && select2=="sft")
        result.value=parseFloat(val)*27878400;
        else if(select1=="smi" && select2=="ac")
        result.value=parseFloat(val)*640.000067;
        else if(select1=="ac" && select2=="skm")
        result.value=parseFloat(val)*0.004046856;
        else if(select1=="ac" && select2=="h")
        result.value=parseFloat(val)*0.4046856;
        else if(select1=="ac" && select2=="sm")
        result.value=parseFloat(val)*4046.856;
        else if(select1=="ac" && select2=="scm")
        result.value=parseFloat(val)*40468560;
        else if(select1=="ac" && select2=="smm")
        result.value=parseFloat(val)*4.046856e9;
        else if(select1=="ac" && select2=="sft")
        result.value=parseFloat(val)*43559.9955;
        else if(select1=="ac" && select2=="smi")
        result.value=parseFloat(val)*0.00156249984;
    }
    else
    {
        document.getElementById("input1").disabled=true;
    }
}