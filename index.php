<?php
class Router
{
    //--------- Initial Commands -------------//

    function __construct()
    {
        define('INCLUDE_PATH', __DIR__);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        session_start();
        if (!empty($_GET['f'])) {
            $router = $_GET['f'];
            $this->$router();
        } else $this->loginForm();

    }


    //--------- Login Form Function -------------//

    function loginForm()
    {
        if (isset($_SESSION['login'])) {
            header('Location:/?f=mainHome');
        } else {
            include_once INCLUDE_PATH . '/Templates/login/login.php';
        }
    }

    function mainHome()
    {
        if (isset($_SESSION['login'])) {
            include_once INCLUDE_PATH . '/Templates/Users/userhomepage.php';
        } else {
            header('Location:/?f=loginForm&try=2');
        }
    }

    //--------- User Home Page Function -------------//

    function userHomePage()
    {
        if (isset($_SESSION['login'])) {
            include_once INCLUDE_PATH . '/Templates/Users/userHomePage.php';
        } else {
            header('Location:/?f=loginForm&try=2');
        }
    }

    //--------- User Create Page Function -------------//


    function userCreatePage()
    {
        if (isset($_SESSION['login'])) {
            include_once INCLUDE_PATH . '/Templates/Users/userCreatePage.php';
        } else header('Location:/?f=loginForm&try=2');
    }

    //--------- User Edit Page Function -------------//


    function userEditPage()
    {
        if (isset($_SESSION['login'])) {
            include_once INCLUDE_PATH . '/Templates/Users/userEditPage.php';
        } else header('Location:/?f=loginForm&try=2');
    }

    //--------- User Details Page Function -------------//

    function userDetailsPage()
    {
        if (isset($_SESSION['login'])) {
            include_once INCLUDE_PATH . '/Templates/Users/userDetailsPage.php';
        } else header('Location:/?f=loginForm&try=2');
    }


    //--------- Cars Home Page Function -------------//

    function carsHomePage()
    {
        if (isset($_SESSION['login'])) {
            include_once INCLUDE_PATH . '/Templates/Vehicles/carsHomePage.php';
        } else header('Location:/?f=loginForm&try=2');
    }

    //--------- Cars Create Page Function -------------//

    function carsCreatePage()
    {
        if (isset($_SESSION['login'])) {
            include_once INCLUDE_PATH . '/Templates/Vehicles/carsCreatePage.php';
        } else header('Location:/?f=loginForm&try=2');
    }

    //--------- Cars Details Page Function -------------//

    function carsDetailsPage()
    {
        if (isset($_SESSION['login'])) {
            include_once INCLUDE_PATH . '/Templates/Vehicles/carsDetailsPage.php';
        } else header('Location:/?f=loginForm&try=2');
    }

    //--------- Cars Edit Page Function -------------//

    function carsEditPage()
    {
        if (isset($_SESSION['login'])) {
            include_once INCLUDE_PATH . '/Templates/Vehicles/carsEditPage.php';
        } else header('Location:/?f=loginForm&try=2');
    }


    //--------- Drivers Home Page Function -------------//

    function driversHomePage()
    {
        if (isset($_SESSION['login'])) {
            include_once INCLUDE_PATH . '/Templates/Drivers/driversHomePage.php';
        } else header('Location:/?f=loginForm&try=2');
    }

    //--------- Drivers Details Page Function -------------//

    function driversDetailsPage()
    {
        if (isset($_SESSION['login'])) {
            include_once INCLUDE_PATH . '/Templates/Drivers/driversDetailsPage.php';
        } else header('Location:/?f=loginForm&try=2');
    }

    //--------- Drivers Create Page Function -------------//

    function driversCreatePage()
    {
        if (isset($_SESSION['login'])) {
            include_once INCLUDE_PATH . '/Templates/Drivers/driversCreatePage.php';
        } else header('Location:/?f=loginForm&try=2');
    }

    //--------- Drivers Edit Page Function -------------//

    function driversEditPage()
    {
        if (isset($_SESSION['login'])) {
            include_once INCLUDE_PATH . '/Templates/Drivers/driversEditPage.php';
        } else header('Location:/?f=loginForm&try=2');
    }

}

new Router();
