

function onClick(event){
    const img=event.currentTarget;
    const image=document.querySelector("img");
    image.src=img.src;
}

const allImages=document.getElementsByTagName("img");

for (let i = 0; i < allImages.length; i++) {
    allImages[i].addEventListener("click",onClick);
}
