<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Juan Dela Cruz',  'email' => 'juan@example.com',  'phone' => '0917-111-2222'],
            ['full_name' => 'Maria Santos',    'email' => 'maria@example.com', 'phone' => '0918-222-3333'],
            ['full_name' => 'Jose Reyes',      'email' => 'jose@example.com',  'phone' => '0919-333-4444'],
            ['full_name' => 'Ana Garcia',      'email' => 'ana@example.com',   'phone' => '0920-444-5555'],
            ['full_name' => 'Pedro Ramos',     'email' => 'pedro@example.com', 'phone' => '0921-555-6666'],
        ];

        return view('customers/index', [
            'title'     => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}