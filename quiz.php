<?php



//var_dump($_POST['id']);

$id = $_POST['id'];



if ($id == '1') {

	$data = '
	
	<p class="title">Зуб требует восстановления</p><br><br>
	
	<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td><a class="block js_load_step" href="" data-id="1_1"><span class="content_head">Разрушение до 50% коронковой части</span></a>
         </td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="1_2"><span class="content_head">Разрушение 50-70% коронковой
                  части</span></a></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="1_3"><span class="content_head">Разрушение более 70% коронковой
                  части</span></a></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="1_4"><span class="content_head">Разрушение коронковой части с
                  заходом под десну</span></a>
         </td>

      </tr>

   </tbody>
</table>
<br>

<br>
 ';
}



if ($id == '1_1') {

   $data = '
   <p class="title">Разрушение до 50% коронковой части</p><br><br>
   <p><a class="block js_load_step" href="" data-id="1_1">
   <span class="content_head">Необходимо убедиться, что каналы не требуют
      лечения, для этого врач проведет рентгендиагностику</span>
      (стоимость снимка 350р.)</span>
</a></p>
<br>
<p><a class="block js_load_step" href="" data-id="2_3">Если необходимо лечение каналов</a></p>
   <table class="tg">
   
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td>
         <a class="block js_load_step" href="" data-id="1_1"><span class="content_head"> Восстановление зуба при лечении кариеса композитным материалом.</span> 
         <span class="content_body">Стоимость услуги от 3900 до 7500 рублей (в зависимости от места расположения кариозной полости). Точную стоимость определит врач на консультации. Консультация проводится бесплатно</span></a>.
         </td>

      </tr>
      <tr>
      <td>
      <a class="block js_load_step" href="" data-id="1_1"><span class="content_head">Восстановление зуба при лечении кариеса керамической накладкой.</span> <span class="content_body">Стоимость услуги от 18000 рублей. Точную стоимость определит врач на консультации. Консультация проводится бесплатно</span></a>.
      </td>

   </tr>
   </tbody>
</table>
<br>

<br>
  ';

}
// if($id == '1_1_1') {
// 	$data = '
//    <p><a class="block js_load_step" href="" data-id="2_1">«Возможно, требуется лечение каналов зуба»</span></a></p>
//    <br/>
//    <p><a class="block js_load_step" href="" data-id="2_3">Если необходимо лечение каналов</a></p>
// 	<br>
	
// 	<table class="tg">
//    <thead>
//       <tr>
//          <th class="title_quiz">Варианты лечения</th>
//       </tr>
//    </thead>

//    <tbody>
//       <tr>
//          <td>
//          <a class="block js_load_step" href="" data-id="">Восстановление зуба при лечении кариеса керамической накладкой. Стоимость услуги от 18000 рублей. Точную стоимость определит врач на консультации. Консультация проводится бесплатно</a>
//          </td>
//       </tr>
//       <tr>
//          <td>
//          <a class="block js_load_step" href="" data-id="">Восстановление зуба металлокерамической коронкой. Стоимость услуги от 12000 рублей. Точную стоимость определит врач на консультации. Консультация проводится бесплатно, (переход к форме записи).</a>
//          </td>
//       </tr>
//       <tr>
//          <td>
//          <a class="block js_load_step" href="" data-id="">Восстановление зуба циркониевой коронкой. Стоимость услуги от 21000 рублей. Точную стоимость определит врач на консультации. Консультация проводится бесплатно, (переход к форме записи).</a>
//          </td>
//       </tr>
//    </tbody>
// </table>
// <br>

// <br>
//   ';

// }



if ($id == '1_2') {

      $data = '
      <p class="title">Разрушение 50%-70% коронковой части</p><br><br>
<p>Необходимо убедиться, что каналы не требуют лечения, для этого врач проведет рентгендиагностику (стоимость снимка 350р.)</p>
   <br/>
   <p><a class="block js_load_step" href="" data-id="2_3">Если необходимо лечение каналов</a></p>
	<br>
	
	<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td>
         <a class="block js_load_step" href="" data-id="1_2"><span class="content_head">Восстановление зуба при лечении кариеса керамической накладкой.</span><span class="content_body"> Стоимость услуги от 18000 рублей. Точную стоимость определит врач на консультации. Консультация проводится бесплатно</span></a>.
         </td>
      </tr>
      <tr>
         <td>
         <a class="block js_load_step" href="" data-id="1_2"><span class="content_head">Восстановление зуба металлокерамической коронкой.</span><span class="content_body"> Стоимость услуги от 12000 рублей. Точную стоимость определит врач на консультации. Консультация проводится бесплатно</span></a>.
         </td>
      </tr>
      <tr>
         <td>
         <a class="block js_load_step" href="" data-id="1_2"><span class="content_head">Восстановление зуба циркониевой коронкой.</span><span class="content_body"> Стоимость услуги от 21000 рублей. Точную стоимость определит врач на консультации. Консультация проводится бесплатно</span></a>.
         </td>
      </tr>
   </tbody>
</table>
<br>

<br>
  ';
	
}
// if ($id == '1_1_2') {
// 	$data = '<a class="block js_load_step title_quiz_back" href="" data-id="1_2"><span>Если необходимо лечение каналов</span></a>
// 	<br><br>

// <table class="tg">
//    <thead>
//       <tr>
//          <th class="title_quiz">Варианты лечения</th>
//       </tr>
//    </thead>

//    <tbody>
//       <tr>
//          <td>
//             <a class="block js_load_step" href="" data-id="2_2">«Возможно, требуется лечение каналов зуба»</span></a>
//          </td>

//       </tr>
//    </tbody>
// </table>
//   ';

// }



if ($id == '1_3') {

   $data = '
   <p class="title">Разрушение более 70% коронковой части</p><br><br>
<p>Необходимо убедиться, что каналы не требуют лечения, для этого врач проведет рентгендиагностику (стоимость снимка 350р.)</p>
   <br/>
   <p><a class="block js_load_step" href="" data-id="2_3">Если необходимо лечение каналов</a></p>
	<br>
	
	<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td>
         <a class="block js_load_step" href="" data-id="1_3"><span class="content_head">Восстановление зуба металлокерамической коронкой на литой культевой вкладке.</span><span class="content_body"> Стоимость услуги от 17000 рублей. Точную стоимость определит врач на консультации. Консультация проводится бесплатно</span></a>.
         </td>
      </tr>
      <tr>
         <td>
         <a class="block js_load_step" href="" data-id="1_3"><span class="content_head">Восстановление зуба циркониевой коронкой на культевой вкладке из циркония. </span><span class="content_body">Стоимость услуги от 35000 рублей. Точную стоимость определит врач на консультации. Консультация проводится бесплатно</span></a>.
         </td>
      </tr>
   </tbody>
</table>
<br>

<br>
  ';

}
// if ($id == '1_1_3') {
// 	$data = '<a class="block js_load_step title_quiz_back" href="" data-id="1_3"><span>Если необходимо лечение каналов</span></a><br><br>

// <table class="tg">
//    <thead>
//       <tr>
//          <th class="title_quiz">Варианты лечения</th>
//       </tr>
//    </thead>

//    <tbody>
//       <tr>
//          <td>
//             <a class="block js_load_step"
//          href="" data-id="2_3">«Возможно, требуется лечение каналов зуба»></span></a>
//          </td>

//       </tr>
//    </tbody>
// </table>
//   ';

// }



if ($id == '1_4') {

   $data = '
   <p class="title">Разрушение коронковой части с заходом под десну</p><br><br>
	
	<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td>
         <a class="block js_load_step" href="" data-id="1_1_4"><span class="content_head">Вероятно, потребуется удаление зуба.</span> Стоимость
         услуги от 2500 до 7500 рублей (в зависимости от
         сложности удаления и состояния зуба). Точную стоимость определит врач на консультации. Консультация
         проводится
         бесплатно</span></a>
         </td>
      </tr>
   </tbody>
</table>
<br>
<br>
Следующий этап:

<table class="tg">
   <tbody>
      <tr>
         <td>
            <a class="block js_load_step" href="" data-id="3"> Замещение отсутствующего зуба.</a>
         </td>

      </tr>
   </tbody>
</table>
<br>
  ';

}
// if($id == '1_1_4'){
// 	$data = '<table class="tg">
//    <thead>
//       <tr>
//          <th class="title_quiz">Варианты лечения</th>
//       </tr>
//    </thead>

//    <tbody>
//       <tr>
//          <td>
//             <a class="block js_load_step" href="" data-id="3"><span>Замещение отсутствующего зуба.</span></a>
//          </td>

//       </tr>
//    </tbody>
// </table>
//   ';
	
// }

// 

if ($id == '2') {
	$data = '<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td><a class="block js_load_step" href="" data-id="2"><span class="content_head">Возможно, требуется удаление зуба.</span> <span class="content_body">Стоимость услуги
                  от 2500 до 7500 рублей (в зависимости от сложности удаления и состояния зуба). Точную стоимость
                  определит врач на консультации. Консультация проводится бесплатно</span></a>.<br>

            Следующий этап: Замещение отсутствующего зуба.<a class="block js_load_step" href="" data-id="3">«Отсутствует
               зуб»</a></span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="2"><span class="content_head">Возможно, требуется лечение каналов
                  зуба.</span><span class="content_body"> Стоимость услуги, если каналы ранее не лечились – от 2300р. за 1 канал. Стоимость услуги при
                  повторном лечении каналов – от 3300р. за 1 канал. Точную стоимость определит врач на консультации.
                  Консультация проводится бесплатно.</span></a><br>

            Следующий этап: Восстановление коронки зуба после лечения каналов <a class="block js_load_step" href=""
               data-id="1">«Зуб требует восстановления»</a></span></td>

      </tr>


   </tbody>
</table>
   ';


}
if($id == '2_1'){
	$data = '
	<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td><a class="block js_load_step" href="" data-id="2_1"><span class="content_head">Восстановление зуба при лечении кариеса композитным
                  материалом.</span> <span class="content_body">Стоимость услуги от 3900 до 7500 рублей (в зависимости от места расположения кариозной
                  полости). Точную стоимость определит врач на консультации. Консультация проводится бесплатно.</a></span>
         </td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="2_1"><span class="content_head">Восстановление зуба при лечении
                  кариеса керамической накладкой.</span> <span class="content_body">Стоимость услуги от 18000 рублей. Точную стоимость определит врач на
                  консультации. Консультация проводится бесплатно.</a></span>
         </td>

      </tr>


   </tbody>
</table>
    ';
}
if ($id == '2_2'){
	$data = '
	<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td"><a class="block js_load_step" href="" data-id="2_2"><span class="content_head">Восстановление зуба при лечении кариеса керамической
                  накладкой.</span><span class="content_body"> Стоимость услуги от 18000 рублей. Точную стоимость определит врач на консультации.
                  Консультация проводится бесплатно</a>.</span></td>
   
      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="2_2" data-id="#"><span class="content_head">Восстановление зуба
                  металлокерамической коронкой.</span> <span class="content_body">Стоимость услуги от 12000 рублей. Точную стоимость определит врач на
                  консультации. Консультация проводится бесплатно.</a></span></td>
   
      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="2_2"><span class="content_head">Восстановление зуба циркониевой
                  коронкой.</span><span class="content_body"> <span class="content_body">Стоимость услуги от 21000 рублей. Точную стоимость определит врач на консультации. Консультация
                  проводится бесплатно.</a></span></td>
   
      </tr>


   </tbody>
</table>
   ';
}
// 
if ($id == '2_3'){
	$data = '
	<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td><a class="block js_load_step" href="" data-id="2_3"><span class="content_head">Восстановление зуба металлокерамической коронкой на
                  литой культевой вкладке.</span> <span class="content_body">Стоимость услуги от 17000 рублей. Точную стоимость определит врач на
                  консультации. Консультация проводится бесплатно.</a></span>
         </td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="2_3"><span class="content_head">Восстановление зуба циркониевой
                  коронкой на культевой вкладке из циркония.</span> <span class="content_body">Стоимость услуги от 35000 рублей. Точную стоимость
                  определит врач на консультации. Консультация проводится бесплатно.</a></span>
         </td>

      </tr>


   </tbody>
</table>
    ';

}
// 
if($id == '3'){
	$data = '<p class="title">Отсутствует зуб</p><br><br>
	<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td><a class="block js_load_step" href="" data-id="3"><span class="content_head">Установка дентального имплантата.</span><span class="content_body"> Стоимость услуги
                  от 25000 рублей (в зависимости от выбранной системы имплантации и количества устанавливаемых
                  имплантатов). Если собственной костной ткани недостаточно, потребуется операция по наращиванию костной
                  ткани, стоимость от 45000 рублей. Точную стоимость определит врач на консультации. Консультация
                  проводится бесплатно</a>. </span>
            <br>
            <span class="content_body">Следующий этап через 3-6 месяцев: Протезирование на имлантате. Стоимость услуги от 17000рублей (в
               зависимости от выбранной системы имплантации и количества единиц в ортопедической конструкции).

            </span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="3"><span class="content_head">Установка моста с опорой на
                  соседние зубы.</span><span class="content_body"> Стоимость услуги от 30000 рублей (Без учета стоимости терапевтической подготовки
                  опорных зубов). Точную стоимость определит врач на консультации. Консультация проводится
                  бесплатно.</a></span></br>

            <span>Предварительный этап: <a class="block js_load_step" href="" data-id="2_3">Терапевтическая подготовка
                  опорных зубов.</a></span></td>

      </tr>


   </tbody>
</table>
    ';
}
// 
if($id == '4'){

	$data = '<p class="title">Отсутствует несколько зубов</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td><a class="block js_load_step" href="" data-id="4"><span class="content_head">Установка дентальных имплантатов в позиции
                  отсутствующих зубов.</span> <span class="content_body">Стоимость услуги от 25000 рублей (в зависимости от выбранной системы имплантации
                  и количества устанавливаемых имплантатов). Если собственной костной ткани недостаточно, потребуется
                  операция по наращиванию костной ткани, стоимость от 45000 рублей. Точную стоимость определит врач на
                  консультации. Консультация проводится бесплатно</a>.
            <br>
            Следующий этап через 3-6 месяцев: Протезирование на имлантатах. Стоимость услуги от 17000 рублей за 1
            единицу (в зависимости от выбранной системы имплантации и количества единиц в ортопедической
            конструкции).</span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="4"><span class="content_head">Установка частично съемного
                  акрилового протеза.</span> <span class="content_body">Стоимость услуги от 25000 рублей (Без учета стоимости терапевтической подготовки
                  опорных зубов). Точную стоимость определит врач на консультации. Консультация проводится бесплатно</span>
            </a>.
            <br>
            <span>Предварительный этап: <a class="block js_load_step" href="" data-id="2_3">Терапевтическая подготовка
                  опорных зубов.</a></span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="4"><span class="content_head">Если фронтальная группа зубов
                  сохранилась, возможна установка бюгельного протеза.</span> <span class="content_body">Стоимость услуги зависит от типа крепления
                  протеза, от 35000 до 60000 рублей (Без учета стоимости терапевтической подготовки опорных зубов).
                  Точную стоимость определит врач на консультации. Консультация проводится бесплатно</span</a>.

            <br>
            <span>Предварительный этап: <a class="block js_load_step" href="" data-id="2_3">Терапевтическая подготовка
                  опорных зубов.</a></span></td>

      </tr>


   </tbody>
</table>
    ';

}
// 
if($id == '5'){

	$data = '<p class="title">Отсутствуют все зубы</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>

      <tr>
         <td><a class="block js_load_step" href="" data-id="5"><span class="content_head">Протезирование полным съемным протезом с опорой на
                  имплантаты «All-on-4».</span> <br><span class="content_body">

                  Первый этап – установка 4 имплантатов. Стоимость услуги от 100000 рублей (на имплантах системы
                  Osstem). Если собственной костной ткани недостаточно, потребуется операция по наращиванию костной
                  ткани, стоимость от 45000 рублей. Точную стоимость определит врач на консультации. Консультация
                  проводится бесплатно</a>. <br>

            Следующий этап через 3-6 месяцев: Протезирование на имлантатах. Стоимость услуги от 120000 рублей за 1
            челюсть (в зависимости от выбранной системы крепления протеза).</span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="5"><span class="content_head">Установка полного съемного
                  акрилового протеза.</span><span class="content_body"> Стоимость услуги от 30000 рублей. Точную стоимость определит врач на консультации.
                  Консультация проводится бесплатно </a>. </span></td>

      </tr>

   </tbody>
</table>
    ';

}

// 
if($id == '6'){

	
	$data = '<p class="title">Воспалены десны</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td><a class="block js_load_step" href="" data-id="6_1"><span class="content_head">Легкое покраснение десны</span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="6_2"><span class="content_head">Десна воспалена, есть небольшие
                  зубо-десневые карманы</a></span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="6_3"><span class="content_head">Десна сильно воспалена, оголены
                  шейки зубов</a></span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="6_4"><span class="content_head">Десна сильно воспалена, оголены
                  шейки зубов, зубы подвижны</a></span></td>

      </tr>

   </tbody>
</table>
   ';

}
if($id == '6_1'){

	$data = '<p class="title">Легкое покраснение десны</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td><a class="block js_load_step" href="" data-id="6_1"><span class="content_head">Вероятно, это гингивит – начальная стадия
                  пародонтита. Необходимо проведение профессиональной гигиены полости рта.</span> <span class="content_body">Стоимость услуги от 4000
                  рублей (в зависимости от применяемых методик). Точную стоимость определит врач на консультации.
                  Консультация проводится бесплатн</a>.</span></td>

      </tr>
   </tbody>
</table>
   ';

}
if($id == '6_2'){
	$data = '
	<p class="title">Десна воспалена, есть небольшие зубо-десневые карманы</p>
<p>Вероятно, это пародонтит. Посещение врача необходимо в ближайшее время для определения степени развития пародонтита и
   проведения лечения.</p> <br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="6_2"><span class="content_head">Профессиональная гигиена полости рта
                  с удалением наддесневых и поддесневых отложений.</span> <span class="content_body">Стоимость услуги 350 рублей за 1 зуб. Точную
                  стоимость определит врач на консультации. Консультация проводится бесплатно </a>.</span>
         </td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="6_2"><span class="content_head">Наложение лечебной повязки на десну.</span><span class="content_body">
                  Стоимость услуги 1000 рублей за 1 челюсть. Точную стоимость определит врач на консультации.
                  Консультация проводится бесплатно</a>. </span></td>

      </tr>
   </tbody>
</table>
    ';
}

if($id == '6_3'){
	$data = '
	<p class="title">Десна сильно воспалена, оголены шейки зубов</p>
<p>Посещение врача необходимо в ближайшее время для определения степени развития пародонтита и проведения лечения.</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="6_3"><span class="content_head">Проведение кюретажа (удаление
                  поддесневых отложений ручным методом).</span><span class="content_body"> Стоимость услуги от 1000 до 2500 рублей за 1 зуб (в зависимости
                  от выбранной методики). Точную стоимость определит врач на консультации. Консультация проводится
                  бесплатно</a>.</span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="6_3"><span class="content_head">Шинирование зубов.</span><span class="content_body"> Стоимость услуги
                  300 рублей за 1 соединение. Точную стоимость определит врач на консультации. Консультация проводится
                  бесплатно</a>.

            </span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="6_3"><span class="content_head">Лоскутная операция (удаление
                  глубоких поддесневых отложений).</span><span class="content_body"> Стоимость услуги от 5000 до 8000 рублей (в зависимости от области
                  проведения операции). Точную стоимость определит врач на консультации. Консультация проводится
                  бесплатно</a>. </span></td>

      </tr>
   </tbody>
</table>
    ';
}

if($id == '6_4'){
	$data = '
	<p class="title">Десна сильно воспалена, оголены шейки зубов, зубы подвижны</p>
<p>Посещение врача необходимо в ближайшее время для определения степени развития пародонтита и проведения лечения.</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="6_4"><span class="content_head">Шинирование зубов.</span><span class="content_body"> Стоимость услуги
                  300 рублей за 1 соединение. Точную стоимость определит врач на консультации. Консультация проводится
                  бесплатно)</a>.</span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="6_4"><span class="content_head">Лоскутная операция (удаление
                  глубоких поддесневых отложений).</span><span class="content_body"> Стоимость услуги от 5000 до 8000 рублей (в зависимости от области
                  проведения операции). Точную стоимость определит врач на консультации. Консультация проводится
                  бесплатно</a>.</span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="6_4"><span class="content_head">Удаление подвижных зубов при
                  пародонтите.</span><span class="content_body"> Стоимость услуги от 1200 рублей (в зависимости от степени подвижности и количества
                  удаляемых зубов). Точную стоимость определит врач на консультации. Консультация проводится
                  бесплатно</a>.
            <br>
            Следующий этап:<a href="" id="3">Замещение отсутствующего зуба.</a> </span></td>

      </tr>
   </tbody>
</table>
   ';
}
// Зубной налет
if($id == '7'){

	$data = '
	<p class="title">Зубной налет</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="7_1"><span class="content_head">Мягкий светлый налет на
                  зубах</a></span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="7_2"><span class="cotent_head">Темный налет на зубах</a></span>
         </td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="7_3"><span class="content_head">Зубной камень, неприятный запах
                  изо рта</a></span></td>

      </tr>

   </tbody>
</table>
   ';
	
}

if($id == '7_1'){

	$data = '
	<p class="title">Мягкий светлый налет на зубах</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="7_1"><span class="content_head">Проведение профессиональной гигиены
                  полости рта.</span><span class="content_body"> Стоимость услуги от 4000 рублей (в зависимости от применяемых методик). </a></span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="7_1"><span class="content_head">Корректировка мануальных навыков
                  (обучение правильной чистке зубов в домашних условиях).</span><span class="content_body"> Стоимость услуги 500 рублей.</a></span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="7_1"><span class="content_head">Замена привычных домашних средств
                  индивидуальной гигиены полости рта.</span> <span class="content_body">Консультация врача по подбору средств гигиены – бесплатно.
                  Возможно приобретение в клинике необходимых средств по уходу.</a></span></td>

      </tr>

   </tbody>
</table>

<p>Точную стоимость определит врач на консультации. Консультация проводится бесплатно </a>. </p>
<br>
   ';

}

if($id == '7_2'){

	$data = '
	<p class="title">Темный налет на зубах</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="7_2"><span class="content_head">Проведение профессиональной гигиены
                  полости рта.</span> <span class="content_body">Стоимость услуги от 4000 рублей (в зависимости от применяемых методик). </a></span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="7_2"><span class="content_head">Корректировка мануальных навыков
                  (обучение правильной чистке зубов в домашних условиях).</span> <span class="content_body">Стоимость услуги 500 рублей.</a></span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="7_2"><span class="content_head">Замена привычных домашних средств
                  индивидуальной гигиены полости рта.</span><span class="content_body"> Консультация врача по подбору средств гигиены – бесплатно.
                  Возможно приобретение в клинике необходимых средств по уходу.</a></span></td>

      </tr>

   </tbody>
</table>

<p>Точную стоимость определит врач на консультации. Консультация проводится бесплатно </a>. </p>
<br>
    ';

}


if($id == '7_3'){
	$data = '
	<p class="title">Зубной камень, неприятный запах изо рта</p>
<p>Возможно, это связано не только с неправильной гигиеной полости рта, но и с заболеваниями ЖКТ. Проконсультируйтесь с
   гастроэнтерологом!</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="7_3"><span class="content_head">Проведение профессиональной гигиены
                  полости рта.</span><span class="content_body"> Стоимость услуги от 4000 рублей (в зависимости от применяемых методик). </a></span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="7_3"><span class="content_head">Корректировка мануальных навыков
                  (обучение правильной чистке зубов в домашних условиях).</span><span class="content_body"> Стоимость услуги 500 рублей.</a></span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="7_3"><span class="content_head">Замена привычных домашних средств
                  индивидуальной гигиены полости рта.</span><span class="content_body"> Консультация врача по подбору средств гигиены – бесплатно.
                  Возможно приобретение в клинике необходимых средств по уходу.</a></span></td>

      </tr>

   </tbody>
</table>

<p>Точную стоимость определит врач на консультации. Консультация проводится бесплатно </a>. </p>
<br>
    
	';

}


// Не устраивает цвет зубов

if($id == '8'){

	$data = '
	<p class="title">Не устраивает цвет зубов</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="8"><span class="content_head">Профессиональная гигиена полости рта
                  – возвращение естественного цвета эмали зубов. Процедура показана не реже 1 раза в 4-6 месяцев.</span><span class="content_body">
                  Стоимость услуги от 4000 рублей (в зависимости от применяемых методик). Точную стоимость определит
                  врач на консультации. Консультация проводится бесплатно</a>.</span>
         </td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="8"><span class="content_head">Профессиональное отбеливание зубов –
                  осветление эмали зубов на 6-12 тонов. </span><span class="content_body">Стоимость услуги от 12000 рублей (в зависимости от применяемых
                  методик). Указана цена без учета стоимости замены пломб и лечения кариеса на зубах, подлежащих
                  отбеливанию. Для сохранения эффекта требуется поддержка методиками домашнего отбеливания. Точную
                  стоимость определит врач на консультации. Консультация проводится бесплатно</a>.</span>
         </td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="8"><span class="content_head">Установка виниров на фронтальную
                  группу зубов – это не только коррекция цвета зубов, но и их формы.</span> <span class="content_body">Стоимость услуги – от 22000 рублей
                  за 1 винир (зависит от количества единиц в ортопедической конструкции). Длительный срок службы и
                  наилучший эстетический эффект! Точную стоимость определит врач на консультации. Консультация
                  проводится бесплатно</a>.

            </span></td>

      </tr>

   </tbody>
</table>
   ';


}

if($id == '9'){

	$data = '
	<p class="title">Не устраивает форма зубов в зоне улыбки</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>

      <td class="tg-0lax"><a class="block js_load_step" href="" data-id="9"><span class="content_head">Установка виниров или керамических
               полукоронок на фронтальную группу зубов – это лучшее решение для коррекции формы зубов.</span><span class="content_body"> Стоимость услуги
               – от 22000 рублей за 1 винир/полукоронку (зависит от количества единиц в ортопедической конструкции).
               Длительный срок службы и наилучший эстетический эффект! Точную стоимость определит врач на консультации.
               Консультация проводится бесплатно</a>.</span></td>

      </tr>

   </tbody>
</table>
   ';

}

// Застревает пища между зубами
if($id == '10'){

	$data = '
	<p class="title">Застревает пища между зубами</p>
<p>Этот симптом требует немедленной консультации стоматолога, возможно это признак более серьезной проблемы. Врач
   назначит лечение для устранения проблемы.</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="10"><span class="content_head">Профессиональная гигиена полости
                  рта.</span> <span class="content_body">Стоимость услуги от 4000 рублей (в зависимости от применяемых методик). Точную стоимость
                  определит врач на консультации. Консультация проводится бесплатно</a>.</span>
         </td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="10"><span class="content_head">Проведение кюретажа (удаление
                  поддесневых отложений ручным методом). </span><span class="content_body">Стоимость услуги от 1000 до 2500 рублей за 1 зуб (в зависимости
                  от выбранной методики). Точную стоимость определит врач на консультации. Консультация проводится
                  бесплатно</a>.</span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="10"><span class="content_head">Лоскутная операция (удаление
                  глубоких поддесневых отложений).</span><span class="content_body"> Стоимость услуги от 5000 до 8000 рублей (в зависимости от области
                  проведения операции). Точную стоимость определит врач на консультации. Консультация проводится
                  бесплатно</a>.</span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="10"><span class="content_head">Возможно – причина проблемы в
                  нерациональном протезировании или неправильном прикусе. Для планирования лечения врачом будут
                  назначены и проведены дополнительные методы диагностики и составлен план лечения.</span> <span class="content_body">Консультация
                  проводится бесплатно</a>.</span></td>

      </tr>

   </tbody>
</table>
   ';

}

// Неправильный прикус (у взрослого)
if($id == '11'){

	$data = '
	<p class="title">Неправильный прикус (у взрослого)</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="11_1"><span class="content_head">Исправление аномалий прикуса с
                  помощью лечения на брекет-системах</a></span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="11_2"><span class="content_head">Исправление аномалий прикуса с
                  помощью элайнеров (прозрачных кап)</a></span></td>

      </tr>

   </tbody>
</table>
   ';
}

if($id == '11_1'){

	$data = '
	<p class="title">Исправление аномалий прикуса с помощью лечения на брекет-системах</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="11_1"><span class="content_head">Лечение с применением классической
                  брекет-системы.</span><span class="content_body"> Установка системы на 1 челюсть от 23000 рублей. Длительность лечения зависит от
                  степени аномалии прикуса, контрольные приемы один раз в 2-3 недели, стоимость контрольного приема
                  1500-3000 рублей за коррекцию системы на 1 челюсти.
                  <br>
                  По завершении этапа активного лечения: ретенционный этап. Стоимость установки ретейнера 8000р. на 1
                  челюсть. </a></span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="11_1"><span class="content_head">Лечение с применением самолигирующей
                  металлической брекет-системы.</span><span class="content_body"> Установка системы на 1 челюсть от 35000 рублей. Длительность лечения
                  зависит от степени аномалии прикуса, контрольные приемы один раз в 4-6 недель, стоимость контрольного
                  приема 1500-3000 рублей за коррекцию системы на 1 челюсти.
                  <br>
                  По завершении этапа активного лечения: ретенционный этап. Стоимость установки ретейнера 8000р. га 1
                  челюсть. </a></span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="11_1"><span class="content_head">Лечение с применением самолигирующей
                  эстетической брекет-системы.</span><span class="content_body"> Установка системы на 1 челюсть 45000 рублей. Длительность лечения зависит
                  от степени аномалии прикуса, контрольные приемы один раз в 4-6 недель, стоимость контрольного приема
                  1500-3000 рублей за коррекцию системы на 1 челюсти.
                  <br>
                  По завершении этапа активного лечения: ретенционный этап. Стоимость установки ретейнера 8000р. га 1
                  челюсть. </a></span></td>

      </tr>
   </tbody>
</table>

<p>Точную стоимость определит врач на консультации. Консультация проводится бесплатно</a>.</p>
<br>
   ';

}

if($id == '11_2'){

	$data = '
	<p class="title">Исправление аномалий прикуса с помощью элайнеров (прозрачных кап)</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="11_2"><span class="content_head">Лечение элайнерами 3D-Smile.</span><span class="content_body">
                  Стоимость услуги от 150000 до 300000 рублей Длительность и стоимость лечения зависит от степени
                  аномалии прикуса.
                  <br>
                  Точную стоимость определит врач на консультации. Консультация проводится бесплатно</a>.</span>
         </td>

      </tr>
   </tbody>
</table>
   ';

}

// У моего ребенка неправильный прикус 
if($id=='12'){

	$data = '
	<p class="title">У моего ребенка неправильный прикус </p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="12_1"><span class="content_head">Исправление аномалий прикуса с
                  помощью ортодонтических пластин</a></span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="12_2"><span class="content_head">Исправление аномалий прикуса с
                  помощью лечения на брекет-системах</a></span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="12_3"><span class="content_head">Исправление аномалий прикуса с
                  помощью съемной и несъемной ортодонтической аппаратуры</a></span></td>

      </tr>
   </tbody>
</table>
    
	';

}

if($id == '12_1'){

	$data = '
	<p class="title">Исправление аномалий прикуса с помощью ортодонтических пластин</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="12_1"><span class="content_head">Изготовление пластин без винтов и с
                  винтами, по показаниям.</span><span class="content_body"> Стоимость услуги от 7500 рублей. Контрольные приемы с периодичностью,
                  назначенной врачом, стоимость контрольного приема 1000 рублей.
                  <br>
                  Точную стоимость определит врач на консультации. Консультация проводится бесплатно</a>.</span>
         </td>

      </tr>
   </tbody>
</table>
    
	';

}

if($id == '12_2'){

	$data = '
	<p class="title">Исправление аномалий прикуса с помощью лечения на брекет-системах</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="12_2"><span class="content_head">Лечение с применением классической
                  брекет-системы.</span><span class="content_body"> Установка системы на 1 челюсть от 23000 рублей. Длительность лечения зависит от
                  степени аномалии прикуса, контрольные приемы один раз в 2-3 недели, стоимость контрольного приема
                  1500-3000 рублей за коррекцию системы на 1 челюсти.
                  <br>
                  По завершении этапа активного лечения: ретенционный этап. Стоимость установки ретейнера 8000р. на 1
                  челюсть. </a></span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="12_2"><span class="content_head">Лечение с применением самолигирующей
                  металлической брекет-системы.</span><span class="content_body">Установка системы на 1 челюсть от 35000 рублей. Длительность лечения
                  зависит от степени аномалии прикуса, контрольные приемы один раз в 4-6 недель, стоимость контрольного
                  приема 1500-3000 рублей за коррекцию системы на 1 челюсти.
                  <br>
                  По завершении этапа активного лечения: ретенционный этап. Стоимость установки ретейнера 8000р. га 1
                  челюсть. </a></span></td>

      </tr>
      <td class="tg-0lax"><a class="block js_load_step" href="" data-id="12_2"><span class="content_head">Лечение с применением самолигирующей
               эстетической брекет-системы.</span><span class="content_body"> Установка системы на 1 челюсть 45000 рублей. Длительность лечения зависит от
               степени аномалии прикуса, контрольные приемы один раз в 4-6 недель, стоимость контрольного приема
               1500-3000 рублей за коррекцию системы на 1 челюсти.
               <br>
               По завершении этапа активного лечения: ретенционный этап. Стоимость установки ретейнера 8000р. га 1
               челюсть. </a></span></td>

      </tr>
   </tbody>
</table>

<p>Точную стоимость определит врач на консультации. Консультация проводится бесплатно</a>.</p>
<br>
   ';

}

if($id == '12_3'){

	$data = '
	<p class="title">Исправление аномалий прикуса с помощью съемной и несъемной ортодонтической аппаратуры</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="12_3"><span class="content_head">Изготовление и фиксация
                  ортодонтического аппарата по показаниям.</span><span class="content_body"> Стоимость услуги от 1500 до 30000 рублей. Контрольные приемы
                  с периодичностью, назначенной врачом, стоимость контрольного приема 1000-1500 рублей.
                  <br>
                  Точную стоимость определит врач на консультации. Консультация проводится бесплатно</a>.</span>
         </td>

      </tr>
   </tbody>
</table>
    
	';

}

//  У моего ребенка болит молочный зуб
if($id == '13'){
	$data = '
	<p class="title">У моего ребенка болит молочный зуб</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="13"><span class="content_head">Возможно, требуется удаление зуба.</span><span class="content_body">
                  Стоимость услуги от 500 до 1700 рублей (в зависимости от степени резорбции корней). Точную стоимость
                  определит врач на консультации. Консультация проводится бесплатно.</a>.</span>
         </td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="13"><span class="content_head">Возможно, требуется лечение каналов
                  зуба.</span><span class="content_body"> Стоимость услуги при обратимом пульпите – от 6000р. Стоимость услуги при необратимом пульпите –
                  от 7000р. Точную стоимость определит врач на консультации. Консультация проводится бесплатно</a>.</span>
         </td>

      </tr>
   </tbody>
</table>
    
	';
}

// У моего ребенка разрушен молочный зуб

if($id == '14'){
	$data = '
	<p class="title">У моего ребенка разрушен молочный зуб</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="14"><span class="content_head">Восстановление зуба при лечении
                  кариеса молочного зуба.</span><span class="content_body"> Стоимость услуги от 2500 до 6000 рублей (в зависимости от места расположения
                  кариозной полости). Точную стоимость определит врач на консультации. Консультация проводится
                  бесплатно</a>.</span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="14"><span class="content_head">Возможно, требуется удаление зуба.</span><span class="content_body">
                  Стоимость услуги от 500 до 1700 рублей (в зависимости от степени резорбции корней). Точную стоимость
                  определит врач на консультации. Консультация проводится бесплатно.</a>.</span>
         </td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="14"><span class="content_head">Возможно, требуется лечение каналов
                  зуба. Необходимо убедиться, что каналы не требуют лечения, для этого врач проведет рентгендиагностику</span><span class="content_body">
                  (стоимость снимка 350р.) Стоимость услуги при обратимом пульпите – от 6000р. Стоимость услуги при
                  необратимом пульпите – от 7000р. Точную стоимость определит врач на консультации. Консультация
                  проводится бесплатно</a>.</span></td>

      </tr>
   </tbody>
</table>
   ';
}


// У ребенка идет смена молочных зубов на постоянные, как защитить их от кариеса?
if($id == '15'){
	$data = '
	<p class="title">У ребенка идет смена молочных зубов на постоянные, как защитить их от кариеса?</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="15"><span class="content_head">Профессиональная гигиена полости
                  рта.</span> <span class="content_body">Стоимость услуги при молочном прикусе 2000 рублей. Стоимость услуги при сменном прикусе от 3000
                  рублей (в зависимости от применяемых методик). Точную стоимость определит врач на консультации.
                  Консультация проводится бесплатно</a>.</span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="15"><span class="content_head">Проведение герметизации фиссур
                  постоянных зубов неинвазивным методом.</span><span class="content_body"> Стоимость услуги от 1100 рублей за 1 зуб. Точную стоимость
                  определит врач на консультации. Консультация проводится бесплатно</a>.</span>
         </td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="15"><span class="content_head">Проведение герметизации фиссур
                  постоянных зубов инвазивным методом (с расшлифовкой).</span><span class="content_body"> Стоимость услуги от 1600 рублей за 1 зуб. Точную
                  стоимость определит врач на консультации. Консультация проводится бесплатно</a>.</span>
         </td>

      </tr>
   </tbody>
</table>
    ';
}


// Я беременна/планирую беременность, как сохранить здоровье зубов?
if($id == '16'){
	$data = '
	<p class="title">Я беременна/планирую беременность, как сохранить здоровье зубов?</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="16"><span class="content_head">Безультразвуковая профессиональная
                  гигиена полости рта.</span><span class="content_body"> Стоимость услуги от 4000 рублей (в зависимости от применяемых методик). Точную
                  стоимость определит врач на консультации. Консультация проводится бесплатно</a>.</span>
         </td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="16"><span class="content_head">Реминерализирующая терапия зубов в
                  первом, втором, третьем триместре.</span><span class="content_body"> Стоимость услуги от 250 рублей за 1 зуб. Точную стоимость определит
                  врач на консультации. Консультация проводится бесплатно</a>.></span>
         </td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="16"><span class="content_head">Терапевтическая санация полости рта
                  – на этапе планирования беременности или с 20 по 28 неделю.</span><span class="content_body"> Стоимость услуги – от 3900 рублей за 1 зуб
                  (при лечении кариеса). Точную стоимость определит врач на консультации. Консультация проводится
                  бесплатно</a>.</span></td>

      </tr>
   </tbody>
</table>
    
	';
}


// Мне назначено удаление «восьмерки»
if($id == '17'){
	$data = '
	<p class="title">Мне назначено удаление «восьмерки»</p><br><br>

<table class="tg">
   <thead>
      <tr>
         <th class="title_quiz">Варианты лечения</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="17"><span class="content_head">Зуб прорезался и находится в зубном
                  ряду.</span><span class="content_body"> Стоимость услуги удаления зуба от 5000 до 7000 рублей (в зависимости от сложности удаления и
                  состояния зуба). Точную стоимость определит врач на консультации. Консультация проводится
                  бесплатно</a>.</span></td>

      </tr>
      <tr>
         <td class="tg-0lax"><a class="block js_load_step" href="" data-id="17"><span class="content_head">Зуб не прорезался и/или расположен
                  неправильно.</span><span class="content_body"> Стоимость услуги удаления зуба от 7000 до 12000 рублей (в зависимости от сложности
                  удаления и состояния зуба). Точную стоимость определит врач на консультации. Консультация проводится
                  бесплатно</a>.</span></td>

      </tr>
   </tbody>
</table>
    
	';
}

echo json_encode( $data );








