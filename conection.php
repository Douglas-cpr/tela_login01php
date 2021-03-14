<?php

const host = '127.0.0.1';
const usuario = 'root';
const senha = 'root';
const db = 'login';

$connection = mysqli_connect(host, usuario, senha, db) or die ('Could not connect to the database');

?>