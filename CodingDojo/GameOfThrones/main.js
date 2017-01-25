
$(document).ready(function(){
            $("form").submit(function(){
                var url = $(this).attr("action") + $(this).serialize();
                $.get(url, function(data){
                    console.log(data);

                    var name = data.name;
                    var words = data.words;
					var titles = data.titles;

                    $("#name").text(name);
                    $("#words").text(words);
					$("#titles").text(titles);

                }, "json");

                return false;
            });
        });
