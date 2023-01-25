<?php
// items
class productsControllers extends Controller{


    private $itemsModel;

    public function __construct()
    {
        $this->itemsModel = $this->model('products');
    }
 
    public function add_products()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
            $_POST = filter_input_array(INPUT_POST);

            echo '<pre>';
            var_dump($_POST);
            echo '</pre>';
            exit;

            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $picture = $_POST['picture'];
            $quantity = $_POST['quantity'];

            $this->itemsModel->add_products($name, $description, $price, $picture,$quantity);
            header('location:' . URLROOT . '/productsControllers/dashboard');
        }else{
            $this->view('add_products');
        }
    }

    


    public function dashboard()
    {
        $products = $this->itemsModel->get_products();

        if ($products) {
            $data = [
                'products' => $products
            ];
            $this->view('dashboard', $data);
        } else {
            echo ('product not found');
        }
    }

    public function about()
    {
        $this->view('about');
    }


    public function updat_products($id)
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $picture = $_POST['picture'];
        $quantity = $_POST['quantity'];
        $id = $_POST['id'];
        
    }

  

    public function delete_products($id)
    {
        $this->itemsModel->delete_products($id);

        $products = $this->itemsModel->get_products();
        $data = [
            'products' => $products
        ];
        
        $this->view('dashboard', $data);
    }

}
