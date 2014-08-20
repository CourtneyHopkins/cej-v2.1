function updateViewportDimensions() {
    var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
    return { width:x,height:y }
}

function loadGravatars() {
    // set the viewport using the function above
    viewport = updateViewportDimensions();
    // if the viewport is tablet or larger, we load in the gravatars
    if (viewport.width >= 768) {
        jQuery('.comment img[data-gravatar]').each(function(){
            jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
        });
    }
}

jQuery(document).ready(function($) {

    jQuery.fn.exists = function(){return this.length>0;}

    var viewport = updateViewportDimensions();
    if (viewport.width >= 768) { 
        if($('#header').height() != $(window).height()) {
            $('#header').height($(window).height());
        }

        if($('#content').height() != $(window).height()) {
            $('#content').height($(window).height());
        }
    }

    loadGravatars();

    $('.mobile-nav-button').click(function() {
        $('.mobile-nav-dropdown').slideToggle('fast');
    });

}); /* end of as page load scripts */
