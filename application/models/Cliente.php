<?php
   class Cliente extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("cliente",$datos);
     }
     //Funcion que consulta todos los clientes de la bdd
     public function obtenerTodos(){
        $clientes=$this->db->get("cliente");
        if ($clientes->num_rows()>0) {
          return $clientes;
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un cliente se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_cli",$id);
        return $this->db->delete("cliente");
     }
     //Consultando el cliente por su id
     public function obtenerPorId($id){
        $this->db->where("id_cli",$id);
        $cliente=$this->db->get("cliente");
        if($cliente->num_rows()>0){
          return $cliente->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de clientes
     public function actualizar($id,$datos){
       $this->db->where("id_cli",$id);
       return $this->db->update("cliente",$datos);
     }

   }//Cierre de la clase (No borrar)














//
