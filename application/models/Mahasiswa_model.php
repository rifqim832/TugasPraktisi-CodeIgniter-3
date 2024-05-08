<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Data array data_mahasiswa
    private $data_mahasiswa = array(
        array('id' => 1, 'nama' => 'Sumanto', 'npm' => '1412220003', 'angkatan' => '2022', 'kelas' => 'B', 'alamat' => 'Jl.Cemara No. 1', 'mata_kuliah_favorit' => 'Pemrograman Web'),
        array('id' => 2, 'nama' => 'Budi Raharjo', 'npm' => '1412130015', 'angkatan' => '2019', 'kelas' => 'B', 'alamat' => 'Jl. Pramuka No. 2', 'mata_kuliah_favorit' => 'BasisData'),
        array('id' => 3, 'nama' => 'Citra Dewi', 'npm' => '1412130023', 'angkatan' => '2021', 'kelas' => 'C', 'alamat' => 'Jl. Raya Rengel No. 3', 'mata_kuliah_favorit' => 'Pemrograman Lanjut'),
        array('id' => 4, 'nama' => 'Dian Nugraha', 'npm' => '1412130045', 'angkatan' => '2021', 'kelas' => 'B', 'alamat' => 'Jl. Slamet Riyadi No. 4', 'mata_kuliah_favorit' => 'Jaringan Komputer'),
        array('id' => 5, 'nama' => 'Sukitmo', 'npm' => '1412130042', 'angkatan' => '2021', 'kelas' => 'B', 'alamat' => 'Jl. Pramuka No. 20', 'mata_kuliah_favorit' => 'Data Mining'),
        array('id' => 6, 'nama' => 'Dian Nugraha', 'npm' => '1412130043', 'angkatan' => '2021', 'kelas' => 'A', 'alamat' => 'Jl. Pramuka No. 158', 'mata_kuliah_favorit' => 'Pemrograman Web'),
        array('id' => 7, 'nama' => 'Karwoto', 'npm' => '1412130044', 'angkatan' => '2021', 'kelas' => 'B', 'alamat' => 'Jl. Manunggal No. 24', 'mata_kuliah_favorit' => 'Statistika'),
        array('id' => 8, 'nama' => 'Siyem', 'npm' => '1412210054', 'angkatan' => '2021', 'kelas' => 'A', 'alamat' => 'Jl. Cendrawasih No. 54', 'mata_kuliah_favorit' => 'Jaringan Komputer'),
        array('id' => 9, 'nama' => 'Sugeng', 'npm' => '1412220044', 'angkatan' => '2022', 'kelas' => 'C', 'alamat' => 'Jl. Basuki Rahmad No. 44', 'mata_kuliah_favorit' => 'Sistem Operasi'),
        array('id' => 10, 'nama' => 'Eka Sari', 'npm' => '1412220055', 'angkatan' => '2022', 'kelas' => 'B', 'alamat' => 'Jl. Manunggal No. 5', 'mata_kuliah_favorit' => 'Sistem Operasi')
    );

    // Fungsi untuk mendapatkan data mahasiswa
    public function get_mahasiswa()
    {
        return $this->data_mahasiswa;
    }

    public function search_mahasiswa($keyword)
    {
        $result = array();
        $keyword = strtolower($keyword); // Ubah kata kunci menjadi lowercase untuk pencarian case-insensitive
        foreach ($this->data_mahasiswa as $mahasiswa) {
            // Ubah semua nilai menjadi lowercase untuk pencarian case-insensitive
            $nama = strtolower($mahasiswa['nama']);
            $npm = strtolower($mahasiswa['npm']);
            $angkatan = strtolower($mahasiswa['angkatan']);
            $kelas = strtolower($mahasiswa['kelas']);
            $alamat = strtolower($mahasiswa['alamat']);
            $matkul = strtolower($mahasiswa['mata_kuliah_favorit']);

            // Gunakan stripos() untuk pencarian case-insensitive
            if (
                stripos($nama, $keyword) !== false ||
                stripos($npm, $keyword) !== false ||
                stripos($angkatan, $keyword) !== false ||
                stripos($kelas, $keyword) !== false ||
                stripos($alamat, $keyword) !== false ||
                stripos($matkul, $keyword) !== false
            ) {
                $result[] = $mahasiswa;
            }
        }
        return $result;
    }
}
