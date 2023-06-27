<?php

$genres = [
    1 => "thriller",
    2 => "war",
    3 => "gangster",
    4 => "drama",
    5 => "action",
    6 => "noir",
    7 => "history",
    8 => "horror",
    9 => "satiric",
    10 => "comedy",
];

$movies = [
    new Movie(
        'The Diparted',
        'Martin Scorsese',
        '2006',
        '151 min',
        [
            new Genre($genres[1]),
            new Genre($genres[4]),
            new Genre($genres[5]),
            new Genre($genres[3]),
        ]
    ),
    new Movie(
        'Salvate il soldato Ryan',
        'Steven Spielberg',
        '1998',
        '169 min',
        [
            new Genre($genres[2]),
            new Genre($genres[4]),
            new Genre($genres[5]),
            new Genre($genres[7]),
        ]
    ),
    new Movie(
        'The Shining',
        'Stanley Kubrick',
        '1980',
        '144 min',
        [
            new Genre($genres[8]),
            new Genre($genres[1]),
            new Genre($genres[4]),
        ]
    ),
    new Movie(
        'Full Metal Jacket',
        'Stanley Kubrick',
        '1987',
        '116 min',
        [
            new Genre($genres[2]),
            new Genre($genres[4]),
            new Genre($genres[9]),
            new Genre($genres[1]),
            new Genre($genres[5]),
        ]
    ),
    new Movie(
        'Pulp Fiction',
        'Quentin Tarantino',
        '1994',
        '154 min',
        [
            new Genre($genres[3]),
            new Genre($genres[10]),
            new Genre($genres[4]),
            new Genre($genres[1]),
            new Genre($genres[6]),
        ]
    ),
];
