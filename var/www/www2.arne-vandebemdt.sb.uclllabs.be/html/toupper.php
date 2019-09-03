<?php
if (isset($_GET['code'])) {
	$code = $_GET['code'];
	echo strtoupper($code);
} else {
   	echo "error: no string was given";
}
