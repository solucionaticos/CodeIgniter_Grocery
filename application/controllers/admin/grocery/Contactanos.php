<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Contactanos
 * @version: 1.0
 * @fecha: 2019-12-17 07:37:39 
 * */

class Contactanos extends MY_Controller {

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        //$this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("contactanos"); // Tabla del Crud
        //-- Lista --------
        $crud->columns("nombre_completo","email","comentario","respondido");
        //-- Nuevo --------
        $crud->add_fields("nombre_completo","email","comentario","respondido");
        //-- Editar --------
        $crud->edit_fields("nombre_completo","email","comentario","respondido");
        //-- Etiquetas --------
        $crud->display_as("nombre_completo","Nombre Completo");
        $crud->display_as("email","Email");
        $crud->display_as("comentario","Comentario");
        $crud->display_as("respondido","Respondido");
        //-- Tipos de Campos --------
        $crud->field_type("nombre_completo", "string");
        $crud->field_type("email", "string");
        $crud->field_type("comentario", "text");
        $crud->field_type("respondido", "numeric");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "contactanos_before_insert"));
        $crud->callback_before_update(array($this, "contactanos_before_update"));
        $crud->callback_before_delete(array($this, "contactanos_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "contactanos_after_insert"));
        $crud->callback_after_update(array($this, "contactanos_after_update"));
        $crud->callback_after_delete(array($this, "contactanos_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        $this->admin_design->crudShow($crudTabla, "Contactanos"); // Presentacion del Crud
    }

    //-- Antes de Insertar --------
    public function contactanos_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function contactanos_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function contactanos_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function contactanos_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function contactanos_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function contactanos_after_delete($id) {


        return true;
    }

}
