<?php 


class Dashboard extends CI_Controller {

        public function __construct() {

            parent::__construct();

            if (!$this->session->userdata('logged_in')) {

            $this->session->set_flashdata('no_access','maaf silahkan login terlebih dahulu');

            redirect('Login');
            }



        }

        public function index()

        {
            $data['data_desa'] = $this->desa_model->getDesa();    
            $data['view_admin'] = "dashboard/index";
            $this->load->view('layouts/main_admin',$data);
        }

        /**
         * Menu Dashboard
         */

        public function dataLaporan()
        {
            $data['data_laporan'] = $this->desa_model->getLaporan();        
            $data['view_admin'] = "dashboard/data/data";
            $this->load->view("layouts/main_admin",$data);
        }

        /**
         * Method Crud Report
         */

        public function addLaporan()
        {
            $this->form_validation->set_rules('tgl_laporan','Tanggal Laporan','trim');
            $this->form_validation->set_rules('id_desa','ID Desa','trim');
            $this->form_validation->set_rules('status_desa','Status Desa','trim');

            if($this->form_validation->run() == FALSE)
            {
                $data['view_admin'] = "dashboard/index";
                $this->load->view("layouts/main_admin",$data);
            }
            else {
                $data = array(
                    
                    'tgl_laporan' => $this->input->post('tgl_laporan'),
                    'id_desa' => $this->input->post('id_desa'),
                    'status_desa' => $this->input->post('status_desa')
                );
                if($this->desa_model->create_report($data)){
                    $this->session->set_flashdata('report_create','Sukses Buat Laporan');
                    redirect('Dashboard');
                }
            }
        }

        public function deleteLaporan($id_laporan)
        {
            $this->desa_model->deleteReport($id_laporan);
            $this->session->set_flashdata('report_delete','Sukses Hapus Laporan');
            redirect('Dashboard/dataLaporan');
        }

        public function editLaporan($id_laporan)
        {
            $this->form_validation->set_rules('tgl_laporan','Tanggal Laporan','trim');
            $this->form_validation->set_rules('id_desa','ID Desa','trim');
            $this->form_validation->set_rules('status_desa','Status Desa','trim');
            
            if($this->form_validation->run()==FALSE)
            {
                $data['laporan_data'] = $this->desa_model->get_info_laporan($id_laporan);
                $data['list_desa'] = $this->desa_model->getDesa();
                $data['view_admin'] = "dashboard/data/edit";
                $this->load->view('layouts/main_admin',$data);
            }
            else {
                $data = array(  
                    'tgl_laporan' => $this->input->post('tgl_laporan'),
                    'id_desa' => $this->input->post('id_desa'),
                    'status_desa' => $this->input->post('status_desa')
                );

                if($this->desa_model->editReport($id_laporan,$data)){
                    $this->session->set_flashdata('report_edit','Sukses Edit data');
                    redirect('Dashboard/dataLaporan');
                }

                
            }
        }

        public function generateReportPDF()
        {
            $data['report_pdf'] = $this->report_model->get_all_report();
            $html = $this->load->view('dashboard/report/generatePDF',$data,true);
			 $this->load->library('m_pdf');
			 $this->m_pdf->pdf->WriteHTML($html);
			 $this->m_pdf->pdf->Output('test.pdf','I');
        }



}

?>