<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Rtidur extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_rtidur";
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
        $nama_rtidur = $_POST['nama_rtidur'];
        $hrg_rtidur = $_POST['hrg_rtidur'];

        $sql = "INSERT INTO tb_rtidur (nama_rtidur, hrg_rtidur) VALUES (:nama_rtidur, :hrg_rtidur)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_rtidur", $nama_rtidur);
        $stmt->bindParam(":hrg_rtidur", $hrg_rtidur);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_rtidur WHERE id_rtidur=:id_rtidur";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_rtidur", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_rtidur = $_POST['nama_rtidur'];
        $hrg_rtidur = $_POST['hrg_rtidur'];
        $id_rtidur = $_POST['id_rtidur'];

        $sql = "UPDATE tb_rtidur SET nama_rtidur=:nama_rtidur, hrg_rtidur=:hrg_rtidur WHERE id_rtidur=:id_rtidur";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_rtidur", $nama_rtidur);
        $stmt->bindParam(":hrg_rtidur", $hrg_rtidur);
        $stmt->bindParam(":id_rtidur", $id_rtidur);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_rtidur WHERE id_rtidur=:id_rtidur";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_rtidur", $id);
        $stmt->execute();

    }

}