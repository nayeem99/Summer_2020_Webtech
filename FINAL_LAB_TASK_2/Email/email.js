function validate(){

	var email = document.getElementById('email').value;
	
	
	

	if(username == ""){
		document.getElementById('emailMsg').innerHTML = "Email can't left empty";
		return false;

	}

}

function remover(){
	document.getElementById('emailMsg').innerHTML = "";
}