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

        if(clientHeight == 0){
            whoWeAreHandle.classList.add('rotate-[180deg]');
            whoWeAreContent.style.height = scrollHeight + 'px';
        }else{
            whoWeAreHandle.classList.remove('rotate-[180deg]');
            whoWeAreContent.style.height = 0;
        }
    });
}
