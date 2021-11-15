<?php
class Tokosepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('V_Input');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Pembeli', 'required|min_length[3]', [
            'required' => 'Nama Pembeli Harus diisi',
            'min_length' => 'Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('nohp', 'Nomor HP', 'required|min_length[3]', [
            'required' => 'Nomor HP Harus diisi'
        ]);
        $this->form_validation->set_rules('merek', 'Merek Sepatu', 'required|min_length[3]', [
            'required' => 'Merek Sepatu Harus diisi'
        ]);
        $this->form_validation->set_rules('ukuran', 'Ukuran Sepatu', 'required|min_length[3]', [
            'required' => 'Ukuran Sepatu Harus diisi'
        ]);

        if($this->form_validation->run() !=TRUE){
            $this->load->view('V_Input');
        } else{
            $data= [
                'nama' => $this->input->post('nama'),
                'nohp' => $this->input->post('nohp'),
                'merek' => $this->input->post('merek'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->M_Tokosepatu->getBiaya($this->input->post('merek'))
            ];

            $this->load->view('V_Otput', $data);
        }
    }
}