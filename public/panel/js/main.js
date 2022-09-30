(function enableStickyHeader() {
    var stickyHeader = document.querySelector("header").dataset.sticky;
    var scrollHeader = $("header.scrollheader");

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 170 && stickyHeader == "true") {
            scrollHeader.removeClass("scrollheader").addClass("coverheader");
            console.log("scroll");
        } else {
            scrollHeader.removeClass("coverheader").addClass("scrollheader");
        }
    });
})();

// Modal CSS starts here
var modal_toggle = document.querySelectorAll(".modal-toggle");
modal_toggle.forEach((element) => {
    element.addEventListener("click", function () {
        var modal_class = element.getAttribute("data-toggle");
        var modal = document.querySelector("#" + modal_class);
        modal.classList.add("show");
        document.querySelector("body").style.overflow = "hidden";
    });
});
function CloseModal(btn) {
    var modal_class = btn.getAttribute("data-toggle");
    document.querySelector("#" + modal_class).classList.remove("show");
    document.querySelector("body").style.overflow = "auto";
}
// Modal CSS ends here


// Card opening starts here
function enLargeCardItem(card_body) {
    var card = card_body.parentNode;
    var cards = card.parentNode.querySelectorAll(".card-item");

    if (!card.classList.contains("card-item-active")) {
        cards.forEach((element) => {
            element.classList.remove("card-item-active");
        });
        card.classList.add("card-item-active");
        $("body, html").scrollTop(0);
    }
}
function closeCardItem(card_close_button) {
    var card = card_close_button.parentNode.parentNode.parentNode;

    if (card.classList.contains("card-item-active")) {
        card.classList.remove("card-item-active");
    }
    console.log(card);
}
// Card opening ends here
