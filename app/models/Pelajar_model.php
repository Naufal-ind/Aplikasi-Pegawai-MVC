<?php

class Pelajar_model{
   private $table = 'pelajar';
   private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

    public function getAllPelajar()
    {
      $this->db->query('SELECT*FROM ' . $this->table);
      return $this->db->resultSet();
    }

    public function getPelajarById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id' );
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPelajar($data){
      $query = "INSERT INTO pelajar VALUES('', :nama, :nisn, :email, :jurusan)";

      $this->db->query($query);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('nisn', $data['nisn']);
      $this->db->bind('email', $data['email']);
      $this->db->bind('jurusan', $data['jurusan']);
            
      $this->db->execute();

      return $this->db->rowCount();
    }

    public function hapusDataPelajar($id){
      $query = "DELETE FROM pelajar WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();
      return $this->db->rowCount();
    }

    public function ubahDataPelajar($data){
      $query = "UPDATE pelajar SET nama = :nama , nisn = :nisn , email = :email , jurusan = :jurusan WHERE id = :id ";

      $this->db->query($query);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('nisn', $data['nisn']);
      $this->db->bind('email', $data['email']);
      $this->db->bind('jurusan', $data['jurusan']);
      $this->db->bind('id', $data['id']);
            
      $this->db->execute();

      return $this->db->rowCount();
    }


   public function cariDataPelajar(){
    $keyword = $_POST['keyword'];
    $query = " SELECT * FROM pelajar WHERE nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
   }


}
