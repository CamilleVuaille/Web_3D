//recupere les éléments html 
var	accueil = document.getElementById("accueil"),
	connexionInscription = document.getElementById("connexionInscription"),
	start = document.getElementById("start"),
	choixLvl = document.getElementById("choixLvl"),
	aConnexion = document.getElementById("aConnexion");
	
//variables globales
aConnexion.addEventListener("click", function(){
	connexionInscription.classList.remove('hidden');
	accueil.classList.add('hidden');
});
start.addEventListener("click", function(){
	choixLvl.classList.remove('hidden');
	accueil.classList.add('hidden');
});

