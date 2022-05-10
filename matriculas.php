<?php

$alunos2021 = [
    'Ana',
    'Vinicius',
    'Maria',
    'João',
    'Cléber'
];

$novosAlunos = [
    'Nico',
    'Igor',
    'Enrico',
    'Paul'
];

$alunos2022 = [...$alunos2021, 'Samuel', ...$novosAlunos];
var_dump($alunos2022);
