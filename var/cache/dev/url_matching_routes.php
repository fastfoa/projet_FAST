<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/dash' => [[['_route' => 'dash', '_controller' => 'App\\Controller\\DashController::index'], null, null, null, false, false, null]],
        '/document' => [[['_route' => 'document', '_controller' => 'App\\Controller\\DocumentController::index'], null, null, null, false, false, null]],
        '/evaluation' => [[['_route' => 'evaluation', '_controller' => 'App\\Controller\\EvaluationController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\InscriptionController::index'], null, null, null, false, false, null]],
        '/lan' => [[['_route' => 'lan', '_controller' => 'App\\Controller\\LanController::index'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, false, false, null]],
        '/profil/enabled' => [[['_route' => 'profil_enabled', '_controller' => 'App\\Controller\\ProfilEnabledController::profilEnabled'], null, null, null, false, false, null]],
        '/r/g/p/d' => [[['_route' => 'r_g_p_d', '_controller' => 'App\\Controller\\RGPDController::index'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stage/form' => [[['_route' => 'stage_form', '_controller' => 'App\\Controller\\StageFormController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/profilEnabled' => [[['_route' => 'profilEnabled', '_controller' => 'App\\Controller\\ProfilEnabledController::profilEnabled'], null, null, null, false, false, null]],
        '/files' => [[['_route' => 'files', '_controller' => 'App\\Controller\\LanController::files'], null, null, null, false, false, null]],
        '/formulaireEleve' => [[['_route' => 'formulaireEleve', '_controller' => 'App\\Controller\\LanController::formulaireEleve'], null, null, null, false, false, null]],
        '/formulaireG' => [[['_route' => 'formulaireG', '_controller' => 'App\\Controller\\LanController::formulaireG'], null, null, null, false, false, null]],
        '/followCompany' => [[['_route' => 'followCompany', '_controller' => 'App\\Controller\\LanController::followCompany'], null, null, null, false, false, null]],
        '/followTraining' => [[['_route' => 'followTraining', '_controller' => 'App\\Controller\\LanController::followTraining'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\LanController::test'], null, null, null, false, false, null]],
        '/downloadlist' => [[['_route' => 'downloadlist', '_controller' => 'App\\Controller\\DocumentController::downloadlist'], null, null, null, false, false, null]],
        '/download' => [[['_route' => 'download1', '_controller' => 'App\\Controller\\DocumentController::download'], null, null, null, false, false, null]],
        '/stageForm' => [[['_route' => 'stageForm', '_controller' => 'App\\Controller\\StageFormController::stageForm'], null, null, null, false, false, null]],
        '/formations' => [[['_route' => 'formations', '_controller' => 'App\\Controller\\LanController::formations'], null, null, null, false, false, null]],
        '/documents' => [[['_route' => 'documents', '_controller' => 'App\\Controller\\LanController::documentOff'], null, null, null, false, false, null]],
        '/aide' => [[['_route' => 'aide', '_controller' => 'App\\Controller\\LanController::aide'], null, null, null, false, false, null]],
        '/modifInfoMonCompte' => [[['_route' => 'compte', '_controller' => 'App\\Controller\\CompteController::modifInfoMonCompte'], null, null, null, false, false, null]],
        '/modifier_mon_password' => [[['_route' => 'compte_modif_password', '_controller' => 'App\\Controller\\CompteModifPasswordController::compte_modif_password'], null, null, null, false, false, null]],
        '/inscriptionEntreprise' => [[['_route' => 'inscriptionEntreprise', '_controller' => 'App\\Controller\\InscriptionController::inscriptionEntreprise'], null, null, null, false, false, null]],
        '/inscriptionApprenti' => [[['_route' => 'inscriptionApprenti', '_controller' => 'App\\Controller\\InscriptionController::inscriptionApprenti'], null, null, null, false, false, null]],
        '/inscriptionMA' => [[['_route' => 'inscriptionMA', '_controller' => 'App\\Controller\\InscriptionController::inscriptionMA'], null, null, null, false, false, null]],
        '/inscriptionInd' => [[['_route' => 'inscriptionInd', '_controller' => 'App\\Controller\\InscriptionController::inscriptionInd'], null, null, null, false, false, null]],
        '/inscriptionFormateur' => [[['_route' => 'inscriptionFormateur', '_controller' => 'App\\Controller\\InscriptionController::inscriptionFormateur'], null, null, null, false, false, null]],
        '/barSession' => [[['_route' => 'barSession', '_controller' => 'App\\Controller\\BarController::barSession'], null, null, null, false, false, null]],
        '/dashOFPrincipal' => [[['_route' => 'dashOFPrincipal', '_controller' => 'App\\Controller\\DashController::dashOFPrincipal'], null, null, null, false, false, null]],
        '/dashApp' => [[['_route' => 'dashApp', '_controller' => 'App\\Controller\\DashController::dashApp'], null, null, null, false, false, null]],
        '/dashEntreprise' => [[['_route' => 'dashEntreprise', '_controller' => 'App\\Controller\\DashController::dashEntreprise'], null, null, null, false, false, null]],
        '/dashFormateur' => [[['_route' => 'dashFormateur', '_controller' => 'App\\Controller\\DashController::dashFormateur'], null, null, null, false, false, null]],
        '/dashMA' => [[['_route' => 'dashMA', '_controller' => 'App\\Controller\\DashController::dashMA'], null, null, null, false, false, null]],
        '/addSession' => [[['_route' => 'addSession', '_controller' => 'App\\Controller\\DashController::addSession'], null, null, null, false, false, null]],
        '/listAllAprentis' => [[['_route' => 'listAllAprentis', '_controller' => 'App\\Controller\\DashController::listAllAprentis'], null, null, null, false, false, null]],
        '/listAllFormateurs' => [[['_route' => 'listAllFormateurs', '_controller' => 'App\\Controller\\DashController::listAllFormateurs'], null, null, null, false, false, null]],
        '/listAllEntreprises' => [[['_route' => 'listAllEntreprises', '_controller' => 'App\\Controller\\DashController::listAllEntreprises'], null, null, null, false, false, null]],
        '/listAllMA' => [[['_route' => 'listAllMA', '_controller' => 'App\\Controller\\DashController::listAllMA'], null, null, null, false, false, null]],
        '/annuairePopup' => [[['_route' => 'annuairePopup', '_controller' => 'App\\Controller\\LanController::annuairePopup'], null, null, null, false, false, null]],
        '/annuaireTest' => [[['_route' => 'annuaireTest', '_controller' => 'App\\Controller\\LanController::annuaireTest'], null, null, null, false, false, null]],
        '/annuaire' => [[['_route' => 'annuaire', '_controller' => 'App\\Controller\\LanController::annuaire'], null, null, null, false, false, null]],
        '/rgpdForm' => [[['_route' => 'rgpdForm', '_controller' => 'App\\Controller\\RGPDController::rgpdForm'], null, null, null, false, false, null]],
        '/testAnnuaire' => [[['_route' => 'testannuaire', '_controller' => 'App\\Controller\\TestannuaireController::app_testannuaire'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/u(?'
                    .'|pload/([^/]++)(*:188)'
                    .'|serGeneralForm/([^/]++)(*:219)'
                .')'
                .'|/getInfoDoc/([^/]++)(*:248)'
                .'|/d(?'
                    .'|ownload/([^/]++)(*:277)'
                    .'|elete(?'
                        .'|document/([^/]++)(*:310)'
                        .'|MA/([^/]++)/([^/]++)(*:338)'
                        .'|Session/([^/]++)(*:362)'
                    .')'
                    .'|ash(?'
                        .'|OFSession/([^/]++)(*:395)'
                        .'|Eval/([^/]++)(*:416)'
                    .')'
                .')'
                .'|/a(?'
                    .'|ddUser(?'
                        .'|/([^/]++)/([^/]++)(*:458)'
                        .'|Session/([^/]++)/([^/]++)/([^/]++)(*:500)'
                    .')'
                    .'|nnuaireR(?'
                        .'|/([^/]++)(*:529)'
                        .'|S/([^/]++)/([^/]++)(*:556)'
                    .')'
                .')'
                .'|/insertMa/([^/]++)/([^/]++)(*:593)'
                .'|/feditApprenti/([^/]++)(*:624)'
                .'|/list(?'
                    .'|Apprentis/([^/]++)(*:658)'
                    .'|Users(?'
                        .'|Session/([^/]++)/([^/]++)/([^/]++)(*:708)'
                        .'|Entreprise/([^/]++)/([^/]++)/([^/]++)(*:753)'
                    .')'
                    .'|Formateurs/([^/]++)(*:781)'
                    .'|MA/([^/]++)(*:800)'
                .')'
                .'|/profilOF_APP/([^/]++)(*:831)'
                .'|/newEvaluation/([^/]++)/([^/]++)(*:871)'
                .'|/editEvaluation/([^/]++)(*:903)'
                .'|/showEvaluation/([^/]++)(*:935)'
                .'|/choiceCompetence/([^/]++)/([^/]++)(*:978)'
                .'|/testAnnuaire/([^/]++)/([^/]++)(*:1017)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        188 => [[['_route' => 'upload', '_controller' => 'App\\Controller\\DocumentController::upload'], ['retour'], null, null, false, true, null]],
        219 => [[['_route' => 'userGeneralForm', '_controller' => 'App\\Controller\\InscriptionController::userGeneralForm'], ['user'], null, null, false, true, null]],
        248 => [[['_route' => 'getInfoDoc', '_controller' => 'App\\Controller\\DocumentController::getInfoDoc'], ['id'], null, null, false, true, null]],
        277 => [[['_route' => 'download', '_controller' => 'App\\Controller\\DocumentController::download'], ['id'], null, null, false, true, null]],
        310 => [[['_route' => 'deletedocument', '_controller' => 'App\\Controller\\DocumentController::deletedocument'], ['id'], null, null, false, true, null]],
        338 => [[['_route' => 'deleteMA', '_controller' => 'App\\Controller\\ProfilController::deleteMA'], ['idApp', 'idMa'], null, null, false, true, null]],
        362 => [[['_route' => 'deleteSession', '_controller' => 'App\\Controller\\DashController::deleteSession'], ['session'], null, null, false, true, null]],
        395 => [[['_route' => 'dashOFSession', '_controller' => 'App\\Controller\\DashController::dashOFSession'], ['session'], null, null, false, true, null]],
        416 => [[['_route' => 'dashEval', '_controller' => 'App\\Controller\\EvaluationController::dashEval'], ['app'], null, null, false, true, null]],
        458 => [[['_route' => 'addUser', '_controller' => 'App\\Controller\\InscriptionController::addUser'], ['role', 'roleName'], null, null, false, true, null]],
        500 => [[['_route' => 'addUserSession', '_controller' => 'App\\Controller\\InscriptionController::addUserSession'], ['session', 'role', 'roleName'], null, null, false, true, null]],
        529 => [[['_route' => 'annuaireR', '_controller' => 'App\\Controller\\LanController::annuaireR'], ['role'], null, null, false, true, null]],
        556 => [[['_route' => 'annuaireRS', '_controller' => 'App\\Controller\\LanController::annuaireRS'], ['role', 'session'], null, null, false, true, null]],
        593 => [[['_route' => 'insertMa', '_controller' => 'App\\Controller\\ProfilController::insertMa'], ['idMa', 'idApp'], null, null, false, true, null]],
        624 => [[['_route' => 'editApprenti', '_controller' => 'App\\Controller\\DashController::editApprenti'], ['userID'], null, null, false, true, null]],
        658 => [[['_route' => 'listApprentis', '_controller' => 'App\\Controller\\DashController::listApprentis'], ['session'], null, null, false, true, null]],
        708 => [[['_route' => 'listUsersSession', '_controller' => 'App\\Controller\\DashController::listUsersSession'], ['session', 'role', 'roleName'], null, null, false, true, null]],
        753 => [[['_route' => 'listUsersEntreprise', '_controller' => 'App\\Controller\\DashController::listUsersEntreprise'], ['entreprise', 'role', 'roleName'], null, null, false, true, null]],
        781 => [[['_route' => 'listFormateurs', '_controller' => 'App\\Controller\\DashController::listFormateurs'], ['session'], null, null, false, true, null]],
        800 => [[['_route' => 'listMA', '_controller' => 'App\\Controller\\DashController::listMA'], ['session'], null, null, false, true, null]],
        831 => [[['_route' => 'profilOF_APP', '_controller' => 'App\\Controller\\ProfilController::profilOF_APP'], ['user'], null, null, false, true, null]],
        871 => [[['_route' => 'newEvaluation', '_controller' => 'App\\Controller\\EvaluationController::newEvaluation'], ['competence', 'app'], null, null, false, true, null]],
        903 => [[['_route' => 'editEvaluation', '_controller' => 'App\\Controller\\EvaluationController::editEvaluation'], ['eval'], null, null, false, true, null]],
        935 => [[['_route' => 'showEvaluation', '_controller' => 'App\\Controller\\EvaluationController::showEvaluation'], ['eval'], null, null, false, true, null]],
        978 => [[['_route' => 'choiceCompetence', '_controller' => 'App\\Controller\\EvaluationController::choiceCompetence'], ['app', 'session'], null, null, false, true, null]],
        1017 => [
            [['_route' => 'liste_session_role', '_controller' => 'App\\Controller\\TestannuaireController::liste_session_role'], ['session', 'role'], null, null, true, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
