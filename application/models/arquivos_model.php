<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arquivos_model extends CI_Model {

    public function inserir($dados) {
        $this->load->database();

        $this->db->insert('arquivos', $dados);
    }

    public function listar() {
        $this->load->database();

        $query = $this->db->get('arquivos');

        return $query->result();
    }

}

/* End of file arquivos_model.php */
/* Location: ./application/models/arquivos_model.php */