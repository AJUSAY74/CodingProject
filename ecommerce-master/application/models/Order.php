<?php
class Order extends CI_Model{
    public function get_orders(){
        $query = "SELECT shippings.id, billings.name, shippings.created_at, billings.address, shippings.shipping_total, shippings.status FROM shippings JOIN billings ON shippings.billings_id = billings.id ORDER BY shippings.id DESC";
        return $this->db->query($query)->result_array();
    }
    public function get_orders_by_status($status){
        $query = "SELECT shippings.id, billings.name, shippings.created_at, billings.address, shippings.shipping_total, shippings.status FROM shippings JOIN billings ON shippings.billings_id = billings.id WHERE status = ? ORDER BY shippings.id DESC";
        return $this->db->query($query, array($status))->result_array();
    }
    public function get_order_by_id($id){
        $query = "SELECT shippings.same_as_billing, shippings.id AS order_id, shippings.name AS shipping_name, shippings.address AS shipping_address, shippings.city AS shipping_city, shippings.state AS shipping_state, shippings.zip AS shipping_zip, billings.name as billings_name, billings.address AS billing_address, billings.city AS billing_city, billings.state AS billing_state, billings.zip AS billing_zip, products.id AS product_id, products.item_name, products.prices, orders.quantities_sold, orders.total FROM products JOIN orders ON orders.products_id = products.id JOIN shippings ON orders.shippings_id = shippings.id JOIN billings ON shippings.billings_id = billings.id WHERE shippings.id = ?";
        return $this->db->query($query, array($id))->row_array();
    }
    public function add_billing($address, $total, $name, $city, $state, $zip){
        $query = "INSERT INTO billings(address, total, name, city, state, zip) VALUES (?,?,?,?,?,?)";
        return $this->db->query($query, array($address, $total, $name, $city, $state, $zip));
    }
    public function add_shipping($address, $billing_id, $shipping_total, $same, $name, $city, $state, $zip){
        $query = "INSERT INTO shippings(address, billings_id, shipping_total, same_as_billing, status, name, created_at, city, state, zip) VALUES (?,?,?,?,'order in process', ?, NOW(), ?,?,?)";
        return $this->db->query($address, $billing_id, $shipping_total, $same, $name, $city, $state, $zip);
    }
    public function update_order($status, $id){
        $query = "UPDATE shippings SET status = ? WHERE id = ?";
        return $this->db->query($query, array($status, $id));
    }
    public function update_inv($id){
        $query = "UPDATE inventories SET inventory_qty = ?, qty_sold = ? WHERE products_id = ?";
        return $this->db->query($query, array($id));
    }
 ?>
