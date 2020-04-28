// document.querySelector("#login").addEventListener("click", () =>{
// 	document.getElementById("authlogin").submit();	
// })

// // document.querySelector("#guest").addEventListener("click", () =>{
// // 	window.location.href = "./screener.php";
// // })


$(document).ready(function(){

	
		var email;
		var password;
		var alert;
		var error = 0;

		$("#alert").hide();
		$('#alert-receiver').hide();

		$("#login").click(function(){

		  
		    email = $("#email").val();		  
		    password = $("#password").val();

		    if (email == "" || password == "" ) {
		    	++error;
		    	console.log(error + "errors");
		    	$("#alert").show();
		    }else{
		   		$("#authlogin").submit();
		   		console.log(error + " no errors");
		   		$("#alert").hide();
		   		
		    }
		});

		// end of btnNext
	
	
	
});
