<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Assignment 2</title>
  <meta name="description" content="Assignment 2">
  <meta name="author" content="Eric Palumbo">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  	<link rel="stylesheet" href="styles.css?v=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
</head>

<body>
	<div class="row col-xs-12">
		<div id="formdiv" class="col-xs-6">
			<h1> Chat Room</h1>
			<p> 1. First Login, by putting in your username and password<br>
				2. Chat room is automatically updated no need to refesh the page!!<br>
				3. Chat room will not be viewable until logged in!<br>
			 	4. Input a message and send it </p>
			<form >
			  Student email username:<br>
			  <input type="email" name="email" value="" id="email">
			  <br>
			  Student password:<br>
			  <input type="password" name="password" id="password">
			  <br>
			  <input type="button" value="Login" onclick="validateform()" >
			  <br>
			  Message:<br>
			  <textarea type="text" name="message" id="message"> </textarea>
			  <br>
			  <br>
			  <input type="button" value="Send Message" id="sendMessageButton" onclick="sendMessage()" >
			</form> 
		</div>

		<div id="tableDiv" class="col-xs-6">
			<h1 id="title" class="text-center"> Chat Room</h1>
			<table id="studentTable">
			 </table>
		</div>
	</div>
	
  <script src="main.js"></script>
</body>
</html>