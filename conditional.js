$(function() {
    $("#profession").on("change",function() {
       var selectedColor = $(this).children("option").filter(":selected").text();
       $(".hideable").hide();
       if(selectedColor=="Professional")
       {
       		$("#professional").show();
       }
       else if(selectedColor=="Student")
       {
       		$("#student").show();
       }
       if(selectedColor=="Startup/Self-Employed")
       {
       		$("#professional").show();
       }
       else if(selectedColor=="Academic Researcher")
       {
       		$("#researcher").show();
       }
    }).change();
});
    