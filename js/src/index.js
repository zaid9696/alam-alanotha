import _ from 'lodash';

// import $ from 'jquery';

import 'simplebar'; // or "import SimpleBar from 'simplebar';" if you want to use it manually.
import 'simplebar/dist/simplebar.css';
// import 'owl.carousel/dist/assets/owl.carousel.css';
// import 'owl.carousel';
// import 'owl.carousel';

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);
import search from '../src/search';
import {searchResult} from '../src/searchResult';

const navMenu = document.querySelector('.nav__menu');
const sideNav = document.querySelector('.sidenav');
const container = document.querySelector('.container');
const footer = document.querySelector('.footer');
const loadIcon = document.querySelector('.loadicon');   
const cancelIcon = document.querySelector('.cancelicon'); 
const searchIcon = document.querySelector('.nav__search'); 
const frontOverlay = document.querySelector('.frontoverlay'); 
const searchInput = document.querySelector('#search'); 
const owl = document.querySelector('.owl-carousel');
const form = document.querySelector('.frontoverlay__container-start');




$(document).ready(function(){

    $(".owl-carousel").owlCarousel({
       
       
        autoplay:true,
        autoplayTimeout:6500,
        autoplayHoverPause:true,
        loop:true,
        items:1,
        nav:true,
        navText: [`<img src='${femaleUri.root_theme_uri}/img/right.svg'>` , `<img src='${femaleUri.root_theme_uri}/img/left.svg'>`],
        
       
      
       
  
    });


  });


navMenu.addEventListener('click', (e) => {


    
    
    const elmstyl = getComputedStyle(sideNav);
    const elemPosition = elmstyl.position;
    
    if(elemPosition == 'fixed'){

        sideNav.classList.remove('sideclose');
        sideNav.classList.toggle('sidenavopen');
        
    }else{
        
        sideNav.classList.remove('sidenavopen');

    sideNav.classList.toggle('sideclose');
    if(sideNav.matches('.sideclose')){
        setTimeout(() =>{

        document.querySelector('body').classList.toggle('grid-main');
            container.classList.toggle('second-grid');
            footer.classList.toggle('second-grid');

            },1300)
    }else{

        document.querySelector('body').classList.toggle('grid-main');
            container.classList.toggle('second-grid');
            footer.classList.toggle('second-grid');

    }

}

})

// Opening Search 
searchIcon.addEventListener('click',() =>{

    animateFrontoverlay();


})

// Closing Search 
cancelIcon.addEventListener('click',() =>{

    animateCloseFront()

})

// Function To Close Animate FrontOverlay

const animateCloseFront = () => {

    gsap.to('.frontoverlay', {opacity: 0, display: 'none', duration: 1.3,y: "-100%"});

}


// Function To Animate FrontOverlay

const animateFrontoverlay = () =>{

    frontOverlay.style.display = 'block';

            gsap.to('.frontoverlay', {

                opacity:1,
                y:"0%",
                duration:1.3
            });
            searchInput.focus();

}

// Closing and Opening Search By Keys
document.addEventListener('keyup', (e) =>{



    if(e.keyCode == 83){
        

           

        const inputF = document.activeElement.tagName;
             
        if(inputF == 'TEXTAREA' ||  inputF == 'INPUT'){
            
            
        }else{

            animateFrontoverlay()
            
        }

    }
    if(e.keyCode == 27){


        
        animateCloseFront()
        // frontOverlay.style.display = 'none';

    }

})

let inputLetters;


const searchResultControl = async (e) => {



    let searchValue = searchInput.value;

    let dropElement = e.target.nextElementSibling.nextElementSibling;



    

    if(searchValue == ''){
        
        
            
        form.innerHTML = '';        
        
        return
    }
    if(inputLetters == searchValue)return;




    try{

        inputLetters = searchValue;
        loadIcon.style.display = 'block';

        
       await search(searchValue).then(data => {

        if(data.length != 0){

            loadIcon.style.display = 'none';
        
            // console.log(data)
            searchResult(data);
        }else{

            loadIcon.style.display = 'none';
            loadIcon.insertAdjacentHTML('afterend', '');
            const noResult = document.querySelector('.noresult');
            form.innerHTML = '';
          
            if(noResult){
               
                noResult.remove();
            }
            const frontResult = `<p class="noresult">للاسف, لا يوجد نتائج.</p>`;
            form.insertAdjacentHTML('beforeend', frontResult)


        }


        })

    }
    catch(err){

        console.log(err);
    }



}


searchInput.addEventListener('keyup', searchResultControl);



// Animating nav


gsap.from('#menu-navsidebar .menu-item', {

    x: 200,
    opacity: 0,
    stagger: 0.3,
    duration:1

});
gsap.from('#menu-navsidebar-1 .menu-item', {

    opacity: 0,
    stagger: 0.2,
    duration:1

});

gsap.from('.item-content', {

    y: -200,
    opacity: 0,
    duration:1.5

});

gsap.from('.nav__menu', {

    opacity: 0,
    duration:1

});
gsap.from('.nav__logo', {

    opacity: 0,
    duration:1

});
gsap.from('.nav__search', {

    opacity: 0,
    duration:1

});









