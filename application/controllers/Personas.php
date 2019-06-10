<?php
/**
 *
 */
class Personas extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('Persona');
    $this->load->database();
  }
  //La primera función en ejecutarse
  public function index(){

  }
  public function listado(){

  }
  public function guardar($persona_id = null){//si persona_id no tiene valor es igual a null
    //datos para pasar a la vista
    $vdata["nombre"] = $vdata["apellidos"] = $vdata["dni"] = $vdata["telefono"]
    = $vdata["direccion"] = $vdata["cp"] = $vdata["localidad"] = $vdata["provincia"] = "";

    if (isset($persona_id)) {//si tenemos id
      echo "hola";
      $persona = $this->Persona->find($persona_id);//llamar función find para mostrar en form
      if (isset($persona)){
        $vdata["nombre"] = $persona->nombre;//hace referencia al 'name' del input
        $vdata["apellidos"] = $persona->apellidos;
        $vdata["dni"] = $persona->dni;
        $vdata["telefono"] = $persona->telefono;
        $vdata["direccion"] = $persona->direccion;
        $vdata["cp"] = $persona->cp;
        $vdata["localidad"] = $persona->localidad;
        $vdata["provincia"] = $persona->provincia;
      }
    }

    if ($this->input->server("REQUEST_METHOD") == "POST") {//reconocer el tipo de petición
      //obtener los datos del formulario
      $data["nombre"] = $this->input->post("nombre");//hace referencia al 'name' del input
      $data["apellidos"] = $this->input->post("apellidos");
      $data["dni"] = $this->input->post("dni");
      $data["telefono"] = $this->input->post("telefono");
      $data["direccion"] = $this->input->post("direccion");
      $data["cp"] = $this->input->post("cp");
      $data["localidad"] = $this->input->post("localidad");
      $data["provincia"] = $this->input->post("provincia");
      //datos para pasar a la vista
      $vdata["nombre"] = $this->input->post("nombre");//hace referencia al 'name' del input
      $vdata["apellidos"] = $this->input->post("apellidos");
      $vdata["dni"] = $this->input->post("dni");
      $vdata["telefono"] = $this->input->post("telefono");
      $vdata["direccion"] = $this->input->post("direccion");
      $vdata["cp"] = $this->input->post("cp");
      $vdata["localidad"] = $this->input->post("localidad");
      $vdata["provincia"] = $this->input->post("provincia");
      //var_dump $vdata;
      if (isset($persona_id)) {//si tenemos id
        $this->Persona->update($persona_id, $data);//actualizar registro
      }else
        $this->Persona->insert($data);//insertar datos

    }
    $this->load->view('personas/guardar', $vdata);//presentar el form vacío
  }//fin función guardar

  public function borrar(){

  }
}
