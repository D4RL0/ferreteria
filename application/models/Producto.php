<?php
   class Producto extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
       return $this->db->insert('producto',$datos);
     }

     public function obtenerTodas(){
       $this->db->join("categoria",
       "categoria.id_cat=producto.fk_id_cat");
       $productos=$this->db->get("producto");
       if($productos->num_rows()>0){
         return $productos;
       }
       return false;
     }
     public function eliminarPorId($id){
      $this->db->where("id_pro",$id);
      return $this->db->delete("producto");
     }

     public function obtenerPorId($id){
       $this->db->join("producto",
       "producto.id_pro=categoria.fk_id_cat");
       $this->db->where("id_pro",$id);
       $producto=$this->db->get("producto");
       if($producto->num_rows()>0){
         return $producto->row();
       }
       return false;

     }


     public function actualizar($id_pro,$datos){
       $this->db->where("id_pro",$id_pro);
       return $this->db->update('producto',$datos);
     }


   }//Cierre de la clase
