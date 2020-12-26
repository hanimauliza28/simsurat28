<?php
/*
 * SIMSURAT
 * Hani Mauliza (maulizahani@gmail.com)
 *
 */
class SuratKeluar extends CI_Controller {
    
    function __construct() {
        parent::__construct(); 
        if($this->session->userdata('status') != "login"){
            redirect('Login');
        }     
        $this->load->model('Suratkeluar_model', 'sk');
        $this->load->model('Suratmasuk_model', 'sm');
    }

    function index(){
        
        $this->load->view('template',[
            'content' => $this->load->view('suratkeluar/sk_daftar',[
                'data' => $this->sk->getdata(),
                'title_bar' => 'Data Surat Keluar'
                ],true)
        ]);
    }

    function form(){
        $this->load->view('template',[
            'content' => $this->load->view('suratkeluar/sk_form',[
                'title_bar' => 'Tambah Surat Keluar',
                'sm'  => $this->sm->getdata()
                ],true)
        ]);
    }
    


    function edit($id_surat){
        $this->load->view('template', [
            'content' => $this->load->view('suratkeluar/sk_form',[
                    'data' => $this->sk->find($id_surat),
                    'title_bar' => 'Ubah Surat Keluar',
                'sm'  => $this->sm->getdata()
                    ], true)
        ]);
    }
    
    function detail($id_surat){
        $data = $this->sk->find($id_surat);
        if($data['id_surat_id']==0){
            $datasm = 0;
        }else{
            $datasm = $this->sm->find($data['id_surat_id']);
        }
        $this->load->view('template', [
            'content' => $this->load->view('suratkeluar/sk_detail',[
                    'data' => $data,
                    'title_bar' => 'Detail Surat Keluar',
                    'datasm' => $datasm
                    ], true)
        ]);
    }

    function save(){
        $data = $this->input->post();
        $data['date_entry'] = date("Y-m-d H:m:s");
        $data['tgl_surat'] = tgltosql($data['tgl_surat']);
        $simpan = $this->sk->insert($data);
        if($simpan){
            $this->session->set_flashdata('notif', responsave('true'));
            redirect('SuratKeluar');
        }else{
            $this->session->set_flashdata('notif', responsave('false'));
            redirect('SuratKeluar');
       }
        
    }
    
    function update(){
        $data = $this->input->post();
        $data['tgl_surat'] = tgltosql($data['tgl_surat']);
        $update = $this->sk->update($this->input->post('id_surat'), $data);
        if($update){
            $this->session->set_flashdata('notif', responupdate('true'));
            redirect('SuratKeluar');
        }else{
            $this->session->set_flashdata('notif', responupdate('false'));
            redirect('SuratKeluar');
        }
    }

    function delete_bf(){
        $id_surat = $this->input->post('id_surat');
        $hapus = $this->sk->delete($id_surat);
        if($hapus){
            $this->session->set_flashdata('notif', respondelete());
            redirect('SuratKeluar');
        }else{
            echo error_log();
        }
    }

    function laporan(){
        $this->load->view('template',[
            'content' => $this->load->view('suratkeluar/sk_laporan',[
                'title_bar' => 'Cetak Laporan Surat Keluar'
                ],true)
        ]);
    }

    function sk_laporanpdf(){
        $mpdf = new \Mpdf\Mpdf(['format' => 'Folio']);
        $tgl_atas = tgltosql($this->input->post('tgl_atas'));
        $tgl_bawah = tgltosql($this->input->post('tgl_bawah'));
        $data = $this->sk->lap($tgl_atas,$tgl_bawah);

        $title_bar = 'Laporan Surat Keluar Periode '.tgl_indo2($tgl_atas).' sd '.tgl_indo2($tgl_bawah);
        $tampil = $this->load->view('suratkeluar/sk_laporanpdf', [
                    'data' => $data,
                    'title_bar' => $title_bar
                ], TRUE);
        $mpdf->SetTitle($title_bar);
        $mpdf->AddPage('L');
        $mpdf->WriteHTML($tampil);
        $mpdf->Output();
    }

}
