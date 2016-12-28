$(document).ready(function(){

$("#SelectArea1").hover(function(){
$("#arenaHolder").css("background", "url(img/beach.jpg)");
});

$("#SelectArea1").click(function(){
$("#SelectArena").hide("slow");
$("button").hide("slow");
$("#SelectPlayer").show("slow");
$("#PlayerSelect").show("slow");
$("#PlayerSelect2").show("slow");
});
// <!--second button-->

$("#SelectArea2").hover(function(){
$("#arenaHolder").css("background", "url(img/earth.jpg)");
});
$("#SelectArea2").click(function(){
$("#SelectArena").hide("slow");
$("button").hide("slow");
$("#SelectPlayer").show("slow");
$("#PlayerSelect").show("slow");
$("#PlayerSelect2").show("slow");
});
// third button

$("#SelectArea3").hover(function(){
$("#arenaHolder").css("background", "url(img/dojo.jpg)");
});
$("#SelectArea3").click(function(){
$("#SelectArena").hide("slow");
$("button").hide("slow");
$("#SelectPlayer").show("slow");
$("#PlayerSelect").show("slow");
$("#PlayerSelect2").show("slow");
});
// fourth button

$("#SelectArea4").hover(function(){
$("#arenaHolder").css("background", "url(img/forest.jpg)");
});
$("#SelectArea4").click(function(){
$("#SelectArena").hide("slow");
$("button").hide("slow");
$("#SelectPlayer").show("slow");
$("#PlayerSelect").show("slow");
$("#PlayerSelect2").show("slow");
});
// fifth button

$("#SelectArea5").hover(function(){
$("#arenaHolder").css("background", "url(img/matrix.jpg)");
});
$("#SelectArea5").click(function(){
$("#SelectArena").hide("slow");
$("button").hide("slow");
$("#SelectPlayer").show("slow");
$("#PlayerSelect").show("slow");
$("#PlayerSelect2").show("slow");
});
// sixth button

$("#SelectArea6").hover(function(){
$("#arenaHolder").css("background", "url(img/snow.jpg)");
});
$("#SelectArea6").click(function(){
$("#SelectArena").hide("slow");
$("button").hide("slow");
$("#SelectPlayer").show("slow");
$("#PlayerSelect").show("slow");
$("#PlayerSelect2").show("slow");
});

// dropped down

$("select, #play2").change(function(){
$("#nin2").css({opacity:"1.0"});
$("#nin1").css({opacity:"0.0"});
$("#nin3").css({opacity:"0.0"});
$("#nin4").css({opacity:"0.0"});
});

$("select, #play3").change(function(){
$("#nin3").css({opacity:"1.0"});
$("#nin1").css({opacity:"0.0"});
$("#nin2").css({opacity:"0.0"});
$("#nin4").css({opacity:"0.0"});
});

$("select, #play4").change(function(){
$("#nin4").css({opacity:"1.0"});
$("#nin1").css({opacity:"0.0"});
$("#nin2").css({opacity:"0.0"});
$("#nin3").css({opacity:"0.0"});
});

$("select, #play1").change(function(){
$("#nin1").css({opacity:"1.0"});
$("#nin2").css({opacity:"0.0"});
$("#nin3").css({opacity:"0.0"});
$("#nin4").css({opacity:"0.0"});
});
});