$(document).on("click", "#saveBtn", function (e) {
    e.preventDefault();
    var form = $('#create_Form');
    $.ajax({
        url: form.attr('action'), // -> '/api.php/?f=createCars_Api';
        type: form.attr('method'), // -> 'POST'; 
        data: form.serialize(),
        success: function (response, status, e) {
            console.log(response);  
            console.log(status);   
            console.log(e);  
            alert('Você criou um veículo com sucesso!');
            window.location = "/?f=carsHomePage&create=1";
        },
        error: function(xhr) {
            alert(JSON.stringify(xhr.responseText));
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

