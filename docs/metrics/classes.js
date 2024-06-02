var classes = [
    {
        "name": "Caas23\\Controller\\Kmom01ControllerApi",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "api",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "jsonQuote",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 2,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\JsonResponse"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 2,
        "length": 36,
        "vocabulary": 24,
        "volume": 165.06,
        "difficulty": 2,
        "effort": 330.12,
        "level": 0.5,
        "bugs": 0.06,
        "time": 18,
        "intelligentContent": 82.53,
        "number_operators": 8,
        "number_operands": 28,
        "number_operators_unique": 3,
        "number_operands_unique": 21,
        "cloc": 2,
        "loc": 21,
        "lloc": 19,
        "mi": 79.45,
        "mIwoC": 56.44,
        "commentWeight": 23,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 9,
        "relativeDataComplexity": 0.5,
        "relativeSystemComplexity": 9.5,
        "totalStructuralComplexity": 18,
        "totalDataComplexity": 1,
        "totalSystemComplexity": 19,
        "package": "Caas23\\Controller\\",
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 3,
        "instability": 1,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Controller\\Kmom02ControllerApi",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "jsonDeck",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "jsonDeckShuffle",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "jsonDeckDraw",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "apiPost",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "jsonDeckShowMultiple",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 5,
        "nbMethods": 5,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 5,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 7,
        "ccn": 3,
        "ccnMethodMax": 2,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Caas23\\Card\\DeckOfCards",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Caas23\\Card\\DeckOfCards",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Caas23\\Card\\DeckOfCards",
            "Caas23\\Card\\Card",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Request",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Caas23\\Card\\CardMultiple",
            "Caas23\\Card\\CardMultiple",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\JsonResponse"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 5,
        "length": 154,
        "vocabulary": 44,
        "volume": 840.75,
        "difficulty": 9.47,
        "effort": 7965.02,
        "level": 0.11,
        "bugs": 0.28,
        "time": 443,
        "intelligentContent": 88.75,
        "number_operators": 34,
        "number_operands": 120,
        "number_operators_unique": 6,
        "number_operands_unique": 38,
        "cloc": 5,
        "loc": 62,
        "lloc": 57,
        "mi": 62.11,
        "mIwoC": 40.82,
        "commentWeight": 21.29,
        "kanDefect": 0.29,
        "relativeStructuralComplexity": 100,
        "relativeDataComplexity": 0.64,
        "relativeSystemComplexity": 100.64,
        "totalStructuralComplexity": 500,
        "totalDataComplexity": 3.18,
        "totalSystemComplexity": 503.18,
        "package": "Caas23\\Controller\\",
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 8,
        "instability": 1,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Controller\\Kmom01ControllerTwig",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "presentation",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "about",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "report",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "lucky",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 4,
        "nbMethods": 4,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 4,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 4,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 1,
        "length": 53,
        "vocabulary": 26,
        "volume": 249.12,
        "difficulty": 1.83,
        "effort": 456.73,
        "level": 0.55,
        "bugs": 0.08,
        "time": 25,
        "intelligentContent": 135.89,
        "number_operators": 9,
        "number_operands": 44,
        "number_operators_unique": 2,
        "number_operands_unique": 24,
        "cloc": 4,
        "loc": 29,
        "lloc": 25,
        "mi": 79.8,
        "mIwoC": 52.59,
        "commentWeight": 27.21,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 2,
        "relativeSystemComplexity": 3,
        "totalStructuralComplexity": 4,
        "totalDataComplexity": 8,
        "totalSystemComplexity": 12,
        "package": "Caas23\\Controller\\",
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 2,
        "instability": 1,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Controller\\SessionController",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "session",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "sessionDelete",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "gameStats",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 3,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 3,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\JsonResponse"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 3,
        "length": 42,
        "vocabulary": 19,
        "volume": 178.41,
        "difficulty": 3.28,
        "effort": 585.42,
        "level": 0.3,
        "bugs": 0.06,
        "time": 33,
        "intelligentContent": 54.37,
        "number_operators": 7,
        "number_operands": 35,
        "number_operators_unique": 3,
        "number_operands_unique": 16,
        "cloc": 4,
        "loc": 30,
        "lloc": 26,
        "mi": 80.03,
        "mIwoC": 53.23,
        "commentWeight": 26.8,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 64,
        "relativeDataComplexity": 0.44,
        "relativeSystemComplexity": 64.44,
        "totalStructuralComplexity": 192,
        "totalDataComplexity": 1.33,
        "totalSystemComplexity": 193.33,
        "package": "Caas23\\Controller\\",
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 4,
        "instability": 1,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Controller\\Kmom02ControllerApiJoker",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "jsonDeckJoker",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "jsonDeckJokerShuffle",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "jsonDeckJokerDraw",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 3,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 4,
        "ccn": 2,
        "ccnMethodMax": 2,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Caas23\\Card\\DeckOfCardsJoker",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Caas23\\Card\\DeckOfCardsJoker",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Caas23\\Card\\DeckOfCardsJoker",
            "Caas23\\Card\\Card",
            "Symfony\\Component\\HttpFoundation\\JsonResponse"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 3,
        "length": 91,
        "vocabulary": 26,
        "volume": 427.74,
        "difficulty": 8.21,
        "effort": 3513.58,
        "level": 0.12,
        "bugs": 0.14,
        "time": 195,
        "intelligentContent": 52.07,
        "number_operators": 22,
        "number_operands": 69,
        "number_operators_unique": 5,
        "number_operands_unique": 21,
        "cloc": 3,
        "loc": 41,
        "lloc": 38,
        "mi": 67.19,
        "mIwoC": 46.85,
        "commentWeight": 20.35,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 64,
        "relativeDataComplexity": 0.41,
        "relativeSystemComplexity": 64.41,
        "totalStructuralComplexity": 192,
        "totalDataComplexity": 1.22,
        "totalSystemComplexity": 193.22,
        "package": "Caas23\\Controller\\",
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 6,
        "instability": 1,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Controller\\Kmom06Controller",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "metrics",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 1,
        "length": 5,
        "vocabulary": 5,
        "volume": 11.61,
        "difficulty": 0.5,
        "effort": 5.8,
        "level": 2,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 23.22,
        "number_operators": 1,
        "number_operands": 4,
        "number_operators_unique": 1,
        "number_operands_unique": 4,
        "cloc": 1,
        "loc": 9,
        "lloc": 8,
        "mi": 97.4,
        "mIwoC": 72.71,
        "commentWeight": 24.69,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 0.5,
        "relativeSystemComplexity": 1.5,
        "totalStructuralComplexity": 1,
        "totalDataComplexity": 0.5,
        "totalSystemComplexity": 1.5,
        "package": "Caas23\\Controller\\",
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 2,
        "instability": 1,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Controller\\Kmom02ControllerCard",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "card",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "cardDeck",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "cardDeckShuffle",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "cardDeckDraw",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "cardDeckDrawMultiple",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "cardDeckShowMultiple",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "dealCardHand",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 7,
        "nbMethods": 7,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 7,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 13,
        "ccn": 7,
        "ccnMethodMax": 5,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Caas23\\Card\\DeckOfCards",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Caas23\\Card\\DeckOfCards",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Caas23\\Card\\DeckOfCards",
            "Caas23\\Card\\Card",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Request",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Caas23\\Card\\CardMultiple",
            "Caas23\\Card\\CardMultiple",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Caas23\\Card\\CardHand",
            "Caas23\\Card\\Card",
            "Caas23\\Card\\DeckOfCards"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 2,
        "length": 227,
        "vocabulary": 59,
        "volume": 1335.36,
        "difficulty": 12.12,
        "effort": 16178.4,
        "level": 0.08,
        "bugs": 0.45,
        "time": 899,
        "intelligentContent": 110.22,
        "number_operators": 47,
        "number_operands": 180,
        "number_operators_unique": 7,
        "number_operands_unique": 52,
        "cloc": 7,
        "loc": 85,
        "lloc": 78,
        "mi": 57.4,
        "mIwoC": 35.9,
        "commentWeight": 21.5,
        "kanDefect": 0.36,
        "relativeStructuralComplexity": 100,
        "relativeDataComplexity": 0.83,
        "relativeSystemComplexity": 100.83,
        "totalStructuralComplexity": 700,
        "totalDataComplexity": 5.82,
        "totalSystemComplexity": 705.82,
        "package": "Caas23\\Controller\\",
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 8,
        "instability": 1,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Controller\\Kmom02ControllerCardJoker",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "cardDeckJoker",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "cardDeckJokerShuffle",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "cardDeckJokerDraw",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "dealJokerCardHand",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 4,
        "nbMethods": 4,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 4,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 9,
        "ccn": 6,
        "ccnMethodMax": 5,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Caas23\\Card\\DeckOfCardsJoker",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Caas23\\Card\\DeckOfCardsJoker",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Caas23\\Card\\DeckOfCardsJoker",
            "Caas23\\Card\\Card",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Caas23\\Card\\CardHand",
            "Caas23\\Card\\Card",
            "Caas23\\Card\\DeckOfCardsJoker"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 1,
        "length": 162,
        "vocabulary": 41,
        "volume": 867.92,
        "difficulty": 10.8,
        "effort": 9373.57,
        "level": 0.09,
        "bugs": 0.29,
        "time": 521,
        "intelligentContent": 80.36,
        "number_operators": 36,
        "number_operands": 126,
        "number_operators_unique": 6,
        "number_operands_unique": 35,
        "cloc": 4,
        "loc": 61,
        "lloc": 57,
        "mi": 59.63,
        "mIwoC": 40.32,
        "commentWeight": 19.32,
        "kanDefect": 0.29,
        "relativeStructuralComplexity": 64,
        "relativeDataComplexity": 0.58,
        "relativeSystemComplexity": 64.58,
        "totalStructuralComplexity": 256,
        "totalDataComplexity": 2.33,
        "totalSystemComplexity": 258.33,
        "package": "Caas23\\Controller\\",
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 6,
        "instability": 1,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Controller\\Kmom10Controller",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "proj",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "about",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "database",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "health",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "energy",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 5,
        "nbMethods": 5,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 5,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 5,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Doctrine\\Persistence\\ManagerRegistry",
            "Caas23\\Repository\\DeceasedCovidRepository",
            "Caas23\\Repository\\DeceasedGeneralRepository",
            "Symfony\\UX\\Chartjs\\Builder\\ChartBuilderInterface",
            "Caas23\\Project\\ChartFunctions",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Doctrine\\Persistence\\ManagerRegistry",
            "Caas23\\Repository\\EnergyPetroRepository",
            "Caas23\\Repository\\EnergySupplyRepository",
            "Caas23\\Repository\\EnergyUseRepository",
            "Symfony\\UX\\Chartjs\\Builder\\ChartBuilderInterface",
            "Caas23\\Project\\ChartFunctions"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 1,
        "length": 252,
        "vocabulary": 112,
        "volume": 1715.45,
        "difficulty": 2.01,
        "effort": 3446.5,
        "level": 0.5,
        "bugs": 0.57,
        "time": 191,
        "intelligentContent": 853.85,
        "number_operators": 31,
        "number_operands": 221,
        "number_operators_unique": 2,
        "number_operands_unique": 110,
        "cloc": 9,
        "loc": 79,
        "lloc": 70,
        "mi": 61.94,
        "mIwoC": 36.97,
        "commentWeight": 24.97,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 169,
        "relativeDataComplexity": 0.49,
        "relativeSystemComplexity": 169.49,
        "totalStructuralComplexity": 845,
        "totalDataComplexity": 2.43,
        "totalSystemComplexity": 847.43,
        "package": "Caas23\\Controller\\",
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 10,
        "instability": 1,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Controller\\Kmom05Controller",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "library",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "libraryPost",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "showBookById",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "showAllBooks",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "updateBookById",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "updateBookByIdPost",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "deleteBookById",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "resetLibrary",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "showAllBooksAPI",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "showOneBookAPI",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 10,
        "nbMethods": 10,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 10,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 20,
        "ccn": 11,
        "ccnMethodMax": 4,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Request",
            "Doctrine\\Persistence\\ManagerRegistry",
            "Caas23\\Entity\\Library",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Caas23\\Repository\\LibraryRepository",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Caas23\\Repository\\LibraryRepository",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Doctrine\\Persistence\\ManagerRegistry",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Request",
            "Doctrine\\Persistence\\ManagerRegistry",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Doctrine\\Persistence\\ManagerRegistry",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Doctrine\\Persistence\\ManagerRegistry",
            "Doctrine\\ORM\\Tools\\SchemaTool",
            "Caas23\\Entity\\Library",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Caas23\\Repository\\LibraryRepository",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Caas23\\Repository\\LibraryRepository"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 2,
        "length": 308,
        "vocabulary": 63,
        "volume": 1841,
        "difficulty": 10.91,
        "effort": 20076.45,
        "level": 0.09,
        "bugs": 0.61,
        "time": 1115,
        "intelligentContent": 168.82,
        "number_operators": 55,
        "number_operands": 253,
        "number_operators_unique": 5,
        "number_operands_unique": 58,
        "cloc": 13,
        "loc": 134,
        "lloc": 121,
        "mi": 53.43,
        "mIwoC": 30.22,
        "commentWeight": 23.2,
        "kanDefect": 0.87,
        "relativeStructuralComplexity": 729,
        "relativeDataComplexity": 0.56,
        "relativeSystemComplexity": 729.56,
        "totalStructuralComplexity": 7290,
        "totalDataComplexity": 5.57,
        "totalSystemComplexity": 7295.57,
        "package": "Caas23\\Controller\\",
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 7,
        "instability": 1,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Controller\\Kmom10ControllerApi",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "api",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "apiPost",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "apiEnergyUse",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "healthApi1",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "healthApi2",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "energyApi1",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "energyApi2",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 7,
        "nbMethods": 7,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 7,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 7,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Request",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Caas23\\Repository\\EnergyUseRepository",
            "Caas23\\Project\\EnergyUseFunctions",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Caas23\\Repository\\DeceasedCovidRepository",
            "Caas23\\Repository\\DeceasedGeneralRepository",
            "Caas23\\Project\\DeceasedCovidFunctions",
            "Caas23\\Project\\DeceasedGeneralFunctions",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Caas23\\Repository\\DeceasedCovidRepository",
            "Caas23\\Project\\DeceasedCovidFunctions",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Caas23\\Repository\\EnergySupplyRepository",
            "Caas23\\Project\\EnergySupplyFunctions",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Caas23\\Repository\\EnergyPetroRepository",
            "Caas23\\Project\\EnergyPetroFunctions",
            "Symfony\\Component\\HttpFoundation\\JsonResponse"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 7,
        "length": 298,
        "vocabulary": 100,
        "volume": 1979.87,
        "difficulty": 5.33,
        "effort": 10559.3,
        "level": 0.19,
        "bugs": 0.66,
        "time": 587,
        "intelligentContent": 371.23,
        "number_operators": 42,
        "number_operands": 256,
        "number_operators_unique": 4,
        "number_operands_unique": 96,
        "cloc": 10,
        "loc": 76,
        "lloc": 66,
        "mi": 63.73,
        "mIwoC": 37.09,
        "commentWeight": 26.64,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 100,
        "relativeDataComplexity": 0.74,
        "relativeSystemComplexity": 100.74,
        "totalStructuralComplexity": 700,
        "totalDataComplexity": 5.18,
        "totalSystemComplexity": 705.18,
        "package": "Caas23\\Controller\\",
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 14,
        "instability": 1,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Controller\\Kmom03Controller",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "gameIntro",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "initGame",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "gameDoc",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "gamePlay",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "drawCard",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "drawCardBank",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 6,
        "nbMethods": 6,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 6,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 12,
        "ccn": 7,
        "ccnMethodMax": 5,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Caas23\\Card\\SessionHandler",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Request",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Caas23\\Card\\Card",
            "Caas23\\Card\\CardValues",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Caas23\\Card\\CardValues",
            "Caas23\\Card\\Card"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 1,
        "length": 203,
        "vocabulary": 47,
        "volume": 1127.58,
        "difficulty": 12.29,
        "effort": 13861,
        "level": 0.08,
        "bugs": 0.38,
        "time": 770,
        "intelligentContent": 91.73,
        "number_operators": 35,
        "number_operands": 168,
        "number_operators_unique": 6,
        "number_operands_unique": 41,
        "cloc": 6,
        "loc": 76,
        "lloc": 70,
        "mi": 58.52,
        "mIwoC": 37.44,
        "commentWeight": 21.08,
        "kanDefect": 0.73,
        "relativeStructuralComplexity": 81,
        "relativeDataComplexity": 0.87,
        "relativeSystemComplexity": 81.87,
        "totalStructuralComplexity": 486,
        "totalDataComplexity": 5.2,
        "totalSystemComplexity": 491.2,
        "package": "Caas23\\Controller\\",
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 7,
        "instability": 1,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Repository\\EnergySupplyRepository",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository",
            "Doctrine\\Persistence\\ManagerRegistry"
        ],
        "parents": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository"
        ],
        "implements": [],
        "lcom": 1,
        "length": 2,
        "vocabulary": 1,
        "volume": 0,
        "difficulty": 0,
        "effort": 0,
        "level": 1,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 0,
        "number_operators": 0,
        "number_operands": 2,
        "number_operators_unique": 0,
        "number_operands_unique": 1,
        "cloc": 3,
        "loc": 11,
        "lloc": 8,
        "mi": 207.18,
        "mIwoC": 171,
        "commentWeight": 36.18,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 0.5,
        "relativeSystemComplexity": 1.5,
        "totalStructuralComplexity": 1,
        "totalDataComplexity": 0.5,
        "totalSystemComplexity": 1.5,
        "package": "Caas23\\Repository\\",
        "pageRank": 0.01,
        "afferentCoupling": 2,
        "efferentCoupling": 2,
        "instability": 0.5,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Repository\\LibraryRepository",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "findOneByIsbn",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 2,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository",
            "Doctrine\\Persistence\\ManagerRegistry"
        ],
        "parents": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository"
        ],
        "implements": [],
        "lcom": 2,
        "length": 9,
        "vocabulary": 7,
        "volume": 25.27,
        "difficulty": 0.67,
        "effort": 16.84,
        "level": 1.5,
        "bugs": 0.01,
        "time": 1,
        "intelligentContent": 37.9,
        "number_operators": 1,
        "number_operands": 8,
        "number_operators_unique": 1,
        "number_operands_unique": 6,
        "cloc": 3,
        "loc": 15,
        "lloc": 12,
        "mi": 98.44,
        "mIwoC": 66.5,
        "commentWeight": 31.94,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 36,
        "relativeDataComplexity": 0.29,
        "relativeSystemComplexity": 36.29,
        "totalStructuralComplexity": 72,
        "totalDataComplexity": 0.57,
        "totalSystemComplexity": 72.57,
        "package": "Caas23\\Repository\\",
        "pageRank": 0.02,
        "afferentCoupling": 1,
        "efferentCoupling": 2,
        "instability": 0.67,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Repository\\EnergyUseRepository",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository",
            "Doctrine\\Persistence\\ManagerRegistry"
        ],
        "parents": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository"
        ],
        "implements": [],
        "lcom": 1,
        "length": 2,
        "vocabulary": 1,
        "volume": 0,
        "difficulty": 0,
        "effort": 0,
        "level": 1,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 0,
        "number_operators": 0,
        "number_operands": 2,
        "number_operators_unique": 0,
        "number_operands_unique": 1,
        "cloc": 3,
        "loc": 11,
        "lloc": 8,
        "mi": 207.18,
        "mIwoC": 171,
        "commentWeight": 36.18,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 0.5,
        "relativeSystemComplexity": 1.5,
        "totalStructuralComplexity": 1,
        "totalDataComplexity": 0.5,
        "totalSystemComplexity": 1.5,
        "package": "Caas23\\Repository\\",
        "pageRank": 0.01,
        "afferentCoupling": 2,
        "efferentCoupling": 2,
        "instability": 0.5,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Repository\\DeceasedCovidRepository",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository",
            "Doctrine\\Persistence\\ManagerRegistry"
        ],
        "parents": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository"
        ],
        "implements": [],
        "lcom": 1,
        "length": 2,
        "vocabulary": 1,
        "volume": 0,
        "difficulty": 0,
        "effort": 0,
        "level": 1,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 0,
        "number_operators": 0,
        "number_operands": 2,
        "number_operators_unique": 0,
        "number_operands_unique": 1,
        "cloc": 3,
        "loc": 11,
        "lloc": 8,
        "mi": 207.18,
        "mIwoC": 171,
        "commentWeight": 36.18,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 0.5,
        "relativeSystemComplexity": 1.5,
        "totalStructuralComplexity": 1,
        "totalDataComplexity": 0.5,
        "totalSystemComplexity": 1.5,
        "package": "Caas23\\Repository\\",
        "pageRank": 0.02,
        "afferentCoupling": 2,
        "efferentCoupling": 2,
        "instability": 0.5,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Repository\\DeceasedGeneralRepository",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository",
            "Doctrine\\Persistence\\ManagerRegistry"
        ],
        "parents": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository"
        ],
        "implements": [],
        "lcom": 1,
        "length": 2,
        "vocabulary": 1,
        "volume": 0,
        "difficulty": 0,
        "effort": 0,
        "level": 1,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 0,
        "number_operators": 0,
        "number_operands": 2,
        "number_operators_unique": 0,
        "number_operands_unique": 1,
        "cloc": 3,
        "loc": 11,
        "lloc": 8,
        "mi": 207.18,
        "mIwoC": 171,
        "commentWeight": 36.18,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 0.5,
        "relativeSystemComplexity": 1.5,
        "totalStructuralComplexity": 1,
        "totalDataComplexity": 0.5,
        "totalSystemComplexity": 1.5,
        "package": "Caas23\\Repository\\",
        "pageRank": 0.01,
        "afferentCoupling": 2,
        "efferentCoupling": 2,
        "instability": 0.5,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Repository\\EnergyPetroRepository",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository",
            "Doctrine\\Persistence\\ManagerRegistry"
        ],
        "parents": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository"
        ],
        "implements": [],
        "lcom": 1,
        "length": 2,
        "vocabulary": 1,
        "volume": 0,
        "difficulty": 0,
        "effort": 0,
        "level": 1,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 0,
        "number_operators": 0,
        "number_operands": 2,
        "number_operators_unique": 0,
        "number_operands_unique": 1,
        "cloc": 3,
        "loc": 11,
        "lloc": 8,
        "mi": 207.18,
        "mIwoC": 171,
        "commentWeight": 36.18,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 0.5,
        "relativeSystemComplexity": 1.5,
        "totalStructuralComplexity": 1,
        "totalDataComplexity": 0.5,
        "totalSystemComplexity": 1.5,
        "package": "Caas23\\Repository\\",
        "pageRank": 0.01,
        "afferentCoupling": 2,
        "efferentCoupling": 2,
        "instability": 0.5,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Card\\CardValues",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setValue",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setAceValue",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 3,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 6,
        "ccn": 4,
        "ccnMethodMax": 4,
        "externals": [
            "Caas23\\Card\\SessionHandler",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface"
        ],
        "parents": [
            "Caas23\\Card\\SessionHandler"
        ],
        "implements": [],
        "lcom": 3,
        "length": 49,
        "vocabulary": 13,
        "volume": 181.32,
        "difficulty": 12.5,
        "effort": 2266.52,
        "level": 0.08,
        "bugs": 0.06,
        "time": 126,
        "intelligentContent": 14.51,
        "number_operators": 9,
        "number_operands": 40,
        "number_operators_unique": 5,
        "number_operands_unique": 8,
        "cloc": 10,
        "loc": 37,
        "lloc": 27,
        "mi": 88.48,
        "mIwoC": 52.42,
        "commentWeight": 36.05,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 9,
        "relativeDataComplexity": 0.58,
        "relativeSystemComplexity": 9.58,
        "totalStructuralComplexity": 27,
        "totalDataComplexity": 1.75,
        "totalSystemComplexity": 28.75,
        "package": "Caas23\\Card\\",
        "pageRank": 0.02,
        "afferentCoupling": 1,
        "efferentCoupling": 2,
        "instability": 0.67,
        "numberOfUnitTests": 6,
        "violations": {}
    },
    {
        "name": "Caas23\\Card\\DeckOfCardsJoker",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getCards",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 2,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Caas23\\Card\\DeckOfCards"
        ],
        "parents": [
            "Caas23\\Card\\DeckOfCards"
        ],
        "implements": [],
        "lcom": 2,
        "length": 7,
        "vocabulary": 6,
        "volume": 18.09,
        "difficulty": 0.6,
        "effort": 10.86,
        "level": 1.67,
        "bugs": 0.01,
        "time": 1,
        "intelligentContent": 30.16,
        "number_operators": 1,
        "number_operands": 6,
        "number_operators_unique": 1,
        "number_operands_unique": 5,
        "cloc": 7,
        "loc": 20,
        "lloc": 13,
        "mi": 106.44,
        "mIwoC": 66.76,
        "commentWeight": 39.67,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 0.75,
        "relativeSystemComplexity": 1.75,
        "totalStructuralComplexity": 2,
        "totalDataComplexity": 1.5,
        "totalSystemComplexity": 3.5,
        "package": "Caas23\\Card\\",
        "pageRank": 0.04,
        "afferentCoupling": 3,
        "efferentCoupling": 1,
        "instability": 0.25,
        "numberOfUnitTests": 2,
        "violations": {}
    },
    {
        "name": "Caas23\\Card\\GameWinner",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "winnerToSession",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "checkWinner",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "checkWinnerBanksTurn",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "checkWinnerPlayersTurn",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 5,
        "nbMethods": 5,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 5,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 14,
        "ccn": 10,
        "ccnMethodMax": 6,
        "externals": [
            "Caas23\\Card\\SessionHandler",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface"
        ],
        "parents": [
            "Caas23\\Card\\SessionHandler"
        ],
        "implements": [],
        "lcom": 2,
        "length": 74,
        "vocabulary": 22,
        "volume": 330,
        "difficulty": 19.73,
        "effort": 6511.11,
        "level": 0.05,
        "bugs": 0.11,
        "time": 362,
        "intelligentContent": 16.73,
        "number_operators": 17,
        "number_operands": 57,
        "number_operators_unique": 9,
        "number_operands_unique": 13,
        "cloc": 16,
        "loc": 56,
        "lloc": 40,
        "mi": 82.9,
        "mIwoC": 46.07,
        "commentWeight": 36.83,
        "kanDefect": 0.43,
        "relativeStructuralComplexity": 49,
        "relativeDataComplexity": 0.25,
        "relativeSystemComplexity": 49.25,
        "totalStructuralComplexity": 245,
        "totalDataComplexity": 1.25,
        "totalSystemComplexity": 246.25,
        "package": "Caas23\\Card\\",
        "pageRank": 0.04,
        "afferentCoupling": 1,
        "efferentCoupling": 2,
        "instability": 0.67,
        "numberOfUnitTests": 6,
        "violations": {}
    },
    {
        "name": "Caas23\\Card\\SessionHandler",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "sessionInit",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "checkBust",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 3,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 8,
        "ccn": 6,
        "ccnMethodMax": 6,
        "externals": [
            "Caas23\\Card\\DeckOfCards",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Caas23\\Card\\GameWinner"
        ],
        "parents": [
            "Caas23\\Card\\DeckOfCards"
        ],
        "implements": [],
        "lcom": 3,
        "length": 48,
        "vocabulary": 20,
        "volume": 207.45,
        "difficulty": 8.36,
        "effort": 1733.71,
        "level": 0.12,
        "bugs": 0.07,
        "time": 96,
        "intelligentContent": 24.82,
        "number_operators": 9,
        "number_operands": 39,
        "number_operators_unique": 6,
        "number_operands_unique": 14,
        "cloc": 9,
        "loc": 37,
        "lloc": 28,
        "mi": 85.99,
        "mIwoC": 51.4,
        "commentWeight": 34.59,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 16,
        "relativeDataComplexity": 0.33,
        "relativeSystemComplexity": 16.33,
        "totalStructuralComplexity": 48,
        "totalDataComplexity": 1,
        "totalSystemComplexity": 49,
        "package": "Caas23\\Card\\",
        "pageRank": 0.05,
        "afferentCoupling": 3,
        "efferentCoupling": 3,
        "instability": 0.5,
        "numberOfUnitTests": 4,
        "violations": {}
    },
    {
        "name": "Caas23\\Card\\CardMultiple",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "drawMultiple",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 6,
        "ccn": 6,
        "ccnMethodMax": 6,
        "externals": [
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Caas23\\Card\\DeckOfCards",
            "Caas23\\Card\\DeckOfCardsJoker",
            "Caas23\\Card\\Card"
        ],
        "parents": [],
        "implements": [],
        "lcom": 1,
        "length": 72,
        "vocabulary": 29,
        "volume": 349.77,
        "difficulty": 7.17,
        "effort": 2509.25,
        "level": 0.14,
        "bugs": 0.12,
        "time": 139,
        "intelligentContent": 48.76,
        "number_operators": 17,
        "number_operands": 55,
        "number_operators_unique": 6,
        "number_operands_unique": 23,
        "cloc": 7,
        "loc": 37,
        "lloc": 30,
        "mi": 80.36,
        "mIwoC": 49.16,
        "commentWeight": 31.2,
        "kanDefect": 0.43,
        "relativeStructuralComplexity": 25,
        "relativeDataComplexity": 0.83,
        "relativeSystemComplexity": 25.83,
        "totalStructuralComplexity": 25,
        "totalDataComplexity": 0.83,
        "totalSystemComplexity": 25.83,
        "package": "Caas23\\Card\\",
        "pageRank": 0.02,
        "afferentCoupling": 2,
        "efferentCoupling": 4,
        "instability": 0.67,
        "numberOfUnitTests": 3,
        "violations": {}
    },
    {
        "name": "Caas23\\Card\\Card",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getOneCard",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getValue",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 3,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 3,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [],
        "parents": [],
        "implements": [],
        "lcom": 2,
        "length": 29,
        "vocabulary": 13,
        "volume": 107.31,
        "difficulty": 2,
        "effort": 214.63,
        "level": 0.5,
        "bugs": 0.04,
        "time": 12,
        "intelligentContent": 53.66,
        "number_operators": 7,
        "number_operands": 22,
        "number_operators_unique": 2,
        "number_operands_unique": 11,
        "cloc": 10,
        "loc": 31,
        "lloc": 21,
        "mi": 95.34,
        "mIwoC": 56.8,
        "commentWeight": 38.53,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 2.67,
        "relativeSystemComplexity": 2.67,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 8,
        "totalSystemComplexity": 8,
        "package": "Caas23\\Card\\",
        "pageRank": 0.07,
        "afferentCoupling": 7,
        "efferentCoupling": 0,
        "instability": 0,
        "numberOfUnitTests": 3,
        "violations": {}
    },
    {
        "name": "Caas23\\Card\\CardHand",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "add",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getNumberOfCards",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getOneCard",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 3,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 5,
        "ccn": 3,
        "ccnMethodMax": 3,
        "externals": [
            "Caas23\\Card\\Card"
        ],
        "parents": [],
        "implements": [],
        "lcom": 1,
        "length": 19,
        "vocabulary": 8,
        "volume": 57,
        "difficulty": 3.9,
        "effort": 222.3,
        "level": 0.26,
        "bugs": 0.02,
        "time": 12,
        "intelligentContent": 14.62,
        "number_operators": 6,
        "number_operands": 13,
        "number_operators_unique": 3,
        "number_operands_unique": 5,
        "cloc": 17,
        "loc": 40,
        "lloc": 23,
        "mi": 99.94,
        "mIwoC": 57.6,
        "commentWeight": 42.34,
        "kanDefect": 0.45,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 1.83,
        "relativeSystemComplexity": 2.83,
        "totalStructuralComplexity": 3,
        "totalDataComplexity": 5.5,
        "totalSystemComplexity": 8.5,
        "package": "Caas23\\Card\\",
        "pageRank": 0.01,
        "afferentCoupling": 2,
        "efferentCoupling": 1,
        "instability": 0.33,
        "numberOfUnitTests": 4,
        "violations": {}
    },
    {
        "name": "Caas23\\Card\\DeckOfCards",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getCards",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getCardsShuffled",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 3,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 3,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [],
        "parents": [],
        "implements": [],
        "lcom": 1,
        "length": 21,
        "vocabulary": 9,
        "volume": 66.57,
        "difficulty": 2.29,
        "effort": 152.16,
        "level": 0.44,
        "bugs": 0.02,
        "time": 8,
        "intelligentContent": 29.12,
        "number_operators": 5,
        "number_operands": 16,
        "number_operators_unique": 2,
        "number_operands_unique": 7,
        "cloc": 11,
        "loc": 31,
        "lloc": 20,
        "mi": 98.58,
        "mIwoC": 58.72,
        "commentWeight": 39.87,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 1.33,
        "relativeSystemComplexity": 2.33,
        "totalStructuralComplexity": 3,
        "totalDataComplexity": 4,
        "totalSystemComplexity": 7,
        "package": "Caas23\\Card\\",
        "pageRank": 0.15,
        "afferentCoupling": 5,
        "efferentCoupling": 0,
        "instability": 0,
        "numberOfUnitTests": 6,
        "violations": {}
    },
    {
        "name": "Caas23\\Project\\ChartFunctions",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setUpHealth",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setDataDoughnutHealth",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setOptionsDoughnutHealth",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setDataBarHealth",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setOptionsBarHealth",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setUpEnergy",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setDataEnergyUse",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setDataEnergySupply",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setDataEnergyPetro",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setOptionsEnergy",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 11,
        "nbMethods": 11,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 11,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 35,
        "ccn": 25,
        "ccnMethodMax": 9,
        "externals": [
            "Caas23\\Project\\DeceasedCovidFunctions",
            "Caas23\\Project\\EnergyPetroFunctions",
            "Caas23\\Project\\EnergySupplyFunctions",
            "Caas23\\Project\\EnergyUseFunctions",
            "Caas23\\Project\\DeceasedGeneralFunctions",
            "Caas23\\Entity\\DeceasedCovid",
            "Caas23\\Entity\\DeceasedGeneral",
            "Symfony\\UX\\Chartjs\\Model\\Chart",
            "Symfony\\UX\\Chartjs\\Model\\Chart",
            "Symfony\\UX\\Chartjs\\Model\\Chart",
            "Symfony\\UX\\Chartjs\\Model\\Chart",
            "Caas23\\Entity\\EnergyPetro",
            "Caas23\\Entity\\EnergySupply",
            "Caas23\\Entity\\EnergyUse",
            "Symfony\\UX\\Chartjs\\Model\\Chart",
            "Symfony\\UX\\Chartjs\\Model\\Chart",
            "Symfony\\UX\\Chartjs\\Model\\Chart",
            "Symfony\\UX\\Chartjs\\Model\\Chart"
        ],
        "parents": [],
        "implements": [],
        "lcom": 4,
        "length": 709,
        "vocabulary": 117,
        "volume": 4871.09,
        "difficulty": 13.82,
        "effort": 67303.66,
        "level": 0.07,
        "bugs": 1.62,
        "time": 3739,
        "intelligentContent": 352.54,
        "number_operators": 90,
        "number_operands": 619,
        "number_operators_unique": 5,
        "number_operands_unique": 112,
        "cloc": 43,
        "loc": 220,
        "lloc": 177,
        "mi": 53.41,
        "mIwoC": 21.78,
        "commentWeight": 31.63,
        "kanDefect": 5.35,
        "relativeStructuralComplexity": 196,
        "relativeDataComplexity": 0.15,
        "relativeSystemComplexity": 196.15,
        "totalStructuralComplexity": 2156,
        "totalDataComplexity": 1.6,
        "totalSystemComplexity": 2157.6,
        "package": "Caas23\\Project\\",
        "pageRank": 0.01,
        "afferentCoupling": 1,
        "efferentCoupling": 11,
        "instability": 0.92,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Project\\DeceasedCovidFunctions",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "add",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getAllDeceased",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDeceasedByAgeTotal",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDeceasedByAgeMen",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDeceasedByAgeWomen",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDeceasedByAge",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDeceasedByGroupTotal",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDeceasedByGroupMen",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDeceasedByGroupWomen",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDeceasedByHomeTotal",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDeceasedByHomeMen",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDeceasedByHomeWomen",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDeceasedByPlaceTotal",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDeceasedByPlaceMen",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDeceasedByPlaceWomen",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 15,
        "nbMethods": 15,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 15,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 29,
        "ccn": 15,
        "ccnMethodMax": 2,
        "externals": [
            "Caas23\\Entity\\DeceasedCovid"
        ],
        "parents": [],
        "implements": [],
        "lcom": 15,
        "length": 367,
        "vocabulary": 96,
        "volume": 2416.68,
        "difficulty": 3.46,
        "effort": 8355.55,
        "level": 0.29,
        "bugs": 0.81,
        "time": 464,
        "intelligentContent": 698.98,
        "number_operators": 42,
        "number_operands": 325,
        "number_operators_unique": 2,
        "number_operands_unique": 94,
        "cloc": 70,
        "loc": 252,
        "lloc": 182,
        "mi": 61.43,
        "mIwoC": 24.99,
        "commentWeight": 36.44,
        "kanDefect": 3.37,
        "relativeStructuralComplexity": 15876,
        "relativeDataComplexity": 0.12,
        "relativeSystemComplexity": 15876.12,
        "totalStructuralComplexity": 238140,
        "totalDataComplexity": 1.77,
        "totalSystemComplexity": 238141.77,
        "package": "Caas23\\Project\\",
        "pageRank": 0.02,
        "afferentCoupling": 2,
        "efferentCoupling": 1,
        "instability": 0.33,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Project\\EnergyPetroFunctions",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "add",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get87",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get92",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get97",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get02",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get07",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get12",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get17",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get22",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getAll",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 10,
        "nbMethods": 10,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 10,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 19,
        "ccn": 10,
        "ccnMethodMax": 2,
        "externals": [
            "Caas23\\Entity\\EnergyPetro"
        ],
        "parents": [],
        "implements": [],
        "lcom": 10,
        "length": 242,
        "vocabulary": 70,
        "volume": 1483.29,
        "difficulty": 3.16,
        "effort": 4689.8,
        "level": 0.32,
        "bugs": 0.49,
        "time": 261,
        "intelligentContent": 469.13,
        "number_operators": 27,
        "number_operands": 215,
        "number_operators_unique": 2,
        "number_operands_unique": 68,
        "cloc": 45,
        "loc": 156,
        "lloc": 111,
        "mi": 68.8,
        "mIwoC": 31.83,
        "commentWeight": 36.97,
        "kanDefect": 2.22,
        "relativeStructuralComplexity": 4096,
        "relativeDataComplexity": 0.15,
        "relativeSystemComplexity": 4096.15,
        "totalStructuralComplexity": 40960,
        "totalDataComplexity": 1.54,
        "totalSystemComplexity": 40961.54,
        "package": "Caas23\\Project\\",
        "pageRank": 0.01,
        "afferentCoupling": 2,
        "efferentCoupling": 1,
        "instability": 0.33,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Project\\DeceasedGeneralFunctions",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "add",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getAll",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMen",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomen",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 5,
        "nbMethods": 5,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 5,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 9,
        "ccn": 5,
        "ccnMethodMax": 2,
        "externals": [
            "Caas23\\Entity\\DeceasedGeneral"
        ],
        "parents": [],
        "implements": [],
        "lcom": 5,
        "length": 142,
        "vocabulary": 50,
        "volume": 801.43,
        "difficulty": 2.71,
        "effort": 2170.53,
        "level": 0.37,
        "bugs": 0.27,
        "time": 121,
        "intelligentContent": 295.91,
        "number_operators": 12,
        "number_operands": 130,
        "number_operators_unique": 2,
        "number_operands_unique": 48,
        "cloc": 20,
        "loc": 80,
        "lloc": 60,
        "mi": 75.18,
        "mIwoC": 40.21,
        "commentWeight": 34.97,
        "kanDefect": 1.07,
        "relativeStructuralComplexity": 1764,
        "relativeDataComplexity": 0.12,
        "relativeSystemComplexity": 1764.12,
        "totalStructuralComplexity": 8820,
        "totalDataComplexity": 0.58,
        "totalSystemComplexity": 8820.58,
        "package": "Caas23\\Project\\",
        "pageRank": 0.01,
        "afferentCoupling": 2,
        "efferentCoupling": 1,
        "instability": 0.33,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Project\\EnergyUseFunctions",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "add",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get07",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get12",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get17",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get22",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 5,
        "nbMethods": 5,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 5,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 9,
        "ccn": 5,
        "ccnMethodMax": 2,
        "externals": [
            "Caas23\\Entity\\EnergyUse"
        ],
        "parents": [],
        "implements": [],
        "lcom": 5,
        "length": 157,
        "vocabulary": 36,
        "volume": 811.68,
        "difficulty": 4.26,
        "effort": 3461.57,
        "level": 0.23,
        "bugs": 0.27,
        "time": 192,
        "intelligentContent": 190.32,
        "number_operators": 12,
        "number_operands": 145,
        "number_operators_unique": 2,
        "number_operands_unique": 34,
        "cloc": 20,
        "loc": 99,
        "lloc": 79,
        "mi": 69.63,
        "mIwoC": 37.56,
        "commentWeight": 32.07,
        "kanDefect": 1.07,
        "relativeStructuralComplexity": 6400,
        "relativeDataComplexity": 0.06,
        "relativeSystemComplexity": 6400.06,
        "totalStructuralComplexity": 32000,
        "totalDataComplexity": 0.31,
        "totalSystemComplexity": 32000.31,
        "package": "Caas23\\Project\\",
        "pageRank": 0.01,
        "afferentCoupling": 2,
        "efferentCoupling": 1,
        "instability": 0.33,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Project\\EnergySupplyFunctions",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "add",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get72",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get82",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get92",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get02",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get12",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get22",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getAll",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 8,
        "nbMethods": 8,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 8,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 15,
        "ccn": 8,
        "ccnMethodMax": 2,
        "externals": [
            "Caas23\\Entity\\EnergySupply"
        ],
        "parents": [],
        "implements": [],
        "lcom": 8,
        "length": 244,
        "vocabulary": 71,
        "volume": 1500.54,
        "difficulty": 3.23,
        "effort": 4849.57,
        "level": 0.31,
        "bugs": 0.5,
        "time": 269,
        "intelligentContent": 464.29,
        "number_operators": 21,
        "number_operands": 223,
        "number_operators_unique": 2,
        "number_operands_unique": 69,
        "cloc": 35,
        "loc": 134,
        "lloc": 99,
        "mi": 68.73,
        "mIwoC": 33.15,
        "commentWeight": 35.58,
        "kanDefect": 1.76,
        "relativeStructuralComplexity": 5184,
        "relativeDataComplexity": 0.11,
        "relativeSystemComplexity": 5184.11,
        "totalStructuralComplexity": 41472,
        "totalDataComplexity": 0.88,
        "totalSystemComplexity": 41472.88,
        "package": "Caas23\\Project\\",
        "pageRank": 0.01,
        "afferentCoupling": 2,
        "efferentCoupling": 1,
        "instability": 0.33,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Entity\\Library",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "getId",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTitle",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTitle",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getIsbn",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setIsbn",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getAuthor",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setAuthor",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getImage",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setImage",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 9,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 5,
        "nbMethodsSetters": 4,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [],
        "parents": [],
        "implements": [],
        "lcom": 0,
        "length": 37,
        "vocabulary": 8,
        "volume": 111,
        "difficulty": 4,
        "effort": 444,
        "level": 0.25,
        "bugs": 0.04,
        "time": 25,
        "intelligentContent": 27.75,
        "number_operators": 13,
        "number_operands": 24,
        "number_operators_unique": 2,
        "number_operands_unique": 6,
        "cloc": 8,
        "loc": 57,
        "lloc": 49,
        "mi": 76.09,
        "mIwoC": 48.67,
        "commentWeight": 27.42,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 9.44,
        "relativeSystemComplexity": 9.44,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 85,
        "totalSystemComplexity": 85,
        "package": "Caas23\\Entity\\",
        "pageRank": 0.01,
        "afferentCoupling": 1,
        "efferentCoupling": 0,
        "instability": 0,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Entity\\EnergyPetro",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "getId",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getInd87",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setInd87",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTr87",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTr87",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getHo87",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setHo87",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal87",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal87",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getInd92",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setInd92",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTr92",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTr92",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getHo92",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setHo92",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal92",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal92",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getInd97",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setInd97",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTr97",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTr97",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getHo97",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setHo97",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal97",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal97",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getInd02",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setInd02",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTr02",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTr02",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getHo02",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setHo02",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal02",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal02",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getInd07",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setInd07",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTr07",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTr07",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getHo07",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setHo07",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal07",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal07",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getInd12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setInd12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTr12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTr12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getHo12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setHo12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getInd17",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setInd17",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTr17",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTr17",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getHo17",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setHo17",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal17",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal17",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getInd22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setInd22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTr22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTr22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getHo22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setHo22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 65,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 33,
        "nbMethodsSetters": 32,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [],
        "parents": [],
        "implements": [],
        "lcom": 0,
        "length": 258,
        "vocabulary": 35,
        "volume": 1323.36,
        "difficulty": 4.88,
        "effort": 6456.37,
        "level": 0.2,
        "bugs": 0.44,
        "time": 359,
        "intelligentContent": 271.25,
        "number_operators": 97,
        "number_operands": 161,
        "number_operators_unique": 2,
        "number_operands_unique": 33,
        "cloc": 39,
        "loc": 368,
        "lloc": 329,
        "mi": 47.26,
        "mIwoC": 23.1,
        "commentWeight": 24.16,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 65.49,
        "relativeSystemComplexity": 65.49,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 4257,
        "totalSystemComplexity": 4257,
        "package": "Caas23\\Entity\\",
        "pageRank": 0.05,
        "afferentCoupling": 2,
        "efferentCoupling": 0,
        "instability": 0,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Entity\\DeceasedGeneral",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "getId",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal17",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal17",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMen17",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMen17",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomen17",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomen17",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal18",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal18",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMen18",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMen18",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomen18",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomen18",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal19",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal19",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMen19",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMen19",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomen19",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomen19",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal20",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal20",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMen20",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMen20",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomen20",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomen20",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal21",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal21",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMen21",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMen21",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomen21",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomen21",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMen22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMen22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomen22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomen22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal23",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal23",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMen23",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMen23",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomen23",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomen23",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 43,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 22,
        "nbMethodsSetters": 21,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [],
        "parents": [],
        "implements": [],
        "lcom": 0,
        "length": 170,
        "vocabulary": 24,
        "volume": 779.44,
        "difficulty": 4.82,
        "effort": 3755.5,
        "level": 0.21,
        "bugs": 0.26,
        "time": 209,
        "intelligentContent": 161.77,
        "number_operators": 64,
        "number_operands": 106,
        "number_operators_unique": 2,
        "number_operands_unique": 22,
        "cloc": 28,
        "loc": 247,
        "lloc": 219,
        "mi": 53.48,
        "mIwoC": 28.56,
        "commentWeight": 24.91,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 43.49,
        "relativeSystemComplexity": 43.49,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 1870,
        "totalSystemComplexity": 1870,
        "package": "Caas23\\Entity\\",
        "pageRank": 0.05,
        "afferentCoupling": 2,
        "efferentCoupling": 0,
        "instability": 0,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Entity\\EnergyUse",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "getId",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal07",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal07",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBf07",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setBf07",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSBf07",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setSBf07",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getLBf07",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setLBf07",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBg07",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setBg07",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWaste07",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWaste07",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getGas07",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setGas07",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWater07",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWater07",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWind07",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWind07",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSun07",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setSun07",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBf12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setBf12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSBf12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setSBf12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getLBf12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setLBf12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBg12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setBg12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWaste12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWaste12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getGas12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setGas12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWater12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWater12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWind12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWind12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSun12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setSun12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal17",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal17",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBf17",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setBf17",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSBf17",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setSBf17",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getLBf17",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setLBf17",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBg17",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setBg17",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWaste17",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWaste17",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getGas17",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setGas17",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWater17",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWater17",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWind17",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWind17",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSun17",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setSun17",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBf22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setBf22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSBf22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setSBf22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getLBf22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setLBf22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBg22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setBg22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWaste22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWaste22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getGas22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setGas22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWater22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWater22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWind22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWind22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSun22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setSun22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 81,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 41,
        "nbMethodsSetters": 40,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [],
        "parents": [],
        "implements": [],
        "lcom": 0,
        "length": 322,
        "vocabulary": 43,
        "volume": 1747.26,
        "difficulty": 4.9,
        "effort": 8565.82,
        "level": 0.2,
        "bugs": 0.58,
        "time": 476,
        "intelligentContent": 356.41,
        "number_operators": 121,
        "number_operands": 201,
        "number_operators_unique": 2,
        "number_operands_unique": 41,
        "cloc": 47,
        "loc": 456,
        "lloc": 409,
        "mi": 44.05,
        "mIwoC": 20.19,
        "commentWeight": 23.86,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 81.49,
        "relativeSystemComplexity": 81.49,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 6601,
        "totalSystemComplexity": 6601,
        "package": "Caas23\\Entity\\",
        "pageRank": 0.05,
        "afferentCoupling": 2,
        "efferentCoupling": 0,
        "instability": 0,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Entity\\DeceasedCovid",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "getId",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotalDeceased",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotalDeceased",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMenDeceased",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMenDeceased",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomenDeceased",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomenDeceased",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotalUnder50",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotalUnder50",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMenUnder50",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMenUnder50",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomenUnder50",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomenUnder50",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal5059",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal5059",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMen5059",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMen5059",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomen5059",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomen5059",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal6069",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal6069",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMen6069",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMen6069",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomen6069",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomen6069",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal7074",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal7074",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMen7074",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMen7074",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomen7074",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomen7074",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal7579",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal7579",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMen7579",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMen7579",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomen7579",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomen7579",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal8084",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal8084",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMen8084",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMen8084",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomen8084",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomen8084",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal8589",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal8589",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMen8589",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMen8589",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomen8589",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomen8589",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotalOver90",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotalOver90",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMenOver90",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMenOver90",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomenOver90",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomenOver90",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotalCvGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotalCvGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMenCvGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMenCvGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomenCvGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomenCvGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotalHbpGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotalHbpGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMenHbpGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMenHbpGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomenHbpGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomenHbpGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotalDiabetesGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotalDiabetesGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMenDiabetesGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMenDiabetesGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomenDiabetesGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomenDiabetesGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotalLungGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotalLungGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMenLungGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMenLungGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomenLungGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomenLungGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotalNoGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotalNoGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMenNoGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMenNoGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomenNoGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomenNoGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotalOneGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotalOneGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMenOneGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMenOneGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomenOneGroup",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomenOneGroup",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotalMulitpleGroups",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotalMulitpleGroups",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMenMulitpleGroups",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMenMulitpleGroups",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomenMulitpleGroups",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomenMulitpleGroups",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotalSpecHome",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotalSpecHome",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMenSpecHome",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMenSpecHome",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomenSpecHome",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomenSpecHome",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotalHomeCare",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotalHomeCare",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMenHomeCare",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMenHomeCare",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomenHomeCare",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomenHomeCare",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotalHospitalDeath",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotalHospitalDeath",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMenHospitalDeath",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMenHospitalDeath",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomenHospitalDeath",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomenHospitalDeath",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotalSpecHomeDeath",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotalSpecHomeDeath",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMenSpecHomeDeath",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMenSpecHomeDeath",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomenSpecHomeDeath",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomenSpecHomeDeath",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotalOrdHomeDeath",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotalOrdHomeDeath",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMenOrdHomeDeath",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMenOrdHomeDeath",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWomenOrdHomeDeath",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWomenOrdHomeDeath",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 127,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 64,
        "nbMethodsSetters": 63,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [],
        "parents": [],
        "implements": [],
        "lcom": 0,
        "length": 506,
        "vocabulary": 66,
        "volume": 3058.46,
        "difficulty": 4.94,
        "effort": 15101.16,
        "level": 0.2,
        "bugs": 1.02,
        "time": 839,
        "intelligentContent": 619.44,
        "number_operators": 190,
        "number_operands": 316,
        "number_operators_unique": 2,
        "number_operands_unique": 64,
        "cloc": 70,
        "loc": 709,
        "lloc": 639,
        "mi": 37.65,
        "mIwoC": 14.26,
        "commentWeight": 23.39,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 127.5,
        "relativeSystemComplexity": 127.5,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 16192,
        "totalSystemComplexity": 16192,
        "package": "Caas23\\Entity\\",
        "pageRank": 0.05,
        "afferentCoupling": 2,
        "efferentCoupling": 0,
        "instability": 0,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Entity\\EnergySupply",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "getId",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBf72",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setBf72",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getGas72",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setGas72",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWater72",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWater72",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWind72",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWind72",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSun72",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setSun72",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal72",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal72",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBf82",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setBf82",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getGas82",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setGas82",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWater82",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWater82",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWind82",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWind82",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSun82",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setSun82",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal82",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal82",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBf92",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setBf92",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getGas92",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setGas92",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWater92",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWater92",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWind92",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWind92",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSun92",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setSun92",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal92",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal92",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBf02",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setBf02",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getGas02",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setGas02",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWater02",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWater02",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWind02",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWind02",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSun02",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setSun02",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal02",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal02",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBf12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setBf12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getGas12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setGas12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWater12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWater12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWind12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWind12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSun12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setSun12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal12",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal12",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBf22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setBf22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getGas22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setGas22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWater22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWater22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWind22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setWind22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSun22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setSun22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotal22",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTotal22",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 73,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 37,
        "nbMethodsSetters": 36,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [],
        "parents": [],
        "implements": [],
        "lcom": 0,
        "length": 290,
        "vocabulary": 39,
        "volume": 1532.77,
        "difficulty": 4.89,
        "effort": 7498.13,
        "level": 0.2,
        "bugs": 0.51,
        "time": 417,
        "intelligentContent": 313.33,
        "number_operators": 109,
        "number_operands": 181,
        "number_operators_unique": 2,
        "number_operands_unique": 37,
        "cloc": 43,
        "loc": 412,
        "lloc": 369,
        "mi": 45.56,
        "mIwoC": 21.56,
        "commentWeight": 23.99,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 73.49,
        "relativeSystemComplexity": 73.49,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 5365,
        "totalSystemComplexity": 5365,
        "package": "Caas23\\Entity\\",
        "pageRank": 0.05,
        "afferentCoupling": 2,
        "efferentCoupling": 0,
        "instability": 0,
        "numberOfUnitTests": 0,
        "violations": {}
    },
    {
        "name": "Caas23\\Kernel",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [],
        "nbMethodsIncludingGettersSetters": 0,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [
            "Symfony\\Component\\HttpKernel\\Kernel"
        ],
        "parents": [
            "Symfony\\Component\\HttpKernel\\Kernel"
        ],
        "implements": [],
        "lcom": 0,
        "length": 0,
        "vocabulary": 0,
        "volume": 0,
        "difficulty": 0,
        "effort": 0,
        "level": 0,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 0,
        "number_operators": 0,
        "number_operands": 0,
        "number_operators_unique": 0,
        "number_operands_unique": 0,
        "cloc": 0,
        "loc": 5,
        "lloc": 5,
        "mi": 171,
        "mIwoC": 171,
        "commentWeight": 0,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 0,
        "relativeSystemComplexity": 0,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 0,
        "totalSystemComplexity": 0,
        "package": "Caas23\\",
        "pageRank": 0.01,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "numberOfUnitTests": 0,
        "violations": {}
    }
]