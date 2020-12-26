<?php
/*
 * SIMSURAT
 * Hani Mauliza (maulizahani@gmail.com)
 *
 */
class SuratMasuk extends CI_Controller {
    
    function __construct() {
        parent::__construct();  
        if($this->session->userdata('status') != "login"){
            redirect('Login');
        }     
        $this->load->model('Suratmasuk_model', 'sm');
    }

    function index(){
        
        $this->load->view('template',[
            'content' => $this->load->view('suratmasuk/sm_daftar',[
                'data' => $this->sm->getdata(),
                'title_bar' => 'Data Surat Masuk'
                ],true)
        ]);
    }

    function form(){
        $this->load->view('template',[
            'content' => $this->load->view('suratmasuk/sm_form',[
                'title_bar' => 'Tambah Surat Masuk'
                ],true)
        ]);
    }
    


    function edit($id_surat){
        $this->load->view('template', [
            'content' => $this->load->view('suratmasuk/sm_form',[
                    'data' => $this->sm->find($id_surat),
                    'title_bar' => 'Ubah Surat Masuk'
                    ], true)
        ]);
    }
    
    function detail($id_surat){
        $this->load->view('template', [
            'content' => $this->load->view('suratmasuk/sm_detail',[
                    'data' => $this->sm->find($id_surat),
                    'title_bar' => 'Detail Surat Masuk'
                    ], true)
        ]);
    }

    function save(){
        $data = $this->input->post();
        $data['date_entry'] = date("Y-m-d H:m:s");
        $data['tgl_surat'] = tgltosql($data['tgl_surat']);
        $data['tgl_diterima'] = tgltosql($data['tgl_diterima']);
        $simpan = $this->sm->insert($data);
        if($simpan){
            $this->session->set_flashdata('notif', responsave('true'));
            redirect('SuratMasuk');
        }else{
            $this->session->set_flashdata('notif', responsave('false'));
            redirect('SuratMasuk');
       }
        
    }
    
    function update(){
        $data = $this->input->post();
        $data['tgl_surat'] = tgltosql($data['tgl_surat']);
        $data['tgl_diterima'] = tgltosql($data['tgl_diterima']);
        $update = $this->sm->update($this->input->post('id_surat'), $data);
        if($update){
            $this->session->set_flashdata('notif', responupdate('true'));
            redirect('SuratMasuk');
        }else{
            $this->session->set_flashdata('notif', responupdate('false'));
            redirect('SuratMasuk');
        }
    }

    function delete_bf(){
        $id_surat = $this->input->post('id_surat');
        $hapus = $this->sm->delete($id_surat);
        if($hapus){
            $this->session->set_flashdata('notif', respondelete());
            redirect('SuratMasuk');
        }else{
            echo error_log();
        }
    }



    function laporan(){
        $this->load->view('template',[
            'content' => $this->load->view('suratmasuk/sm_laporan',[
                'title_bar' => 'Cetak Laporan Surat Masuk'
                ],true)
        ]);
    }

    function sm_laporanpdf(){
        $mpdf = new \Mpdf\Mpdf(['format' => 'Folio']);
        $tgl_atas = tgltosql($this->input->post('tgl_atas'));
        $tgl_bawah = tgltosql($this->input->post('tgl_bawah'));
        $data = $this->sm->lap($tgl_atas,$tgl_bawah);

        $title_bar = 'Laporan Surat Masuk Periode '.tgl_indo2($tgl_atas).' sd '.tgl_indo2($tgl_bawah);
        $tampil = $this->load->view('suratmasuk/sm_laporanpdf', [
                    'data' => $data,
                    'title_bar' => $title_bar
                ], TRUE);
        $mpdf->SetTitle($title_bar);
        $mpdf->AddPage('L');
        $mpdf->WriteHTML($tampil);
        $mpdf->Output();
    }

}
