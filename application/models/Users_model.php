<?php 


class Users_model extends CI_Model{

    public function login_user($username,$password)
		{

			$this->db->where('username',$username);
			$result = $this->db->get('users_ci');
			$db_password = $result->row(3)->password;
			if (password_verify($password,$db_password)) {
					return $result->row(0)->id_users;
				}
			else {

					return false;

				}


		}

    public function users_create()
    {
        $options = ['cost'=> 12];
        $encrypt_pass = password_hash($this->input->post('password'),PASSWORD_BCRYPT,$options);
        $data = array(
            "username" => $this->input->post('username'),
			"password" => $encrypt_pass
        );
        $insertData = $this->db->insert('users_ci',$data);
        return $insertData;

    }


} 

?>