<?php



use PDO;


    function getPDO( $login, $pw )
    {
        $dsn = "mysql:host=127.0.0.1;dbname=projet_FAST";
        try 
        {
           $pdo = new PDO($dsn, $login, $pw);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
        return $pdo;
    }


     function getSQLRaw( $login, $pw, $query)
    {
        $pdo = getPDO($login, $pw);
        $rs = $pdo->prepare($query);
        return $rs->execute();
    }

     function getSQLList($login, $pw, $query)
    {
        $pdo = getPDO($login, $pw );
        $rs = $pdo->prepare($query);
        $rs->execute();
        $res = [];
        while ($ligne = $rs->fetch(PDO::FETCH_NUM)) {
            if ($ligne[0] != null)
                $res[] = $ligne[0];
        }
        return $res;
    }

     function getSQLArrayKV($login, $pw, $query)
    {
        $pdo = getPDO($login, $pw );
        $rs = $pdo->prepare($query);
        $rs->execute();
        $res = [];
        while ($ligne = $rs->fetch(PDO::FETCH_ASSOC)) {
            if ($ligne['v'] != null)
                $res[$ligne['k']] = $ligne['v'];
        }
        return $res;
    }

     function getSQLArrayAssoc($login, $pw, $query)
    {
        $pdo = getPDO( $login, $pw, );
        $rs = $pdo->prepare($query);
        $rs->execute();
        $res = [];
        while ($ligne = $rs->fetch(PDO::FETCH_ASSOC)) {
            $res[] = $ligne;
        }
        return $res;
    }

     function getSQLSingle($login, $pw, $query)
    {
        $pdo = getPDO($login, $pw );
        $rs = $pdo->prepare($query);
        $rs->execute();
        return  $rs->fetchColumn();
    }

    function getSQLSingleAssoc($login, $pw, $query)
    {
        $pdo = getPDO($login, $pw); 
        $rs = $pdo->prepare($query);
        $rs->execute();
        return  $rs->fetch();
    }

    function getMAFromApprenti($login, $pw, $idApprenti )
    {
        return getSQLSingleAssoc($login, $pw, 
        "SELECT u.nom, u.prenom, u.id, u.role_string                   
         FROM app_has_ma as a          
         RIGHT JOIN user as u ON u.id=a.id_ma 
         WHERE a.id_apprenti='$idApprenti'"
     );

    }

    function getMAFromEnt($login, $pw, $idEntreprise )
    {
        return getSQLSingleAssoc($login, $pw, 
        "SELECT u.nom, u.prenom, u.id, u.email, u.telephone                  
         FROM mahas_ent as m          
         RIGHT JOIN user as u ON u.id=m.id_ma 
         WHERE m.id_ent='$idEntreprise'"
     );

    }


     function getAppFromMA($login, $pw, $idMA )
     {
         return getSQLSingleAssoc($login, $pw, 
         "SELECT u.nom, u.prenom, u.id, u.email, u.telephone, u.tel_urgence1, u.tel_urgence2, u.adresse                   
          FROM app_has_ma as a          
          RIGHT JOIN user as u ON u.id=a.id_apprenti 
          WHERE a.id_ma='$idMA'"
      );
 
     }
