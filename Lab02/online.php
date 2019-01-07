<html>
<style type="text/css">
body{
	background:black;
    margin-top:80px;
    }
#wholepage{ 
    box-sizing: content-box;
    width: 600px;
    height: 520px;
    padding: 20px;
    border:5px solid blue;
    background: linear-gradient(to bottom right, #00FF00, #bcbdc4);
    margin-left:auto;
    margin-right:auto;
    }
#head{
    margin-top:20px;
    }
#text{
	font-size:18px;
}
#text2{
	font-size:17px;
}
</style>

<body>
<form id="wholepage">

<?php
$fname="";
$address1="";
$address2="";
$address3="";
$size="";
$color="";
$item1="";
$item2="";
$comments="";

if($_POST['firstname']!='')
{
	$fname=$_POST['firstname'];
}	
if(isset($_POST['Color']))
{
	$color=$_POST['Color'];
}
if(isset($_POST['size']))
{
	$size=$_POST['size'];
}
if(isset($_POST['item']))
{
	$item1='<li>'.$_POST['item'].'</li><br>';
}
if(isset($_POST['item2']))
{
	$item2='<li>'.$_POST['item2'].'</li>';
}
if($_POST['address1']!='')
{
	$address1=$fname.' '.$_POST['lastname'].',<br>'.$_POST['address1'].',<br>';
}
if($_POST['address2']!='')
{
	$address2=$_POST['address2'].',<br>';
}
if($_POST['address3']!='')
{
	$address3=$_POST['address3'].'.';
}
if($_POST['comments']!='')
{
	$comments='<p id ="text"><b>Thank you for submitting your comments. We appreciate it. You said:</b></p><p id="text"><i>'.$_POST['comments'].'</i></p>';
}

echo '<h1 style="color:#B22222" id="head">Your Information System</h1>';
echo '<h3>Thank you, '.$fname.' for your perches from our web site</h3>';
echo '<h3>your item colour is: '.$color.' & T-Shirt size: '.$size.'</h3>';
echo '<p id="text"><b>Selected items/item are:</b>'.$item1.$item2.'</p>';
echo '<p id="text2"><b>your items will be sent to:</b></p><i><p id="text">'.$address1.$address2.$address3.'</i></p>';
echo $comments;
?>

</form>
</body>
</html>
