let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};

/* Write your code here */

const country=document.querySelector('#countries');

for (var i = 0; i < countries.length; i++) {
	const op=document.createElement('option');
	op.textContent=countries[i];
	country.appendChild(op);

}
function func(){
	
	const countryChosen=document.getElementById('countries').value;

	const cities=document.querySelector('#cities');

	cities.innerHTML="";

	for (var i = 0; i < cities_by_country[countryChosen].length; i++) {
			const op=document.createElement('option');
			op.textContent=cities_by_country[countryChosen][i];
			cities.appendChild(op);
		
	}

}

