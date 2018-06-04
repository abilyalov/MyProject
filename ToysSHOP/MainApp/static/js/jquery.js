var slideNow = 1;
var slideCount = $('#slidewrapper').children().length;
var slideInterval = 3000;
var navBtnId = 0;
var translateWidth = 0;

$(document).ready(function() {
  
   
    $('.slide-nav-btn').click(function() {
        navBtnId = $(this).index();

        if (navBtnId + 1 != slideNow) {
            translateWidth = -$('#viewport').width() * (navBtnId);
            $('#slidewrapper').css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
            });
            slideNow = navBtnId + 1;
        }
    });
    setInterval(function(){
        $('#slidewrapperI')
    }, 3000);
});


function nextSlide() {
    slideNow++;
    
}

function prevSlide() {
    slideNow--;
}