<?php

    if(isset($_POST['envio'])){ 

        require_once '../crud/conexion.php';

        $consulta='select * from  eviosContraEntrega  where nombre_lugar="'.$_POST['envio'].'";';

        $envios=null;
        $query =mysqli_query($miconexion->Conectando(),$consulta);

        while($res= mysqli_fetch_assoc($query)){

        $envios[]=$res;

        }

        if($envios===null){

          
        $consulta2='select * from  envios  where nombre_lugar="'.$_POST['envio'].'";';

        $envios2=null;
        $query2 =mysqli_query($miconexion->Conectando(),$consulta2);

        while($res= mysqli_fetch_assoc($query2)){

        $envios2[]=$res;

        }

        if($envios2===null){

            echo json_encode($consulta2.'  No se encontraron resultados para '.$_POST['envio']);
            

        }else{

            array_push($envios2,'<i class="fas fa-award"></i>  Envío Express : </span>');
            array_push($envios2,' Pagas online usando mercadopago');
            array_push($envios2,' Te llega de 1 a 5 días aprox...');
            array_push($envios2,' Pagos en efectivo habilitados');
            array_push($envios2, $_POST['envio']);
            
            echo json_encode($envios2);
        }
        


            

        }else{

            array_push($envios,'<i class="fas fa-trophy"></i>  Envío Premium : </span>');
            array_push($envios,' Pagas cuando recibes el producto');
            array_push($envios,' Te llega en menos de 24 horas');
            array_push($envios,' Tambien puedes pagar online');
            array_push($envios2, $_POST['envio']);
            
            echo json_encode($envios);
        }
        
    }else{

        echo json_encode('No se estas enviando nada por post');

    }

 
?>