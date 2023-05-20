<?php
session_start();
session_destriy();
header('location: index.php');
exit();
