
$(document).ready(function() {
    $('#nav-toggler').click(function() {
        const visible = $('#nav-content').attr('data-visible')

        if(visible === "true") {
            $('#nav-content').attr('data-visible', false)
            $('#nav-toggler').attr('aria-expanded', false)
        }
        else {
            $('#nav-content').attr('data-visible', true)
            $('#nav-toggler').attr('aria-expanded', true)
        }
    })
})

