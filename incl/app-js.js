$(function () {

    //jQuery(document).ready(function($){
 
    console.log('!!!');
 
    $('#reloadBlock').html('<table class="tg"><thead><tr><th class="title_quiz">Выберите один из симптомов</th></tr></thead><tbody><tr><td class="tg-0lax"><a class="block js_load_step" href="#" data-id="1"><span>Зуб требует восстановления</span></a></td></tr><tr><td class="tg-0lax"><a class="block js_load_step" href="#" data-id="2"><span>Болит зуб</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="3"><span>Отсутствует зуб</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="4"><span>Отсутствует несколько зубов</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="5"><span>Отсутствуют все зубы (на 1 челюсти)</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="6"><span>Воспалены десны</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="7"><span>Зубной налет</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="8"><span>Не устраивает цвет зубов</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="9"><span>Не устраивает форма зубов в зоне улыбки</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="10"><span>Застревает пища между зубами</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="11"><span>Неправильный прикус  (у взрослого)</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="12"><span>У моего ребенка неправильный прикус</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="13"><span>У моего ребенка болит молочный зуб</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="14"><span>У моего ребенка разрушен молочный зуб</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="15"><span>У ребенка идет смена молочных зубов на постоянные, как защитить их от кариеса?</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="16"><span>Я беременна/планирую беременность, как сохранить здоровье зубов?</span></a></td></tr><tr><td><a class="block js_load_step" href="#" data-id="17"><span>Мне назначено удаление «восьмерки»</span></a></td></tr></tbody></table><br>');
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
    // $('#reloadBlock > a:nth-child(1)').on('click', function($) {
    //     $('.reloadBlock').html('<a class="block js_load_step" href="" data-id="1_1_1"><span>Необходимо убедиться, что каналы не требуют лечения, для этого врач проведет рентгендиагностику (стоимость снимка 350р.)</span></a>')
    // });
 });