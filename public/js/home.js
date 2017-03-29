function delay(ms) {

  var cur_d = new Date();
  var cur_ticks = cur_d.getTime();
  var ms_passed = 0;
  while(ms_passed < ms) {

    var d = new Date();
    var ticks = d.getTime();
    ms_passed = ticks - cur_ticks;
  }
}

function add_f(n) {

  var str="<div class='form-group' id='id"+n+"'><label for='entry"+n+"'>Input "+n+"</label><input type='text' class='form-control' id='entry"+n+"' name='entry"+n+"' placeholder='entry.xxx'><input type='text' class='form-control' id='text"+n+"' name='text"+n+"' placeholder='Value'></div>"

  $('#input').append(str);

  var m = n+1;
  str = "<button onclick='add_f("+m+");' type='button' class='btn btn-success'>Add Input Field</button><button onclick='remove_f("+n+");' type='button' class='btn btn-warning'>Remove Input Field</button><br><br>";
  $('#buttons1').html("");
  $('#buttons1').append(str);

  str="<input type='hidden' name='sub' value="+n+">";
  $('#buttons2').html("");
  $('#buttons2').append(str);
}

function remove_f(n) {

  if(n<=1)
    return;
  var str="#id"+n;
  $(str).remove();

  var m = n-1;
  str = "<button onclick='add_f("+n+");' type='button' class='btn btn-success'>Add Input Field</button><button onclick='remove_f("+m+");' type='button' class='btn btn-warning'>Remove Input Field</button><br><br>";
  $('#buttons1').html("");
  $('#buttons1').append(str);

  str="<input type='hidden' name='sub' value="+m+">";
  $('#buttons2').html("");
  $('#buttons2').append(str);
}

function req(n) {

  alert(n);
  return ;

  for(var i=0;i<100;i++) {

    $.ajax({
      url: "https://docs.google.com/forms/d/e/1FAIpQLSds48PZpQy70ukRRzbwx2_YvbUW_yuAWvTFEsEIjoLI6ROHpQ/formResponse",
      type: "post",
      data: {
        'entry.571204647': $('#text1').val(),
        'entry.1931113430': $('#text2').val(),
        'entry.1265595260': $('#text3').val(),
        'entry.1421576518': $('#text4').val(),
        'entry.1411128110': $('#text5').val()
      },
      success: function(result) {
        alert("ff");
      }

    });

    if(i%10 == 0)
    delay(1000);

  }
}
