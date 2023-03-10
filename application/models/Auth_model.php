<?php

class Auth_model extends CI_Model
{
    protected $table = 'user_tables';
    const SESSION_KEY = 'id_users';

    public function rules()
    {
        $rules = [
            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required'
            ],
            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ]
        ];
    }

    public function login($email, $password)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('email', $email);
        $query = $this->db->get($this->_table);
        $user = $query->row();

        if (!$user) {
			return FALSE;
		}
    }
}
