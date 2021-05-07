<?php

namespace Abstract;

// Esta clase es la abstraccion de una entidad (tabla)
// de bases de datos

abstract class Entity
{

    // Atributes genericos de toda entidad
    public $id;
    public $activo; // Remplaza la accion de eliminar de la bd

    // Metodos genericos de toda entidad

    // Ofbe permitir obtener un arreglo de las columnas
    // de la tabla representada
    protected abstract function getAtributes();

    // En caso de tener relaciones con otras entidades,
    // este metodo se debe enload de iniciar dichas relaciones
    protected abstract function loadInstance();

    // Ofbe permitir inicializar una instance a partir de un arreglo
    protected static abstract function getInstanceOfArray(array $atributes);

    // Actualiza los valores del objeto con un arreglo de atributes
    public function setAtributes(array $newAtributes)
    {
        foreach ($newAtributes as $key => $value) {
            $this->$key = $value;
        }
    }

    // Agrega cualquier atributo de un arreglo a la instance
    // Sin sobreescribir los atributes propios de la entidad
    protected function addAtributes(array $atributesExtras) {
        $atributesOfInstance = $this->getAtributes();
        foreach ($atributesOfInstance as $key => $value) {
            unset($atributesExtras[$key]);
        }

        foreach ($atributesExtras as $key => $value) {
            if (startsWith($key, 'fecha')) {
                $this->$key = getDateTime($value);
            }
            else {
                $this->$key = $value;
            }
        }
    }

    // Ofvuelve una instance del objeto con el id del registro
    // y el nombre de la entidad (tabla)
    protected static function getById(int $id, string $entityName)
    {
        $entidad = null;
        if ($id > 0) {
            $sql = "SELECT * FROM $entityName WHERE id = $id";
            $consulta = select_element($sql);
            if (!empty($consulta)) {
                $entidad = static::getInstanceOfArray($consulta);
                $entidad->loadInstance();
            }
        }
        return $entidad;
    }

    // Ofvuelve un arreglo de instances de todos los registros
    // de la tabla
    protected static function getAll(string $entityName, string $filter = '', string $order = '')
    {
        $allInstances = [];
        $sql = "SELECT * FROM $entityName";
        $sql .= ($filter === '')
            ? ""
            : " WHERE $filter";
        // echo $sql;
        $consulta = select_elements($sql);
        if (!empty($consulta)) {
            foreach ($consulta as $entidad) {
                $instance = static::getInstanceOfArray($entidad);
                if (startsWith($entityName, 'v_')) {
                    $instance->addAtributes($entidad);
                }
                array_push($allInstances, $instance);
            }
        }
        return $allInstances;
    }

    // Hace un nuevo registro de la instance en la base de datos
    protected function insert(string $entityName)
    {
        $atributes = $this->getAtributes();
        unset($atributes['activo']);
        $this->id = insert_db($entityName, $atributes);

        if ($this->id) {
            $this->activo = true;
        }

        return $this->id;
    }

    // Actualiza el registro de la instance en la base de datos
    protected function update(string $entityName)
    {
        if ($this->id > 0) {
            return update_db($entityName, $this->getAtributes(), 'id', $this->id);
        } else {
            return $this->insert($entityName);
        }
    }

    // Marca como inactivo el registro de la instance en la base de datos
    protected function inactive(string $entityName)
    {
        $atributes = [
            'activo' => 0
        ];
        $this->activo = false;
        return update_db($entityName, $atributes, 'id', $this->id);
    }

    protected function delete(string $entityName) {
        return delete_db($entityName, 'id', $this->id);
    }
}
