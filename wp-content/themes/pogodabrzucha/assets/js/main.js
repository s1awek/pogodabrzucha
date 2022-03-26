//scroll header
jQuery(document).ready(function() {




    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('#masthead').addClass("sticky");
        } else {
            $('#masthead').removeClass("sticky");
        }
    });


    $("#showDiet").click(function() {

        $("#diet-menu").toggle(1000);
        $("#icon-open-2").toggle("display");
        $("#icon-close-2").toggle("display");
        $('#showDiet').toggleClass('no-border');

    });






    $("#showInfo").click(function() {
        $("#infos").toggle(1000);
        $("#icon-open-1").toggle("display");
        $("#icon-close-1").toggle("display");
        $('#showInfo').toggleClass('no-border');
    });

    $('#cookies_close').click(function() {
        $('#cookies').hide(1000);
    });



}); 

function showTarget(val) {
    var popup = document.getElementById("popup");
    popup.style.visibility = "visible";
    if (val == 'success') {
        var isOk = document.getElementById('DivSuccess');
        isOk.style.display = "block";

    } else if (val == 'Err') {
        var isntOk = document.getElementById('DivErr');
        isntOk.style.display = "block";
    }
}

function closeTarget() {
    var popup = document.getElementById("popup");

    popup.style.visibility = "hidden";
    var isOk = document.getElementById('DivSuccess');
    isOk.style.display = "none";
    var isntOk = document.getElementById('DivErr');
    isntOk.style.display = "none";


    document.getElementById("post-codes").reset();
}

function showErr(errType) {
    if (errType == 'code') {
        var errField = document.getElementById("errCode");
        errField.style.display = "block";

    } else if (errType == 'city') {
        var errField2 = document.getElementById("errCity");
        errField2.style.display = "block";

    }
    document.getElementById("post-codes").reset();

}