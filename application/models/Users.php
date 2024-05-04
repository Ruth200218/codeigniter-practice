<?php
class Users extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    public function create($data)
    {
        $data = array(
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => $data['password'],
            'state' => 1,
            'porfile' => 2,
        );

        if (!$this->db->insert('Users', $data)) {
            return false;
        }
        return true;
    }
}
