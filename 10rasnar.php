<!-- 
10-30 то материалы
24 - это конец первого столбика
25 - начало второго столбика
elza1 - заказчики
elza6 - дизайнеры
elza11 - менеджеры

 -->
  <section class="calculate-product">   
<p class="prob" id="prob"></p>

        <form action="10rasnarelzamess.php" method="POST">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="10rasnar.js"></script>
    <link href="../bootstrap.min.css" rel="stylesheet">
        <link href="../stylenew.css" rel="stylesheet">
<title>Расчёт на наружную рекламу</title>
<input type="button" class="elzabutback" onclick="javascript:history.back();" value="← Назад">
        <div id="forprint">
<div class="elzablock" id="1block">
<h1 style="text-align: center;">Расчёт на наружную рекламу</h2>
  <br>
  <?php 
require_once '../../../config/connect.php';
 ?>
  <table class="kolvotabl rasnaruzh">
    <col width="19%">
    <col width="10%">
    <col width="10%">
    <col width="10%">
    <col width="2%">
    <col width="19%">
    <col width="10%">
    <col width="10%">
    <col width="10%">
    <tr>
      <td style="text-align: center; border: none;" colspan="10" class="nizborder">
        <?php 
          require_once '../../../vse/forZ/zakivse.php';
        ?>
        <br><br>
      </td>
    </tr>

    <tr>
      <td style="text-align: center; border: none;" colspan="10" class="nizborder">
      <textarea name="elza3" id="elza3m" placeholder="Что заказывают? Вывеску?"></textarea>
      <div class="botborder"><hr></div>
      </td>
    </tr>

    <tr>
      <td style="text-align: center;" colspan="1">Дата расчёта</td>
      <td style="text-align: center;" colspan="4">Размеры</td>
      <td style="text-align: center;" colspan="2">Дизайнер</td>
      <td style="text-align: center;" colspan="2">Менеджер заказа</td>
      </td>
    </tr>

    <tr>
      <td style="text-align: center;" colspan="1"><input type="date" name="elza2" id="elza2m" style="border: none; outline: none;" value="" placeholder="21 декабря 2020 / 21.12.2020"></td>
      <td style="text-align: center;" colspan="4">
        <textarea name="elza4" id="elza4m" placeholder="100х120х300 / Высота -, ширина -,"></textarea>
      </td>
      <td style="text-align: center;" colspan="2">
        <?php 
          require_once '../../../vse/forZ/dizvse.php';
        ?>
      </td>
      <td style="text-align: center;" colspan="2">
        <?php 
          require_once '../../../vse/forZ/menvse.php';
        ?>
      </td>
    </tr>

    <tr class="noborder otstup">
      <td colspan="7" class="noborder otstup"></td>
    </tr>
    <tr style="text-align: center;">
      <td><b><i>Материалы</i></b></td>
      <td><i>Расход (количество)</i></td>
      <td><i>Цена</i></td>
      <td><i>Стоимость</i></td>
      <td style="border: none;"></td>
      <td><b><i>Материалы</i></b></td>
      <td><i>Расход (количество)</i></td>
      <td><i>Цена</i></td>
      <td><i>Стоимость</i></td>
    </tr>

    <tr>
      <td><textarea name="elza10i" id="elza10in">Пластик</textarea></td>
      <td><textarea name="elza10k" id="elza10kn"></textarea></td>
      <td><textarea name="elza10c" id="elza10cn"></textarea></td>
      <td><textarea name="elza10s" id="elza10sn"></textarea></td>
      <td style="border: none;"></td>
      <td><textarea name="elza25i" id="elza25in"></textarea></td>
      <td><textarea name="elza25k" id="elza25kn"></textarea></td>
      <td><textarea name="elza25c" id="elza25cn"></textarea></td>
      <td><textarea name="elza25s" id="elza25sn"></textarea></td>
    </tr>


    <tr>
      <td><textarea name="elza11i" id="elza11in">Плёнка</textarea></td>
      <td><textarea name="elza11k" id="elza11kn"></textarea></td>
      <td><textarea name="elza11c" id="elza11cn"></textarea></td>
      <td><textarea name="elza11s" id="elza11sn"></textarea></td>
      <td style="border: none;"></td>
      <td><textarea name="elza26i" id="elza26in"></textarea></td>
      <td><textarea name="elza26k" id="elza26kn"></textarea></td>
      <td><textarea name="elza26c" id="elza26cn"></textarea></td>
      <td><textarea name="elza26s" id="elza26sn"></textarea></td>
    </tr>

    <tr>
      <td><textarea name="elza12i" id="elza12in">Резка</textarea></td>
      <td><textarea name="elza12k" id="elza12kn"></textarea></td>
      <td><textarea name="elza12c" id="elza12cn"></textarea></td>
      <td><textarea name="elza12s" id="elza12sn"></textarea></td>
      <td style="border: none;"></td>
      <td><textarea name="elza27i" id="elza27in"></textarea></td>
      <td><textarea name="elza27k" id="elza27kn"></textarea></td>
      <td><textarea name="elza27c" id="elza27cn"></textarea></td>
      <td><textarea name="elza27s" id="elza27sn"></textarea></td>
    </tr>

    <tr>
      <td><textarea name="elza13i" id="elza13in">Монтажка</textarea></td>
      <td><textarea name="elza13k" id="elza13kn"></textarea></td>
      <td><textarea name="elza13c" id="elza13cn"></textarea></td>
      <td><textarea name="elza13s" id="elza13sn"></textarea></td>
      <td style="border: none;"></td>
      <td><textarea name="elza28i" id="elza28in"></textarea></td>
      <td><textarea name="elza28k" id="elza28kn"></textarea></td>
      <td><textarea name="elza28c" id="elza28cn"></textarea></td>
      <td><textarea name="elza28s" id="elza28sn"></textarea></td>
    </tr>

    <tr>
      <td><textarea name="elza14i" id="elza14in">Уайт-Спирит</textarea></td>
      <td><textarea name="elza14k" id="elza14kn"></textarea></td>
      <td><textarea name="elza14c" id="elza14cn"></textarea></td>
      <td><textarea name="elza14s" id="elza14sn"></textarea></td>
      <td style="border: none;"></td>
      <td><textarea name="elza29i" id="elza29in"></textarea></td>
      <td><textarea name="elza29k" id="elza29kn"></textarea></td>
      <td><textarea name="elza29c" id="elza29cn"></textarea></td>
      <td><textarea name="elza29s" id="elza29sn"></textarea></td>
    </tr>

    <tr>
      <td><textarea name="elza15i" id="elza15in">П-Обр.</textarea></td>
      <td><textarea name="elza15k" id="elza15kn"></textarea></td>
      <td><textarea name="elza15c" id="elza15cn"></textarea></td>
      <td><textarea name="elza15s" id="elza15sn"></textarea></td>
      <td style="border: none;"></td>
      <td><textarea name="elza30i" id="elza30in"></textarea></td>
      <td><textarea name="elza30k" id="elza30kn"></textarea></td>
      <td><textarea name="elza30c" id="elza30cn"></textarea></td>
      <td><textarea name="elza30s" id="elza30sn"></textarea></td>
    </tr>

    <tr style="vertical-align: middle;">
      <td rowspan="2"><textarea name="elza16i" id="elza16in">Клей</textarea></td>
      <td rowspan="2"><textarea name="elza16k" id="elza16kn"></textarea></td>
      <td rowspan="2"><textarea name="elza16c" id="elza16cn"></textarea></td>
      <td rowspan="2"><textarea name="elza16s" id="elza16sn"></textarea></td>
      <td rowspan="2" style="border: none;"></td>
      <td colspan="2">
        <b>Сумма для заказчика:</b>
      </td>
      <td colspan="2">
        <input type="text" value="" name="elzaI22" id="elzaI22n" style="font-size: 26px;">
      </td>
    </tr>

    <tr>
      <td>
        <i>Себестоимость (без др.отделов):</i>
        <textarea name="elzaI23" id="elzaI23n"></textarea>
      </td>
      <td>
        <i>Др. отделы:</i>
        <textarea name="elzaI24" id="elzaI24n"></textarea>
      </td>
      <td>
        <i>Множитель:</i>
        <textarea name="elzaI25" id="elzaI25n">2</textarea>
      </td>
      <td>
        <i>Прибыль:</i>
        <textarea name="elzaI26" id="elzaI26n"></textarea>
      </td>
    </tr>

    <tr>
      <td><textarea name="elza17i" id="elza17in">Саморезы</textarea></td>
      <td><textarea name="elza17k" id="elza17kn"></textarea></td>
      <td><textarea name="elza17c" id="elza17cn"></textarea></td>
      <td><textarea name="elza17s" id="elza17sn"></textarea></td>
      <td style="border: none;"></td>
      <td colspan="1" style="text-align: center;"><i>Статья расходов</i></td>
      <td colspan="3" style="text-align: center;"><i>Сумма/Примечание</i></td>
    </tr>

    <tr>
      <td><textarea name="elza18i" id="elza18in"></textarea></td>
      <td><textarea name="elza18k" id="elza18kn"></textarea></td>
      <td><textarea name="elza18c" id="elza18cn"></textarea></td>
      <td><textarea name="elza18s" id="elza18sn"></textarea></td>
      <td style="border: none;"></td>
      <td colspan="1"><i>Проценты менеджера</i></td>
      <td colspan="3"><textarea name="elza31niz" id="elza31nizn"><?= $elza_re[64] ?></textarea></td>
    </tr>

    <tr>
      <td><textarea name="elza19i" id="elza19in"></textarea></td>
      <td><textarea name="elza19k" id="elza19kn"></textarea></td>
      <td><textarea name="elza19c" id="elza19cn"></textarea></td>
      <td><textarea name="elza19s" id="elza19sn"></textarea></td>
      <td style="border: none;"></td>
      <td colspan="1"><i>Работа</i></td>
      <td colspan="3"><textarea name="elza32niz" id="elza32nizn"></textarea></td>
    </tr>

    <tr>
      <td><textarea name="elza20i" id="elza20in"></textarea></td>
      <td><textarea name="elza20k" id="elza20kn"></textarea></td>
      <td><textarea name="elza20c" id="elza20cn"></textarea></td>
      <td><textarea name="elza20s" id="elza20sn"></textarea></td>
      <td style="border: none;"></td>
      <td colspan="1"><i>Монтаж</i></td>
      <td colspan="3"><textarea name="elza33niz" id="elza33nizn"></textarea></td>
    </tr>

    <tr>
      <td><textarea name="elza21i" id="elza21in"></textarea></td>
      <td><textarea name="elza21k" id="elza21kn"></textarea></td>
      <td><textarea name="elza21c" id="elza21cn"></textarea></td>
      <td><textarea name="elza21s" id="elza21sn"></textarea></td>
      <td style="border: none;"></td>
      <td colspan="1"><i>Демонтаж</i></td>
      <td colspan="3"><textarea name="elza34niz" id="elza34nizn"></textarea></td>
    </tr>

    <tr>
      <td><textarea name="elza22i" id="elza22in"></textarea></td>
      <td><textarea name="elza22k" id="elza22kn"></textarea></td>
      <td><textarea name="elza22c" id="elza22cn"></textarea></td>
      <td><textarea name="elza22s" id="elza22sn"></textarea></td>
      <td style="border: none;"></td>
      <td colspan="1"><i>Транспорт</i></td>
      <td colspan="3"><textarea name="elza35niz" id="elza35nizn"></textarea></td>
    </tr>

    <tr>
      <td><textarea name="elza23i" id="elza23in"></textarea></td>
      <td><textarea name="elza23k" id="elza23kn"></textarea></td>
      <td><textarea name="elza23c" id="elza23cn"></textarea></td>
      <td><textarea name="elza23s" id="elza23sn"></textarea></td>
      <td style="border: none;"></td>
      <td colspan="1"><i>Материал</i></td>
      <td colspan="3"><textarea name="elza36niz" id="elza36nizn"></textarea></td>
    </tr>

    <tr>
      <td><textarea name="elza24i" id="elza24in"></textarea></td>
      <td><textarea name="elza24k" id="elza24kn"></textarea></td>
      <td><textarea name="elza24c" id="elza24cn"></textarea></td>
      <td><textarea name="elza24s" id="elza24sn"></textarea></td>
      <td style="border: none;"></td>
      <td colspan="1"><i>Прочее</i></td>
      <td colspan="3"><textarea name="elza37niz" id="elza37nizn"></textarea></td>
    </tr>

  </table>
  <br>
<input type="textarea" name="elza38pod" style="display: none;" value="Не прикреплено">
<input type="submit" class="mess2" id = "messid2" value="Сохранить"></input>

</section>