<?php 

class User extends CI_model{

    function validate(){
       
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));

        $query = $this->db->get('users');
        
        if( $query->num_rows == 1 ){
            return true;
        }
    }
    function create_user(){
    
        $user_data = array(
            'first_name'    => $this->input->post('first_name'),
            'last_name'     => $this->input->post('last_name'),
            'email'         => $this->input->post('email'),
            'username'      => $this->input->post('username'),
            'password'      => md5($this->input->post('password'))
        );
       
        $insert = $this->db->insert('users', $user_data );
        return $insert;
    }
    
    function validate_data(){
        $this->form_validation->set_rules('first_name',       'Name',                'trim|required');
        $this->form_validation->set_rules('last_name',        'Last name',           'trim|required');
        $this->form_validation->set_rules('email',            'E-mail',              'trim|required|valid_email');
        $this->form_validation->set_rules('username',         'Username',            'trim|required|min_length[4]');
        $this->form_validation->set_rules('password',         'Password',            'trim|required|min_length[4]');
        $this->form_validation->set_rules('password_confirm', 'Password confirm',    'trim|required|min_length[4]|matches[password]');
    }

};


?>