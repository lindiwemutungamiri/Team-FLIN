<?php

session_start();

// initializing variables

$username = "";

$email    = "";

$errors = array();

// connect to the database

$db = mysqli_connect('localhost', 'root', '', 'nyikaclinic');

if(!$db){
    die('Connection failed: ' . mysqli_connect_error());
}
