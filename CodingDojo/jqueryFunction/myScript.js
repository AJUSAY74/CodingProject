$(document).ready(function(){
  $("#addClassButton").click(function(){
    $("#addClassParagraph").addClass("red");
});
  $("#addClassButton1").click(function(){
    $("#toggleImg").slideToggle("slow");
});
  $("#addClassButton2").click(function(){
    $("#appendParagraph2").append("<strong> Appending This!!</strong>");
});
  $("#addClassButton3").click(function(){
    alert("You clicked me!!!");
});
  $("#addClassButton5").click(function(){
    $("#Show1").show("slow");
});
  $("#addClassButton6").click(function(){
    $("#toggleImg1").toggle("slow");
});
  $("#addClassButton7").click(function(){
    $("#sliderDown").slideDown("slow");
});
  $("#addClassButton8").click(function(){
    $("#sliderDown1").slideUp("slow");
});
  $("#addClassButton9").click(function(){
    $("#sliderDown2").fadeIn("slow");
});
  $("#addClassButton10").click(function(){
    $("#sliderDown3").fadeOut("slow");
});
  $("#addClassButton11").click(function(){
    $("#Before1").before("<b>This is before.</b>");
});
  $("#addClassButton12").click(function(){
    $("#After1").after("<b>This is after.</b>");
});
  $("#addClassButton13").click(function(){
    $("#HTML1").html("<em> New code</em>");
});
});
$("#addClassButton14").click(function(){
  $("#slierDown4").attr("width","500", "height", "500");
});
