<?php

class User extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function check_user($name, $email)
    {
        $result = $this->db->select("SELECT * FROM `users` WHERE name = '" . $name . "' OR email = '" . $email . "'");
        $count = count($result);
        return $count;
    }

    public function insert_user($data)
    {
        $this->db->insert('register', $data);
    }

}