<?php
require_once 'config.php';
require_once 'models/Auth.php';
require_once 'dao/UserDaoMysql.php';

$auth = new Auth($pdo, $base);
$userInfo = $auth->checkToken();

$userDao = new UserDaoMysql($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$birthdate = filter_input(INPUT_POST, 'birthdate');
$city = filter_input(INPUT_POST, 'city');
$work = filter_input(INPUT_POST, 'work');
$password = filter_input(INPUT_POST, 'password');
$password_confirm = filter_input(INPUT_POST, 'password_confirm');

if ($name && $email) {
    if ($email != $userInfo->email) {
        if ($userDao->findByEmail($email) === $false) {
            $userInfo = $email;
        }
        $_SESSION['flash'] = 'E-mail ja esta sendo utilizado';
        header("Location:" . $base . "/configuracoes.php");
    }

    $userInfo->name = $name;
    $userInfo->$city = $city;
    $userInfo->work = $work;

    return $userDao->update($userInfo);
}

$_SESSION['flash'] = 'Campo E-mail e/ou Nome esta vazio';
header("Location:" . $base . "/configuracoes.php");
