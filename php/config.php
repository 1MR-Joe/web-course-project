<?php
$conn = mysqli_connect('localhost', 'root', 'my_password', 'gym_database');
$db = mysqli_select_db($conn, 'gym_database');