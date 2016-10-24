<html>
<head>
<title>
</title>
<script type="text/javascript">
	function validate()
	{
		var name=document.getElementById('name').value;
		var Age=document.getElementById('Age').value;
		var Email=document.getElementById('Email').value;
		var Address=document.getElementById('Address').value;
		var ContactNumber=document.getElementById('ContactNumber').value;

		 if(name=="" || Age=="" || Email=="" || Address=="" || ContactNumber=="" )
		 {
		 	alert("Please Fill The Complete Form");
		 	return false;
		 }
		 else
		 {
		 	return true;
		 }

	}
</script>
<style type="text/css">
	body
	{

		 background:url("login.jpg") no-repeat center center fixed ;
    	-webkit-background-size: cover; 
    	-moz-background-size: cover; 
    	-o-background-size:cover;
    	background-size: cover;
    	
		text-align: center;
	}
	
	h2::first-letter {
		font-size: 200%;
		color: green;
	}
	h2 {
		background-color: yellow;
		color :blue;
		font-family: serif;
		font-style: italic;
		text-decoration: underline;
	}
	div a {
		
		border :2px solid brown;
		padding: 10px 10px 10px 10px;
		background-color: brown;
		font-weight: bold;
		font-style: italic;
		color: white;
		border-radius: 1em 1em 1em 1em;
		text-decoration: none;
		}
	label {
		font-size: 32px;
		font-style:italic;
		color: gray;
	}	

</style>
</head>
<body>
<h2>SPENCERS CARS SERVICES </h2>

<div>
<a href="http:/www.facebook.com">Connect With Facebook</a>
</div>
<div class="info">
	<form action="respoonse.php" method="post" onsubmit="return validate();" >
		<FIELDSET>
		<legend></legend>
		<LABEL>
		Name : <input type="text" name="name"  id="name" />
		</LABEL>
		<br>
		<LABEL>
		Age : <input type="text" name="Age"  id="Age" />
		</LABEL> 
		<br>
		<LABEL>
			Select Gender
		<input type="radio" name="gender" value="male" checked="checked" />Male
		<input type="radio" name="gender" value="female" checked="checked" />Female
		
		</LABEL>
		<br>
		
		<LABEL>
		E-mail : <input type="text" name="Email" id="Email" />
		</LABEL>
		<br>
		<LABEL>
		Address: <input type="text" name="Address" id="Address" />
		</LABEL>
		<br>
		<LABEL>
		Contact # : <input type="text" name="ContactNumber" id="ContactNumber" />
		</LABEL>
		<br>
		<LABEL>
		<input type="file" name="user-input" />
		<input type="submit" value="submit" name="submit" />
		</LABEL>
		</FIELDSET>
		
		
	</form>

</div>
	

</body>
</html>












