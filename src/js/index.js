import './menu';
import './calendar';
import './swiper';
import './fancybox';


window.addEventListener("load", async () => {
    await document.fonts.ready;
    const whoWeAreHandle = document.querySelector('#who-we-are-handle');
    console.log(document.querySelector('#who-we-are-content').scrollHeight);

    if(whoWeAreHandle){
        toggleAccordion('open');
    }


    if(whoWeAreHandle.addEventListener('click',()=>{
        var whoWeAreContent = document.querySelector('#who-we-are-content');
        var clientHeight = whoWeAreContent.clientHeight;
        if(clientHeight==0){
            toggleAccordion('open');
        }else{
            toggleAccordion('close');
        }
    }));

    function toggleAccordion(state){
        var whoWeAreContent = document.querySelector('#who-we-are-content');
        
        var scrollHeight = whoWeAreContent.scrollHeight;
        console.log(scrollHeight);
        var whoWeAreArrow = document.querySelector('#who-we-are-arrow');
        if(state=='open'){
            whoWeAreArrow.classList.add('rotate-180');
            whoWeAreContent.style.height = scrollHeight + 'px';
        }
        if(state=='close'){
            whoWeAreArrow.classList.remove('rotate-180');
            whoWeAreContent.style.height = 0;
        }
    }

    window.addEventListener('resize', ()=>{
        var whoWeAreContent = document.querySelector('#who-we-are-content');
        whoWeAreContent.style.height = 'auto';
    });
});

