document.addEventListener('DOMContentLoaded', () => {
	
	document.querySelector("form").onsubmit = ()=>{
		var data=document.querySelector("element").value;
		const request = new XMLHttpRequest(); // creating request object
		request.open("POST","includes/signup.inc.php");
                request.onload = () => {
                    var data =JSON.parse(request.responseText);
                    console.log('data');
                    // do what you want to do with data 

                    }
                request.send(); // sending request
                return false; // prevent from refreshing the page
}		
  
})