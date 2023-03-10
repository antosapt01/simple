<?php
class Status_Model extends CI_Model
{
    protected $table = 'status_kerja_tables';
    public function getData()
    {
        return $this->db->get($this->table, 10)->result();
    }
}
