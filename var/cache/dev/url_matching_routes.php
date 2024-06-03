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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/game/pig' => [[['_route' => 'pig_start', '_controller' => 'Caas23\\Controller\\DiceGameController::home'], null, null, null, false, false, null]],
        '/game/pig/test/roll' => [[['_route' => 'test_roll_dice', '_controller' => 'Caas23\\Controller\\DiceGameController::testRollDice'], null, null, null, false, false, null]],
        '/game/pig/init' => [
            [['_route' => 'pig_init_get', '_controller' => 'Caas23\\Controller\\DiceGameController::init'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pig_init_post', '_controller' => 'Caas23\\Controller\\DiceGameController::initCallback'], null, ['POST' => 0], null, false, false, null],
        ],
        '/game/pig/play' => [[['_route' => 'pig_play', '_controller' => 'Caas23\\Controller\\DiceGameController::play'], null, ['GET' => 0], null, false, false, null]],
        '/game/pig/roll' => [[['_route' => 'pig_roll', '_controller' => 'Caas23\\Controller\\DiceGameController::roll'], null, ['POST' => 0], null, false, false, null]],
        '/game/pig/save' => [[['_route' => 'pig_save', '_controller' => 'Caas23\\Controller\\DiceGameController::save'], null, ['POST' => 0], null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'Caas23\\Controller\\Kmom01ControllerApi::api'], null, ['GET' => 0], null, false, false, null]],
        '/api/quote' => [[['_route' => 'api/quote', '_controller' => 'Caas23\\Controller\\Kmom01ControllerApi::jsonQuote'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'presentation', '_controller' => 'Caas23\\Controller\\Kmom01ControllerTwig::presentation'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'Caas23\\Controller\\Kmom01ControllerTwig::about'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'Caas23\\Controller\\Kmom01ControllerTwig::report'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky', '_controller' => 'Caas23\\Controller\\Kmom01ControllerTwig::lucky'], null, null, null, false, false, null]],
        '/api/deck' => [[['_route' => 'api/deck', '_controller' => 'Caas23\\Controller\\Kmom02ControllerApi::jsonDeck'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck/shuffle' => [[['_route' => 'api/deck/shuffle', '_controller' => 'Caas23\\Controller\\Kmom02ControllerApi::jsonDeckShuffle'], null, null, null, false, false, null]],
        '/api/deck/draw' => [[['_route' => 'api/deck/draw', '_controller' => 'Caas23\\Controller\\Kmom02ControllerApi::jsonDeckDraw'], null, null, null, false, false, null]],
        '/api/deck/joker' => [[['_route' => 'api/deck/joker', '_controller' => 'Caas23\\Controller\\Kmom02ControllerApiJoker::jsonDeckJoker'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck/joker/shuffle' => [[['_route' => 'api/deck/joker/shuffle', '_controller' => 'Caas23\\Controller\\Kmom02ControllerApiJoker::jsonDeckJokerShuffle'], null, null, null, false, false, null]],
        '/api/deck/joker/draw' => [[['_route' => 'api/deck/joker/draw', '_controller' => 'Caas23\\Controller\\Kmom02ControllerApiJoker::jsonDeckJokerDraw'], null, null, null, false, false, null]],
        '/card' => [
            [['_route' => 'card', '_controller' => 'Caas23\\Controller\\Kmom02ControllerCard::card'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'card_post', '_controller' => 'Caas23\\Controller\\Kmom02ControllerCard::cardDeckDrawMultiple'], null, ['POST' => 0], null, false, false, null],
        ],
        '/card/deck' => [[['_route' => 'card/deck', '_controller' => 'Caas23\\Controller\\Kmom02ControllerCard::cardDeck'], null, null, null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'card/deck/shuffle', '_controller' => 'Caas23\\Controller\\Kmom02ControllerCard::cardDeckShuffle'], null, null, null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'card/deck/draw', '_controller' => 'Caas23\\Controller\\Kmom02ControllerCard::cardDeckDraw'], null, null, null, false, false, null]],
        '/card/deck/joker' => [[['_route' => 'card/deck/joker', '_controller' => 'Caas23\\Controller\\Kmom02ControllerCardJoker::cardDeckJoker'], null, null, null, false, false, null]],
        '/card/deck/joker/shuffle' => [[['_route' => 'card/deck/joker/shuffle', '_controller' => 'Caas23\\Controller\\Kmom02ControllerCardJoker::cardDeckJokerShuffle'], null, null, null, false, false, null]],
        '/card/deck/joker/draw' => [[['_route' => 'card/deck/joker/draw', '_controller' => 'Caas23\\Controller\\Kmom02ControllerCardJoker::cardDeckJokerDraw'], null, null, null, false, false, null]],
        '/game' => [
            [['_route' => 'game', '_controller' => 'Caas23\\Controller\\Kmom03Controller::gameIntro'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'game_post', '_controller' => 'Caas23\\Controller\\Kmom03Controller::initGame'], null, ['POST' => 0], null, false, false, null],
        ],
        '/game/doc' => [[['_route' => 'game/doc', '_controller' => 'Caas23\\Controller\\Kmom03Controller::gameDoc'], null, null, null, false, false, null]],
        '/game/play' => [
            [['_route' => 'game/play', '_controller' => 'Caas23\\Controller\\Kmom03Controller::gamePlay'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'game/play_post', '_controller' => 'Caas23\\Controller\\Kmom03Controller::drawCard'], null, ['POST' => 0], null, false, false, null],
        ],
        '/game/play/bank' => [[['_route' => 'game/play/bank', '_controller' => 'Caas23\\Controller\\Kmom03Controller::drawCardBank'], null, null, null, false, false, null]],
        '/library' => [
            [['_route' => 'library', '_controller' => 'Caas23\\Controller\\Kmom05Controller::library'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'library_post', '_controller' => 'Caas23\\Controller\\Kmom05Controller::libraryPost'], null, ['POST' => 0], null, false, false, null],
        ],
        '/library/show' => [[['_route' => 'library_show_all', '_controller' => 'Caas23\\Controller\\Kmom05Controller::showAllBooks'], null, null, null, false, false, null]],
        '/library/reset' => [[['_route' => 'library_reset', '_controller' => 'Caas23\\Controller\\Kmom05Controller::resetLibrary'], null, null, null, false, false, null]],
        '/api/library/books' => [[['_route' => 'api/library/books', '_controller' => 'Caas23\\Controller\\Kmom05Controller::showAllBooksAPI'], null, null, null, false, false, null]],
        '/metrics' => [[['_route' => 'metrics', '_controller' => 'Caas23\\Controller\\Kmom06Controller::metrics'], null, null, null, false, false, null]],
        '/proj' => [[['_route' => 'proj', '_controller' => 'Caas23\\Controller\\Kmom10Controller::proj'], null, null, null, false, false, null]],
        '/proj/about' => [[['_route' => 'proj_about', '_controller' => 'Caas23\\Controller\\Kmom10Controller::about'], null, null, null, false, false, null]],
        '/proj/about/database' => [[['_route' => 'proj_database', '_controller' => 'Caas23\\Controller\\Kmom10Controller::database'], null, null, null, false, false, null]],
        '/proj/health' => [[['_route' => 'health', '_controller' => 'Caas23\\Controller\\Kmom10Controller::health'], null, null, null, false, false, null]],
        '/proj/energy' => [[['_route' => 'energy', '_controller' => 'Caas23\\Controller\\Kmom10Controller::energy'], null, null, null, false, false, null]],
        '/proj/api' => [
            [['_route' => 'proj_api', '_controller' => 'Caas23\\Controller\\Kmom10ControllerApi::api'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_post', '_controller' => 'Caas23\\Controller\\Kmom10ControllerApi::apiPost'], null, ['POST' => 0], null, false, false, null],
        ],
        '/proj/api/health/1' => [[['_route' => 'api_health1', '_controller' => 'Caas23\\Controller\\Kmom10ControllerApi::healthApi1'], null, null, null, false, false, null]],
        '/proj/api/health/2' => [[['_route' => 'api_health2', '_controller' => 'Caas23\\Controller\\Kmom10ControllerApi::healthApi2'], null, null, null, false, false, null]],
        '/proj/api/energy/1' => [[['_route' => 'api_energy1', '_controller' => 'Caas23\\Controller\\Kmom10ControllerApi::energyApi1'], null, null, null, false, false, null]],
        '/proj/api/energy/2' => [[['_route' => 'api_energy2', '_controller' => 'Caas23\\Controller\\Kmom10ControllerApi::energyApi2'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'session', '_controller' => 'Caas23\\Controller\\SessionController::session'], null, null, null, false, false, null]],
        '/session/delete' => [[['_route' => 'session/delete', '_controller' => 'Caas23\\Controller\\SessionController::sessionDelete'], null, null, null, false, false, null]],
        '/api/game' => [[['_route' => 'api/game', '_controller' => 'Caas23\\Controller\\SessionController::gameStats'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/game/pig/test/(?'
                    .'|roll/(\\d+)(*:230)'
                    .'|dicehand/(\\d+)(*:252)'
                .')'
                .'|/api/(?'
                    .'|deck/draw/(\\d+)(*:284)'
                    .'|library/book/([^/]++)(*:313)'
                .')'
                .'|/card/deck/(?'
                    .'|d(?'
                        .'|raw/(\\d+)(*:349)'
                        .'|eal/(\\d+)/(\\d+)(*:372)'
                    .')'
                    .'|joker/deal/(\\d+)/(\\d+)(*:403)'
                .')'
                .'|/library/(?'
                    .'|show/([^/]++)(*:437)'
                    .'|update/([^/]++)(?'
                        .'|(*:463)'
                    .')'
                    .'|delete/([^/]++)(*:487)'
                .')'
                .'|/proj/api/energyuse/(\\d+)(*:521)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        230 => [[['_route' => 'test_roll_num_dices', '_controller' => 'Caas23\\Controller\\DiceGameController::testRollDices'], ['num'], null, null, false, true, null]],
        252 => [[['_route' => 'test_dicehand', '_controller' => 'Caas23\\Controller\\DiceGameController::testDiceHand'], ['num'], null, null, false, true, null]],
        284 => [[['_route' => 'drawMultipleApi', '_controller' => 'Caas23\\Controller\\Kmom02ControllerApi::jsonDeckShowMultiple'], ['number'], ['GET' => 0], null, false, true, null]],
        313 => [[['_route' => 'api/library/book', '_controller' => 'Caas23\\Controller\\Kmom05Controller::showOneBookAPI'], ['isbn'], null, null, false, true, null]],
        349 => [[['_route' => 'drawMultiple', '_controller' => 'Caas23\\Controller\\Kmom02ControllerCard::cardDeckShowMultiple'], ['number'], ['GET' => 0], null, false, true, null]],
        372 => [[['_route' => 'deal_cardhand', '_controller' => 'Caas23\\Controller\\Kmom02ControllerCard::dealCardHand'], ['players', 'cards'], null, null, false, true, null]],
        403 => [[['_route' => 'deal_cardhand_joker', '_controller' => 'Caas23\\Controller\\Kmom02ControllerCardJoker::dealJokerCardHand'], ['players', 'cards'], null, null, false, true, null]],
        437 => [[['_route' => 'book_by_id', '_controller' => 'Caas23\\Controller\\Kmom05Controller::showBookById'], ['id'], null, null, false, true, null]],
        463 => [
            [['_route' => 'library_update_by_id', '_controller' => 'Caas23\\Controller\\Kmom05Controller::updateBookById'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'library_update_by_id_post', '_controller' => 'Caas23\\Controller\\Kmom05Controller::updateBookByIdPost'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        487 => [[['_route' => 'library_delete_by_id', '_controller' => 'Caas23\\Controller\\Kmom05Controller::deleteBookById'], ['id'], null, null, false, true, null]],
        521 => [
            [['_route' => 'energyuse', '_controller' => 'Caas23\\Controller\\Kmom10ControllerApi::apiEnergyUse'], ['year'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
