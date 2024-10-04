<?php
session_start();
session_destroy();

header("location: /Ejercicios/LoginRegister/login.php");
