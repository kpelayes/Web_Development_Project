$(document).ready(function(){
  $("#add1").click(function(){
        $("#items").append($("#desc1").text()+"&nbsp;&nbsp;&nbsp;"+$("#item1 option:selected").text()+"<br><br>");
    });
  $("#add2").click(function(){
        $("#items").append($("#desc2").text()+"&nbsp;&nbsp;&nbsp;"+$("#item2 option:selected").text()+"<br><br>");
    });
    $("#add3").click(function(){
        $("#items").append($("#desc3").text()+"&nbsp;&nbsp;&nbsp;"+$("#item3 option:selected").text()+"<br><br>");
    });
  $("#add4").click(function(){
        $("#items").append($("#desc4").text()+"&nbsp;&nbsp;&nbsp;"+$("#item4 option:selected").text()+"<br><br>");
    });

  $("#add5").click(function(){
        $("#items").append($("#desc5").text()+"<br><br>");
    });
  $("#add6").click(function(){
        $("#items").append($("#desc6").text()+"<br><br>");
    });
     $("#add7").click(function(){
        $("#items").append($("#desc7").text()+"<br><br>");
    });

  $("#add9").click(function(){
        $("#items").append($("#desc9").text()+"<br><br>");
    });
  $("#add10").click(function(){
        $("#items").append($("#desc10").text()+"<br><br>");
    });
     $("#add11").click(function(){
        $("#items").append($("#desc11").text()+"<br><br>");
    });
});