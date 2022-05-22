<?php

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once 'config.php';

    if (emptyEmail($email) !== false) {
        header('Location: ../login.php?error=emptyemail');
        exit();
    }

    if (emptyPassword($password) !== false) {
        header('Location: ../login.php?error=emptypassword');
        exit();
    }

    $instance = Database::instance();
    $conn = $instance->conn;

    if (emailExists($conn, $email) === false) {
        header('Location: ../login.php?error=emailnotexist');
        exit();
    }

    $url = "https://wheatley.cs.up.ac.za/u21549967/api.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_USERPWD, "u21549967" . ":" . "");

    $data = array(
        'type' => 'login',
        'email' => $email,
        'password' => $password
    );

    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $res = curl_exec($ch);

    if (curl_errno($ch)) {
        // this would be your first hint that something went wrong
        die('Couldn\'t send request: ' . curl_error($ch));
    } else {
        // check the HTTP status code of the request
        $resultStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($resultStatus == 200) {
            echo "<script>console.log('gucci')</script>";
        } else {
            echo "<script>console.log('not gucci')</script>";
    
            die('Request failed: HTTP status code: ' . $resultStatus);
        }
    }
    
    $json = json_decode($res,true);

    if (!$json['data']['name']) {
        header('Location: ../login.php?error=loginfailed');
        exit();
    }

    $_SESSION['name'] = $json['data']['name'];
    $_SESSION['surname'] = $json['data']['surname'];
    $_SESSION['api'] = $json['data']['key'];

    // $cookieValue = $json['data']['key'];
    // setcookie("api", "$cookieValue", time() + (86400 * 30), "/");

    curl_close($ch);
    header("location: ../today.php");
    exit();
}
else {
    header("location: ../login.php?error=notsubmitted");
    exit();
}