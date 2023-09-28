<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="/resources/CSS/styles.css">
</head>

<body>


<h3 class="headerUser">Cadastro de Motoristas de: <?php echo $_SESSION['username'] ?></h3>

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
        <li class="sideLi"><a href="/?f=driversHomePage">Listar</a></li>
        <li class="sideLi"><a href="/?f=driversCreatePage">Criar</a></li>
        <li class="sideLi"><a href="/?f=driversHomePage">Voltar</a></li>




    </ul>
    <img src="/resources/img/userCreate.png" alt="car closeup vertical" style="width: 100%; margin-top:20px; height:auto; position:relative;">

</div>

<div class="divMiddle">
    <form action="api.php/?f=createDrivers_Api" method="POST" id="driverCreateForm">
        <div class="middlecontroller">
            <h2>Cadastro de novo Motorista:</h2>

            <div><label>Nome do novo Motorista:</label></div>
            <div><input type="text" class="inputMiddle" name="drivers_username"></div>

            <div><label>Idade do Motorista:</label></div>
            <div><input type="text" class="inputMiddle" name="drivers_age"></label></div>

            <div><label>Etnia do Motorista:</label></div>
            <div><input type="text" class="inputMiddle" name="drivers_type"></label></div>

            <div><label>CNH do Motorista:</label></div>
            <div><input type="text" class="inputMiddle" name="drivers_cnh"></label></div>

            <div><label>Sexo do Motorista:</label></div>
            <div><input type="text" class="inputMiddle" name="drivers_sex"></label></div>

            <div><button type="submit" class="buttonEntrar" id="saveBtn">Cadastrar</button></div>
        </div>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="/resources/JS/driver_create_script.js"></script>

</body>