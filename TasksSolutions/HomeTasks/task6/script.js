

/* Write your code here */
function onClick(event){

	const button=event.currentTarget;
	const parent=button.parentNode;

	parent.dataset.status='done';

}


const list=document.querySelectorAll('button');
for (var i = 0; i < list.length; i++) {
	list[i].addEventListener('click',onClick);
}