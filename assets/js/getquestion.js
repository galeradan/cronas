$(document).ready(function(){
		var last = false;

		$("#alert").hide();
		$("#notice").hide();
		$("#btnNext").click(function(){
			
		    // $.get('../controllers/sortGallery.php',function(d){
		    //     $('#gallery').html(d);
		    // });

		    if (last == false) {
		    	var chosenID = $("input[name='choices']:checked").val();
		    	console.log(chosenID);
		    	if (chosenID != null) {
		    		$.ajax({
		    		    url:'../controllers/getquestion.php',
		    		    method:'POST',
		    		    data:{
		    		        chosenID:chosenID
		    		        // ctgr:ctgr
		    		    },
		    		    success:function(response){
		    		    		// console.log(response);
		    		       	    $('#question-receiver').html(response);
		    		       	    $("#alert").hide();
		    		       	    console.log("question lenth: " + $( "#question" ).length);

		    		       	    if ($( "#question" ).length) {

		    		       	    }else{
		    		       	    	$("#btnNext").html("Close");
		    		       	    	$("#title").html("Result");
		    		       	    	$("#instruction").html("SCREENING DONE. Please read your result below before leaving");
		    		       	    	last = true;
		    		       	    }
		    		       	    // $.get("../controllers/getquestion.php").done(function(data){
		    		       	    //     // What do I do with the data?

		    		       	    //     if (data == true) {
		    		       	    //     	console.log("Last na to")
		    		       	    //     }
		    		       	    //     else{
		    		       	    //     	console.log("Dipa last");
		    		       	    //     }
		    		       	    // });
		    		    }
		    		});
		    	}
		    	else{
		    		$("#alert").show();
		    	}
		    }else{
		    	console.log("close ko na");
		    }

		    
		});

		// end of btnNext
	
	
	
});