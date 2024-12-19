<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Comentario
 * @version: 1.0
 * @fecha: 2019-12-17 07:37:39 
 * */

class Comentario extends MY_Controller {

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        //$this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("comentario"); // Tabla del Crud
        //-- Lista --------
        $crud->columns("cliente_id","comentario","fecha_creacion","multimedia","activo");
        //-- Nuevo --------
        $crud->add_fields("cliente_id","comentario","fecha_creacion","multimedia","activo");
        //-- Editar --------
        $crud->edit_fields("cliente_id","comentario","fecha_creacion","multimedia","activo");
        //-- Etiquetas --------
        $crud->display_as("cliente_id","Cliente Id");
        $crud->display_as("comentario","Comentario");
        $crud->display_as("fecha_creacion","Fecha Creacion");
        $crud->display_as("multimedia","Multimedia");
        $crud->display_as("activo","Activo");
        //-- Tipos de Campos --------
        //$crud->field_type("cliente_id", "numeric");
        $crud->field_type("comentario", "text");
        $crud->field_type("fecha_creacion", "datetime");
        $crud->field_type("multimedia", "numeric");
        $crud->field_type("activo", "numeric");
        //-- Relaciones 1-N --------
        $crud->set_relation("cliente_id", "clientes","id");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "comentario_before_insert"));
        $crud->callback_before_update(array($this, "comentario_before_update"));
        $crud->callback_before_delete(array($this, "comentario_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "comentario_after_insert"));
        $crud->callback_after_update(array($this, "comentario_after_update"));
        $crud->callback_after_delete(array($this, "comentario_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        $this->admin_design->crudShow($crudTabla, "Comentario"); // Presentacion del Crud
    }

    //-- Antes de Insertar --------
    public function comentario_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function comentario_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function comentario_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function comentario_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function comentario_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function comentario_after_delete($id) {


        return true;
    }

}
