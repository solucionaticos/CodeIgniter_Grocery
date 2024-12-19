<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Factura
 * @version: 1.0
 * @fecha: 2019-12-17 07:37:39 
 * */

class Factura extends MY_Controller {

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        //$this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("factura"); // Tabla del Crud
        //-- Lista --------
        $crud->columns("factura_num","cliente_id","archivo");
        //-- Nuevo --------
        $crud->add_fields("factura_num","cliente_id","archivo");
        //-- Editar --------
        $crud->edit_fields("factura_num","cliente_id","archivo");
        //-- Etiquetas --------
        $crud->display_as("factura_num","Factura Num");
        $crud->display_as("cliente_id","Cliente Id");
        $crud->display_as("archivo","Archivo");
        //-- Tipos de Campos --------
        $crud->field_type("factura_num", "string");
        //$crud->field_type("cliente_id", "numeric");
        $crud->field_type("archivo", "string");
        //-- Relaciones 1-N --------
        $crud->set_relation("cliente_id", "clientes","id");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "factura_before_insert"));
        $crud->callback_before_update(array($this, "factura_before_update"));
        $crud->callback_before_delete(array($this, "factura_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "factura_after_insert"));
        $crud->callback_after_update(array($this, "factura_after_update"));
        $crud->callback_after_delete(array($this, "factura_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        $this->admin_design->crudShow($crudTabla, "Factura"); // Presentacion del Crud
    }

    //-- Antes de Insertar --------
    public function factura_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function factura_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function factura_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function factura_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function factura_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function factura_after_delete($id) {


        return true;
    }

}
