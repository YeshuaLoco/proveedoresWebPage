<?php

class proveedoresClass
{
    public function getCategories(){
        include  'connection/connection.php';
        $query = "SELECT CAT_UID,
                         CAT_NOMBRE,
                         CAT_ESTADO
                  FROM categorias
                  WHERE CAT_ESTADO = 'ACTIVO'";
        $result = $con->query($query);
        $array = array();
        $array = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_close($con);
        return $array;
    }

    public function getProveedores($proUid = ''){
        include  'connection/connection.php';
        $where = ' ';
        if ($proUid == '') {
            $where = " ";
        } else {
            $where = "AND PRO_UID = '$proUid' ";
        }
        $query = "SELECT PRO_UID,
                         PRO_NOMBRE,
                         PRO_DESCRIPCION,
                         PRO_IMAGEN_LOGO,
                         PRO_IMAGEN_PORTADA,
                         PRO_WHATSAPP,
                         PRO_MESSENGER,
                         PRO_EMAIL,
                         PRO_HORARIOS,
                         PRO_GEOLOCALIZACION,
                         PRO_RANKING,
                         PRO_TELEFONOS,
                         PRO_ESTADO
                  FROM proveedores
                  WHERE PRO_ESTADO = 'ACTIVO'" . $where;
        $result = $con->query($query);
        $array = array();
        $array = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_close($con);
        return $array;
    }

    public function getProveedoresCategorias($proUid = ''){
        include  'connection/connection.php';
        $where = ' ';
        if ($proUid == '') {
            $where = " ";
        } else {
            $where = "AND P.PRO_UID = '$proUid' ";
        }

        $query = "SELECT C.CAT_NOMBRE AS CAT_NOMBRE 
                  FROM proveedores P
                  INNER JOIN proveedores_categorias PC
                      ON PC.PRO_UID = P.PRO_UID
                  INNER JOIN categorias C
                      ON C.CAT_UID = PC.CAT_UID                  
                  WHERE PC.PC_ESTADO = 'ACTIVO'" . $where;
        $result = $con->query($query);
        $array = array();
        $array = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_close($con);
        return $array;
    }

    public function getProveedoresGaleria($proUid = ''){
        include  'connection/connection.php';
        $where = ' ';
        if ($proUid == '') {
            $where = " ";
        } else {
            $where = "AND P.PRO_UID = '$proUid' ";
        }

        $query = "SELECT PG.PG_TITULO AS PG_TITULO,
                         PG.PG_DESCRIPCION AS PG_DESCRIPCION,
                         PG.PG_PRECIO AS PG_PRECIO,
                         PG.PG_IMAGEN AS PG_IMAGEN 
                  FROM proveedores P
                  INNER JOIN proveedores_galeria PG
                      ON PG.PRO_UID = P.PRO_UID
                  WHERE PG.PG_ESTADO = 'ACTIVO'" . $where;        
        $result = $con->query($query);
        $array = array();
        $array = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_close($con);
        return $array;
    }

    public function getProveedoresPromociones($proUid = ''){
        include  'connection/connection.php';
        $where = ' ';
        if ($proUid == '') {
            $where = " ";
        } else {
            $where = "AND P.PRO_UID = '$proUid' ";
        }

        $query = "SELECT PP.PP_TITULO AS PP_TITULO,
                         PP.PP_DESCRIPCION AS PP_DESCRIPCION,                         
                         PP.PP_IMAGEN AS PP_IMAGEN 
                  FROM proveedores P
                  INNER JOIN proveedores_promociones PP
                      ON PP.PRO_UID = P.PRO_UID
                  WHERE PP.PP_ESTADO = 'ACTIVO'" . $where;        
        $result = $con->query($query);
        $array = array();
        $array = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_close($con);
        return $array;
    }    

    public function printItem($string)
    {
        return 'Foo: ' . $string . PHP_EOL;
    }
    
    public function printPHP()
    {
        return 'PHP is great.' . PHP_EOL;
    }

    public function obtenerCombos()
    { 	
    	include  'conexion.php';
    	$query = "SELECT PRO_UID,
    	                 PRO_NOMBRE,
    	                 PRO_DESCRIPCION,
    	                 PRO_INGREDIENTES,
    	                 PRO_VENTA,
    	                 PRO_AGRANDADO
    	          FROM productos
    	          WHERE PRO_ESTADO = 'ACTIVO'";
    	$result = $con->query($query);
    	$array = array();
    	$array = mysqli_fetch_all($result,MYSQLI_ASSOC);
    	mysqli_close($con);
    	return $array;
    }

    public function obtenerBebidasCombos($categoria = '')
    { 	
    	include  'conexion.php';
        if ($categoria != '') {
            if ($categoria == 'COMBO') {
                $where = " BSA_CATEGORIA = 'COMBO' OR BSA_CATEGORIA = 'ALCOHOL' ";
            } else {
                $where = " BSA_CATEGORIA = '$categoria' ";
            }
            
        } else {
            $where = " 1 = 1 ";
        }
    	$query = "SELECT BSA_UID, 
    	                 BSA_NOMBRE, 
    	                 BSA_VENTA, 
    	                 BSA_AGRANDADO, 
    	                 BSA_AGRANDADO_VENTA, 
                         BSA_CATEGORIA,
    	                 BSA_ESTADO
                  FROM bebidas
    	          WHERE BSA_ESTADO = 'ACTIVO'
                  AND " . $where;
    	$result = $con->query($query);
    	$array = array();
    	$array = mysqli_fetch_all($result,MYSQLI_ASSOC);
    	mysqli_close($con);
    	return $array;
    }

    public function obtenerSueltos()
    {   
        include  'conexion.php';
        $query = "SELECT SUE_UID,
                         SUE_NOMBRE,
                         SUE_VENTA,
                         SUE_ESTADO
                  FROM sueltos
                  WHERE SUE_ESTADO = 'ACTIVO'";
        $result = $con->query($query);
        $array = array();
        $array = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_close($con);
        return $array;
    }

}

?>