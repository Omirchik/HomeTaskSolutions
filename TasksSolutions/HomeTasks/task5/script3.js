
function onClick(){
	
	const table=document.querySelector('#students');

	var name=document.querySelector('#name');
	var surname=document.querySelector('#surname');
	var faculty=document.querySelector('#faculty');

	var choosen=faculty.options[faculty.selectedIndex];
	

	if(name.value==""){
		name.classList.add('error');
	}else if(surname.value==""){
		name.classList.remove('error');
		surname.classList.add('error');		
	}else if(choosen.value=='-1'){
		surname.classList.remove('error');
		faculty.classList.add('error');
	}	
	else{	
		faculty.classList.remove('error');		
		var row=table.insertRow();
		var cell1=row.insertCell(0);
		var cell2=row.insertCell(1);
		var cell3=row.insertCell(2);
		cell3.style.fontWeight='bold';
		cell1.innerHTML=name.value;
		cell2.innerHTML=surname.value;
		cell3.innerHTML=choosen.value;
		name.value="";
		surname.value="";
		
	}
	
}



const button=document.querySelector('#addStudent');
button.addEventListener('click',onClick);



