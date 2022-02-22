<?php

namespace App\Controller;

use PDO;

function getSQLRaw($query)
{
    $dsn = "mysql:host=127.0.0.1;dbname=projet_FAST";
    try {
        $pdo = new PDO($dsn, 'xxx', 'xxx');
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
    $rs = $pdo->prepare($query);
    return $rs->execute();
}
function getSQLArrayAssoc($query)
{
    $rs = getSQLRaw($query);
    $res = [];
    while ($ligne = $rs->fetch(PDO::FETCH_ASSOC)) {
        $res[] = $ligne;
    }
    return $res;
}

function getSQLSingleAssoc($query)
{
    $rs = getSQLRaw($query);
    return  $rs->fetch(PDO::FETCH_ASSOC);
}
