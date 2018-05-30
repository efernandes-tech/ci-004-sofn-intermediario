<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

    public function index() {

        $this->load->helper("form");

        $this->load->view('partes/header');
        $this->load->view('cadastro/index');
        $this->load->view('partes/footer');

    }

}
