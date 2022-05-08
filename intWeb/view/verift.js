document.getElementById("vrf").addEventListener("submit", function(e){
	var erreur;
	var inputs = this.getElementsByTagName("input");

	for (var i = 0;i<inputs.length; i++){
		if(!inputs[i].value)
		{
			erreur = "veuillez remplir tous les champs";
		}
	}
	
	if(erreur)
	{
		e.preventDefault();
		document.getElementById("erreur").innerHTML = erreur;
		return false;	}
		
	

	

}

)
function verif_id_type()
{
    var word = document.getElementById("id_type").value;

    var numbers = /^[0-9]+$/
    if (word.match(numbers)) {
        return true;
    }
    else {
        return false;
    }




}
function verif_quantite_T()
{
    var word = document.getElementById("quantite_T").value;

    var numbers = /^[0-9]+$/
    if (word.match(numbers)) {
        return true;
    }
    else {
        return false;
    }




}












function verif_nom_type() {
    var word = document.getElementById("nom_type").value;
    var letters = /^[A-Za-z]+$/;
    if (word.match(letters)) {
        return true;
    }
    else {
        return false;
    }
}



function verif() {

    if (verif_id_typet() == false) {
        alert('l id doit etre tous en chiffres');
        return false;
    }
    if (verif_quantite_T() == false) {
        alert('la quantite doit etre tous en chiffres');
        return false;
    }
   
    

    
    if (verif_nom_type() == false) {
        alert('le nom doit etre tous en lettres');
        return false;
    }

  return true;


}