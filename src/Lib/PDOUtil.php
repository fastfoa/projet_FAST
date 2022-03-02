<?php



use PDO;



function getInfoOF()
{
    $infoOF = [
        'nom' => 'Vidal',
        'prenom' => 'Jean-Philippe',
        'email' => 'jean-philippe.vidal@foreach-academy.fr',
        'telephone' => 'XXXXXXXXXX',
    ];

    return $infoOF;
}

function getMenuFromRole($role)
{
    $menu = [ 
        'ROLE_OF'=> 
        [
            'Sessions' => 'dashOFPrincipal', 
            'Apprentis' => 'listAllAprentis', 
            'Formateurs' => 'listAllFormateurs', 
            'Maitres' => 'listAllMA', 
            'Entreprises' => 'listAllEntreprises' 
        ],
        
        'ROLE_APP'=> 
        [
            'Apprentis' => 'listAllAprentis', 
            'Formateurs' => 'listAllFormateurs', 
            'Maitres' => 'listAllMA', 
            'Entreprises' => 'listAllEntreprises' 
        ],
        'ROLE_ENT'=> 
        [
            'Apprentis' => 'listAllAprentis', 
            'Formateurs' => 'listAllFormateurs', 
            'Maitres' => 'listAllMA', 
            'Entreprises' => 'listAllEntreprises' 
        ],
        'ROLE_MA'=> 
        [
            'Apprentis' => 'listAllAprentis', 
            'Formateurs' => 'listAllFormateurs', 
            'Maitres' => 'listAllMA', 
            'Entreprises' => 'listAllEntreprises' 
        ],
        'ROLE_FORMATEUR'=> 
        [
            'Apprentis' => 'listAllAprentis', 
            'Formateurs' => 'listAllFormateurs', 
            'Maitres' => 'listAllMA', 
            'Entreprises' => 'listAllEntreprises' 
        ]
        
    ];
    return $menu[ $role ];
}


function getPDO($login, $pw)
{
    $dsn = "mysql:host=127.0.0.1;dbname=projet_FAST";
    try {
        $pdo = new PDO($dsn, $login, $pw);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
    return $pdo;
}


function getSQLRaw($login, $pw, $query)
{
    $pdo = getPDO($login, $pw);
    $rs = $pdo->prepare($query);
    return $rs->execute();
}

function getSQLList($login, $pw, $query)
{
    $pdo = getPDO($login, $pw);
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
    $pdo = getPDO($login, $pw);
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
    $pdo = getPDO($login, $pw,);
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
    $pdo = getPDO($login, $pw);
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

// ***********************************************************

function getIdSessionFromApprenti($login, $pw, $idApprenti)
{
    return getSQLSingleAssoc(
        $login,
        $pw,
        "SELECT id_session                   
         FROM user_in_session          
         WHERE id_user='$idApprenti'"
    )['id_session'];
}

function getNameSessionFromApprenti($login, $pw, $idApprenti)
{
    return getSQLSingleAssoc(
        $login,
        $pw,
        "SELECT s.nom                   
         FROM user_in_session as u, session as s          
         WHERE s.id = u.id_session and u.id_user='$idApprenti'"
    )['nom'];
}
// ********************************* requetes 

function getMAFromApprenti($login, $pw, $idApprenti)
{
    return getSQLSingleAssoc(
        $login,
        $pw,
        "SELECT u.nom, u.prenom, u.id, u.role_string                   
         FROM app_has_ma as a          
         RIGHT JOIN user as u ON u.id=a.id_ma 
         WHERE a.id_apprenti='$idApprenti'"
    );
}

function getFormateursFromApprenti($login, $pw, $idApprenti)
{
    return getSQLArrayAssoc(
        $login,
        $pw,
        "SELECT u.nom, u.prenom, u.id 
                FROM user_in_session as us0, 
                    user_in_session as us1, 
                    user as u 
                WHERE 
                us0.id_session=us1.id_session and u.id=us1.id_user and u.role_string='ROLE_FORMATEUR' 
                and us0.id_user='$idApprenti'"
    );
}

function getMAFromEnt($login, $pw, $idEntreprise)
{
    return getSQLSingleAssoc(
        $login,
        $pw,
        "SELECT u.nom, u.prenom, u.id, u.email, u.telephone                  
         FROM mahas_ent as m          
         RIGHT JOIN user as u ON u.id=m.id_ma 
         WHERE m.id_ent='$idEntreprise'"
    );
}

function getAppFromMA($login, $pw, $idMA)
{
    return getSQLSingleAssoc(
        $login,
        $pw,
        "SELECT u.nom, u.prenom, u.id, u.email, u.telephone, u.tel_urgence1, u.tel_urgence2, u.adresse                   
          FROM app_has_ma as a          
          RIGHT JOIN user as u ON u.id=a.id_apprenti 
          WHERE a.id_ma='$idMA'"
    );
}

function convertUserEntity2SQL($login, $pw, $id)
{
    return getSQLSingleAssoc(
        $login,
        $pw,
        "SELECT *                   
          FROM user          
          WHERE id='$id'"
    );
}

function getUsersFromRoleSession($login, $pw, $role, $idSession)
{
    return getSQLArrayAssoc(
        $login,
        $pw,
        "SELECT user.nom, user.prenom, user.id, user.email
             FROM  user_in_session as s 
             LEFT JOIN user ON s.id_user=user.id 
             WHERE s.id_session=$idSession and user.role_string='$role'"
    );
}

function getUsersFromRole($login, $pw, $role)
{
    return getSQLArrayAssoc(
        $login,
        $pw,
        "SELECT *
             FROM user  
             WHERE user.role_string='$role'"
    );
}
