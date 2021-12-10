<?php

defined ('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class tb_lahanpertanian extends REST_Controller
{
    function __construct($config='rest')
    {
        parent::__construct($config);
        $this->load->database();

    }

    //menampilkan data Lahan Pertanian
    function index_get(){
        $tb_lahanpertanian = $this->db->get('tb_lahanpertanian')->result();
        $this->response(array("result"=>$tb_lahanpertanian,200));
    }

    //menginput atau mengedit data lahan pertanian
    function index_post(){
        $flag=$this->post('flag');

        //Upload atau Tambah data
        if($flag=="INSERT")
        {
            // Config Upload
            $config['upload_path']='./assets/files/tb_lahanpertanian/';
            $config['allowed_types']='png|jpg';
            $config['max_size']='20480';
            $image=$_FILES['foto']['name'];
            $path="./assets/files/tb_lahanpertanian/";
            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('foto'))
            {
                $this->response(array('status'=>'fail',502));
            }
            else
            {
                $data = array(
                            'id_lahan'=>$this->post('id_lahan'),
                            'namapemilik'=>$this->post('namapemilik'),
                            'luas'=>$this->post('luas'),
                            'meter'=>$this->post('meter'),
                            'desa'=>$this->post('desa'),
                            'kecamatan'=>$this->post('kecamatan'),
                            'latitude'=>$this->post('latitude'),
                            'longtitude'=>$this->post('longtitude'),
                            'foto'=>$image);
                $insert = $this->db->insert('tb_lahanpertanian',$data);
                $this->response($data,200);
            }
        }
        else if($flag=="UPDATE") //Update atau Edit Data
        {
            // Config Upload
            $config['upload_path']='./assets/files/tb_lahanpertanian/';
            $config['allowed_types']='png|jpg';
            $config['max_size']='20480';
            $image=$_FILES['foto']['name'];
            $path="./assets/files/tb_lahanpertanian/";
            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('foto'))
            {
                $this->response(array('status'=>'fail',502));
            }
            else
            {
                $id_lahan=$this->post('id_lahan');
                //Hapus Image Lama
                $queryimg = $this->db->query("SELECT foto FROM '".$this->db->dbprefix('tb_lahanpertanian')."' WHERE id_lahan='".$id_lahan."' ");
                $row = $queryimg ->row();
                $picturepath="./assets/files/tb_lahanpertanian/".$row->foto;
                unlink($picturepath);

                $data = array(
                            'id_lahan'=>$this->post('id_lahan'),
                            'namapemilik'=>$this->post('namapemilik'),
                            'luas'=>$this->post('luas'),
                            'meter'=>$this->post('meter'),
                            'desa'=>$this->post('desa'),
                            'kecamatan'=>$this->post('kecamatan'),
                            'latitude'=>$this->post('latitude'),
                            'longtitude'=>$this->post('longtitude'),
                            'foto'=>$image);
                $this->db->where('id_lahan', $id_lahan);
                $update = $this->db->update('tb_lahanpertanian',$data);
                $this->response($data,200);
            }
        }
    }

    //Menghapus data di tabel
    function index_delete(){
        $id_lahan=$this->delete('id_lahan');

        //Hapus Image Lama
        $queryimg = $this->db->query("SELECT foto FROM '".$this->db->dbprefix('tb_lahanpertanian')."' WHERE id_lahan='".$id_lahan."' ");
        $row = $queryimg ->row();
        $picturepath="./assets/files/tb_lahanpertanian/".$row->foto;
        unlink($picturepath);

        $this->db->where('id_lahan', $id_lahan);
        $delete = $this->db->delete('tb_lahanpertanian');
        if($delete)
        {
            $this->response(array('status'=>'success',201));
        }
        else
        {
            $this->response(array('status'=>'fail',502));
        }
    }
}

?>