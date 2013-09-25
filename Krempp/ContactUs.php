<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" href="css/style.css">
<script src="js/libs/modernizr-2.0.6.min.js"></script>
<script>
function formsubmit()
{

with(document.message_form)
{
	
	var flag=1;
	if(!fname.value.length>0)
	{
		document.getElementById("fname").style.border="solid 2px #FF0000";
		flag=0;
	}
	else
	{
		document.getElementById("fname").style.border="none";
	
	}
	
	if(!email.value.length>0)
	{
		document.getElementById("email").style.border="solid 2px #FF0000";
		flag=0;
	}
	else
	{
		document.getElementById("email").style.border="none";
	}
	
	if(!message.value.length>0)
	{
		document.getElementById("message").style.border="solid 2px #FF0000";
		flag=0;
	}
	else
	{
		document.getElementById("msgtxt").style.border="none";
	}
		
			alert("FLAG : "+flag);
	if(flag==0)
	{
		return false;
	}

	else if(flag==1)
	{
		
	
		var sendparams="fname="+fname.value+"&subject="+subject.value+"&email="+email.value+"&message="+msgtxt.value;
	
		var sendmessage;
		if (window.XMLHttpRequest)
		{
			sendmessage=new XMLHttpRequest();
		}
		else
		{
			sendmessage=new ActiveXObject("Microsoft.XMLHTTP");
		}
		sendmessage.open("POST", "sendmsg.php", true);
		sendmessage.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		sendmessage.setRequestHeader("Content-length", sendparams.length);
		sendmessage.setRequestHeader("Connection", "close");
		alert("here: ");
		sendmessage.send(sendparams);
		
		sendmessage.onreadystatechange=function()
		{
			if (sendmessage.readyState==4 && sendmessage.status==200)
			{
		
				document.getElementById("message_form").innerHTML=sendmessage.responseText;
			}
		
		}
	
	 }
	}
}
    </script>
	</head>
	<body>
	<div class="container">
	<div class="header">
	<?php
	include("header.html");
	?>
	</div>
	<div class="sidebar1">
	<?php
	include("sidebar.html");
	?>
	</div>
	<?php
	require_once './sendmsg.php';
	?>	
	<div class="content">

    <form name = "message_form" onsubmit = "return formsubmit()" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="genericForm">
    <fieldset class="background">
    <legend><B>Contact Form</B></legend>

        <table>
        <tr>
        <td align="right">Name:</td>
        <td align="left"><input type="text" name="fname" id="fname" title="First Name" class="medium" /></td>
        </tr>
        <tr>
        <td align="right">Email:</td>
        <td align="left"><input type="email" name="email" id="email" title="Email Address" class="medium" /></td>
        </tr>
        <tr>
        <td align="right">Subject:</td>
        <td align="left"><input type="text" name="subject" id="subject" title="subject" class="medium" /></td>
        </tr>
        <tr>
        <td align="right">Message:</td>
        <td align="left"><textarea title="message" name="message" id="message" class="textArea"></textarea></td>
        </tr>
        <tr><td align="right"><input type="submit" value="SUBMIT" name="submit" id="submit" title="Submit Form Button" class="submit" /> </td></tr>
        </table>
</fieldset> 
</form>
</div>

<div class="footer">
<?php
include("footer.html");
?>
</div>
</div>
</body>
</html>