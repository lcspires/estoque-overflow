<?php

$array = [
    'user1' => ['id' => 21, 'email' => 'email1@mail.com'],
    'user2' => ['id' => 42, 'email' => 'email2@mail.com']
];

$allEmails = array_column($array, 'email');
print_r($allEmails);

$array = [
    'user1' => ['id' => 21, 'emails' => ['email1@mail.com', 'email2@mail.com']],
    'user2' => ['id' => 42, 'emails' => ['emai33@mail.com']]
];

$allEmails = array_column($array, 'emails');
print_r($allEmails);
