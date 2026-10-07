<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin',    'full_name' => 'Kyle Dionio',   'role' => 'Admin'],
            ['username' => 'cashier1', 'full_name' => 'Liza Mendoza',  'role' => 'Cashier'],
            ['username' => 'cashier2', 'full_name' => 'Mark Villanueva','role' => 'Cashier'],
            ['username' => 'manager',  'full_name' => 'Carla Bautista','role' => 'Manager'],
            ['username' => 'stock1',   'full_name' => 'Ryan Aquino',   'role' => 'Stock Clerk'],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}