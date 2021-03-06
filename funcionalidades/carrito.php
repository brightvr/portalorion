<?php

class Cart{

    public $id_user;
    public $id_products;
    public $conexion;


    public function __construct($id_user,$id_products,$conexion)
    {
        $this->user = $id_user;
        $this->products = $id_products;
        $this->conect = $conexion;
        
    }


    public function NewCart(){

        $insert = "insert into carrito values(null,".$this->user.")";

        $query = mysqli_query($this->conect,$insert);

        if($query){

            $response = true;

        }else{

            $response = false;

        }

        return $response;
    }


    public function GetIdCart(){

        $select = "select id_carrito from carrito where id_usuario=".$this->user."";

        $response = null;

        $query = mysqli_query($this->conect,$select);

        while($res=mysqli_fetch_assoc($query)){

            $response[]=$res;
        }

        if($response===null){

            $response="error en la consulta : - ".$select.' -';
        
        }


        return $response;

    }


    public function AddProductsArray($idCart){

        $response=[];

        for($i = 0;$i<count($this->products);$i++){

            $insert = "insert into carrito_producto values(null,".$idCart.",".$this->products[$i].")";

            $query = mysqli_query($this->conect,$insert);

            if($query){

                array_push($response,'producto insertado correctamente: id_producto = '.$this->products[$i]);
            
            }else{

                array_push($response,'error al insertar producto: id_producto = '.$this->products[$i]);
            }
        }

        return $response;
    }

    public function AddProduct($idCart){

        $response=[];

  

            $insert = "insert into carrito_producto values(null,".$idCart.",".$this->products.")";

            $query = mysqli_query($this->conect,$insert);

            if($query){

                array_push($response,'producto insertado correctamente: id_producto = '.$this->products);
            
            }else{

                array_push($response,'error al insertar producto: id_producto = '.$this->products);
                array_push($response,$insert);
            }
    

        return $response;
    }
}

?>