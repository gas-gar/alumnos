<?php
/**
 *
 */
class Persona extends CI_Model
{
  public $table = 'alumnos';
  public $table_id = 'id_alumnos';

  function __construct(argument)
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
}
