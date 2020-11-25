<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Getbarang extends REST_Controller{

    public function __construct($config = 'rest')
    {
        parent::__construct($config );
        $this->load->model("M_barang");
        $this->load->model("M_kategori");
        $this->load->library('form_validation');
       
        $this->load->database();

        if($this->session->userdata('level')== false){
           $this->response(502);
        }else if($this->session->userdata('level')== 3){
            $this->response(502);
        }
    }
    public function index_get(){    
        $id = $this->get('id');
        if ($id == '') {
            $barang = $this->M_barang->getAd();
        } else {
            
            $barang = $this->M_barang->getById($id);
        }
        $this->response($barang, 200);
        
    }
    public function index_post(){
        // $data['kategori'] 	= $this->M_kategori->get_data();
        $data = $this->M_barang->save();
        

        if ($data){
            $this->response($data, 200);
        }else {
            $this->response(array('status' => 'gagal', 502));
        }
    }

    public function index_put(){
        $id = $this->put('id_barang');
        $data = array(
                    'id_barang'       => $this->put('id_barang'),
                    'nama_barang'          => $this->put('nama_barang'),
                    'keterangan'    => $this->put('keterangan'),
                    'harga'       => $this->put('harga'),
                    'stok'          => $this->put('stok'),
                    'status'       => $this->put('status'),
                    'gambar'          =>  $this->_uploadImage(),
                    'slug'       => slug($this->put('nama_barang')),
                    'satuan'          => $this->put('satuan'),
                    'id_kategori'       => $this->put('id_kategori'),
                   

                );
                    
        $this->db->where('id_barang', $id);
        $update = $this->db->update('barang', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $id = $this->delete('id_barang');
        $this->db->where('id_barang', $id);
        $delete = $this->db->delete('barang');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }


    public function pdf(){
        $this->load->library('dompdf_gen');
     
        if($this->session->userdata('level')==1){
            $where= $this->session->userdata('id_desa');

            $data['barang']=$this->M_barang->getAll($where);
        }else{
            $where= $this->session->userdata('id');

            
            $data['barang'] = $this->M_barang->getbysup($where);       
       
        }

        $this->load->view('admin/barang/laporan',$data);

        $paper_size =' A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size,$orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_barang.pdf",array('attachment'=> 0));
    }
    public function updateapi()
    {
        $post = $this->put();
        $this->id_barang = $post["id"];
        $this->nama_barang = $post["nama_barang"];
        $this->harga = $post["harga"];
        $this->slug = slug($post["nama_barang"]);
        $this->keterangan = $post["keterangan"];
        $this->id_suplayer = $post["id_suplayer"];
        $this->stok = $post["stok"];
        if (!empty($_FILES["gambar"]["name"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_gambar"];
        }
        $this->status = $post["status"];
        $this->satuan = $post["satuan"];
        $this->id_kategori = $post["id_kategori"];

        return $this->db->update($this->table, $this, array('id_barang' => $post['id']));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/barang/';
        $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = '';
            $config['max_width']            = '';
            $config['max_height']           = '';//  $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
    
        $this->load->library('upload', $config);
     
            if ( ! $this->upload->do_upload('gambar')){
              return $this->upload->display_errors();
            }else{
                $data = array('upload_data' => $this->upload->data());
                $data1=$this->upload->data();
               return $data1['file_name'];
            }
    }
   

    
}
