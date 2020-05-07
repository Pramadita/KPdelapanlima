<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_dash extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_siswa');
        $this->load->model('model_admin');
    }

    public function index()
    {
        $data['judul'] = 'PPDB | ADMIN';
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin');
        $this->load->view('daftar&admin/a_akun_admin');
        $this->load->view('templates/footer2');
    }

    //CREATE
    public function tambah_daftar()
    {
        $data['judul'] = 'PPDB | ADMIN TAMBAH DAFTAR';
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin');
        $this->load->view('daftar&admin/a_tambah_daftar');
        $this->load->view('templates/footer2');
    }

    public function tambah_daftar_admin()
    {
        $this->model_siswa->tambahdatasiswa();
        redirect('admin_dash/tambah_daftar');
    }

    public function upload_data()
    {
        $data['judul'] = 'PPDB | DATA ADMIN';
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin');
        $this->load->view('daftar&admin/a_set_pengumuman');
        $this->load->view('templates/footer2');
    }

    public function tambah_data()
    {
        $this->model_admin->tambahdatasekolah();
        redirect('admin_dash/upload_data');
    }

    //READ
    public function pendaftar()
    {
        $data['judul'] = 'PPDB | ADMIN PENDAFTAR';
        $data['siswa'] = $this->model_siswa->getallsiswa();

        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin');
        $this->load->view('daftar&admin/a_pendaftar', $data);
        $this->load->view('templates/footer2');
    }

    //DELETE
    public function hapus($id)
    {
        $this->model_siswa->hapusdatasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin_dash/pendaftar');
    }

    //UPDATE
    public function detail($id)
    {
        $data['judul'] = 'PPDB | ADMIN DETAIL SISWA';
        $data['siswa'] = $this->model_siswa->getsiswabyid($id);
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin');
        $this->load->view('daftar&admin/detail/a_detail', $data);
        $this->load->view('templates/footer2');
    }

    public function edit($id)
    {
        $data['judul'] = 'PPDB | EDIT FORM PENDAFTARAN SMK ATM';
        $data['siswa'] = $this->model_siswa->getsiswabyid($id);
        $data['Tingkat'] = ['1', '2', '3'];
        $data['Prodi'] = ['Agribisnis Peternakan Unggas', 'Usaha Perjalanan Wisata', 'Pemasaran'];
        $data['Jenis_Kelamin'] = ['Laki-laki', 'Perempuan'];
        $data['Transport'] = ['Jalan Kaki', 'Kendaraan Pribadi', 'Kendaraan Umum', 'Lainnya'];
        $data['Tinggal'] = ['Bersama Orang Tua', 'Asrama', 'Kost', 'Panti Asuhan', 'Lainnya'];
        $data['Pakaian'] = ['S', 'M', 'L', 'XL', 'XXL'];
        $data['Pekerjaan'] = ['Tidak Bekerja', 'Nelayan', 'Petani', 'Peternak', 'PNS/TNI/POLRI', 'Karyawan Swasta', 'Pedagang Kecil', ' Wiraswasta', 'Wirausaha', 'Buruh', 'Pekerja Seni', 'Pensiunan', 'Lainnya'];
        $data['Pendidikan'] = ['Tidak Sekolah', 'SD Sederajat', 'SMP Sederajat', 'SMA Sederajat', 'D1-D3', 'D4/S1', 'S2', 'S3'];
        $data['Penghasilan'] = ['Kurang dari Rp.1.000.000', 'Rp.1.000.000 - Rp.2.000.000', 'Lebih dari Rp.2.000.000'];

        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin');
        $this->load->view('daftar&admin/a_edit', $data);
        $this->load->view('templates/footer2');
    }
    public function edit_form()
    {
        $this->model_siswa->editdatasiswa();
        redirect('admin_dash/pendaftar');
    }
}
