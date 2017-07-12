$(function(){

  var fontSize = 100;
  var elm = document.documentElement;
      elm.style.fontSize = fontSize * (elm.clientWidth/320) + 'px';

  $("#start").cityPicker({
    title: "选择地址",
    onChange: function (picker, values, displayValues) {
      console.log(values, displayValues);
    }
  });

})


