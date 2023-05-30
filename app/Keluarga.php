<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Keluarga extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_keluarga";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $nama_keluarga = $_POST['nama_keluarga'];
        $hrg_keluarga = $_POST['hrg_keluarga'];

        $sql = "INSERT INTO tb_keluarga (nama_keluarga, hrg_keluarga) VALUES (:nama_keluarga, :hrg_keluarga)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_keluarga", $nama_keluarga);
        $stmt->bindParam(":hrg_keluarga", $hrg_keluarga);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_keluarga WHERE id_keluarga=:id_keluarga";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_keluarga", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_keluarga = $_POST['nama_keluarga'];
        $hrg_keluarga = $_POST['hrg_keluarga'];
        $id_keluarga = $_POST['id_keluarga'];

        $sql = "UPDATE tb_keluarga SET nama_keluarga=:nama_keluarga, hrg_keluarga=:hrg_keluarga WHERE id_keluarga=:id_keluarga";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_keluarga", $nama_keluarga);
        $stmt->bindParam(":hrg_keluarga", $hrg_keluarga);
        $stmt->bindParam(":id_keluarga", $id_keluarga);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_keluarga WHERE id_keluarga=:id_keluarga";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_keluarga", $id);
        $stmt->execute();

    }

}