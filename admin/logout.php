<?php
require_once "../root.php";
session_start();
session_destroy();
	header("Location: $my_root");

