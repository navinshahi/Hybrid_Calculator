function calculate(){
    var select1=document.getElementById("select1").value;
    var select2=document.getElementById("select2").value;
    if(select1!=NaN && select2!=NaN)
    {
        var result=document.getElementById("input2");
        const arr1=select1.split("-");
        let day1=parseInt(arr1[2]);
        let mon1=parseInt(arr1[1]);
        let year1=parseInt(arr1[0]);
        const arr2=select2.split("-");
        let day2=parseInt(arr2[2]);
        let mon2=parseInt(arr2[1]);
        let year2=parseInt(arr2[0]);
        if(day2 < day1)
        {      
        // borrow days from february
        if (mon2 == 3)
        {
            //  check whether year is a leap year
            if ((year2 % 4 == 0 && year2 % 100 != 0) || (year2 % 400 == 0)) 
            {
                day2 += 29;
            }

            else
            {
                day2 += 28;
            }                        
        }
        else if (mon2 == 5 || mon2 == 7 || mon2 == 10 || mon2 == 12) 
        {
           day2 += 30; 
        }

        // borrow days from Jan or Mar or May or July or Aug or Oct or Dec
        else
        {
           day2 += 31;
        }

        mon2 = mon2 - 1;
        }
        if (mon2 < mon1)
        {
        mon2 += 12;
        year2 -= 1;
        }
        let day_diff = day2 - day1;
        let mon_diff = mon2 - mon1;
        let year_diff = year2 - year1;
        result.value=String(year_diff)+" years, "+String(mon_diff)+" months and "+String(day_diff)+" days.";
    }
}