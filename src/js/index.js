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
            whoWeAreContent.style.height = scrollHeight + 'px';
        }else{
            whoWeAreContent.style.height = 0;
        }
    });
}
