<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function index(){

        $this->load->model('dosen_model', 'dosen');
        $list_dosen = $this->dosen->getAll();

        $data['list_dosen'] = $list_dosen;
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('dosen/index', $data);
        $this->load->view('footer');
	}

    public function view(){

        $_nidn = $this->input->get('id');
        $this->load->model('dosen_model', 'dosen');
        $data['dsn'] = $this->dosen->findById($_nidn);

        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('dosen/view', $data);
        $this->load->view('footer');

    }

    public function save(){
        $this->load->model('dosen_model', 'dosen');
        $_nidn = $this->input->post('nidn');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
        $_prodi = $this->input->post('prodi_kode');
        $_idedit = $this->input->post('idedit'); //hidden field


        $data_dsn[]=$_nidn;
        $data_dsn[]=$_nama;
        $data_dsn[]=$_gender;
        $data_dsn[]=$_tmp_lahir;
        $data_dsn[]=$_tgl_lahir;
        $data_dsn[]=$_pendidikan_terakhir;
        $data_dsn[]=$_prodi;

        if(isset($_idedit)){
            //update
            $data_dsn[]=$_idedit;
            $this->dosen->update($data_dsn);
        }else{
            //save data baru
            $this->dosen->save($data_dsn);
        }

        redirect(base_url().'index.php/dosen/view?id='.$_nidn, 'refresh');

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('dosen_model', 'dosen');

        $dsnedit = $this->dosen->findById($_id);

        $data['judul']='Form Kelola Dosen';
        $data['dsnedit']=$dsnedit;

        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('form/update_dsn',$data);
        $this->load->view('footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model('dosen_model', 'dosen');
        $this->dosen->delete($_id);

        redirect(base_url().'index.php/dosen/index', 'refresh');
    }
    
}