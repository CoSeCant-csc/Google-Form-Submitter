function delay(ms) {
  var cur_d = new Date();
  var cur_ticks = cur_d.getTime();
  var ms_passed = 0;
  while(ms_passed < ms) {
    var d = new Date();  // Possible memory leak?
    var ticks = d.getTime();
    ms_passed = ticks - cur_ticks;
    // d = null;  // Prevent memory leak?
  }
}

function req() {

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
