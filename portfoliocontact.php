<!Docktype html>
<html>
 <head>
<style>

.button1{
	background-color: orange;
	color: red;
	margin: 30px 0px 0px 200px;
	height: 30px;
	width: 100px;
	border: none;
	border-radius: 15px;
}

.button1:hover{
	background-color: yellow;
	color: red;
	margin: 30px 0px 0px 200px;
	height: 30px;
	width: 100px;
	border: none;
	border-radius: 15px;
}



.head{
	color: red;
	margin: 100px 0px 0px 150px;
	padding-top: 25px;
	
}

.div1{
	background-color: black;
	opacity: 0.8;
	height: 500px;
	width: 500px;
	margin: 0px 0px 0px 500px;
	border-radius: 25px;
}

.edit{
	height: 30px;
	width: 250px;
	border: none;
	border-radius: 15px;
	margin: 10px 0px 0px 130px;
}


.edit2{
	height: 30px;
	width: 50px;
	border: none;
	border-radius: 15px;
	margin: 10px 0px 0px 130px;
}

.edit3{
	height: 30px;
	width: 180px;
	border: none;
	border-radius: 15px;
	margin: 10px 0px 0px 10px;
}


.chk{
	margin: 10px 0px 0px 50px;
	
}


.txt{
	height: 70px;
	width: 250px;
	border: none;
	border-radius: 15px;
	margin: 10px 0px 0px 130px;
}


</style>
<title>Contact Us</title>



 </head>
	<body style="background-image:url('homeprct.jpg'); height:100%;background-position:center;background-repeat:no-repeat;background-size:cover;color: white;font-size:20px;font-family:verdana;">
	
<div class="div1">
		
		
		<h2 class="head">Contact Us</h2></br>

		<input type="text" class="edit" name="name" id="name" size="20" placeholder=" Enter Name"><br><br>
		
		<input type="text" class="edit2" name="Phonenumber" size="1" placeholder="+91">
		<input type="tel" class="edit3" id="phone" name="phone" size="15"  placeholder=" Enter phone no"><br><br>
		
		<input type="email" class="edit" id="email" name="emailaddress" placeholder=" Enter email"  ><br><br>
		
		<textarea type="text" class="txt" name="message" rows="7" data-form-field="Message" id="message" placeholder=" Type message"></textarea>
		
		<Button class="button1" value="Submit">Send Form</Button>
		
		
	</div>
	
	</body>	
	</html>