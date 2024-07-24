/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 * 
 */

"use strict";

$(document).ready(function() {
    // Event listener untuk tombol toggle sidebar
    $('[data-toggle="sidebar"]').on('click', function() {
        $('.main-sidebar').toggleClass('collapsed');
        $('.main-content').toggleClass('expanded');
    });

    // Cek ukuran layar dan sesuaikan sidebar jika perlu
    $(window).on('resize', function() {
        if ($(window).width() <= 768) {
            $('.main-sidebar').addClass('collapsed');
        } else {
            $('.main-sidebar').removeClass('collapsed');
        }
    }).trigger('resize'); // Trigger resize event on page load
});


