


const divka=document.querySelector('#table');


function first(argument) {
	fetch('http://demo4296963.mockable.io/news-sport').then(second);
}
function second(response){
	response.text().then(third)
}
function third(text){
	divka.innerHTML=text;
}
function first2(argument) {
	fetch('http://demo4296963.mockable.io/news-politics').then(second);
}
function first3(argument) {
	fetch('http://demo4296963.mockable.io/news-bussiness').then(second);
}

button1 =document.querySelector('#sport');
button2=document.querySelector('#pol');
button3=document.querySelector('#business');


button1.addEventListener('click',first);
button2.addEventListener('click',first2);
button3.addEventListener('click',first3);


