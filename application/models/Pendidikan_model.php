<?php
class Pendidikan_Model extends CI_Model
{
    protected $table = 'pendidikan_tables';
    public function getData()
    {
        return $this->db->get($this->table, 10)->result();
    }
}
