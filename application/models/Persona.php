<?php
/**
 *
 */
class Persona extends CI_Model
{
  public $table = 'alumno';
  public $table_id = 'id_alumno';

  function __construct()
  {
    // code...
  }
  function find($id){
    $this->db->select();
    $this->db->from($this->table);
    $this->db->where($this->table_id, $id);
    $query = $this->db->get();
    return $query->row();
  }
  function findAll(){
    $this->db->select();
    $this->db->from($this->table);
    $query = $this->db->get();
    return $query->result();
  }
  /**
MÉTODO INSERT
  */
  public function insert($data){
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();//retornar id del registro insertado
  }
  /**
  MÉTODO UPDATE
  */
  public function update($id, $data){
    $this->db->where($this->table_id, $id);//cláusula where de CI indicando el parámetro
    $this->db->update($this->table, $data);
  }
  /**
  MÉTODO DELETE
  */
  public function delete($id){
    $this->db->where($this->table_id, $id);//cláusula where de CI indicando el parámetro
    $this->db->update($this->table);
  }
}
