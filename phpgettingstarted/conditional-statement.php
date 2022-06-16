<?php
function checeligibilitytovote()
{
    $age = 20;
    $myname = "Samuel";
    if($age >=18)
    {
       echo"$myname You are eligible to vote" ;  
    }
    else
    {
        echo"$myname You are not eligible tovote";
    }
}
//checeligibilitytovote();

//grading
function gradingsystem()
{
$marks=56;
if($marks >=80)
{
    $grade ="A (plain)";
}
else if($marks>70)
{
    $grade ="A-";
}
else if($marks>65)
{
    $grade= "B+";
}
else if($marks>50)
{
    $grade= "B";

}

else if($marks>45)
{
    $grade="c+";

}
else if($marks<45)
{
    $grade = "fail";
}
echo "Your grade is: $grade";
}
gradingsystem();
?>