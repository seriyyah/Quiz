$(function () {

   //jQuery(document).ready(function($){

   console.log('!!!');

   $('#reloadBlock').html('<table class="tg"><thead><tr><th class="title_quiz">квиз</th></tr></thead><tbody><tr><td class="tg-0lax"><a class="block js_load_step" href="#" data-id="1"><span>Предполагаемая стоимость кухни</span></a></td></tr><tr><td class="tg-0lax"><a class="block js_load_step" href="#" data-id="2"><span>Модель кухни</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="3"><span>Форма кухни</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="4"><span>Размеры гарнитура</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="5"><span>Персональные данные</span></a></td></tr></tbody></table><br>');
   $('#reloadBlock').attr('class', 'reloadBlock');
   $('.reloadBlock').attr('style', 'display: grid');
   setInterval(function () {
      $('.reloadBlock a').on('click', function (e) {

         // e.preventDefault();

         console.log('!');

         $.ajax({

            type: "POST",

            dataType: 'json',

            async: false,

            data: { id: $(this).data('id') },

            url: "quiz.php",

            success: function (data) {

               $('.reloadBlock').html(data);
               $('#form').on('click', function (e) {
                  window.location.href = 'http://quiz/';
               });
               // data.active--;

               // if ($('.block js_load_step').length < data.count) {

               //     for (i = $('.block js_load_step').length; i < data.count; i++) {

               //         $('.block js_load_step').append('<a href="javascript:void(0);"><span>' + (i + 1) + '</span> </a>');

               //     }

               // };

               // $('#listSteps a').removeClass('active').slice(0, data.active).addClass('active');

               // $('#listSteps a').slice(data.count).remove();

               // $('#listSteps a').removeClass('no_border');

               // $('#listSteps a.active').not(':last').addClass('no_border');



            },

            error: function (a, b, c) { },

            complete: function (data) { }

         });


         return false;

      });
   }, 1000);
  
});