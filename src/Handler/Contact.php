<?php

namespace App\Handler;

class Contact
{
    public function execute(array $params = []): void
    {
        $name = $params['name'] ?? 'Guest';
        require_once __DIR__ . '/../../templates/contact.phtml';
    }
}