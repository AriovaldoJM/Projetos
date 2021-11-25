<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()

    {	
        if($this->session->has_userdata('id')){

            return redirect(base_url('admin/home'));
            
        }else{

            
            $this->load->library('form_validation');

            $this->form_validation->set_rules('email-admin', 'Email', 'required',
                array(
                'required' => 'Campo obrigatório.', 
                )
            );

            $this->form_validation->set_rules('senha-admin', 'Senha', 'required',
                array('required' => 'Precisa digitar senha!')
            
            );
            
            if(!$this->form_validation->run()) {
                $this->load->view('login');
                
            }else{
                
                $email = $this->input->post('email-admin');
                $senha =  $this->input->post('senha-admin');
                $this->load->model('UsuarioAdmin_model', 'usuarios', true); 
                $usuarioAdmin = $this->usuarios->getUsuarioAdmin($email);
                
                if($usuarioAdmin && password_verify($senha, $usuarioAdmin->senha_admin)){
                    $this->session->set_userdata('id', $usuarioAdmin->id);
                    redirect(base_url('admin/home'));
                }else{
                    $data['senha'] = 'Usuario ou senha incorretos!';
                    $this->load->view('login', $data);
                }
            }
        }
    }

    public function sair(){
        if($this->session->has_userdata('id')){
            $this->session->unset_userdata('id');
            return redirect(base_url('login'));
        }   
    }
                                   
}	
