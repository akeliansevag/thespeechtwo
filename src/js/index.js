import './menu';
import './calendar';
import './swiper';
import './fancybox';

const whoWeAreHandle = document.querySelector('#who-we-are-handle');

if(whoWeAreHandle){
    whoWeAreHandle.addEventListener('click', () => {
        const whoWeAreContent = document.querySelector('#who-we-are-content');
        var clientHeight = whoWeAreContent.clientHeight;
        var scrollHeight = whoWeAreContent.scrollHeight;
        const whoWeAreArrow = document.querySelector('#who-we-are-arrow');

        if(clientHeight == 0){
            whoWeAreArrow.classList.add('rotate-[180deg]');
            whoWeAreContent.style.height = scrollHeight + 'px';
        }else{
            whoWeAreArrow.classList.remove('rotate-[180deg]');
            whoWeAreContent.style.height = 0;
        }
    });
}
