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




// scroll part

// const scrollservice=document.getElementsByClassName("scroll-service");
// const scrollresume=document.getElementsByClassName("scroll-resume");
// const scrollabout=document.getElementsByClassName("scroll-about");
// const scrollcontact=document.getElementsByClassName("scroll-contact");
// const serviceheader=document.getElementById("service-header");
// const resumehead=document.getElementById("resume-head");
// const abouttoptext=document.getElementById("about-toptext");
// const contactheader=document.getElementById("contact-header");



// scrollservice.addEventListener("click",function(e){
//     e.preventDefault();
//     serviceheader.scrollIntoView({behavior:'smooth'});
// });

// scrollresume.addEventListener("click",function(e){
//     e.preventDefault();
//     resumehead.scrollIntoView({behavior:'smooth'});
// });

// scrollabout.addEventListener("click",function(e){
//     e.preventDefault();
//     abouttoptext.scrollIntoView({behavior:'smooth'});
// });

// scrollcontact.addEventListener("click",function(e){
//     e.preventDefault();
//     contactheader.scrollIntoView({behavior:'smooth'});
// });

// document.querySelector(".hireme-button").addEventListener("click",function(e){
//     e.preventDefault();
//     contactheader.scrollIntoView({behavior:'smooth'});
// });




// console.log(serviceheader);
// console.log(resumehead);
// console.log(abouttoptext); 
// console.log(contactheader);
// console.log(scrollabout);
// console.log(scrollcontact);
// console.log(scrollresume);
// console.log(scrollservice);