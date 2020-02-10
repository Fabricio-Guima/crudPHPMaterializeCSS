<?php
$utf8 = header("content-Type: text/html; charset=utf-8");
$conexao = new mysqli('localhost', 'root', '', 'db_cadastro');
$conexao->set_charset('utf8');
