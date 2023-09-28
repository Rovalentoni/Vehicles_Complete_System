$('#submitBtn').click(function (e) {
    e.preventDefault();
    var createForm = $('#createForm');
    $.ajax({
        url: createForm.attr('action'), //  api.php/?f=createUser_Api;
        type: createForm.attr('method'), //POST;
        data: createForm.serialize(),

        success: function (response, status, xhr) {
            console.log(response);
            console.log(xhr);
            // alert(response);
            if (xhr.status == 201) {
                alert('O usuário foi criado com sucesso!');
                window.location = "/?f=userHomePage&cadastro=1";
            }
        },

        error: function (response) {
            alert(response.responseText);
        }
    })
})

$(document).on('click', '#logoutBtn', function (e) {
    e.preventDefault();
    $.ajax({
        url: 'api.php/?f=logout',
        type: 'GET',
        success: function (response, status, xhr) {
            console.log(response);
            console.log(xhr);
            if (xhr.status == 204) {
                alert('Logout efetuado com sucesso!');
                window.location = "/?f=loginForm&try=2";
            }
        }
    })
})
