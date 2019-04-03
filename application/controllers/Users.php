<?php 
/**
 * Class User
 */

class Users extends CI_Controller {

    public function index()
    {
        $this->load->view("user/register");   
    }
    
    public function register()
    
    {
        // $data['view_admin'] =  "user/register";
            
        $this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
        
        if($this->form_validation->run()==FALSE)
        {
            $this->load->view("user/register");   
        }
        else 
        {
            if ($this->users_model->users_create()) {
                // $this->session->set_flashdata('user_registered','registrasi sukses');
                redirect(base_url().'Users');
            }
        }
        
    }


}

?>