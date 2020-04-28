$(document).ready(function(){

		var fname;
		var lname;
		var age;
		var email;
		var username;
		var password;
		var confirm;
		var alert;
		var validatedEmail;
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


		    function ValidateEmail(mail) 
		    {
		     if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
		      {
		        return (true)
		      }
		        return (false)
		    }

		    validatedEmail = ValidateEmail(email);
		    // console.log(validatedEmail);

		    if (fname == "" || lname == "" || age == "" || email == "" || validatedEmail == false || username == "" || password == "" || confirm == "" ) {
		    	++error;
		    	// console.log(error + "errors");
		    	$("#alert").show();
		    }else{
		    	if (password === confirm) {
		    		$("#registerForm").submit();
		    		// console.log(error + " no errors");
		    		$("#alert").hide();
		    	}else{
		    		$("#alert").show();
		    		// console.log(error + "errors");
		    	}
		    }
		});

		// end of btnNext
	
	
	
});