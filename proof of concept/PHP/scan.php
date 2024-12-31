<?php

$array = [
    'user1' => ['id' => 21, 'emails' => ['email1@mail.com', 'email2@mail.com']],
    'user2' => ['id' => 42, 'emails' => ['emai33@mail.com']]
];

foreach ($array as $user => ['id' => $id, 'emails' => $emails]) {
    echo "Usuário: $user, ID: $id\n";
    foreach ($emails as $email) {
        echo "  Email: $email\n";
    }
}

/* don't */ echo PHP_EOL;

$array = [
    'user1' => ['id' => 21, 'email' => 'email1@mail.com'],
    'user2' => ['id' => 42, 'email' => 'email2@mail.com', 'nome' => 'Lucas']
];

foreach ($array as $userKey => $userDetails) {
    echo "Usuário: {$userKey}\n";
    foreach ($userDetails as $detailKey => $detailValue) {
        echo "  {$detailKey}: {$detailValue}\n";
    }
}