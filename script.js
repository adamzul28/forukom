$(function(){
  var $searchlink = $('#toggl i');
  var $search  = $('#search');
  $('.menu ul li a').on('click', function(e){
    e.preventDefault();
    
    if($(this).attr('id') == 'toggl') {
      if(!$search.is(":visible")) { 
        $searchlink.removeClass('fa-search').addClass('fa-search-minus');
      } else {
        $searchlink.removeClass('fa-search-minus').addClass('fa-search');
      }
      
      $search.slideToggle(300, function(){
      });
    }
  });
  
  $('#form').submit(function(e){
    e.preventDefault();
  });