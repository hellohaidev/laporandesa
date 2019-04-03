<?php 

class Desa_model extends CI_Model {


    public function getDesa()
    {
        $dataDesa = $this->db->get('tm_desa');
        return $dataDesa->result();
    }

    public function getLaporan()
    {
        $this->db->select('*');
        $this->db->from('tm_laporan');
        $this->db->join('tm_desa', 'tm_desa.id_desa = tm_laporan.id_desa','inner');
        $dataLaporan = $this->db->get();
        return $dataLaporan->result();
    }

    public function get_info_laporan($id_laporan)
    {
        $this->db->select('*');
        $this->db->from('tm_laporan');
        $this->db->join('tm_desa', 'tm_desa.id_desa = tm_laporan.id_desa','inner');
        $this->db->where('id_laporan',$id_laporan);
        $dataInfo = $this->db->get();
        return $dataInfo->row();
    }
    
    public function create_report($data)
    {
        $queryInsert = $this->db->insert('tm_laporan',$data);
        return $queryInsert;
    }

    public function deleteReport($id_laporan)
    {
        $this->db->where('id_laporan',$id_laporan);
        $this->db->delete('tm_laporan');
    }

    public function editReport($id_laporan,$data)
    {
        $this->db->where('id_laporan',$id_laporan);
        $this->db->update('tm_laporan',$data);
        return true;
    }


}

?>