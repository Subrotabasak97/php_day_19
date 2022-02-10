<?php


namespace App\classes;


class User
{
    public function getAllUser()
    {
        return [
            0 => [
                'id' => 1,
                'name' => 'Subrota',
                'email' => 'subrota@gmail.com',
                'password' => '12345'
            ],
            1 => [
                'id' => 2,
                'name' => 'Sribas',
                'email' => 'sribas@gmail.com',
                'password' => '67890'
            ],
            2 => [
                'id' => 2,
                'name' => 'Tarok',
                'email' => 'tarok@gmail.com',
                'password' => '23456'
            ],
        ];
    }
}