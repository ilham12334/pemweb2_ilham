<?php
    defined('BASEPATH') OR exit('No direct script access allowe
    d');
    class Dosen extends CI_Controller {
    // lengkapi
        public function index(){
            $this->load->model('Dosen_model','dsn1');
            $this->dsn1->nama='Ahmad Baharudin';
            $this->dsn1->tmp_lahir='Jakarta';
            $this->dsn1->tgl_lahir='18-03-1982';
            $this->dsn1->gender='L';
            $this->dsn1->nidn='01001';
            $this->dsn1->pendidikan='S2 Managemen';

            $this->load->model('Dosen_model','dsn2');
            $this->dsn2->nama='Mia Audina';
            $this->dsn2->tmp_lahir='Pekalongan';
            $this->dsn2->tgl_lahir='11-08-1995';
            $this->dsn2->gender='P';
            $this->dsn2->nidn='01002';
            $this->dsn2->pendidikan='S1 Desain Komunikasi Visual';

            $this->load->model('Dosen_model','dsn3');
            $this->dsn3->nama='Hermanto';
            $this->dsn3->tmp_lahir='Solo';
            $this->dsn3->tgl_lahir='12-04-1975';
            $this->dsn3->gender='L';
            $this->dsn3->nidn='01003';
            $this->dsn3->pendidikan='S2 Teknik Informatika';

            $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
            $data['list_dsn']=$list_dsn;
            $this->load->view('dosen/index', $data);
        }
    }
?>