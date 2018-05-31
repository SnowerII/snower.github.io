<?php
$choose = $_POST["company-choose"];

if(isset($_POST["submit"]))
{
    $voted  = $_POST["company-choose"];
    if($voted == "0")
    {
        echo 'Ubi';
    }
    else if($voted == "1")
    {
        echo "Tencent";
    }
    else if($voted == "6")
    {
        echo "EA";
    }
}
?>