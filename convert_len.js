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
        if(select1=="km" && select2=="m")
        result.value=parseFloat(val)*1000;
        else if(select1=="km" && select2=="dm")
        result.value=parseFloat(val)*10000;
        else if(select1=="km" && select2=="cm")
        result.value=parseFloat(val)*100000;
        else if(select1=="km" && select2=="mm")
        result.value=parseFloat(val)*1000000;
        else if(select1=="km" && select2=="mim")
        result.value=parseFloat(val)*1e9;
        else if(select1=="km" && select2=="nm")
        result.value=parseFloat(val)*1e12;
        else if(select1=="km" && select2=="pm")
        result.value=parseFloat(val)*1e15;
        else if(select1=="km" && select2=="nmi")
        result.value=parseFloat(val)*0.539956803;
        else if(select1=="km" && select2=="mi")
        result.value=parseFloat(val)*0.621371192;
        else if(select1=="km" && select2=="yd")
        result.value=parseFloat(val)*1093.6133;
        else if(select1=="km" && select2=="ft")
        result.value=parseFloat(val)*3280.8399;
        else if(select1=="km" && select2=="in")
        result.value=parseFloat(val)*39370.0787;
        else if(select1=="km" && select2=="pc")
        result.value=parseFloat(val)*3.24077929e-14;
        else if(select1=="km" && select2=="ld")
        result.value=parseFloat(val)*2.60145005e-6;
        else if(select1=="km" && select2=="ly")
        result.value=parseFloat(val)*1.05700083e-13;
        else if(select1=="m" && select2=="km")               
        result.value=parseFloat(val)*0.001;
        else if(select1=="m" && select2=="dm")
        result.value=parseFloat(val)*10;
        else if(select1=="m" && select2=="cm")
        result.value=parseFloat(val)*100;
        else if(select1=="m" && select2=="mm")
        result.value=parseFloat(val)*1000;
        else if(select1=="m" && select2=="mim")
        result.value=parseFloat(val)*1000000;
        else if(select1=="m" && select2=="nm")
        result.value=parseFloat(val)*1e9;
        else if(select1=="m" && select2=="pm")
        result.value=parseFloat(val)*1e12;
        else if(select1=="m" && select2=="nmi")
        result.value=parseFloat(val)*0.000539956803;
        else if(select1=="m" && select2=="mi")
        result.value=parseFloat(val)*0.000621371192;
        else if(select1=="m" && select2=="yd")
        result.value=parseFloat(val)*1.0936133;
        else if(select1=="m" && select2=="ft")
        result.value=parseFloat(val)*3.2808399;
        else if(select1=="m" && select2=="in")
        result.value=parseFloat(val)*39.3700787;
        else if(select1=="m" && select2=="pc")
        result.value=parseFloat(val)*3.24077929e-17;
        else if(select1=="m" && select2=="ld")
        result.value=parseFloat(val)*2.60145005e-9;
        else if(select1=="m" && select2=="ly")
        result.value=parseFloat(val)*1.05700083e-16;
        else if(select1=="dm" && select2=="km")             
        result.value=parseFloat(val)*0.0001;
        else if(select1=="dm" && select2=="m")
        result.value=parseFloat(val)*0.1;
        else if(select1=="dm" && select2=="cm")
        result.value=parseFloat(val)*10;
        else if(select1=="dm" && select2=="mm")
        result.value=parseFloat(val)*100;
        else if(select1=="dm" && select2=="mim")
        result.value=parseFloat(val)*100000;
        else if(select1=="dm" && select2=="nm")
        result.value=parseFloat(val)*100000000;
        else if(select1=="dm" && select2=="pm")
        result.value=parseFloat(val)*1e11;
        else if(select1=="dm" && select2=="nmi")
        result.value=parseFloat(val)*5.39956803e-5;
        else if(select1=="dm" && select2=="mi")
        result.value=parseFloat(val)*6.21371192e-5;
        else if(select1=="dm" && select2=="yd")
        result.value=parseFloat(val)*0.10936133;
        else if(select1=="dm" && select2=="ft")
        result.value=parseFloat(val)*0.32808399;
        else if(select1=="dm" && select2=="in")
        result.value=parseFloat(val)*3.93700787;
        else if(select1=="dm" && select2=="pc")
        result.value=parseFloat(val)*3.24077929e-18;
        else if(select1=="dm" && select2=="ld")
        result.value=parseFloat(val)*2.60145005e-10;
        else if(select1=="dm" && select2=="ly")
        result.value=parseFloat(val)*1.05700083e-17;   
        else if(select1=="cm" && select2=="km")
        result.value=parseFloat(val)*1e-5;
        else if(select1=="cm" && select2=="m")
        result.value=parseFloat(val)*0.01;
        else if(select1=="cm" && select2=="dm")
        result.value=parseFloat(val)*0.1;
        else if(select1=="cm" && select2=="mm")
        result.value=parseFloat(val)*10;
        else if(select1=="cm" && select2=="mim")
        result.value=parseFloat(val)*10000;
        else if(select1=="cm" && select2=="nm")
        result.value=parseFloat(val)*10000000;
        else if(select1=="cm" && select2=="pm")
        result.value=parseFloat(val)*1e10;
        else if(select1=="cm" && select2=="nmi")
        result.value=parseFloat(val)*5.39956803e-6;
        else if(select1=="cm" && select2=="mi")
        result.value=parseFloat(val)*6.21371192e-6;
        else if(select1=="cm" && select2=="yd")
        result.value=parseFloat(val)*0.010936133;
        else if(select1=="cm" && select2=="ft")
        result.value=parseFloat(val)*0.032808399;
        else if(select1=="cm" && select2=="in")
        result.value=parseFloat(val)*0.393700787;
        else if(select1=="cm" && select2=="pc")
        result.value=parseFloat(val)*3.24077929e-19;
        else if(select1=="cm" && select2=="ld")
        result.value=parseFloat(val)*2.60145005e-11;
        else if(select1=="cm" && select2=="ly")
        result.value=parseFloat(val)*1.05700083e-18;
        else if(select1=="mm" && select2=="km")
        result.value=parseFloat(val)*1e-6;
        else if(select1=="mm" && select2=="m")
        result.value=parseFloat(val)*0.001;
        else if(select1=="mm" && select2=="dm")
        result.value=parseFloat(val)*0.01;
        else if(select1=="mm" && select2=="cm")
        result.value=parseFloat(val)*0.1;
        else if(select1=="mm" && select2=="mim")
        result.value=parseFloat(val)*1000;
        else if(select1=="mm" && select2=="nm")
        result.value=parseFloat(val)*1000000;
        else if(select1=="mm" && select2=="pm")
        result.value=parseFloat(val)*1e9;
        else if(select1=="mm" && select2=="nmi")
        result.value=parseFloat(val)*5.39956803e-7;
        else if(select1=="mm" && select2=="mi")
        result.value=parseFloat(val)*6.21371192e-7;
        else if(select1=="mm" && select2=="yd")
        result.value=parseFloat(val)*0.0010936133;
        else if(select1=="mm" && select2=="ft")
        result.value=parseFloat(val)*0.0032808399;
        else if(select1=="mm" && select2=="in")
        result.value=parseFloat(val)*0.0393700787;
        else if(select1=="mm" && select2=="pc")
        result.value=parseFloat(val)*3.24077929e-20;
        else if(select1=="mm" && select2=="ld")
        result.value=parseFloat(val)*2.60145005e-12;
        else if(select1=="mm" && select2=="ly")
        result.value=parseFloat(val)*1.05700083e-19;
        else if(select1=="mim" && select2=="km")
        result.value=parseFloat(val)*1e-9;
        else if(select1=="mim" && select2=="m")
        result.value=parseFloat(val)*1e-6;
        else if(select1=="mim" && select2=="dm")
        result.value=parseFloat(val)*1e-5;
        else if(select1=="mim" && select2=="cm")
        result.value=parseFloat(val)*0.0001;
        else if(select1=="mim" && select2=="mm")
        result.value=parseFloat(val)*0.001;
        else if(select1=="mim" && select2=="nm")
        result.value=parseFloat(val)*1000;
        else if(select1=="mim" && select2=="pm")
        result.value=parseFloat(val)*1000000;
        else if(select1=="mim" && select2=="nmi")
        result.value=parseFloat(val)*5.39956803e-10;
        else if(select1=="mim" && select2=="mi")
        result.value=parseFloat(val)*6.21371192e-10;
        else if(select1=="mim" && select2=="yd")
        result.value=parseFloat(val)*1.0936133e-6;
        else if(select1=="mim" && select2=="ft")
        result.value=parseFloat(val)*3.2808399e-6;
        else if(select1=="mim" && select2=="in")
        result.value=parseFloat(val)*3.93700787e-5;
        else if(select1=="mim" && select2=="pc")
        result.value=parseFloat(val)*3.24077929e-23;
        else if(select1=="mim" && select2=="ld")
        result.value=parseFloat(val)*2.60145005e-15;
        else if(select1=="mim" && select2=="ly")
        result.value=parseFloat(val)*1.05700083e-22;
        else if(select1=="nm" && select2=="km")
        result.value=parseFloat(val)*1e-12;
        else if(select1=="nm" && select2=="m")
        result.value=parseFloat(val)*1e-9;
        else if(select1=="nm" && select2=="dm")
        result.value=parseFloat(val)*1e-8;
        else if(select1=="nm" && select2=="cm")
        result.value=parseFloat(val)*1e-7;
        else if(select1=="nm" && select2=="mm")
        result.value=parseFloat(val)*1e-6;
        else if(select1=="nm" && select2=="mim")
        result.value=parseFloat(val)*0.001;
        else if(select1=="nm" && select2=="pm")
        result.value=parseFloat(val)*1000;
        else if(select1=="nm" && select2=="nmi")
        result.value=parseFloat(val)*5.39956803e-13;
        else if(select1=="nm" && select2=="mi")
        result.value=parseFloat(val)*6.21371192e-13;
        else if(select1=="nm" && select2=="yd")
        result.value=parseFloat(val)*1.0936133e-9;
        else if(select1=="nm" && select2=="ft")
        result.value=parseFloat(val)*3.2808399e-9;
        else if(select1=="nm" && select2=="in")
        result.value=parseFloat(val)*3.93700787e-8;
        else if(select1=="nm" && select2=="pc")
        result.value=parseFloat(val)*3.24077929e-26;
        else if(select1=="nm" && select2=="ld")
        result.value=parseFloat(val)*2.60145005e-18;
        else if(select1=="nm" && select2=="ly")
        result.value=parseFloat(val)*1.05700083e-25;
        else if(select1=="pm" && select2=="km")
        result.value=parseFloat(val)*1e-15;
        else if(select1=="pm" && select2=="m")
        result.value=parseFloat(val)*1e-12;
        else if(select1=="pm" && select2=="dm")
        result.value=parseFloat(val)*1e-11;
        else if(select1=="pm" && select2=="cm")
        result.value=parseFloat(val)*1e-10;
        else if(select1=="pm" && select2=="mm")
        result.value=parseFloat(val)*1e-9;
        else if(select1=="pm" && select2=="mim")
        result.value=parseFloat(val)*1e-6;
        else if(select1=="pm" && select2=="nm")
        result.value=parseFloat(val)*0.001;
        else if(select1=="pm" && select2=="nmi")
        result.value=parseFloat(val)*5.39956803e-16;
        else if(select1=="pm" && select2=="mi")
        result.value=parseFloat(val)*6.21371192e-16;
        else if(select1=="pm" && select2=="yd")
        result.value=parseFloat(val)*1.0936133e-12;
        else if(select1=="pm" && select2=="ft")
        result.value=parseFloat(val)*3.2808399e-12;
        else if(select1=="pm" && select2=="in")
        result.value=parseFloat(val)*3.93700787e-11;
        else if(select1=="pm" && select2=="pc")
        result.value=parseFloat(val)*3.24077929e-29;
        else if(select1=="pm" && select2=="ld")
        result.value=parseFloat(val)*2.60145005e-21;
        else if(select1=="pm" && select2=="ly")
        result.value=parseFloat(val)*1.05700083e-28;
        else if(select1=="nmi" && select2=="km")
        result.value=parseFloat(val)*1.852;
        else if(select1=="nmi" && select2=="m")
        result.value=parseFloat(val)*1852;
        else if(select1=="nmi" && select2=="dm")
        result.value=parseFloat(val)*18520;
        else if(select1=="nmi" && select2=="cm")
        result.value=parseFloat(val)*185200;
        else if(select1=="nmi" && select2=="mm")
        result.value=parseFloat(val)*1852000;
        else if(select1=="nmi" && select2=="mim")
        result.value=parseFloat(val)*1.852e9;
        else if(select1=="nmi" && select2=="nm")
        result.value=parseFloat(val)*1.852e12;
        else if(select1=="nmi" && select2=="pm")
        result.value=parseFloat(val)*1.852e15;
        else if(select1=="nmi" && select2=="mi")
        result.value=parseFloat(val)*1.15077945;
        else if(select1=="nmi" && select2=="yd")
        result.value=parseFloat(val)*2025.37183;
        else if(select1=="nmi" && select2=="ft")
        result.value=parseFloat(val)*6076.11549;
        else if(select1=="nmi" && select2=="in")
        result.value=parseFloat(val)*72913.3858;
        else if(select1=="nmi" && select2=="pc")
        result.value=parseFloat(val)*6.00192324e-14;
        else if(select1=="nmi" && select2=="ld")
        result.value=parseFloat(val)*4.81788549e-6;
        else if(select1=="nmi" && select2=="ly")
        result.value=parseFloat(val)*1.95756554e-13;
        else if(select1=="mi" && select2=="km")
        result.value=parseFloat(val)*1.609344;
        else if(select1=="mi" && select2=="m")
        result.value=parseFloat(val)*1609.344;
        else if(select1=="mi" && select2=="dm")
        result.value=parseFloat(val)*16093.44;
        else if(select1=="mi" && select2=="cm")
        result.value=parseFloat(val)*160934.4;
        else if(select1=="mi" && select2=="mm")
        result.value=parseFloat(val)*1609344;
        else if(select1=="mi" && select2=="mim")
        result.value=parseFloat(val)*1.609344e9;
        else if(select1=="mi" && select2=="nm")
        result.value=parseFloat(val)*1.609344e12;
        else if(select1=="mi" && select2=="pm")
        result.value=parseFloat(val)*1.609344e15;
        else if(select1=="mi" && select2=="nmi")
        result.value=parseFloat(val)*0.868976242;
        else if(select1=="mi" && select2=="yd")
        result.value=parseFloat(val)*1760;
        else if(select1=="mi" && select2=="ft")
        result.value=parseFloat(val)*5280;
        else if(select1=="mi" && select2=="in")
        result.value=parseFloat(val)*63360;
        else if(select1=="mi" && select2=="pc")
        result.value=parseFloat(val)*5.2155287e-14;
        else if(select1=="mi" && select2=="ld")
        result.value=parseFloat(val)*4.18662803e-6;
        else if(select1=="mi" && select2=="ly")
        result.value=parseFloat(val)*1.70107795e-13;
        else if(select1=="yd" && select2=="km")
        result.value=parseFloat(val)*0.0009144;
        else if(select1=="yd" && select2=="m")
        result.value=parseFloat(val)*0.9144;
        else if(select1=="yd" && select2=="dm")
        result.value=parseFloat(val)*9.144;
        else if(select1=="yd" && select2=="cm")
        result.value=parseFloat(val)*91.44;
        else if(select1=="yd" && select2=="mm")
        result.value=parseFloat(val)*914.4;
        else if(select1=="yd" && select2=="mim")
        result.value=parseFloat(val)*914400;
        else if(select1=="yd" && select2=="nm")
        result.value=parseFloat(val)*914400000;
        else if(select1=="yd" && select2=="pm")
        result.value=parseFloat(val)*9.144e11;
        else if(select1=="yd" && select2=="nmi")
        result.value=parseFloat(val)*0.000493736501;
        else if(select1=="yd" && select2=="mi")
        result.value=parseFloat(val)*0.000568181818;
        else if(select1=="yd" && select2=="ft")
        result.value=parseFloat(val)*3;
        else if(select1=="yd" && select2=="in")
        result.value=parseFloat(val)*36;
        else if(select1=="yd" && select2=="pc")
        result.value=parseFloat(val)*2.96336858e-17;
        else if(select1=="yd" && select2=="ld")
        result.value=parseFloat(val)*2.37876592e-9;
        else if(select1=="yd" && select2=="ly")
        result.value=parseFloat(val)*9.66521563e-17;
        else if(select1=="ft" && select2=="km")
        result.value=parseFloat(val)*0.0003048;
        else if(select1=="ft" && select2=="m")
        result.value=parseFloat(val)*0.3048;
        else if(select1=="ft" && select2=="dm")
        result.value=parseFloat(val)*3.048;
        else if(select1=="ft" && select2=="cm")
        result.value=parseFloat(val)*30.48;
        else if(select1=="ft" && select2=="mm")
        result.value=parseFloat(val)*304.8;
        else if(select1=="ft" && select2=="mim")
        result.value=parseFloat(val)*304800;
        else if(select1=="ft" && select2=="nm")
        result.value=parseFloat(val)*304800000;
        else if(select1=="ft" && select2=="pm")
        result.value=parseFloat(val)*3.048e11;
        else if(select1=="ft" && select2=="nmi")
        result.value=parseFloat(val)*0.000164578834;
        else if(select1=="ft" && select2=="mi")
        result.value=parseFloat(val)*0.000189393939;
        else if(select1=="ft" && select2=="yd")
        result.value=parseFloat(val)*0.333333333;
        else if(select1=="ft" && select2=="in")
        result.value=parseFloat(val)*12;
        else if(select1=="ft" && select2=="pc")
        result.value=parseFloat(val)*9.87789527e-18;
        else if(select1=="ft" && select2=="ld")
        result.value=parseFloat(val)*7.92921975e-10;
        else if(select1=="ft" && select2=="ly")
        result.value=parseFloat(val)*3.22173854e-17;       //vggjjhghjghj//
        else if(select1=="in" && select2=="km")
        result.value=parseFloat(val)*2.54e-5;
        else if(select1=="in" && select2=="m")
        result.value=parseFloat(val)*0.0254;
        else if(select1=="in" && select2=="dm")
        result.value=parseFloat(val)*0.254;
        else if(select1=="in" && select2=="cm")
        result.value=parseFloat(val)*2.54;
        else if(select1=="in" && select2=="mm")
        result.value=parseFloat(val)*25.4;
        else if(select1=="in" && select2=="mim")
        result.value=parseFloat(val)*25400;
        else if(select1=="in" && select2=="nm")
        result.value=parseFloat(val)*25400000;
        else if(select1=="in" && select2=="pm")
        result.value=parseFloat(val)*2.54e10;
        else if(select1=="in" && select2=="nmi")
        result.value=parseFloat(val)*1.37149028e-5;
        else if(select1=="in" && select2=="mi")
        result.value=parseFloat(val)*1.57828283e-5;
        else if(select1=="in" && select2=="yd")
        result.value=parseFloat(val)*0.0277777778;
        else if(select1=="in" && select2=="ft")
        result.value=parseFloat(val)*0.0833333333;
        else if(select1=="in" && select2=="pc")
        result.value=parseFloat(val)*8.2315794e-19;
        else if(select1=="in" && select2=="ld")
        result.value=parseFloat(val)*6.60768312e-11;
        else if(select1=="in" && select2=="ly")
        result.value=parseFloat(val)*2.68478212e-18;
        else if(select1=="pc" && select2=="km")
        result.value=parseFloat(val)*3.08567758e13;
        else if(select1=="pc" && select2=="m")
        result.value=parseFloat(val)*3.08567758e16;
        else if(select1=="pc" && select2=="dm")
        result.value=parseFloat(val)*3.08567758e17;
        else if(select1=="pc" && select2=="cm")
        result.value=parseFloat(val)*3.08567758e18;
        else if(select1=="pc" && select2=="mm")
        result.value=parseFloat(val)*3.08567758e19;
        else if(select1=="pc" && select2=="mim")
        result.value=parseFloat(val)*3.08567758e22;
        else if(select1=="pc" && select2=="nm")
        result.value=parseFloat(val)*3.08567758e25;
        else if(select1=="pc" && select2=="pm")
        result.value=parseFloat(val)*3.08567758e28;
        else if(select1=="pc" && select2=="nmi")
        result.value=parseFloat(val)*1.6661326e13;
        else if(select1=="pc" && select2=="mi")
        result.value=parseFloat(val)*1.91735116e13;
        else if(select1=="pc" && select2=="yd")
        result.value=parseFloat(val)*3.37453804e16;
        else if(select1=="pc" && select2=="ft")
        result.value=parseFloat(val)*1.01236141e17;
        else if(select1=="pc" && select2=="in")
        result.value=parseFloat(val)*1.21483369e18;
        else if(select1=="pc" && select2=="ld")
        result.value=parseFloat(val)*80272360.9;
        else if(select1=="pc" && select2=="ly")
        result.value=parseFloat(val)*3.26156378;
        else if(select1=="ld" && select2=="km")
        result.value=parseFloat(val)*384401;
        else if(select1=="ld" && select2=="m")
        result.value=parseFloat(val)*384401000;
        else if(select1=="ld" && select2=="dm")
        result.value=parseFloat(val)*3.84401e9;
        else if(select1=="ld" && select2=="cm")
        result.value=parseFloat(val)*3.84401e10;
        else if(select1=="ld" && select2=="mm")
        result.value=parseFloat(val)*3.84401e11;
        else if(select1=="ld" && select2=="mim")
        result.value=parseFloat(val)*3.84401e14;
        else if(select1=="ld" && select2=="nm")
        result.value=parseFloat(val)*3.84401e17;
        else if(select1=="ld" && select2=="pm")
        result.value=parseFloat(val)*3.84401e20;
        else if(select1=="ld" && select2=="nmi")
        result.value=parseFloat(val)*207559.935;
        else if(select1=="ld" && select2=="mi")
        result.value=parseFloat(val)*238855.708;
        else if(select1=="ld" && select2=="yd")
        result.value=parseFloat(val)*420386045;
        else if(select1=="ld" && select2=="ft")
        result.value=parseFloat(val)*1.26115814e9;
        else if(select1=="ld" && select2=="in")
        result.value=parseFloat(val)*1.51338976e10;
        else if(select1=="ld" && select2=="pc")
        result.value=parseFloat(val)*1.2457588e-8;
        else if(select1=="ld" && select2=="ly")
        result.value=parseFloat(val)*4.06312178e-8;
        else if(select1=="ly" && select2=="km")
        result.value=parseFloat(val)*9.46073047e12;
        else if(select1=="ly" && select2=="m")
        result.value=parseFloat(val)*9.46073047e15;
        else if(select1=="ly" && select2=="dm")
        result.value=parseFloat(val)*9.46073047e16;
        else if(select1=="ly" && select2=="cm")
        result.value=parseFloat(val)*9.46073047e17;
        else if(select1=="ly" && select2=="mm")
        result.value=parseFloat(val)*9.46073047e18;
        else if(select1=="ly" && select2=="mim")
        result.value=parseFloat(val)*9.46073047e21;
        else if(select1=="ly" && select2=="nm")
        result.value=parseFloat(val)*9.46073047e24;
        else if(select1=="ly" && select2=="pm")
        result.value=parseFloat(val)*9.46073047e27;
        else if(select1=="ly" && select2=="nmi")
        result.value=parseFloat(val)*5.10838578e12;
        else if(select1=="ly" && select2=="mi")
        result.value=parseFloat(val)*5.87862537e12;
        else if(select1=="ly" && select2=="yd")
        result.value=parseFloat(val)*1.03463807e16;
        else if(select1=="ly" && select2=="ft")
        result.value=parseFloat(val)*3.1039142e16;
        else if(select1=="ly" && select2=="in")
        result.value=parseFloat(val)*3.72469704e17;
        else if(select1=="ly" && select2=="pc")
        result.value=parseFloat(val)*0.306601394;
        else if(select1=="ly" && select2=="ld")
        result.value=parseFloat(val)*24611617.7;
    }
    else
    {
        document.getElementById("input1").disabled=true;
    }
}