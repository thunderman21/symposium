<?php

$factory('Conference', 'conference', [
    'author_id' => 1,
    'title' => 'Dummy Conference',
    'description' => 'A conference for dummies.',
    'url' => 'http://example.com',
    'starts_at' => new DateTime,
    'ends_at' => new DateTime,
    'cfp_starts_at' => new DateTime,
    'cfp_ends_at' => new DateTime,
]);

$factory('Talk', 'talk', [
]);

$factory('TalkRevision', 'talkRevision', [
    'title' => 'My Awesome Title',
    'type' => 'lightning',
    'length' => '9',
    'level' => 'beginner',
    'description' => 'The best talk ever!',
    'organizer_notes' => 'No really.',
]);

$factory('User', 'user', [
    'email' => 'example@example.com',
    'password' => Hash::make('password'),
    'first_name' => 'Jane',
    'last_name' => 'Doe',
]);


