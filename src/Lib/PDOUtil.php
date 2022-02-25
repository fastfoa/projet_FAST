<?php


use PDO;

    function getPDO()
    {
        
        $dsn = "mysql:host=127.0.0.1;dbname=projet_FAST";
        try {
            //$pdo = new PDO($dsn, 'xxx', 'xxx');
            //$pdo = new PDO($dsn, 'alexis.s', 'alexis.SQL@011012');
            $pdo = new PDO($dsn, 
                $this->getParameter('loginDB'),
                $this->getParameter('PasswordDB') );
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
        return $pdo;
    }


     function getSQLRaw($query)
    {
        $pdo = getPDO();
        $rs = $pdo->prepare($query);
        return $rs->execute();
    }

     function getSQLList($query)
    {
        $pdo = getPDO();
        $rs = $pdo->prepare($query);
        $rs->execute();
        $res = [];
        while ($ligne = $rs->fetch(PDO::FETCH_NUM)) {
            if ($ligne[0] != null)
                $res[] = $ligne[0];
        }
        return $res;
    }

     function getSQLArrayKV($query)
    {
        $pdo = getPDO();
        $rs = $pdo->prepare($query);
        $rs->execute();
        $res = [];
        while ($ligne = $rs->fetch(PDO::FETCH_ASSOC)) {
            if ($ligne['v'] != null)
                $res[$ligne['k']] = $ligne['v'];
        }
        return $res;
    }

     function getSQLArrayAssoc($query)
    {
        $pdo = getPDO();
        $rs = $pdo->prepare($query);
        $rs->execute();
        $res = [];
        while ($ligne = $rs->fetch(PDO::FETCH_ASSOC)) {
            $res[] = $ligne;
        }
        return $res;
    }

     function getSQLSingle($query)
    {
        $pdo = getPDO();
        $rs = $pdo->prepare($query);
        $rs->execute();
        return  $rs->fetchColumn();
    }

     function getSQLSingleAssoc($query)
    {
        $pdo = getPDO();
        $rs = $pdo->prepare($query);
        $rs->execute();
        return  $rs->fetch();
    }
