<?php 

class Report_model extends CI_Model {

    public function get_all_report()
    {
        $this->db->select('*');
        $this->db->from('tm_laporan');
        $this->db->join('tm_desa', 'tm_desa.id_desa = tm_laporan.id_desa','inner');
        $query = $this->db->get();
        return $query->result();
    }

}


?>