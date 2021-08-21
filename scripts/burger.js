$(document).ready(function() {
    $("#menuIcon").click(function() {openBurger();});
    $("#closeIcon, #burger").click(function() {closeBurger();});
})

function openBurger() {
    $("#burger").addClass("burgerOpen");
    $("#menuIcon").addClass("iconInactive");
    $("#closeIcon").removeClass("iconInactive");
}

function closeBurger() {
    $("#burger").removeClass("burgerOpen");
    $("#menuIcon").removeClass("iconInactive");
    $("#closeIcon").addClass("iconInactive");
}