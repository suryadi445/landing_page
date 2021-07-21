<?php
class Auth_model extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('data_admin', $data);
    }

    public function get_row($email)
    {
        return $this->db->get_where('data_admin', ['username' => $email]);
    }
}
