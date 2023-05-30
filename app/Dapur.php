<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Dapur extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_dapur";
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
        $nama_dapur = $_POST['nama_dapur'];
        $hrg_dapur = $_POST['hrg_dapur'];

        $sql = "INSERT INTO tb_dapur (nama_dapur, hrg_dapur) VALUES (:nama_dapur, :hrg_dapur)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_dapur", $nama_dapur);
        $stmt->bindParam(":hrg_dapur", $hrg_dapur);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_dapur WHERE id_dapur=:id_dapur";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_dapur", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_dapur = $_POST['nama_dapur'];
        $hrg_dapur = $_POST['hrg_dapur'];
        $id_dapur = $_POST['id_dapur'];

        $sql = "UPDATE tb_dapur SET nama_dapur=:nama_dapur, hrg_dapur=:hrg_dapur WHERE id_dapur=:id_dapur";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_dapur", $nama_dapur);
        $stmt->bindParam(":hrg_dapur", $hrg_dapur);
        $stmt->bindParam(":id_dapur", $id_dapur);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_dapur WHERE id_dapur=:id_dapur";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_dapur", $id);
        $stmt->execute();

    }

}