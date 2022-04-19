<?php

$conn = mysqli_connect("localhost", "root","july221999", "auction");
if(!$conn)
{
	die("Connection Failed: ".mysqli_connect_error());
}
