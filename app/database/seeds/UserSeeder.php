<?php

/**
 * Created by PhpStorm.
 * User: I077549
 * Date: 10/28/2015
 * Time: 6:52 PM
 */
class UserSeeder extends DatabaseSeeder
{
    public function run()
    {
        $users = [
            [
                "username" => "christopher.pitt",
                "password" => Hash::make("7h3¡MOST!53cu23"),
                "email" => "chris@example.com"
            ],
            [
                "username" => "me",
                "password" =>  Hash::make("P@ssword1"),
                "email" => "chris1@example.com"
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}