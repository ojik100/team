<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Xls;

class Penerima extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('level')== false){
            redirect('home');
        }
    }
    
	
	public function index()
	{
	    if($this->input->post())
        {
            $data = array();

            // Load form validation library
            $this->load->library('form_validation');

            $this->form_validation->set_rules('excel_file', 'Upload File', 'callback_checkFileValidation');
            if($this->form_validation->run() == true) {
                // If file uploaded
                if(!empty($_FILES['excel_file']['name'])) {
                    // get file extension
                    $extension = pathinfo($_FILES['excel_file']['name'], PATHINFO_EXTENSION);

                    if($extension == 'csv'){
                        $reader = new Csv();
                    } elseif($extension == 'xlsx') {
                        $reader = new Xlsx();
                    } else {
                        $reader = new Xls();
                    }
                    // file path
                    $spreadsheet = $reader->load($_FILES['excel_file']['tmp_name']);
                    $allDataInSheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

                    // array Count
                    $arrayCount = count($allDataInSheet);
                    $flag = 0;
                    $createArray = array('no_kk', 'nik', 'nama','jk','umur','alamat','desa','telpon','kecamatan','kabupaten','status_nikah','longitude','lattitude','telah_menerima');
                    $makeArray = array('no_kk' => 'no_kk', 'nik' => 'nik', 'nama' => 'nama','jk'=>'jk','umur'=>'umur','alamat'=>'alamat','desa'=>'desa','telpon'=>'telpon','kecamatan'=>'kecamatan','kabupaten'=>'kabupatan','status_nikah'=>'status_nikah','longitude'=>'logitude','lattitude'=>'lattitude','telah_menerima'=>'telah_menerima');
                    $SheetDataKey = array();
                    foreach ($allDataInSheet as $dataInSheet) {
                        foreach ($dataInSheet as $key => $value) {
                            if (in_array(trim($value), $createArray)) {
                                $value = preg_replace('/\s+/', '', $value);
                                $SheetDataKey[trim($value)] = $key;
                            }
                        }
                    }
                    $dataDiff = array_diff_key($makeArray, $SheetDataKey);
                    if (empty($dataDiff)) {
                        $flag = 1;
                    }

                    // match excel sheet column
                    if ($flag == 1) {
                        for ($i = 2; $i <= $arrayCount; $i++) {
                            $no_kk = $SheetDataKey['no_kk'];
                            $nik = $SheetDataKey['nik'];
                            $nama = $SheetDataKey['nama'];
                            $jk = $SheetDataKey['jk'];
                            $umur = $SheetDataKey['umur'];
                            $alamat = $SheetDataKey['alamat'];
                            $desa = $SheetDataKey['desa'];
                            $telpon = $SheetDataKey['telpon'];
                            $kecamatan = $SheetDataKey['kecamatan'];
                            $kabupaten = $SheetDataKey['kabupaten'];
                            $status_nikah = $SheetDataKey['status_nikah'];
                            $longitude = $SheetDataKey['logitude'];
                            $lattitude = $SheetDataKey['lattitude'];
                            $telah_menerima = $SheetDataKey['telah_menerima'];

                            $no_kk = filter_var(trim($allDataInSheet[$i][$no_kk]), FILTER_SANITIZE_STRING);
                            $nik = filter_var(trim($allDataInSheet[$i][$nik]), FILTER_SANITIZE_STRING);
                            $nama = filter_var(trim($allDataInSheet[$i][$nama]), FILTER_SANITIZE_STRING);
                            $jk = filter_var(trim($allDataInSheet[$i][$jk]), FILTER_SANITIZE_STRING);
                            $umur = filter_var(trim($allDataInSheet[$i][$umur]), FILTER_SANITIZE_STRING);
                            $alamat = filter_var(trim($allDataInSheet[$i][$alamat]), FILTER_SANITIZE_STRING);
                            $desa = filter_var(trim($allDataInSheet[$i][$desa]), FILTER_SANITIZE_STRING);
                            $telpon = filter_var(trim($allDataInSheet[$i][$telpon]), FILTER_SANITIZE_EMAIL);
                            $kecamatan = filter_var(trim($allDataInSheet[$i][$kecamatan]), FILTER_SANITIZE_STRING);
                            $kabupaten = filter_var(trim($allDataInSheet[$i][$kabupaten]), FILTER_SANITIZE_STRING);
                            $status_nikah = filter_var(trim($allDataInSheet[$i][$status_nikah]), FILTER_SANITIZE_STRING);
                            $longitude = filter_var(trim($allDataInSheet[$i][$longitude]), FILTER_SANITIZE_STRING);
                            $lattitude = filter_var(trim($allDataInSheet[$i][$lattitude]), FILTER_SANITIZE_STRING);
                            $telah_menerima = filter_var(trim($allDataInSheet[$i][$telah_menerima]), FILTER_SANITIZE_STRING);

                            //fetch data to array
                            $fetchData[] = array('no_kk' => $no_kk,'nik' => $nik,'nama' => $nama, 'jk' => $jk, 'umur' => $umur,'alamat' => $alamat,'desa' => $desa,'telpon' => $telpon,'kecamatan' => $kecamatan,'kabupaten' => $kabupaten,'status_nikah' => $status_nikah,'longitude' => $longitude,'lattitude' => $lattitude,'telah_menerima' => $telah_menerima,);
                        }

                        $data['dataInfo'] = $fetchData;

                        // bacth insert data
                        $this->db->insert_batch('penerima', $fetchData);
                        redirect(base_url('penerima'));
                    } else {
                        echo "Please import correct file, did not match excel sheet column";
                    }
                }
            }
        }

        $data['page']='admin/bantuan/v_import';
        $data['penerima'] = $this->db->get('penerima')->result();
		$this->load->view('admin/template/base', $data);
	}

    // checkFileValidation
    public function checkFileValidation($string) {
        $file_mimes = array('text/x-comma-separated-values',
            'text/comma-separated-values',
            'application/octet-stream',
            'application/vnd.ms-excel',
            'application/x-csv',
            'text/x-csv',
            'text/csv',
            'application/csv',
            'application/excel',
            'application/vnd.msexcel',
            'text/plain',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        );
        if(isset($_FILES['excel_file']['name'])) {
            $arr_file = explode('.', $_FILES['excel_file']['name']);
            $extension = end($arr_file);
            if(($extension == 'xlsx' || $extension == 'xls' || $extension == 'csv') && in_array($_FILES['excel_file']['type'], $file_mimes)){
                return true;
            }else{
                $this->form_validation->set_message('checkFileValidation', 'Please choose correct file.');
                return false;
            }
        }else{
            $this->form_validation->set_message('checkFileValidation', 'Please choose a file.');
            return false;
        }
    }
}
