<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Faq_categorias
 * @version: 1.0
 * @fecha: 2019-12-17 07:37:39 
 * */

class Faq_categorias extends MY_Controller {

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        //$this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("faq_categorias"); // Tabla del Crud
        //-- Lista --------
        $crud->columns("nombre");
        //-- Nuevo --------
        $crud->add_fields("nombre");
        //-- Editar --------
        $crud->edit_fields("nombre");
        //-- Etiquetas --------
        $crud->display_as("nombre","Nombre");
        //-- Tipos de Campos --------
        $crud->field_type("nombre", "string");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "faq_categorias_before_insert"));
        $crud->callback_before_update(array($this, "faq_categorias_before_update"));
        $crud->callback_before_delete(array($this, "faq_categorias_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "faq_categorias_after_insert"));
        $crud->callback_after_update(array($this, "faq_categorias_after_update"));
        $crud->callback_after_delete(array($this, "faq_categorias_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        $this->admin_design->crudShow($crudTabla, "Faq_categorias"); // Presentacion del Crud
    }

    //-- Antes de Insertar --------
    public function faq_categorias_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function faq_categorias_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function faq_categorias_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function faq_categorias_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function faq_categorias_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function faq_categorias_after_delete($id) {


        return true;
    }

}
