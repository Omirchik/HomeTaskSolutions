let cars = [{brand:'Toyota',model:'Camry','year':1999,'price':20000,image_url:"https://media.ed.edmunds-media.com/toyota/camry/2016/ot/2016_toyota_camry_LIFE1_ot_902163_1280.jpg"},
{brand:'BMW',model:'X6',year:2014,price:25000,image_url:"https://media.ed.edmunds-media.com/bmw/x6/2016/oem/2016_bmw_x6_4dr-suv_xdrive50i_fq_oem_5_1280.jpg"},
{brand:'Daewoo',model:'Nexia',year:2007,price:15000,image_url:"https://s.auto.drom.ru/i24207/c/photos/fullsize/daewoo/nexia/daewoo_nexia_695410.jpg"}];

/* Write your code here */



const list=document.querySelector('#cars');



for (var i = 0; i < cars.length; i++) {

	const car=document.createElement('div');
	car.className="card";

	const img=document.createElement('img');
	const p=document.createElement('p');

	p.textContent=cars[i]['brand']+" "+cars[i]['model'];	
	img.src=cars[i]['image_url'];


	const basket=document.createElement('div');
	basket.className="basket";

	basket.dataset.money=cars[i]['price'];
	basket.dataset.clicked='no';

	const imgIcon=document.createElement('img');
	imgIcon.src="shopping-cart.png";

	basket.appendChild(imgIcon);

	
	
	car.appendChild(img);
	car.appendChild(p);
	car.appendChild(basket);
	list.appendChild(car);

}

let count=0;
let countSum=0;
function onClick(event){
	
	const tag=event.currentTarget;
	const parent=tag.parentNode;
	

	const dollar=document.querySelector('#sum');
	const number=document.querySelector('#items');	

	const money=parseInt(parent.dataset.money);
	if(parent.dataset.clicked=="no"){
		count++;
		tag.src="dollar-symbol.png";
		countSum+=money;
		parent.dataset.clicked="yes";

	} else{
		count--;
		countSum-=money;
		tag.src="shopping-cart.png";
		parent.dataset.clicked="no";
	}
	items.textContent=count;
	dollar.textContent=countSum;

}
const listofBaskets=document.querySelectorAll('.basket img');
for (var i = 0; i < listofBaskets.length; i++) {
	listofBaskets[i].addEventListener('click',onClick);
}

const button=document.createElement('button');
button.textContent="Drop";
button.style.height="30px";
list.appendChild(button);
button.addEventListener('click',onClick2);
function onClick2(){
	const dollar=document.querySelector('#sum');
	const number=document.querySelector('#items');	
	
	count=0;
	countSum=0;
	items.textContent=count;
	dollar.textContent=countSum;
	
	const baskets = document.querySelectorAll('.basket');
	for (var i = 0; i < baskets.length; i++) {
		baskets[i].childNodes[0].src="shopping-cart.png";
	}

}