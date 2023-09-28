$("#login_btn").click(function (e) {
    e.preventDefault();
    var loginform = $("#login_form");
    $.ajax({
        url: loginform.attr("action"), ///api.php/?f=login_Api
        type: loginform.attr("method"), //POST
        data: loginform.serialize(),
        success: function(response) {
            window.location = "/?f=mainHome";
        },
        error: function(xhr) {  
            alert ('Usuário e senha inválidos');
        }
        
    })
})


$(document).on('click', '#logoutBtn', function(e){
    e.preventDefault();
    $.ajax({
        url: 'api.php/?f=logout',
        type: 'GET',
        success: function(response, status, xhr) {
            console.log(response);
            console.log(xhr);
                if(xhr.status == 204) {
                    alert ('Logout efetuado com sucesso!');
                    window.location = "/?f=loginForm&try=2";
                }
        },
    })
})

$(document).on('click', '#logoutBtn', function(e){
    e.preventDefault();
    $.ajax({
        url: 'api.php/?f=logout',
        type: 'GET',
        success: function(response, status, xhr) {
            console.log(response);
            console.log(xhr);
                if(xhr.status == 204) {
                    alert ('Logout efetuado com sucesso!');
                    window.location = "/?f=loginForm&try=2";
                }
        }
    })
})


