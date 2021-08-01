$(document).ready(function() {
    $("#infoA").click(function() {openInfoA();});
    $("#infoB").click(function() {openInfoB();});
    $("#infoC").click(function() {openInfoC();});
    $("#buttonA").click(function() {openFormA();});
    $("#buttonB").click(function() {openFormB();});
    $("#buttonC").click(function() {openFormC();});
    $("#mButtonA").click(function() {openMobileFormA();});
    $("#mButtonB").click(function() {openMobileFormB();});
    $("#mButtonC").click(function() {openMobileFormC();});
    $("#fPageHeader span, .twoBoxForm .formHead span").click(function() {closeForm();});
    $("#sluzbyLink").click(function() {openSluzby(); goDown();});
    $("#headerLeft img").click(function() {openSluzby(); goUp();});
    $("#certifLink, .ctCertBox").click(function() {openCertif();});
    $("#kontaktLink").click(function() {openKontakt();});
    $("#breakIcon img").click(function() {goDown();});
})

$(window).on( 'scroll', function(){closeAll();});

$(window).bind('mousewheel DOMMouseScroll', function(event){
    if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {closeAll();}
    else {closeAll();}
});

function closeAll() {
    closeBurger();
    closeInfo();
    closeForm();
}

function closeInfo() {
    $("#ctbA, #ctbB, #ctbC").removeClass("ctbActive");
    $("p.infoActive").fadeTo(100, 0, function () {
        $(this).delay(100);
        $(this).text("více informací...").removeClass("infoActive").addClass("infoInactive");
        $(this).fadeTo(100, 1);
    });
}

function setInfoA() {
    $("p#infoA").text("Lorem dlouhý ipsum poopis numero 1? Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.").removeClass("infoInactive").addClass("infoActive");
}
function setInfoB() {
    $("p#infoB").text("Lorem dlouhý ipsum poopis numero 002, chápeš? Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.").removeClass("infoInactive").addClass("infoActive");
}
function setInfoC() {
    $("p#infoC").text("Lorem dlouhý ipsum poopis numero šíslo tši, chápeš ne? Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.").removeClass("infoInactive").addClass("infoActive");
}

function openInfoA() {
    $("#ctbA").addClass("ctbActive");
    $("p#infoA.infoInactive").fadeTo(200, 0, function () {
        $(this).delay(50);
        setInfoA();
        $(this).fadeTo(200, 1);
    });
}
function openInfoB() {
    $("#ctbB").addClass("ctbActive");
    $("p#infoB.infoInactive").fadeTo(200, 0, function () {
        $(this).delay(50);
        setInfoB();
        $(this).fadeTo(200, 1);
    });
}
function openInfoC() {
    $("#ctbC").addClass("ctbActive");
    $("p#infoC.infoInactive").fadeTo(200, 0, function () {
        $(this).delay(50);
        setInfoC();
        $(this).fadeTo(200, 1);
    });
}

function openFormA() {
    closeForm();
    $("#cardA").addClass("active");
    $("#formA .formBody").load("./scripts/form.php");
    $("#Service").val("Express");
}
function openFormB() {
    closeForm();
    $("#cardB").addClass("active");
    $("#formB .formBody").load("./scripts/form.php");
    $("#Service").val("Kvalita");
}
function openFormC() {
    closeForm();
    $("#cardC").addClass("active");
    $("#formC .formBody").load("./scripts/form.php");
    $("#Service").val("Economy");
}

function openMobileForm() {
    closeForm();
    $("#formPage").addClass("pageActive");
    $("#mForm").load("./scripts/form.php");
}
function openMobileFormA() {
    openMobileForm();
    $("#Service").val("Express");
}
function openMobileFormB() {
    openMobileForm();
    $("#Service").val("Kvalita");
}
function openMobileFormC() {
    openMobileForm();
    $("#Service").val("Economy");
}

function closeForm() {
    resetValidation();
    $(".formBody").html("");
    $("#mForm").html("");
    $("#formPage").removeClass("pageActive");
    $(".twoBoxInner").removeClass("active");
    $(".formSent").removeClass("active");
    $("#Service").val("");
}

function openThanker() {
    $(".formSent").addClass("active");
}

function openSluzby() {
    closeAll();
    closeCertif();
    closeKontakt();
    $("#contentTwo, #particles-js").addClass("pageActive");

}
function closeSluzby() {
    $("#contentTwo, #particles-js").removeClass("pageActive");
}

function openCertif() {
    closeBurger();
    closeSluzby();
    closeKontakt();
    goUp();
    $("#certifPage").addClass("pageActive");
}
function closeCertif() {
    $("#certifPage").removeClass("pageActive");
}

function openKontakt() {
    closeBurger();
    closeSluzby();
    closeCertif();
    goUp();
    $("#kontaktPage").addClass("pageActive");
    $("html").addClass("scrollFix");
}
function closeKontakt() {
    $("#kontaktPage").removeClass("pageActive");
    $("html").removeClass("scrollFix");
}

function goUp() {
            $("html, body").animate({scrollTop: $("#node-top").offset().top}, 300, function(){});
}
function goDown() {
    $("html, body").animate({scrollTop: $("#node-bottom").offset().top}, 300, function(){});
}