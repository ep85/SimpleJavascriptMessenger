
$('#sendMessageButton').prop('disabled', true);
$('#sendMessageButton').css('background', 'grey');
$('#sendMessageButton').val("MUST LOGIN FIRST");
function ChatRoomRefresh(){
		if(localStorage['time'] ==0){
			
    	}
		$.get('getMessages.php', function(response) {
			    // Log the response to the console
			    var response=JSON.parse(response)
			    if(response.error){
			    	console.log(response.error)
			    }else{
			    	console.log(localStorage['time'])
			    	document.getElementById("title").innerHTML="Registration";
    				document.getElementById("studentTable").innerHTML = "";
    				var header="<tr><th>Name</th><th>Message</th></tr>";
    				$( "#studentTable" ).append(header);
			    	for(i=0;i< response.length; i++){
			    		var append="<tr>"
			    		append+="<td>"+response[i].name+"</td>";
			    		append+="<td>"+response[i].message+"</td>";
			    		append+="</tr>";
			    		$( "#studentTable" ).append(append);
				    	
			    	}
			    	//document.getElementById(course+id).innerHTML="dropped";
			    }
			});
		setTimeout(ChatRoomRefresh, 1000)
}
function sendMessage(){ 
		var username=document.getElementById ( "email" ).value;
		var mess = document.getElementById ( "message" ).value;
		var d = new Date();
		time=d.getTime()
		var serializedData={name:username, message:mess, timestamp:time };
			$.post('addMessage.php', serializedData, function(response) {
			    // Log the response to the console
			    var response=JSON.parse(response)
			    if(response.error){
			    	alert(response.error)
			    }else{
			    	console.log(response)
			    	var mess = document.getElementById ( "message" ).value=""

			    	//document.getElementById(course+id).innerHTML="dropped";
			    }
			});
}


function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}


function validateform(){  
	var username=document.getElementById ( "email" ).value;
	var pass = document.getElementById ( "password" ).value;
	var mess = document.getElementById ( "message" ).value;
	if (validateEmail(username)==null || validateEmail(username)==""){  
	  alertTXT="username invalid"; 
	  alert(alertTXT);
	}else if(pass== false && pass==true ){
	  alertTXT="Password invalid";
	  alert(alertTXT);
	}else if(mess== false && mess==true ){
	  alertTXT="Message is invalid";
	  alert(alertTXT);
	}else{
		var serializedData={email :username, password: pass};
		$.post('check_user.php', serializedData, function(response) {
		    // Log the response to the console
		    var response=JSON.parse(response)
		    if(response.error){
		    	alert(response.error)
		    }else{
		    	console.log(response)
		    	alert("Successfully Logged In, Now you can send a message")
		    	$('#sendMessageButton').prop('disabled', false);
				$('#sendMessageButton').css('background', 'blue');
				$('#sendMessageButton').val("Send Message");
		    	ChatRoomRefresh()
		    	//document.location.href="https://web.njit.edu/~ep85/assignment4/assignment2/ep85.php";
		    }
		    

		});
	}
	
}  
