<?php

include_once 'config.inc.php';
unset($_SESSION['id']);
unset($_SESSION['username']);
echo "<script language='JavaScript'>location.href='index.php';</script>";