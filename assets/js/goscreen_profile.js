// document.querySelector("#btnScreen").addEventListener("click", () =>{
// 	window.location.href = "./screener.php";
// })

$(document).ready(function(){

		if ($( "#btnScreen" ).length) {
			$("#btnScreen").click(function(){
				window.location.href = "./screener.php";
			});
		}else{
			
		}
		// end of btnNext
});