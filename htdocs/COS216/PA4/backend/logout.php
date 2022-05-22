<?php

setcookie("api", null, -1);
session_start();
session_unset();
session_destroy();

header('Location: ../today.php');
exit();