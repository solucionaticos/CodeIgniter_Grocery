<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Faq
 * @version: 1.0
 * @fecha: 2019-12-17 07:37:39 
 * */

class Faq extends MY_Controller {

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        //$this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("faq"); // Tabla del Crud
        //-- Lista --------
        $crud->columns("categoria_id","pregunta","respuesta");
        //-- Nuevo --------
        $crud->add_fields("categoria_id","pregunta","respuesta");
        //-- Editar --------
        $crud->edit_fields("categoria_id","pregunta","respuesta");
        //-- Etiquetas --------
        $crud->display_as("categoria_id","Categoria Id");
        $crud->display_as("pregunta","Pregunta");
        $crud->display_as("respuesta","Respuesta");
        //-- Tipos de Campos --------
        //$crud->field_type("categoria_id", "numeric");
        $crud->field_type("pregunta", "string");
        $crud->field_type("respuesta", "text");
        //-- Relaciones 1-N --------
        $crud->set_relation("categoria_id", "faq_categorias","id");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "faq_before_insert"));
        $crud->callback_before_update(array($this, "faq_before_update"));
        $crud->callback_before_delete(array($this, "faq_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "faq_after_insert"));
        $crud->callback_after_update(array($this, "faq_after_update"));
        $crud->callback_after_delete(array($this, "faq_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        $this->admin_design->crudShow($crudTabla, "Faq"); // Presentacion del Crud
    }

    //-- Antes de Insertar --------
    public function faq_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function faq_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function faq_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function faq_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function faq_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function faq_after_delete($id) {


        return true;
    }

}
