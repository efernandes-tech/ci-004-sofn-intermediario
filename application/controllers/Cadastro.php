<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

    public function index() {

        $this->load->helper("form");

        $this->load->view('partes/header');
        $this->load->view('cadastro/index');
        $this->load->view('partes/footer');

    }

    public function novo() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules(
            'email',
            'E-mail',
            'required|min_length[4]|max_length[100]|is_unique[usuarios.email]'
        );
        $this->form_validation->set_rules('nome','Nome','required|min_length[4]|max_length[80]');
        $this->form_validation->set_rules('senha','Senha','required|min_length[6]|max_length[100]');

        if ($this->form_validation->run() == FALSE) {
            $erros = array('msgs' => validation_errors());

            $this->load->helper('form');

            $this->load->view('partes/header');
            $this->load->view('cadastro/index', $erros);
            $this->load->view('partes/footer');
        } else {
            // ...
        }

    }

}
