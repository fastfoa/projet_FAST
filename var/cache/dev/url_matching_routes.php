<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/document' => [[['_route' => 'document', '_controller' => 'App\\Controller\\DocumentController::index'], null, null, null, false, false, null]],
        '/lan' => [[['_route' => 'lan', '_controller' => 'App\\Controller\\LanController::index'], null, null, null, false, false, null]],
        '/inscriptionEleve' => [[['_route' => 'inscriptionEleve', '_controller' => 'App\\Controller\\LanController::inscriptionEleve'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LanController::login'], null, null, null, false, false, null]],
        '/dashBoardStudent' => [[['_route' => 'dashBoardStudent', '_controller' => 'App\\Controller\\LanController::dashBoardStudent'], null, null, null, false, false, null]],
        '/dashBoardSchool' => [[['_route' => 'dashBoardSchool', '_controller' => 'App\\Controller\\LanController::dashBoardSchool'], null, null, null, false, false, null]],
        '/files' => [[['_route' => 'files', '_controller' => 'App\\Controller\\LanController::files'], null, null, null, false, false, null]],
        '/dashBoardSkill' => [[['_route' => 'dashBoardSkill', '_controller' => 'App\\Controller\\LanController::dashBoardSkill'], null, null, null, false, false, null]],
        '/getSkillToBe' => [[['_route' => 'getSkillToBe', '_controller' => 'App\\Controller\\LanController::getSkillToBe'], null, null, null, false, false, null]],
        '/suiviCompetences' => [[['_route' => 'suiviCompetences', '_controller' => 'App\\Controller\\LanController::suiviCompetences'], null, null, null, false, false, null]],
        '/formulaireEleve' => [[['_route' => 'formulaireEleve', '_controller' => 'App\\Controller\\LanController::formulaireEleve'], null, null, null, false, false, null]],
        '/formulaireG' => [[['_route' => 'formulaireG', '_controller' => 'App\\Controller\\LanController::formulaireG'], null, null, null, false, false, null]],
        '/dash' => [[['_route' => 'dash', '_controller' => 'App\\Controller\\LanController::dash'], null, null, null, false, false, null]],
        '/followCompany' => [[['_route' => 'followCompany', '_controller' => 'App\\Controller\\LanController::followCompany'], null, null, null, false, false, null]],
        '/followTraining' => [[['_route' => 'followTraining', '_controller' => 'App\\Controller\\LanController::followTraining'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\LanController::test'], null, null, null, false, false, null]],
        '/dashBoardEntrprise' => [[['_route' => 'dashBoardEntrprise', '_controller' => 'App\\Controller\\LanController::dashBoardEntrprise'], null, null, null, false, false, null]],
        '/upload' => [[['_route' => 'upload', '_controller' => 'App\\Controller\\DocumentController::upload'], null, null, null, false, false, null]],
        '/downloadlist' => [[['_route' => 'downloadlist', '_controller' => 'App\\Controller\\DocumentController::downloadlist'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/download/([^/]++)(*:186)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        186 => [
            [['_route' => 'download', '_controller' => 'App\\Controller\\DocumentController::download'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
