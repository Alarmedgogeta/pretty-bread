<?php

use Http\Response;

if (!function_exists('view')) {
  function view($view) {
    return new Response($view);
  }
}

if (!function_exists('viewPath')) {
  function viewPath($view)
  {
    return __DIR__ . "/../views/$view.php";
  }
}

if (!function_exists('open_db_connection')) {
  function open_db_connection()
  {
    global $dbcon;

    $db = 'pretty_bread';
    $hostname = 'localhost';
    $user = 'root';
    $pass = '';

    $dbcon = new mysqli($hostname, $user, $pass, $db) or die("Error al conectar con la base de datos");
    mysqli_set_charset($dbcon, 'utf8');
  }
}

if (!function_exists('close_db_connection')) {
  function close_db_connection()
  {
    global $dbcon;
    mysqli_close($dbcon);
  }
}

if (!function_exists('insert_db')) {
  function insert_db($table, $atributes)
  {
    global $dbcon;
    $contador = 0;
    $bandera = false;
    $valor = '';
    $columna = '';
    foreach ($atributes as $k => $v) {
      if ($contador == 0 && ($contador + 1 == sizeof($atributes))) {
        $columna .= "(" . $k . ")";
        $valor .= "('" . $v . "')";
      } else if ($contador + 1 == sizeof($atributes)) {
        $columna .= ", " . $k . ")";
        $valor .= ", '" . $v . "')";
      } else if ($contador == 0) {
        $columna = "(" . $k . "";
        $valor = "('" . $v . "'";
      } else {
        $columna .= ", " . $k . "";
        $valor .= ", '" . $v . "'";
        $bandera = true;
      }
      $contador++;
    }
    $sql = "INSERT INTO " . $table . " " . $columna . " VALUES " . $valor;
    if ($dbcon->query($sql) === TRUE) {
      return $dbcon->insert_id;
    } else {
      printf("Errormessage: %s\n", $dbcon->error);
      return false;
    }
  }
}

if (!function_exists('update_db')) {
  function update_db($tabla, $atributos, $id_columna, $id)
  {
    global $dbcon;
    $contador = 0;
    $bandera = false;
    $valor = '';
    foreach ($atributos as $k => $v) {
      if ($contador + 1 == sizeof($atributos)) {
        $valor .= "" . $k . " = '" . $v . "'";
      } else {
        $valor .= "" . $k . " = '" . $v . "', ";
      }
      $contador++;
    }
    $sql = "UPDATE " . $tabla . " SET " . $valor . " WHERE " . $id_columna . " = '" . $id . "'";
    if ($dbcon->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }
}

if (!function_exists('delete_db')) {
  function delete_db($tabla, $id_columna, $id)
  {
    global $dbcon;
    $sql = "DELETE FROM " . $tabla . " WHERE " . $id_columna . " = '" . $id . "'";
    if ($dbcon->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }
}

if (!function_exists('select_element')) {
  function select_element($sql)
  {
    global $dbcon;
    $resultado = array();
    $result = $dbcon->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $resultado = $row;
      }
    }
    return $resultado;
  }
}

if (!function_exists('select_elements')) {
  function select_elements($sql, int $cantidad = -1, int $comienzo = 0)
  {
    global $dbcon;
    $resultado = array();
    if ($cantidad > 0) {
      $sql .= " LIMIT $cantidad OFFSET $comienzo";
    }
    $result = $dbcon->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $resultado[] = $row;
      }
    }
    return $resultado;
  }
}

if (!function_exists('getDateTime')) {
  function getDateTime($date)
  {
    if(is_string($date)){
        $dateValida = new DateTime($date);
    } else if (is_object($date)){
        switch (get_class($date)) {
    
            case 'DateTime':
                $dateValida = $date;
                break;
    
            case 'string':
                $dateValida = new DateTime($date);
                break;
    
            default:
                $dateValida = new DateTime();
                break;
        }
    } else {
        $dateValida = new DateTime();
    }
    return $dateValida;
  }
}

if (!function_exists('startsWith')) {
  function startsWith($haystack, $needle)
  {
    $length = strlen($needle);
    return substr($haystack, 0, $length) === $needle;
  }
}