<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista extends CI_Controller {

    public function index() {

        $this->load->model('arquivos_model');

        $view = array(
            'dados' => $this->arquivos_model->listar()
        );

        $this->load->view('partes/header');
        $this->load->view('lista/index', $view);
        $this->load->view('partes/footer');

    }

}

/* End of file Lista.php */
/* Location: ./application/controllers/Lista.php */