<?php
class products
{
    private $db;

    public function __construct()
    {
        $this->db = new database;
    }

    public function select_products()
    {
        $this->db->query('SELECT * FROM products');
        $this->db->execute();
        return $this->db->fetchAll();
    }



    public function get_products()
    {
        $this->db->query("SELECT * FROM products");
        $this->db->execute();
        return $this->db->fetchAll();
    }

    public function add_products($name, $description, $price, $picture, $quantity)
    {
        $this->db->query(
            'INSERT INTO products ( name, description,  price, picture, quantity) VALUES (:name,:description,:price,:picture,:quantity)'
        );

        
        $this->db->bind(':name', $name);
        $this->db->bind(':description', $description);
        $this->db->bind(':price', $price);
        $this->db->bind(':picture', $picture);
        $this->db->bind(':quantity', $quantity);
        $this->db->execute();
        if ($this->db->execute())
            return TRUE;
        else
            return FALSE;
    }

    public function update_products($name, $description, $price, $picture, $quantity, $id)
    {
        $sql = "UPDATE  products SET name = ?,description = ?, price = ?, picture = ?,quantity = ?,id = ? WHERE id = ?";
    }


    public function delete_products($id)
    {

        $this->db->query("DELETE FROM products WHERE id = :id");
        $this->db->bind(':id', $id);
        $this->db->execute();
    }
}
