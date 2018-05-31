<?php


$host = "127.0.0.1";
$userName = "snower";
$password = "xkt12345";


$database = mysqli_connect($host,$userName,$password,"user_database");
$dataform = 'user';
$dataform2 = 'vote';
mysqli_query($database,"set names utf8");
if(isset($_POST["user-account"])||isset($_POST["user-login"]))
{
    $name = $_POST["user-name"];
    $pwd = $_POST["user-pwd"];
    $email = $_POST["user-email"];
    if ($database) 
    {
        echo "link successful!</br>";
    }
    if(isset($_POST["user-account"]))
    {
        echo "您选择的是注册！<br>";
        $judge = mysqli_query($database,"insert into $dataform(name,password,email) values('$name','$pwd','$email')");
        if($judge)
        {
            echo 'true';
        }
        else
        {
            echo 'false';
        }
    }
    else if(isset($_POST["user-login"]))
    {
        echo "您选择的是登陆！<br>";
        $search = mysqli_query($database,"select * from $dataform where name='$name' and password='$pwd'");
        $match = mysqli_num_rows($search);

        if($match!=0)
        {
            $newurl = "votepage.html";
            echo 'Login successful!<br>';
            echo 'welcome!';
            echo "<script language='javascript' type='text/javascript'>";
            echo "window.location.href='$newurl'";
            echo "</script>";
        }
        else 
        {
            echo 'Login failed!<br>';
        }
        
    }
}

function numadd($v,$base,$form)
{
    $a = mysqli_query($base,"select num from $form where id=$v");
    $b = mysqli_fetch_array($a);
    $c = $b['num']+1;
    mysqli_query($base,"update $form set num=$c where id=$v");
}
function infoshow($v,$str,$base,$form)
{
    if($str == "name")
    {
        $a = mysqli_query($base,"select name from $form where id=$v");
        $b = mysqli_fetch_array($a);
        $c = $b['name'];
        return $c;
    }
    else if($str == "num")
    {
        $a = mysqli_query($base,"select num from $form where id=$v");
        $b = mysqli_fetch_array($a);
        $c = $b['num'];
        return $c;
    }
}


if(isset($_POST["vote"]))
{
    $vote = $_POST["company-choose"]+1;
    echo "you vote:".$vote."<br><br>";
    if($vote == 1)
    {
        numadd($vote,$database,$dataform2);
    }
    else if($vote == 2)
    {
        numadd($vote,$database,$dataform2);
    }
    else if($vote == 3)
    {
        numadd($vote,$database,$dataform2);
    }
    else if($vote == 4)
    {
        numadd($vote,$database,$dataform2);
    }
    else if($vote == 5)
    {
        numadd($vote,$database,$dataform2);
    }
    else if($vote == 6)
    {
        numadd($vote,$database,$dataform2);
    }
    else if($vote == 7)
    {
        numadd($vote,$database,$dataform2);
    }
    $namevoted=infoshow($vote,"name",$database,$dataform2);
    $numvoted=infoshow($vote,"num",$database,$dataform2);
    echo "your choice:".$namevoted."<br>vote nums:".$numvoted;
}
?>