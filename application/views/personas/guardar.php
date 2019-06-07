<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <?php echo form_open('') ?>
      <div class="form-group">
        <?php
        echo form_label('Nombre', 'nombre');
        $input = array(
          'name' => 'nombre',
          'value' => '',
          'class' => 'form-control input-lg'
        );
        echo form_input($input);
         ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('Apellidos', 'apellidos');
        $input = array(
          'name' => 'apellidos',
          'value' => '',
          'class' => 'form-control input-lg'
        );
        echo form_input($input);
         ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('DNI', 'dni');
        $input = array(
          'name' => 'dni',
          'value' => '',
          'class' => 'form-control input-lg'
        );
        echo form_input($input);
         ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('Teléfono', 'telefono');
        $input = array(
          'name' => 'telefono',
          'value' => '',
          'class' => 'form-control input-lg'
        );
        echo form_input($input);
         ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('Dirección', 'direccion');
        $input = array(
          'name' => 'direccion',
          'value' => '',
          'class' => 'form-control input-lg'
        );
        echo form_input($input);
         ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('Código Postal', 'cp');
        $input = array(
          'name' => 'cp',
          'value' => '',
          'class' => 'form-control input-lg'
        );
        echo form_input($input);
         ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('Localidad', 'localidad');
        $input = array(
          'name' => 'localidad',
          'value' => '',
          'class' => 'form-control input-lg'
        );
        echo form_input($input);
         ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('Provincia', 'provincia');
        $input = array(
          'name' => 'provincia',
          'value' => '',
          'class' => 'form-control input-lg'
        );
        echo form_input($input);
         ?>
      </div>
      <?php echo form_submit('mysubmit', 'Enviar',"class='btn btn-primary'") ?>
      <?php echo form_close() ?>
    </div>

  </body>
</html>
