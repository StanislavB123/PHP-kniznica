<?php

$data = [
    [
        'name' => 'Hlava 22',
        'isbn' => '124236474568',
        'price' => 123.45,
        'category' => 1,
        'author' => 'Joseph Heller'
    ],

    [
        'name' => 'Hlava 23',
        'isbn' => '124236474568',
        'price' => 123.45,
        'category' => 1,
        'author' => 'Joseph Heller'
    ]
];

echo json_encode($data);