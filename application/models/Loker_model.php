<?php
class Loker_Model extends CI_Model
{
    protected $table  = 'lowongan_tables';
    public function getData()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('perusahaan_tables', 'perusahaan_tables.id_perusahaan = lowongan_tables.id_perusahaan');
        $query = $this->db->get();
        return $query->result();
    }

    public function getDataWhere($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('perusahaan_tables', 'perusahaan_tables.id_perusahaan = lowongan_tables.id_perusahaan', 'INNER');
        $this->db->join('pendidikan_tables', 'pendidikan_tables.id_pendidikan = lowongan_tables.id_pendidikan', 'INNER');
        $this->db->join('skill_tables', 'skill_tables.id_lowongan = lowongan_tables.id_lowongan', 'INNER');
        $query = $this->db->where('lowongan_tables.id_lowongan', $id)->get();
        return $query->result();
    }
}
