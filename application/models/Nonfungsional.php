<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// include "Kebutuhan.php";

class Nonfungsional extends Kebutuhan {

    protected $kode = " ";
    protected $deskripsi = " ";
    protected $prioritas = 0.0;

    public function getKebutuhan($id){
        $this->db->where('id', $id);
        return $this->db->get('nonfungsionals');
    }

    public function getJumlahKebutuhan(){
        $nonfungsionals = $this->db->get('nonfungsionals');
        return $nonfungsionals->num_rows();
    }

    public function setKode($kode){
            $this->kode = $kode;
    }

    public function getKode(){
            return $this->kode;
    }

    public function setDeskripsi($deskripsi){
            $this->deskripsi = $deskripsi;
    }

    public function getDeskripsi(){
            return $this->deskripsi;
    }

    public function setPrioritas($prioritas){
            $this->prioritas = $prioritas;
    }

    public function getPrioritas(){
            return $this->prioritas;
    }

    public function tambahKebutuhan(){
        $data = array(
            'kode' => $this->kode,
            'deskripsi' => $this->deskripsi
        );
        $query = $this->db->insert('nonfungsionals', $data);
        if($query){
            return true;
        }
    }

    public function updateKebutuhan($id){
        $data = array(
            'kode' => $this->kode,
            'deskripsi' => $this->deskripsi
        );
        $this->db->where('id', $id);
        $this->db->update('nonfungsionals', $data);
    }

    public function hapusKebutuhan($id){
        $this->db->where('id', $id);
        $this->db->delete('nonfungsionals');
    }

    public function updatePrioritas($id, $prioritas){
        $data = array('prioritas'=> $prioritas);
        $this->db->where('id', $id);
        $query = $this->db->update('nonfungsionals', $data);
        if($query){
            return true;
        }
    }

}