$(document).ready(function() {

    $('#txtArea').on("focus", function(event) {

        if(!$('#txtArea').hasClass('customTextAreaClass')){

        $('#txtArea').addClass('customTextAreaClass');

    }
});

$('#txtArea').on("blur", function(event) {

    if($('#txtArea').hasClass('customTextAreaClass')){

        $('#txtArea').removeClass('customTextAreaClass');

    }
    });
});