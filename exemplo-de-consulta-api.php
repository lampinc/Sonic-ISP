<?php
/*
Explo básico para consumo da API do Sonic ISP 5.2.3
**********************************************************************************
Este é um exemplo simples para a integração com a API do Sonic ISP utilizando json
*/

$ch = curl_init();

// URL do servidor
$url = "http://172.20.12.178/api.php"; // url do servidor no formato http://endereço-do-serrvidor/api.php

// Chave API 
$apikey = "wKatWCWj0zXkBnpMhuI3QqI23qKY8e68aWF2dqbxJYsKoTPLBPT"; 
// Formato da requisição
$formato = "JSON"; // A api do Sonic ISP suporta consultas JSON e XML

// exemplo de consulta
$tipo = "2"; // 2 = exibe informações sabre clientes
$limite = "10"; // limite de exibição dos registros, padrão 10, aceito 20 e 100
$pesquisa = "cpf"; // perquisar por cpf, id, codigo, nome, email e login
$busca = "000.000.000-00"; // busca a informação ( no exemplo busca por CPF ), pode-se buscar por Status como I,A,S,N,B,C,NI,R,V
$ordem = ""; // 

// formando a url no formato: http://endereço-do-servidor/api.php?key=&formato=&tipo=&limite=&pesquisa=&busca=&ordem= 
$postURL = "$url?key=$apikey&formato=$formato&tipo=$tipo&limite=$limite&pesquisa=$pesquisa&busca=$busca&ordem=$ordem"; 

// envia os dados por URL
$ch = curl_init ($postURL); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); 
$returnValue = curl_exec ($ch);

curl_close ($ch);

// emprime o resultado da variavél que contem o retorno da consulta 
echo $returnValue;
