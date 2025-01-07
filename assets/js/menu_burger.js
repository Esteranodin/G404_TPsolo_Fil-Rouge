document.addEventListener('click', menuDisplay);
    
    const burgerIcon = document.querySelector('#burgerIcon');
    const menuBurger = document.querySelector('#menuBurger');  
    
    function menuDisplay(){
        menuBurger.classList.toggle('hidden');
    };

