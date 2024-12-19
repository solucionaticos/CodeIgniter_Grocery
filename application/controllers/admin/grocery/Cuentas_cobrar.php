<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Cuentas_cobrar
 * @version: 1.0
 * @fecha: 2019-12-17 07:37:39 
 * */

class Cuentas_cobrar extends MY_Controller {

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        //$this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("cuentas_cobrar"); // Tabla del Crud
        //-- Lista --------
        $crud->columns("cliente_id","cuenta_id","monto","fecha_caducidad","pagado");
        //-- Nuevo --------
        $crud->add_fields("cliente_id","cuenta_id","monto","fecha_caducidad","pagado");
        //-- Editar --------
        $crud->edit_fields("cliente_id","cuenta_id","monto","fecha_caducidad","pagado");
        //-- Etiquetas --------
        $crud->display_as("cliente_id","Cliente Id");
        $crud->display_as("cuenta_id","Cuenta Id");
        $crud->display_as("monto","Monto");
        $crud->display_as("fecha_caducidad","Fecha Caducidad");
        $crud->display_as("pagado","Pagado");
        //-- Tipos de Campos --------
        //$crud->field_type("cliente_id", "numeric");
        //$crud->field_type("cuenta_id", "numeric");
        $crud->field_type("monto", "numeric");
        $crud->field_type("fecha_caducidad", "datetime");
        $crud->field_type("pagado", "numeric");
        //-- Relaciones 1-N --------
        $crud->set_relation("cliente_id", "clientes","id");
        $crud->set_relation("cuenta_id", "cuentas","id");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "cuentas_cobrar_before_insert"));
        $crud->callback_before_update(array($this, "cuentas_cobrar_before_update"));
        $crud->callback_before_delete(array($this, "cuentas_cobrar_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "cuentas_cobrar_after_insert"));
        $crud->callback_after_update(array($this, "cuentas_cobrar_after_update"));
        $crud->callback_after_delete(array($this, "cuentas_cobrar_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        $this->admin_design->crudShow($crudTabla, "Cuentas_cobrar"); // Presentacion del Crud
    }

    //-- Antes de Insertar --------
    public function cuentas_cobrar_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function cuentas_cobrar_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function cuentas_cobrar_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function cuentas_cobrar_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function cuentas_cobrar_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function cuentas_cobrar_after_delete($id) {


        return true;
    }

}
