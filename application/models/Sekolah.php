<?php 
    class Sekolah extends CI_Model 
    {   
        public function getKategoriKelas($sekolah, $kategori)
        {
            $sql = "SELECT (SUM(nilai_kerusakan)/COUNT(nilai_kerusakan)) AS kerusakan_kelas FROM ruang_copy WHERE kategori_ruang = ? AND nama_sekolah = ? GROUP BY nama_sekolah; " ; 
            return $this->db->query($sql, array($kategori, $sekolah))->first_row();
        }

        public function getKategoriKelasBaik($sekolah, $kategori)
        {
            $sql = "SELECT COUNT(nilai_kerusakan) AS kerusakan_kelas FROM ruang_copy WHERE kategori_ruang = ? AND nama_sekolah = ? and nilai_kerusakan=0; " ; 
            return $this->db->query($sql, array($kategori, $sekolah))->first_row();
        }

        public function getKategoriKelasRingan($sekolah, $kategori)
        {
            $sql = "SELECT COUNT(nilai_kerusakan) AS kerusakan_kelas FROM ruang_copy WHERE kategori_ruang = ? AND nama_sekolah = ? and nilai_kerusakan>0 and nilai_kerusakan<=30; " ; 
            return $this->db->query($sql, array($kategori, $sekolah))->first_row();
        }

        public function getKategoriKelasSedang($sekolah, $kategori)
        {
            $sql = "SELECT COUNT(nilai_kerusakan) AS kerusakan_kelas FROM ruang_copy WHERE kategori_ruang = ? AND nama_sekolah = ? and nilai_kerusakan>30 and nilai_kerusakan<=45; " ; 
            return $this->db->query($sql, array($kategori, $sekolah))->first_row();
        }

        public function getKategoriKelasBerat($sekolah, $kategori)
        {
            $sql = "SELECT COUNT(nilai_kerusakan) AS kerusakan_kelas FROM ruang_copy WHERE kategori_ruang = ? AND nama_sekolah = ? and nilai_kerusakan>45 and nilai_kerusakan<=60; " ; 
            return $this->db->query($sql, array($kategori, $sekolah))->first_row();
        }


        public function agetKategoriKelasBaik($sekolah, $kategori)
        {
            $sql = "SELECT COUNT(nilai_kerusakan) AS kerusakan_kelas FROM ruang_copy WHERE kategori_ruang = 'Ruang Pendukung' and nama_ruang Like  ? AND nama_sekolah = ? and nilai_kerusakan=0; " ; 
            return $this->db->query($sql, array($kategori, $sekolah))->first_row();
        }

        public function agetKategoriKelasRingan($sekolah, $kategori)
        {
            $sql = "SELECT COUNT(nilai_kerusakan) AS kerusakan_kelas FROM ruang_copy WHERE kategori_ruang = 'Ruang Pendukung' and nama_ruang Like  ? AND nama_sekolah = ? and nilai_kerusakan>0 and nilai_kerusakan<=30; " ; 
            return $this->db->query($sql, array($kategori, $sekolah))->first_row();
        }

        public function agetKategoriKelasSedang($sekolah, $kategori)
        {
            $sql = "SELECT COUNT(nilai_kerusakan) AS kerusakan_kelas FROM ruang_copy WHERE kategori_ruang = 'Ruang Pendukung' and nama_ruang Like  ? AND nama_sekolah = ? and nilai_kerusakan>30 and nilai_kerusakan<=45; " ; 
            return $this->db->query($sql, array($kategori, $sekolah))->first_row();
        }

        public function agetKategoriKelasBerat($sekolah, $kategori)
        {
            $sql = "SELECT COUNT(nilai_kerusakan) AS kerusakan_kelas FROM ruang_copy WHERE kategori_ruang = 'Ruang Pendukung' and nama_ruang Like  ? AND nama_sekolah = ? and nilai_kerusakan>45; " ; 
            return $this->db->query($sql, array($kategori, $sekolah))->first_row();
        }

// $sql = "SELECT (hitung_skor_kesamaan (? , ?)) as skor_kesamaan;"; 
//         return $this->db->query($sql, array($kode_sekolah, $usbn))->first_row();
        // public function getKategoriKelas($sekolah, $kategori)
        // {
        //     $this->db->select('nilai_kerusakan');
        //     $this->db->from('ruang_copy');
        //     $this->db->where('kategori_ruang', $kategori);
        //     $this->db->where('nama_sekolah', $sekolah);
        //     $query = $this->db->get(); 
        //     return $query->result();
        // }
        public function getAllNew(){ 
            $this->db->select('nama_sekolah');
            $this->db->from('ruang_copy');        
            $query = $this->db->get(); 
            return $query->result();
        }  
        public function getAll(){ 
            $this->db->select('*');
            $this->db->from('sekolah');
            $this->db->order_by('kecamatan');        
            $this->db->order_by('nama_sekolah');        
            $query = $this->db->get(); 
            return $query->result();
        }

        public function getAllid($npsn){ 
            $this->db->select('*');
            $this->db->from('sekolah');
            $this->db->where('npsn', $npsn);
            $this->db->order_by('kecamatan');        
            $this->db->order_by('nama_sekolah');        
            $query = $this->db->get(); 
            return $query->result();
        }

        public function getAllSpesifik(){ 
            $this->db->select('nama_sekolah, kecamatan');
            $this->db->from('sekolah');
            $this->db->group_by('kecamatan');
            $this->db->group_by('nama_sekolah');
            $query = $this->db->get(); 
            return $query->result();
        }

        public function getAllsort(){ 
            $this->db->select('*');
            $this->db->from('sekolah');
            $this->db->where('username_update', null);
            $this->db->order_by('nama_sekolah', 'ASC');        
            $query = $this->db->get(); 
            return $query->result();
        }

        public function getSurvey(){ 
            $this->db->select('*');
            $this->db->from('pelaksanaan_survey');       
            $query = $this->db->get(); 
            return $query->result();
        }

        public function getSekolah($id){ 
            $this->db->select('*');
            $this->db->from('sekolah');
            $this->db->where('npsn', $id);
            $query = $this->db->get(); 
            return $query->first_row();
        }

        public function uploadLayout($id, $data = []){
            if(sizeof($data) <= 0)
            {
                return 0;
            }

            $update_data = [
                'layout_plan1' => $data['layout_plan1'],
                'layout_plan2' => $data['layout_plan2'],
                'layout_plan3' => $data['layout_plan3'],
                'updated_at' => date('Y-m-d'),
                'username_update' => $this->session->user_login['username'],
            ];

            $this->db->where('npsn',$id);
            try{
                $this->db->update('sekolah', $update_data);
                return true;
            }catch(Exception $e)
            {
                return false;
            }
        }

        public function image1_jpg($id){
            $this->db->select('*');
            $this->db->like('layout_plan1', '.jpg');
            $this->db->from('sekolah');
            $this->db->where('npsn', $id);
            $query = $this->db->get(); 
            return $query->first_row();
        }

        public function image2_jpg($id){
            $this->db->select('*');
            $this->db->like('layout_plan2', '.jpg');
            $this->db->from('sekolah');
            $this->db->where('npsn', $id);
            $query = $this->db->get(); 
            return $query->first_row();
        }

        public function image3_jpg($id){
            $this->db->select('*');
            $this->db->like('layout_plan3', '.jpg');
            $this->db->from('sekolah');
            $this->db->where('npsn', $id);
            $query = $this->db->get(); 
            return $query->first_row();
        }

        public function image1_jpeg($id){
            $this->db->select('*');
            $this->db->like('layout_plan1', '.jpeg');
            $this->db->from('sekolah');
            $this->db->where('npsn', $id);
            $query = $this->db->get(); 
            return $query->first_row();
        }

        public function image2_jpeg($id){
            $this->db->select('*');
            $this->db->like('layout_plan2', '.jpeg');
            $this->db->from('sekolah');
            $this->db->where('npsn', $id);
            $query = $this->db->get(); 
            return $query->first_row();
        }

        public function image3_jpeg($id){
            $this->db->select('*');
            $this->db->like('layout_plan3', '.jpeg');
            $this->db->from('sekolah');
            $this->db->where('npsn', $id);
            $query = $this->db->get(); 
            return $query->first_row();
        }

        public function image1_png($id){
            $this->db->select('*');
            $this->db->like('layout_plan1', '.png');
            $this->db->from('sekolah');
            $this->db->where('npsn', $id);
            $query = $this->db->get(); 
            return $query->first_row();
        }

        public function image2_png($id){
            $this->db->select('*');
            $this->db->like('layout_plan2', '.png');
            $this->db->from('sekolah');
            $this->db->where('npsn', $id);
            $query = $this->db->get(); 
            return $query->first_row();
        }

        public function image3_png($id){
            $this->db->select('*');
            $this->db->like('layout_plan3', '.png');
            $this->db->from('sekolah');
            $this->db->where('npsn', $id);
            $query = $this->db->get(); 
            return $query->first_row();
        }

        public function pelaksanaan_survey()
        {
            $this->db->select('*');
            $this->db->from('pelaksanaan_survey');
            $this->db->order_by('petugas');
            $query = $this->db->get(); 
            return $query->result();
        }

        public function harga_satuan()
        {
            $this->db->select('*');
            $this->db->from('default');
            $query = $this->db->get();
            return $query->first_row();
        }
    } 
?>