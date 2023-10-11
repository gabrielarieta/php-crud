function sendForm(id = null) {
    let formData;
    if(id) {
        formData = {
            id: id,
            name: $('#name').val(),
            colorhex: $('#colorhex').val()
        }
    } else {
        formData = {
            name: $('#name').val(),
            colorhex: $('#colorhex').val()
        }
    }
    
    $.ajax({
        url: "/view/color/requests/sendForm.php",
        method: "POST",
        data: formData,
    }).done(function(response) {
        refreshTab()
    });
}

function deleteColor(id) {
    $.ajax({
        url: "/view/color/requests/deleteColor.php",
        method: "POST",
        data: {id: id},
    }).done(function(response) {
        refreshTab()
    });
}