$(document) .ready(function(){
    $('#switcher-default') .on('click' , function(){
      $('body') .removeClass('narrow');
      $('body') .removeClass('large');
      $('#switcher button') .removeClass('selected');
      $(this) .addClass('selected');
    });

    $('#switcher-narrow') .on('click' , function(){
      $('body') .addClass('narrow');
      $('body') .removeClass('large');
      $('#switcher button') .removeClass('selected');
      $(this) .addClass('selected');
    });
    //单击id名为switcher-large的标签时候为body添加large类
    $('#switcher-large') .on('click' , function(){
        $('body') .removeClass('narrow');
        $('body') .addClass('large');
        $('#switcher button') .removeClass('selected');
        $(this) .addClass('selected');
    });
   
    //toggle切换
    // $('#switcher h3') .click(function(){
    //   $('#switcher button') .toggleClass('hidden');
    // });

    // $('#switcher h3') .hover(function(){
    //   $(this) .addClass('hover');

    // },function(){
    //   $(this).removeClass('hover');
    // });

    $('#switcher') .click(function(event){
      if (event.target == this) {
        $('#switcher button') .toggleClass('hidden');
      };
      
    });
});
