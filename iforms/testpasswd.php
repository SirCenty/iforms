<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form id="loginform" name="loginform" action="" method="post">
<input type="text" name="username" /><span id="usernameError"></span>
<input type="password" name="password" /><span id="passwordError"></span>
<input type="submit" value="Submit" />
</form>


<script type="text/javascript">

window.onload = function(){
    function handleinput(){
        if(document.loginform.username.value == ""){
            document.getElementById("usernameError").innerHTML = "You must enter a username";
            return false;
        }
 
        if(document.loginform.password.value == ""){
            document.getElementById("passwordError").innerHTML = "You must enter a password";
            return false;
        }
    }
 
    document.getElementById("loginform").onsubmit = handleinput;
}
</script>
</body>
</html>
