/*global WebProgrammingCourse, $*/


window.WebProgrammingCourse = {
    Models: {},
    Collections: {},
    Views: {},
    Routers: {},
    init: function () {
        'use strict';
        console.log('Hello from Backbone!');
    }
};

$(document).ready(function () {
    'use strict';
    WebProgrammingCourse.init();

   $(window).bind('scroll', function() {
   var navHeight = $( window ).height() - 70;
        if ($(window).scrollTop() > navHeight) {
            $('.navbar').addClass('fixed');
        }
        else {
            $('.navbar').removeClass('fixed');
        }
    });
});
