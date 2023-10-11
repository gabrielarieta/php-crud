function sendForm(id = null) {
    let formData;
    if(id) {
        formData = {
            id: id,
            name: $('#name').val(),
            email: $('#email').val()
        }
    } else {
        formData = {
            name: $('#name').val(),
            email: $('#email').val()
        }
    }
    
    $.ajax({
        url: "/view/user/requests/sendForm.php",
        method: "POST",
        data: formData,
    }).done(function(response) {
        refreshTab()
    });
}

function deleteUser(id) {
    $.ajax({
        url: "/view/user/requests/deleteUser.php",
        method: "POST",
        data: {id: id},
    }).done(function(response) {
        refreshTab()
    });
}