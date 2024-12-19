<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Cuentas
 * @version: 1.0
 * @fecha: 2019-12-17 07:37:39 
 * */

class Cuentas extends MY_Controller {

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        //$this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("cuentas"); // Tabla del Crud
        //-- Lista --------
        $crud->columns("url","fecha_creacion","num_empleados","empresa","industria","activo");
        //-- Nuevo --------
        $crud->add_fields("url","fecha_creacion","num_empleados","empresa","industria","activo");
        //-- Editar --------
        $crud->edit_fields("url","fecha_creacion","num_empleados","empresa","industria","activo");
        //-- Etiquetas --------
        $crud->display_as("url","Url");
        $crud->display_as("fecha_creacion","Fecha Creacion");
        $crud->display_as("num_empleados","Num Empleados");
        $crud->display_as("empresa","Empresa");
        $crud->display_as("industria","Industria");
        $crud->display_as("activo","Activo");
        //-- Tipos de Campos --------
        $crud->field_type("url", "string");
        $crud->field_type("fecha_creacion", "datetime");
        $crud->field_type("num_empleados", "numeric");
        $crud->field_type("empresa", "string");
        $crud->field_type("industria", "numeric");
        $crud->field_type("activo", "numeric");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "cuentas_before_insert"));
        $crud->callback_before_update(array($this, "cuentas_before_update"));
        $crud->callback_before_delete(array($this, "cuentas_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "cuentas_after_insert"));
        $crud->callback_after_update(array($this, "cuentas_after_update"));
        $crud->callback_after_delete(array($this, "cuentas_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        $this->admin_design->crudShow($crudTabla, "Cuentas"); // Presentacion del Crud
    }

    //-- Antes de Insertar --------
    public function cuentas_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function cuentas_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function cuentas_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function cuentas_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function cuentas_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function cuentas_after_delete($id) {


        return true;
    }

}
