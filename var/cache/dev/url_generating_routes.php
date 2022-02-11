<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'document' => [[], ['_controller' => 'App\\Controller\\DocumentController::index'], [], [['text', '/document']], [], [], []],
    'lan' => [[], ['_controller' => 'App\\Controller\\LanController::index'], [], [['text', '/lan']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'inscriptionEleve' => [[], ['_controller' => 'App\\Controller\\LanController::inscriptionEleve'], [], [['text', '/inscriptionEleve']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\LanController::login'], [], [['text', '/login']], [], [], []],
    'dashBoardStudent' => [[], ['_controller' => 'App\\Controller\\LanController::dashBoardStudent'], [], [['text', '/dashBoardStudent']], [], [], []],
    'dashBoardSchool' => [[], ['_controller' => 'App\\Controller\\LanController::dashBoardSchool'], [], [['text', '/dashBoardSchool']], [], [], []],
    'files' => [[], ['_controller' => 'App\\Controller\\LanController::files'], [], [['text', '/files']], [], [], []],
    'dashBoardSkill' => [[], ['_controller' => 'App\\Controller\\LanController::dashBoardSkill'], [], [['text', '/dashBoardSkill']], [], [], []],
    'getSkillToBe' => [[], ['_controller' => 'App\\Controller\\LanController::getSkillToBe'], [], [['text', '/getSkillToBe']], [], [], []],
    'suiviCompetences' => [[], ['_controller' => 'App\\Controller\\LanController::suiviCompetences'], [], [['text', '/suiviCompetences']], [], [], []],
    'formulaireEleve' => [[], ['_controller' => 'App\\Controller\\LanController::formulaireEleve'], [], [['text', '/formulaireEleve']], [], [], []],
    'formulaireG' => [[], ['_controller' => 'App\\Controller\\LanController::formulaireG'], [], [['text', '/formulaireG']], [], [], []],
    'dash' => [[], ['_controller' => 'App\\Controller\\LanController::dash'], [], [['text', '/dash']], [], [], []],
    'followCompany' => [[], ['_controller' => 'App\\Controller\\LanController::followCompany'], [], [['text', '/followCompany']], [], [], []],
    'followTraining' => [[], ['_controller' => 'App\\Controller\\LanController::followTraining'], [], [['text', '/followTraining']], [], [], []],
    'test' => [[], ['_controller' => 'App\\Controller\\LanController::test'], [], [['text', '/test']], [], [], []],
    'dashBoardEntrprise' => [[], ['_controller' => 'App\\Controller\\LanController::dashBoardEntrprise'], [], [['text', '/dashBoardEntrprise']], [], [], []],
    'upload' => [[], ['_controller' => 'App\\Controller\\DocumentController::upload'], [], [['text', '/upload']], [], [], []],
    'downloadlist' => [[], ['_controller' => 'App\\Controller\\DocumentController::downloadlist'], [], [['text', '/downloadlist']], [], [], []],
    'download' => [['id'], ['_controller' => 'App\\Controller\\DocumentController::download'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/download']], [], [], []],
];
