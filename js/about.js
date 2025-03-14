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