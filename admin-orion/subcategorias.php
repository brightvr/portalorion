<?php

require_once 'crud/conexion.php';
session_start();

$consulta="select c.nombre AS 'Categoria', c.id_categoria  AS 'Id Categoria', s.nombre AS 'Subcategoria', s.id_subcategoria AS 'Id subcategoria' from categorias c, subcategoria s, categorias_subcategorias x where c.id_categoria=x.id_categoria and s.id_subcategoria=x.id_subcategoria";

//var_dump($consulta);

$query=mysqli_query($miconexion->Conectando(),$consulta);


while ($response = mysqli_fetch_assoc($query)) {
    
    $data[]=$response;
}

//var_dump($data);



$consulta2="select nombre from categorias";

//var_dump($consulta2);

$query2=mysqli_query($miconexion->Conectando(),$consulta2);


while ($response = mysqli_fetch_assoc($query2)) {
    
    $data2[]=$response;
}

//var_dump($data2);




for ($i=0; $i < count($data) ; $i++) { 
  
    for($f=0;$f<count($data2);$f++){

        if($data[$i]['Categoria']===$data2[$f]['nombre']){

            $allCategory[$data[$i]['Categoria']][]=["subcategoria"=>$data[$i]['Subcategoria'],"id_subcategoria"=>$data[$i]['Id subcategoria']];
            
        }

    }


    
}

//var_dump($allCategory);



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subcategorias</title>

    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/icons/css/all.css">


</head>
<body>

<br>
<div class="container">

    <a href="inventario.php" class="btn btn-block btn-success">REGRESAR</a>

</div>
<br>
<div class="container">

    <div  class="btn btn-block btn-dark update">ACTUALIZAR</div>

</div>
<br>
<hr>
<br>

<div class="d-flex">


<div style="width: 50%;" class="container-category bg-warning">

    <?php

    //var_dump($allCategory);

    foreach ($allCategory as $key => $value) {
        
       echo '<hr><div class="p-2">
       
        <h2>'.$key.'</h2>
        <br><br>
       ';


        for($i=0;$i<count($allCategory[$key]);$i++){

            echo '<label> 
            <input type="checkbox" onclick="AddId(this)" name="id_subcategoria" value="'.$allCategory[$key][$i]['id_subcategoria'].'"> '.$allCategory[$key][$i]['subcategoria'].'</label>';
            echo '<br>';

            

        }
        
            
        echo '<br><br></div>';

       

    }

    ?>

</div>


<div style="width: 50%;" class="container-products bg-danger p-3" >



<?php

$consulta3="select id_producto, nombre, img from productos";

$query3=mysqli_query($miconexion->Conectando(),$consulta3);

while ($res=mysqli_fetch_assoc($query3)) {
    
    $productos[]=$res;
}

//var_dump($productos);

for($f=0;$f<count($productos);$f++){

    echo '
    <br>
    <div class="card" style="width: 18rem;">
  <img src="../'.$productos[$f]['img'].'" class="card-img-top" alt="...">
  <div class="card-body">
    
  <label> <input onclick="IdProduct(this)" type="checkbox" name="id_producto" value="'.$productos[$f]['id_producto'].'"> '.$productos[$f]['nombre'].'  </label>
    

  </div>
</div>
<br>
    
    
    ';
}

?>
</div>

</div>
    


    <script src="librerias/jquery/jquery-3.5.1.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="librerias/icons/js/all.js"></script>
    <script>

            let subcategorias=[];
            let Productos=[];

        const AddId=(checkbox)=>{

            if(checkbox.checked){


                //console.log('añadir: ',checkbox.value);

                subcategorias.push(checkbox.value);

            }else{

                //console.log(checkbox);
                subcategorias.splice(subcategorias.indexOf(checkbox.value),1)
            }

            //console.log(subcategorias);
        }

        const IdProduct=(checkbox)=>{

            if(checkbox.checked){


                //console.log('añadir: ',checkbox.value);

                Productos.push(checkbox.value);

            }else{

                //console.log(checkbox);
                Productos.splice(Productos.indexOf(checkbox.value),1)
            }

            console.log(Productos);
        }


        $('.update').on('click',function(){

            if(subcategorias.length>1 || subcategorias.length===0 || Productos.length===0){

                alert('Solo puedes escoger de a una categoria ni mas ni menos, tambien debes escoger uno o mas productos');
                
                debugger;
            }

            for(let i=0;i<Productos.length;i++){


            const Data=new FormData();

            Data.append('subcategorias',subcategorias[0]);
            Data.append('productos',Productos[i]);

            

            fetch('../api/interfaces/subcategorias-producto.php',{

                method: 'POST',
                body: Data
            })
            .then(response=>response.json())
            .then(response=>{

                console.log(response);
            })



            }

           

        });

    </script>


</body>
</html>