<?php
class Auth extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }
    public function login($email, $password)
    {
        $data = $this->db->get_where('users', array('email' => $email, 'password' => $password), 1);
        if (!$data->result()) {
            return false;
        }
        return $data->row();
    }
}
