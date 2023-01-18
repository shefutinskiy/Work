    $(document).ready(function(){


    function narRas () {
//дата
var date = new Date();
isoDate = new Date(date.getTime() - (date.getTimezoneOffset() * 60000)).toISOString().slice(0,10);
document.getElementById("elza2m").value=isoDate;


//расширерение техтареи

const tx = document.getElementsByTagName("textarea");
for (let i = 0; i < tx.length; i++) {
  tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;");
  tx[i].addEventListener("resize", onChange, false);
}

function onChange() {
  this.style.height = "auto";
  this.style.height = (this.scrollHeight) + "px";
}



// Посчитаем материалы
  
  let matK1 = +$('textarea#elza10kn').val().replace(',', '.');
  let matC1 = +$('textarea#elza10cn').val().replace(',', '.');
  let matS1 = (matK1 * matC1);
  if (matS1 > 0) {
    $('#elza10sn').val(matS1.toFixed(2) + " ₽");
  } else {

  }
  let matK2 = +$('textarea#elza11kn').val().replace(',', '.');
  let matC2 = +$('textarea#elza11cn').val().replace(',', '.');
  let matS2 = (matK2 * matC2);
  if (matS2 > 0) {
    $('#elza11sn').val(matS2.toFixed(2) + " ₽");
  } else {

  }
  let matK3 = +$('textarea#elza12kn').val().replace(',', '.');
  let matC3 = +$('textarea#elza12cn').val().replace(',', '.');
  let matS3 = (matK3 * matC3);
  if (matS3 > 0) {
    $('#elza12sn').val(matS3.toFixed(2) + " ₽");
  } else {

  }
  let matK4 = +$('textarea#elza13kn').val().replace(',', '.');
  let matC4 = +$('textarea#elza13cn').val().replace(',', '.');
  let matS4 = (matK4 * matC4);
    if (matS4 > 0) {
      $('#elza13sn').val(matS4.toFixed(2) + " ₽");
    } else {

    }
  let matK5 = +$('textarea#elza14kn').val().replace(',', '.');
  let matC5 = +$('textarea#elza14cn').val().replace(',', '.');
  let matS5 = (matK5 * matC5);
    if (matS5 > 0) {
      $('#elza14sn').val(matS5.toFixed(2) + " ₽");
    } else {

    }
  let matK6 = +$('textarea#elza15kn').val().replace(',', '.');
  let matC6 = +$('textarea#elza15cn').val().replace(',', '.');
  let matS6 = (matK6 * matC6);
    if (matS6 > 0) {
      $('#elza15sn').val(matS6.toFixed(2) + " ₽");
    } else {

    }
  let matK7 = +$('textarea#elza16kn').val().replace(',', '.');
  let matC7 = +$('textarea#elza16cn').val().replace(',', '.');
  let matS7 = (matK7 * matC7);
    if (matS7 > 0) {
      $('#elza16sn').val(matS7.toFixed(2) + " ₽");
    } else {

    }
  let matK8 = +$('textarea#elza17kn').val().replace(',', '.');
  let matC8 = +$('textarea#elza17cn').val().replace(',', '.');
  let matS8 = (matK8 * matC8);
    if (matS8 > 0) {
      $('#elza17sn').val(matS8.toFixed(2) + " ₽");
    } else {
  
    }
  let matK9 = +$('textarea#elza18kn').val().replace(',', '.');
  let matC9 = +$('textarea#elza18cn').val().replace(',', '.');
  let matS9 = (matK9 * matC9);
    if (matS9 > 0) {
      $('#elza18sn').val(matS9.toFixed(2) + " ₽");
    } else {

    }
  let matK10 = +$('textarea#elza19kn').val().replace(',', '.');
  let matC10 = +$('textarea#elza19cn').val().replace(',', '.');
  let matS10 = (matK10 * matC10);
    if (matS10 > 0) {
      $('#elza19sn').val(matS10.toFixed(2) + " ₽");
    } else {

    }
  let matK11 = +$('textarea#elza20kn').val().replace(',', '.');
  let matC11 = +$('textarea#elza20cn').val().replace(',', '.');
  let matS11 = (matK11 * matC11);
    if (matS11 > 0) {
      $('#elza20sn').val(matS11.toFixed(2) + " ₽");
    } else {

    }
  let matK12 = +$('textarea#elza21kn').val().replace(',', '.');
  let matC12 = +$('textarea#elza21cn').val().replace(',', '.');
  let matS12 = (matK12 * matC12);
    if (matS12 > 0) {
      $('#elza21sn').val(matS12.toFixed(2) + " ₽");
    } else {

    }
  let matK13 = +$('textarea#elza22kn').val().replace(',', '.');
  let matC13 = +$('textarea#elza22cn').val().replace(',', '.');
  let matS13 = (matK13 * matC13);
    if (matS13 > 0) {
      $('#elza22sn').val(matS13.toFixed(2) + " ₽");
    } else {

    }
  let matK14 = +$('textarea#elza23kn').val().replace(',', '.');
  let matC14 = +$('textarea#elza23cn').val().replace(',', '.');
  let matS14 = (matK14 * matC14);
    if (matS14 > 0) {
      $('#elza23sn').val(matS14.toFixed(2) + " ₽");
    } else {

    }
  let matK15 = +$('textarea#elza24kn').val().replace(',', '.');
  let matC15 = +$('textarea#elza24cn').val().replace(',', '.');
  let matS15 = (matK15 * matC15);
    if (matS15 > 0) {
      $('#elza24sn').val(matS15.toFixed(2) + " ₽");
    } else {

    }
  let matK16 = +$('textarea#elza25kn').val().replace(',', '.');
  let matC16 = +$('textarea#elza25cn').val().replace(',', '.');
  let matS16 = (matK16 * matC16);
    if (matS16 > 0) {
      $('#elza25sn').val(matS16.toFixed(2) + " ₽");
    } else {

    }
  let matK17 = +$('textarea#elza26kn').val().replace(',', '.');
  let matC17 = +$('textarea#elza26cn').val().replace(',', '.');
  let matS17 = (matK17 * matC17);
    if (matS17 > 0) {
      $('#elza26sn').val(matS17.toFixed(2) + " ₽");
    } else {

    }
  let matK18 = +$('textarea#elza27kn').val().replace(',', '.');
  let matC18 = +$('textarea#elza27cn').val().replace(',', '.');
  let matS18 = (matK18 * matC18);
    if (matS18 > 0) {
      $('#elza27sn').val(matS18.toFixed(2) + " ₽");
    } else {

    }
  let matK19 = +$('textarea#elza28kn').val().replace(',', '.');
  let matC19 = +$('textarea#elza28cn').val().replace(',', '.');
  let matS19 = (matK19 * matC19);
    if (matS19 > 0) {
      $('#elza28sn').val(matS19.toFixed(2) + " ₽");
    } else {

    }
  let matK20 = +$('textarea#elza29kn').val().replace(',', '.');
  let matC20 = +$('textarea#elza29cn').val().replace(',', '.');
  let matS20 = (matK20 * matC20);
    if (matS20 > 0) {
      $('#elza29sn').val(matS20.toFixed(2) + " ₽");
    } else {

    }
  let matK21 = +$('textarea#elza30kn').val().replace(',', '.');
  let matC21 = +$('textarea#elza30cn').val().replace(',', '.');
  let matS21 = (matK21 * matC21);
    if (matS21 > 0) {
      $('#elza30sn').val(matS21.toFixed(2) + " ₽");
    } else {

    }
  
  
  let summat = matS1 + matS2 + matS3 + 
    matS4 + matS5 + matS6 + matS7 + 
    matS8 + matS9 + matS10 + matS11 + 
    matS12 + matS13 + matS14 + matS15 + 
    matS16 + matS17 + matS18 + matS19 + 
    matS20 + matS21;

  if (summat > 0) {
    $('#elza36nizn').val(summat.toFixed(2));
  } else {
    $('#elza36nizn').val("Пока материалов на 0 руб. 0 коп.");
  }

// сумма нижних полей

  let menproc = +$('textarea#elza31nizn').val().replace(',', '.');
  let rabot = +$('textarea#elza32nizn').val().replace(',', '.');
  let montazh =+$('textarea#elza33nizn').val().replace(',', '.');
  let demontazh =+$('textarea#elza34nizn').val().replace(',', '.');
  let transport = +$('textarea#elza35nizn').val().replace(',', '.');
  let mat = summat;
  let proch = +$('textarea#elza37nizn').val().replace(',', '.');


// Считаем формулу себестоимости, прибыли и других отделов

  let sebestmat = menproc + rabot + montazh + demontazh + transport + mat + proch;
  if (sebestmat > 0) {
    $('#elzaI23n').val(sebestmat);
  } else {

  }
  let drOtdel = +$('textarea#elzaI24n').val().replace(',', '.');
  let itogsebest = sebestmat - drOtdel;
  let itogmn = +$('textarea#elzaI25n').val().replace(',', '.');
  let itogprice = itogsebest * itogmn;
  let itogpribil = itogprice - itogsebest;

  let itogprice1 = itogprice.toFixed(2);
  let itogpribil1 = itogpribil.toFixed(2);

  $("input#elzaI22n").val(itogprice1 + " ₽");
  $('#elzaI26n').val(itogpribil1 + " ₽");


//кликер, чтобы код работал постоянно
 };

$('.calculate-product').on('click keyup', narRas);
    $('.calculate-product').click();
setInterval(function() {
    $('.calculate-product').click();
}, 100);



            });