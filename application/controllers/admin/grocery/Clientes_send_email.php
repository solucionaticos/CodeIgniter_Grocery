<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Clientes_send_email
 * @version: 1.0
 * @fecha: 2019-12-17 07:37:39 
 * */

class Clientes_send_email extends MY_Controller {

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        //$this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("clientes_send_email"); // Tabla del Crud
        //-- Lista --------
        $crud->columns("cliente_id","fecha_envio","confirmado");
        //-- Nuevo --------
        $crud->add_fields("cliente_id","fecha_envio","confirmado");
        //-- Editar --------
        $crud->edit_fields("cliente_id","fecha_envio","confirmado");
        //-- Etiquetas --------
        $crud->display_as("cliente_id","Cliente Id");
        $crud->display_as("fecha_envio","Fecha Envio");
        $crud->display_as("confirmado","Confirmado");
        //-- Tipos de Campos --------
        //$crud->field_type("cliente_id", "numeric");
        $crud->field_type("fecha_envio", "datetime");
        $crud->field_type("confirmado", "numeric");
        //-- Relaciones 1-N --------
        $crud->set_relation("cliente_id", "clientes","id");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "clientes_send_email_before_insert"));
        $crud->callback_before_update(array($this, "clientes_send_email_before_update"));
        $crud->callback_before_delete(array($this, "clientes_send_email_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "clientes_send_email_after_insert"));
        $crud->callback_after_update(array($this, "clientes_send_email_after_update"));
        $crud->callback_after_delete(array($this, "clientes_send_email_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        $this->admin_design->crudShow($crudTabla, "Clientes_send_email"); // Presentacion del Crud
    }

    //-- Antes de Insertar --------
    public function clientes_send_email_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function clientes_send_email_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function clientes_send_email_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function clientes_send_email_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function clientes_send_email_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function clientes_send_email_after_delete($id) {


        return true;
    }

}
