const parant=document.body;
const child=document.querySelector(".login");
const btn=document.querySelector(".admin");
const icon=document.querySelector(".icon_close");
const op=document.querySelector(".opcasity");
const dis=document.querySelector("#disable");

const textArray = ['Web-Developer', 'Front-end Developer', 'Back-end Developer', 'Problem Solver']; // Texts to show
  let currentIndex = 0;
  let currentText = '';
  let isDeleting = false;
  let typingSpeed = 150;  // Speed of typing
  let deletingSpeed = 100;  // Speed of deleting
  let textElement = document.querySelector('.typed');  // Select the span element to type in

  function typeText() {
    if (!isDeleting) {
      currentText = textArray[currentIndex].substring(0, currentText.length + 1); // Add one more letter
      textElement.textContent = currentText; // Update the displayed text
      
      if (currentText.length === textArray[currentIndex].length) {
        isDeleting = true;  // Start deleting once the text is fully typed
        setTimeout(typeText, 2000); // Wait for 2 seconds before deleting
      }
    } else {
      currentText = textArray[currentIndex].substring(0, currentText.length - 1); // Remove one letter
      textElement.textContent = currentText; // Update the displayed text

      if (currentText.length === 0) {
        isDeleting = false;  // After deleting, start typing again
        currentIndex = (currentIndex + 1) % textArray.length; // Move to the next text
      }
    }
  }

  setInterval(typeText, isDeleting ? deletingSpeed : typingSpeed); 




parant.removeChild(child);

btn.addEventListener("click",()=>{
    parant.appendChild(child);
    op.style.opacity=0.2;
    dis.disabled=true;
   
});

icon.addEventListener("click",()=>{
    parant.removeChild(child);
    op.style.opacity=1;
    dis.disabled=false;
});


(async function () {
    try {
      const response = await fetch('../html/navbar.html'); 
      const data = await response.text();    
      document.getElementById('navbar').innerHTML = data;

      const jsResponse = await fetch('../js/navbar.js');
      const jsCode = await jsResponse.text();
      const scriptTag = document.createElement('script'); 
      scriptTag.innerHTML = jsCode; 
      document.body.appendChild(scriptTag);  
      

      
    } catch (error) {
      console.error('Error loading navbar:', error);
    }
  })();