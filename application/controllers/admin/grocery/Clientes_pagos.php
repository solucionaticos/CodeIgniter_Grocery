<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Clientes_pagos
 * @version: 1.0
 * @fecha: 2019-12-17 07:37:39 
 * */

class Clientes_pagos extends MY_Controller {

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        //$this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("clientes_pagos"); // Tabla del Crud
        //-- Lista --------
        $crud->columns("cliente_id","fecha_pago","monto","meses","metodo_pago_id");
        //-- Nuevo --------
        $crud->add_fields("cliente_id","fecha_pago","monto","meses","metodo_pago_id");
        //-- Editar --------
        $crud->edit_fields("cliente_id","fecha_pago","monto","meses","metodo_pago_id");
        //-- Etiquetas --------
        $crud->display_as("cliente_id","Cliente Id");
        $crud->display_as("fecha_pago","Fecha Pago");
        $crud->display_as("monto","Monto");
        $crud->display_as("meses","Meses");
        $crud->display_as("metodo_pago_id","Metodo Pago Id");
        //-- Tipos de Campos --------
        //$crud->field_type("cliente_id", "numeric");
        $crud->field_type("fecha_pago", "datetime");
        $crud->field_type("monto", "numeric");
        $crud->field_type("meses", "numeric");
        $crud->field_type("metodo_pago_id", "numeric");
        //-- Relaciones 1-N --------
        $crud->set_relation("cliente_id", "clientes","id");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "clientes_pagos_before_insert"));
        $crud->callback_before_update(array($this, "clientes_pagos_before_update"));
        $crud->callback_before_delete(array($this, "clientes_pagos_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "clientes_pagos_after_insert"));
        $crud->callback_after_update(array($this, "clientes_pagos_after_update"));
        $crud->callback_after_delete(array($this, "clientes_pagos_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        $this->admin_design->crudShow($crudTabla, "Clientes_pagos"); // Presentacion del Crud
    }

    //-- Antes de Insertar --------
    public function clientes_pagos_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function clientes_pagos_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function clientes_pagos_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function clientes_pagos_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function clientes_pagos_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function clientes_pagos_after_delete($id) {


        return true;
    }

}
