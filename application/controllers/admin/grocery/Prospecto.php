<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Prospecto
 * @version: 1.0
 * @fecha: 2019-12-17 07:37:39 
 * */

class Prospecto extends MY_Controller {

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        //$this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("prospecto"); // Tabla del Crud
        //-- Lista --------
        $crud->columns("nombre_completo","email","telefono","fecha_registro","activo");
        //-- Nuevo --------
        $crud->add_fields("nombre_completo","email","telefono","fecha_registro","activo");
        //-- Editar --------
        $crud->edit_fields("nombre_completo","email","telefono","fecha_registro","activo");
        //-- Etiquetas --------
        $crud->display_as("nombre_completo","Nombre Completo");
        $crud->display_as("email","Email");
        $crud->display_as("telefono","Telefono");
        $crud->display_as("fecha_registro","Fecha Registro");
        $crud->display_as("activo","Activo");
        //-- Tipos de Campos --------
        $crud->field_type("nombre_completo", "string");
        $crud->field_type("email", "string");
        $crud->field_type("telefono", "string");
        $crud->field_type("fecha_registro", "datetime");
        $crud->field_type("activo", "numeric");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "prospecto_before_insert"));
        $crud->callback_before_update(array($this, "prospecto_before_update"));
        $crud->callback_before_delete(array($this, "prospecto_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "prospecto_after_insert"));
        $crud->callback_after_update(array($this, "prospecto_after_update"));
        $crud->callback_after_delete(array($this, "prospecto_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        $this->admin_design->crudShow($crudTabla, "Prospecto"); // Presentacion del Crud
    }

    //-- Antes de Insertar --------
    public function prospecto_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function prospecto_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function prospecto_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function prospecto_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function prospecto_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function prospecto_after_delete($id) {


        return true;
    }

}
