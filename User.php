<?php 

class User {
    
    public $username;
    public $first_name;
    public $last_name;
    public $full_name;

    function __construct($profile)
    {
        $this->username = $profile['username'];
        $this->first_name = $profile['first_name'];
        $this->last_name = $profile['last_name'];
        $this->full_name = $profile['first_name'] . ' ' . $profile['last_name'];
    }
}

$profile_one = [
    "username" => "luigi_1",
    "first_name" => "Luigi",
    "last_name" => "Distefano",
];

$user_one = new User($profile_one);