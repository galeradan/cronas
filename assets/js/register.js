$(document).ready(function(){

		var fname;
		var lname;
		var age;
		var email;
		var username;
		var password;
		var confirm;
		var alert;
		var error = 0;

		$("#alert").hide();
		$('#alert-receiver').hide();

		$("#btnRegister").click(function(){

		    fname = $("#fName").val();
		    lname = $("#lName").val();
		    age = $("#age").val();
		    email = $("#email").val();
		    username = $("#username").val();
		    password = $("#password").val();
		    confirm = $("#confirm").val();

		    console.log(fname);
		    console.log(lname);
		    console.log(age);
		    console.log(email);
		    console.log(password);
		    console.log(confirm);

		    if (fname == "" || lname == "" || age == "" || email == "" || username == "" || password == "" || confirm == "" ) {
		    	++error;
		    	console.log(error + "errors");
		    	$("#alert").show();
		    }else{
		    	if (password === confirm) {
		    		$("#registerForm").submit();
		    		console.log(error + " no errors");
		    		$("#alert").hide();
		    	}else{
		    		$("#alert").show();
		    		console.log(error + "errors");
		    	}
		    }
		});

		// end of btnNext
	
	
	
});