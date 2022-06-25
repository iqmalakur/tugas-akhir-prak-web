const btnScrollTop = $(".scroll-top")

btnScrollTop.click(() => {
    window.scrollTo({ top: 0, behavior: "smooth" })
})

$(window).scroll(showScrollBtn)
showScrollBtn()

function showScrollBtn() {
    if ($(this).scrollTop() > $(this).innerHeight() - $(this).innerHeight() / 2) {
        btnScrollTop.removeClass("d-none")
    } else {
        btnScrollTop.addClass("d-none")
    }
}
