<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de veículos</title>
    <link rel="stylesheet" href="/resources/CSS/styles.css">
</head>

<body>



    <h3 class="headerUser">Cadastro de Veículos de: <?php echo $_SESSION['username'] ?></h3>

    <div class="navigationMenu">
        <ul class="ulNavigation">
            <li class="liNavigation"><a href="/?f=mainHome">Home</a></li>
            <li class="liNavigation"><a href="/?f=userHomePage">Usuários</a></li>
            <li class="liNavigation"><a href="/?f=carsHomePage">Veículos</a></li>
            <li class="liNavigation"><a href="/?f=driversHomePage">Motoristas</a></li>
            <li class="liNavigation"><a href="api.php/?f=logout" id="logoutBtn">Logout</a></li>
        </ul>
    </div>
    <div class="sideBar">
        <ul class="sideUl">
            <li class="sideLi"><a href="/?f=carsHomePage">Listar</a></li>
            <li class="sideLi"><a href="/?f=carsCreatePage">Criar</a></li>
            <li class="sideLi"><a href="/?f=carsHomePage">Voltar</a></li>

        </ul>
        <img src="/resources/img/createCars.png" alt="car closeup vertical" style="width: 100%;">

    </div>

    <div class="divMiddle">
        <form action='/api.php/?f=createCars_Api' method="POST" id="create_Form">
            <div class="middlecontroller">
                <h2>Cadastro de novo Veículo:</h2>

                <div><label>Placa do novo veículo:</label></div>
                <div><input type="text" class="inputMiddle" name="placa"></div>

                <div><label>Marca do novo veículo:</label></div>
                <div><input type="text" class="inputMiddle" name="marca"></label></div>

                <div><label>Modelo do novo veículo:</label></div>
                <div><input type="text" class="inputMiddle" name="modelo"></label></div>

                <div><label>Tipo do novo veículo:</label></div>
                <div><input type="text" class="inputMiddle" name="tipo"></label></div>

                <div><label>Ano do novo veículo:</label></div>
                <div><input type="number" class="inputMiddle" name="ano"></label></div>

                <div><label>Cor do novo veículo:</label></div>
                <div><input type="text" class="inputMiddle" name="cor"></label></div>
                <button class="buttonEntrar" id="saveBtn">Cadastrar</button>
            </div>
        </form>



    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="/resources/JS/cars_create_script.js"></script>

</body>

