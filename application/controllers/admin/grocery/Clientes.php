<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Clientes
 * @version: 1.0
 * @fecha: 2019-12-17 07:37:39 
 * */

class Clientes extends MY_Controller {

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        //$this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("clientes"); // Tabla del Crud
        //-- Lista --------
        $crud->columns("nombres","apellidos","correo","telefono","profesion","pais_id","estado_id","ciudad_id","direccion_1","direccion_2","fecha_creacion","activo");
        //-- Nuevo --------
        $crud->add_fields("nombres","apellidos","correo","telefono","profesion","pais_id","estado_id","ciudad_id","direccion_1","direccion_2","fecha_creacion","activo");
        //-- Editar --------
        $crud->edit_fields("nombres","apellidos","correo","telefono","profesion","pais_id","estado_id","ciudad_id","direccion_1","direccion_2","fecha_creacion","activo");
        //-- Etiquetas --------
        $crud->display_as("nombres","Nombres");
        $crud->display_as("apellidos","Apellidos");
        $crud->display_as("correo","Correo");
        $crud->display_as("telefono","Telefono");
        $crud->display_as("profesion","Profesion");
        $crud->display_as("pais_id","Pais Id");
        $crud->display_as("estado_id","Estado Id");
        $crud->display_as("ciudad_id","Ciudad Id");
        $crud->display_as("direccion_1","Direccion 1");
        $crud->display_as("direccion_2","Direccion 2");
        $crud->display_as("fecha_creacion","Fecha Creacion");
        $crud->display_as("activo","Activo");
        //-- Tipos de Campos --------
        $crud->field_type("nombres", "string");
        $crud->field_type("apellidos", "string");
        $crud->field_type("correo", "string");
        $crud->field_type("telefono", "string");
        $crud->field_type("profesion", "string");
        //$crud->field_type("pais_id", "numeric");
        //$crud->field_type("estado_id", "numeric");
        //$crud->field_type("ciudad_id", "numeric");
        $crud->field_type("direccion_1", "string");
        $crud->field_type("direccion_2", "string");
        $crud->field_type("fecha_creacion", "datetime");
        $crud->field_type("activo", "numeric");
        //-- Relaciones 1-N --------
        $crud->set_relation("pais_id", "pais","id");
        $crud->set_relation("estado_id", "estado","id");
        $crud->set_relation("ciudad_id", "ciudad","id");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "clientes_before_insert"));
        $crud->callback_before_update(array($this, "clientes_before_update"));
        $crud->callback_before_delete(array($this, "clientes_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "clientes_after_insert"));
        $crud->callback_after_update(array($this, "clientes_after_update"));
        $crud->callback_after_delete(array($this, "clientes_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        $this->admin_design->crudShow($crudTabla, "Clientes"); // Presentacion del Crud
    }

    //-- Antes de Insertar --------
    public function clientes_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function clientes_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function clientes_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function clientes_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function clientes_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function clientes_after_delete($id) {


        return true;
    }

}
