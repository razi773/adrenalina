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
function verif_prix()
{
    var word = document.getElementById("prix").value;

    var numbers = /^[0-9]+$/
    if (word.match(numbers)) {
        return true;
    }
    else {
        return false;
    }




}
function verif_quantite()
{
    var word = document.getElementById("quantite").value;

    var numbers = /^[0-9]+$/
    if (word.match(numbers)) {
        return true;
    }
    else {
        return false;
    }




}
function verif_id_produit()
{
    var word = document.getElementById("id_produit").value;

    var numbers = /^[0-9]+$/
    if (word.match(numbers)) {
        return true;
    }
    else {
        return false;
    }




}











function verif_nom() {
    var word = document.getElementById("nom").value;
    var letters = /^[A-Za-z]+$/;
    if (word.match(letters)) {
        return true;
    }
    else {
        return false;
    }
}



function verif() {

    if (verif_id_produit() == false) {
        alert('l id doit etre tous en chiffres');
        return false;
    }
    if (verif_quantite() == false) {
        alert('la quantite doit etre tous en chiffres');
        return false;
    }
    if (verif_prix() == false) {
        alert('le prix doit etre tous en chiffres');
        return false;
    }
    
    

    
    if (verif_nom() == false) {
        alert('le nom doit etre tous en lettres');
        return false;
    }

  return true;


}