<?php
class Profesi_Model extends CI_Model
{
    protected $table = 'profesi_tables';
    public function getData()
    {
        return $this->db->get($this->table, 10)->result();
    }
}
