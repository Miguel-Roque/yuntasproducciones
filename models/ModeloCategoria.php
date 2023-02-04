<?php

require_once 'ModeloBase.php';


class ModeloCategoria extends ModeloBase {
  
	public function __construct() {
		parent::__construct();
	}

  public function getProductos() {
    $query = $this->db->prepare('SELECT * FROM productos');
    $query->execute();
    $resultSet = $query->get_result();
    $data = $resultSet->fetch_all(MYSQLI_ASSOC);
    return $data;
  
  }

  // public function getProducto($id) {
  //   $query = $this->db->prepare('SELECT * FROM productos WHERE name = ?');
  //   $query->execute([$id]);
  //   $resultSet = $query->get_result();
  //   $data = $resultSet->fetch_assoc();
  //   return $data;
  // } 
  public function getProductoBySlug($slug) {
    // consulta para obtener un producto por su slug
    $sql = "SELECT * FROM productos WHERE slug = ?";
    $stmt = $this->db->prepare($sql);
    $stmt->execute([$slug]);
    $resultSet = $stmt->get_result();
    $data = $resultSet->fetch_assoc();
    return $data;
}
  
}
