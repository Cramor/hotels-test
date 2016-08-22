$(function(){
    $('.click_form').click(function(){
        $(".form-group").addClass("hide_form");
        var answer_id = $(this).data("answer");
        if($("#add_form_"+answer_id).hasClass("hide_form")){

            $("#add_form_"+answer_id).removeClass("hide_form");
        }
    })
});