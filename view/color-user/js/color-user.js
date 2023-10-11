function sendForm(id = null) {
    let formData;
    if(id) {
        formData= {
            id: id,
            user_id: $('#user').val(),
            color_id: $('#color').val(),
        }
    } else {
        formData= {
            user_id: $('#user').val(),
            color_id: $('#color').val()
        }
    }
    
    $.ajax({
        url: "/view/color-user/requests/sendForm.php",
        method: "POST",
        data: formData,
    }).done(function(response) {
        refreshTab()
    });
}

function deleteColorUser(id) {
    $.ajax({
        url: "/view/color-user/requests/deleteColorUser.php",
        method: "POST",
        data: { id:id },
    }).done(function(response) {
        refreshTab()
    });
}