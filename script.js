document.addEventListener('DOMContentLoaded', () => {
	
	document.querySelector("form").onsubmit = ()=>{
		var data=document.querySelector("element").value;
		const request = new FormData();
		request.open("method","includes/signup.inc.php");
                request.onload = () => {
                    var data =request.responseText;
                    console.log('data');
                   

                    }
                request.send(); 
                return false;
}		
  
})
