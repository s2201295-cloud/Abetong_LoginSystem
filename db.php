<?php

$dbHost = 'aws-0-ap-northeast-1.pooler.supabase.com';
$dbUser = 'postgres.laplrmyarqpcfuaipxgz';
$dbPassword = '117383090028bobo';

$conn = pg_connect("host=$dbHost port=5432 dbname=postgres user=$dbUser password=$dbPassword sslmode=require");


if (!$conn) {
    exit('Database connection failed.');
}

?>