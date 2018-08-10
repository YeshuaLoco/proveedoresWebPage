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
                         PRO_NOMBRE_CARPETA,
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
                         PRO_DIRECCION,
                         PRO_COLOR_FONDO,
                         PRO_COLOR_LETRAS
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
                         PP.PP_IMAGEN AS PP_IMAGEN,
                         PP.PP_FECHA_VENCIMIENTO AS PP_FECHA_VENCIMIENTO,
                         P.PRO_EMAIL AS PRO_EMAIL 
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

    public function getProveedoresPorCategoria($catUid = ''){
        include  'connection/connection.php';
        $where = ' ';
        if ($catUid == '') {
            $where = " ";
        } else {
            $where = "AND PC.CAT_UID = '$catUid' ";
        }

        $query = "SELECT P.PRO_UID AS PRO_UID,
                         P.PRO_NOMBRE AS PRO_NOMBRE 
                  FROM proveedores_categorias PC
                  INNER JOIN categorias C
                      ON C.CAT_UID = PC.CAT_UID
                  INNER JOIN proveedores P
                      ON P.PRO_UID = PC.PRO_UID
                  WHERE PC.PC_ESTADO = 'ACTIVO'
                  AND C.CAT_ESTADO = 'ACTIVO'
                  AND P.PRO_ESTADO = 'ACTIVO'" . $where;        
        $result = $con->query($query);
        $array = array();
        $array = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_close($con);
        return $array;
    }

    public function getPromociones($proUid = ''){
        include  'connection/connection.php';
        $where = ' ';
        if ($proUid == '') {
            $where = " ";
        } else {
            $where = "AND PP.PRO_UID = '$proUid' ";
        }
        $query = "SELECT PP.PP_IMAGEN AS PP_IMAGEN,
                         PP.PP_TITULO AS PP_TITULO,
                         PP.PP_DESCRIPCION AS PP_DESCRIPCION,
                         P.PRO_WHATSAPP AS PRO_WHATSAPP,
                         P.PRO_MESSENGER AS PRO_MESSENGER
                  FROM proveedores_promociones PP
                  INNER JOIN proveedores P ON P.PRO_UID = PP.PRO_UID
                  WHERE PP.PP_ESTADO = 'ACTIVO'" . $where;
        $result = $con->query($query);
        $array = array();
        $array = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_close($con);
        return $array;
    }

    public function getIconosPorProveedor($proUid){
        include  'connection/connection.php';
        $query = "SELECT I.ICO_CLASS
                  FROM proveedores_iconos PI
                  INNER JOIN iconos I ON I.ICO_UID = PI.ICO_UID 
                  WHERE PRO_UID = $proUid
                  AND PI.ICO_ESTADO = 'ACTIVO'";
        $result = $con->query($query);
        $array = array();
        $array = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_close($con);
        return $array;
    }

    public function getBusqueda($palabraClave = '', $ciudad = ''){
        include  'connection/connection.php';
        if ($ciudad == '') {
            $whereCiudadProveedor = " ";
            $whereCiudadPromocion = " ";
        } else {
            $whereCiudadProveedor = " AND PRO_DEPTO_" . $ciudad . " = 'YES' ";
            $whereCiudadPromocion = " AND P.PRO_DEPTO_" . $ciudad . " = 'YES' ";
        }
        $query = "SELECT PRO_UID,
                         PRO_NOMBRE,
                         PRO_DESCRIPCION AS DESCRIPCION,
                         '' AS ID_PROMOCION,       
                         PRO_NOMBRE_CARPETA,
                         PRO_IMAGEN_LOGO AS IMAGEN_URL,
                         '' AS PRECIO_ANTIGUO,
                         '' AS PRECIO_NUEVO,
                         '' AS VALOR_DESCUENTO,
                         PRO_WHATSAPP,
                         PRO_MESSENGER,
                         PRO_RANKING,
                         'PROVEEDOR' AS TIPO,
                         PRO_DIRECCION
                  FROM proveedores
                  WHERE (PRO_NOMBRE LIKE '%$palabraClave%'
                  OR PRO_DESCRIPCION LIKE '%$palabraClave%'
                  OR PRO_FILTRO LIKE '%$palabraClave%'                  
                  )
                  " . $whereCiudadProveedor . "                  
                  AND PRO_ESTADO = 'ACTIVO'
                  UNION 
                  SELECT P.PRO_UID AS PRO_UID,
                         P.PRO_NOMBRE AS PRO_NOMBRE,
                         P.PRO_DESCRIPCION AS DESCRIPCION,
                         PP.PP_UID AS ID_PROMOCION,
                         '' AS PRO_NOMBRE_CARPETA,
                         PP.PP_IMAGEN AS IMAGEN_URL,
                         PP.PP_PRECIO_ANTIGUO AS PRECIO_ANTIGUO,
                         PP.PP_PRECIO_NUEVO AS PRECIO_NUEVO,
                         PP.PP_VALOR_DESCUENTO AS VALOR_DESCUENTO,
                         '' AS PRO_WHATSAPP,
                         '' AS PRO_MESSENGER,
                         '' AS PRO_RANKING,
                         'PROMOCION' AS TIPO,
                         PRO_DIRECCION       
                  FROM proveedores_promociones PP
                  inner join proveedores P ON P.PRO_UID = PP.PRO_UID
                  WHERE (PP.PP_TITULO LIKE '%$palabraClave%'
                  OR PP.PP_DESCRIPCION LIKE '%$palabraClave%')
                  AND PP.PP_ESTADO = 'ACTIVO'"
                  . $whereCiudadPromocion;       
        $result = $con->query($query);
        $array = array();
        $array = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_close($con);
        return $array;
    }    

    public function getPromocionPorID($promoUid){
        include  'connection/connection.php';
        $query = "SELECT PP.PP_UID AS PROMOCION_UID,
                         P.PRO_UID AS PRO_UID,
                         P.PRO_NOMBRE AS PRO_NOMBRE, 
                         P.PRO_NOMBRE_CARPETA AS PRO_NOMBRE_CARPETA,
                         P.PRO_IMAGEN_LOGO AS PRO_IMAGEN_LOGO, 
                         PP.PP_IMAGEN AS PROMOCION_IMAGEN,
                         PP.PP_TITULO AS PROMOCION_TITULO,
                         PP.PP_DESCRIPCION AS PROMOCION_DESCRIPCION,
                         PP.PP_PRECIO_ANTIGUO AS PROMOCION_PRECIO_ANTIGUO,
                         PP.PP_PRECIO_NUEVO AS PROMOCION_PRECIO_NUEVO,
                         PP.PP_VALOR_DESCUENTO AS PROMOCION_VALOR_DESCUENTO,
                         PP.PP_FECHA_VENCIMIENTO AS PROMOCION_FECHA_VENCIMIENTO,
                         DATE_FORMAT(PP.PP_FECHA_VENCIMIENTO, '%d-%m-%Y') AS PROMOCION_FECHA_VENCIMIENTO_FORMATO,
                         P.PRO_WHATSAPP as PRO_WHATSAPP,
                         P.PRO_MESSENGER as PRO_MESSENGER
                  FROM proveedores_promociones PP
                  INNER JOIN proveedores P
                  ON P.PRO_UID = PP.PRO_UID
                  WHERE PP.PP_UID = $promoUid";
        $result = $con->query($query);
        $array = array();
        $array = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_close($con);
        return $array;
    }



}

?>