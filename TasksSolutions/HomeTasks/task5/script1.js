

function onClick(){
	let s11=document.getElementById("s11").value;
	let s12=document.getElementById("s12").value;
	let s13=document.getElementById("s13").value;
	let s21=document.getElementById("s21").value;
	let s22=document.getElementById("s22").value;
	let s23=document.getElementById("s23").value;
	let s31=document.getElementById("s31").value;
	let s32=document.getElementById("s32").value;
	let s33=document.getElementById("s33").value;
	
	let var1=s11*s22*s33;
	let var2=s12*s23*s31;
	let var3=s21*s32*s13;

	let sum1=var1+var2+var3;

	let var4=s13*s22*s31;
	let var5=s23*s32*s11;
	let var6=s12*s21*s33;

	let sum2=var4+var5+var6
	let det=document.getElementById("result");
	det.textContent=sum1-sum2;

}

const button=document.querySelector('#determinant');
button.addEventListener('click',onClick);