(function ($) {
  // Use jQuery with the shortcut - needed by Drupal
$(document).ready(function(){ // make gallery from basi url imported as text
    $('.panel-flexible-inside').each(function(){
        var title_link=($(this).find('.views-field-title .field-content a').attr('href'));
        var link= ($(this).find('.img-gallery').attr('src'));
        $(this).find('div.offer-image').prepend('<span>');
        $(this).find('div.offer-image span').html('<a href="'+title_link+'">image-link</a>');
    });
    $('.group-gallery .field-item').each(function(){
        var link= ($(this).find('.img-gallery').attr('src'));
     
        var link= ($(this).find('.img-gallery').attr('src'));
        $(this).find('.img-gallery').addClass('nivo-lightbox');
        $(this).find('.img-gallery').wrap('<a href="'+link+'"></a>');
        $(this).find('a').addClass('lightbox');
    });
});
$(document).ready(function(){
    var clearfilter =$('ul.check-facet a:has(span)');
    $(clearfilter).addClass("clearfilter");
    $(clearfilter).text("X");
});
$(document).ready(function(){  // facetapi ranges dropdown - change default input select name. Change if change facet ID
   $('#facetapi_ranges_select_facet_form_1').each(function(){ 
       $(this).find('option:selected').text('Cena');
   });
   $('#facetapi_ranges_select_facet_form_2').each(function(){
       $(this).find('option:selected').text('Powierzchnia');
   });
});

$(document).ready(function(){  // facetapi ranges - change default input value - Chnage if change faset ID or class
   $('#edit-range-from').each(function(){
       $(this).val('Cena od');      
   }) ;
   $('#edit-range-from').click(function(){
       $(this).val('');       
   }) ;
   $('#edit-range-to').each(function(){
    $(this).val('Cena do');
      }) ;
   $('#edit-range-to').click(function(){
    $(this).val('');
      }) ;
    $('.search-api-ranges-widget').each(function(){
       $(this).find('#edit-range-from--2').val('Powierzchnia od');
       $(this).find('#edit-range-to--2').val('Powierzchnia do');
   }) ;
});
$(document).ready(function(){  // zmiana etykiet wyszukiwarki
    $('.views-exposed-widget' ).each(function(){
      var label1 = $(this).find('label').text(); 
       $(this).find('input').attr("placeholder", label1);
       $(this).find('input').click(function(){
          $(this).attr("placeholder", ""); 
       });
       $(this).find('option:selected').text( label1);
    });
  
});
  console.log($.browser);
}(jQuery));
