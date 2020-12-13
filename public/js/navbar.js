
$('.Top-navigation-sidelinks').mouseover(function(){
   let dropdownList =  $(this).find('li');
   let dropdownBtn = $(this).children()[0];

   $(dropdownBtn,dropdownList,$(this)).mouseover(function (){
      $(dropdownList).addClass('Top-navigation-drop-now');
   })
 
}).mouseleave(function () { 
   let dropdownList =  $(this).find('li');
   $(dropdownList).removeClass('Top-navigation-drop-now');
});

if(screen.width < 600){
   $('.Top-navigation-sidelinks').click(function(){
      let dropdownList =  $(this).find('li');
      $(dropdownList).toggleClass('Top-navigation-drop-now'); 
   });
}



$('.Botton-notification-btn').click(function (e) { 
   $('#notification-box-container').toggleClass('show-notifiaction-box');
});

$('#hide-notification-Box-btn').click(function(){
   $('#notification-box-container').removeClass('show-notifiaction-box');
});

$('.slider-btn').click(()=>{

   $('.Top-main-navigation-sidelink-container').toggleClass('slide-navigation');
   $('.black-background').toggleClass('show-black-background');

});

$('.black-background').click(()=>{
   $('.Top-main-navigation-sidelink-container').removeClass('slide-navigation');
   $('.black-background').removeClass('show-black-background');
});



$('.my-profile-btn').click(()=>{ 
   $('.my-profile-container').addClass('show-profile');

});

$('.hide-profile-btn').click(function (e) { 
   $('.my-profile-container').removeClass('show-profile');
});


$('#profile-pic').change(()=>{

   $('#changeProfile').submit();

});