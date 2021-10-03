function sendContact() {
    if (ButtonValidation() === true) {
        formSending();
        openThanker();
        jQuery.ajax({
            url: "./scripts/mailing/mail.php",
            data: 'Name=' + $("#Name").val() + '&Service=' + $("#Service").val() + '&Contact=' + $("#Contact").val(),
            type: "POST",
            success: function(data) {sentSuccess();},
            error: function() {sentError();}
        });
    }
    else {
        $(".inputWrap input").addClass("error");
    }
}

function resetValidation() {
    $(".inputWrap input").removeClass("error");
}

function ButtonValidation() {
    if (NameValidation() === true && ContactValidation() === true) { $("#Button").disabled = false; return true; } else { $("#Button").disabled = true; return false; }
}

function NameValidation() {
    var Name = document.getElementById("Name");
    var ValueName = Name.value;
    var LengthName = ValueName.length;

    $(".inputWrap #Name").removeClass("error");

    var EncodeName = /^[a-zA-ZěščřžýáäíéëťďňůúüóöĚŠČŘŽÝÁÄÍÉËŤĎŇŮÚÜÓÖ\s]+$/.test(ValueName);
    if (ValueName == "") {
        $(".inputWrap #Name").addClass("error");
    } else if (EncodeName == false) {
        $(".inputWrap #Name").addClass("error");
    } else if (LengthName < 3) {
        $(".inputWrap #Name").addClass("error");
    } else { return true; }
}

function ContactValidation() {
    var Contact = document.getElementById("Contact");
    var ValueContact = Contact.value;
    var LengthContact = ValueContact.length;

    $(".inputWrap #Contact").removeClass("error");

    var EncodeContact = /^[a-zA-Z0-9.@\+]+$/.test(ValueContact);
    if (ValueContact == "") {
        $(".inputWrap #Contact").addClass("error");
    } else if (EncodeContact == false) {
        $(".inputWrap #Contact").addClass("error");
    } else if (LengthContact < 8) {
        $(".inputWrap #Contact").addClass("error");
    } else { return true; }
}

function formSending() {
    $(".formSent").html("<b>Odesílání...</b>");
}
function sentSuccess() {
    $(".formSent").html("<b>Děkujeme</b><p>Ozveme se Vám</p><p>hned, jak to bude možné</p>");
    $(".formSent").fadeTo(1000, 1, function () {
        $(this).delay(2000);
        closeForm();
        });
}
function sentError() {
    $(".formSent").html("<b>Omlouváme se, došlo k chybě.</b>");
}