const nav=document.querySelector(".sidebar");
const bar=document.querySelector("#bar");
const cross=document.querySelector("#cross");

bar.addEventListener("click",()=>{
    nav.style.display="block";
    bar.style.display="none";
    cross.style.display="block";    
});

cross.addEventListener("click",()=>{
    nav.style.display="none"; 
    bar.style.display="block";
});
