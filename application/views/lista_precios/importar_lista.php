<?php ini_set('MAX_EXECUTION_TIME', -1);

$registros_importados = 0;

if (isset($_GET['lista'])) {

    $id_lista = $_GET['lista'];

    $query = "SELECT proveedor_id, p.`nombre_proveedor` , l.`nombre_archivo`, l.`id`
        FROM listas l
        INNER JOIN proveedores p ON p.`id` =  l.`proveedor_id`
        WHERE l.`id` = $id_lista";
    $result = mysql_query($query);     
    
    $row = mysql_fetch_array($result);         
    $archivo = $row['nombre_archivo'];
    $proveedor_id = $row['proveedor_id'];
    
    /*
        Lista VW
    */
    if($proveedor_id == 1) {
        //truncate
        $sql_truncate = "truncate table lista_vw";
        $res = mysql_query($sql_truncate);

        //Load Data
        $load_data = "LOAD DATA LOCAL INFILE '$archivo' 
                        INTO TABLE lista_vw (@row) 
                        SET 
                        campo1 = TRIM(SUBSTR(@row,1,4)),
                        campo2 = TRIM(SUBSTR(@row,5,1)),
                        original = TRIM(SUBSTR(@row,6,20)), 
                        precio_publico = TRIM(SUBSTR(@row,26,11)),
                        campo5 = TRIM(SUBSTR(@row,37,4)), 
                        ue = TRIM(SUBSTR(@row,41,7)), 
                        descripcion = TRIM(SUBSTR(@row,48,25)),
                        reemplazo = TRIM(SUBSTR(@row,85,21)),
                        cod_dto = TRIM(SUBSTR(@row,133,1)),
                        precio_iva = TRIM(SUBSTR(@row,142,11))";
        $res = mysql_query($load_data);

        //Agrega columna ID
        $sql_columna_id = "ALTER TABLE lista_vw ADD id INT(11)";//" PRIMARY KEY AUTO_INCREMENT";
        $res_ci = mysql_query($sql_columna_id);

        //Agrega Clave Primaria
        $sql_pk = "ALTER TABLE lista_vw ADD PRIMARY KEY (id)";//" ";
        $res_pk = mysql_query($sql_pk);

        //cantidad de registros
        $sql_cant = "select count(*) as registros from lista_vw";    
        $res = mysql_query($sql_cant);
        $row = mysql_fetch_array($res);
        $registros_importados = $row['registros'];
    }

    /*
        Lista FENIX
    */
    if($proveedor_id == 5) {
        //truncate
        $sql_truncate = "truncate table lista_fenix";
        $res = mysql_query($sql_truncate);

        //Load Data
        $load_data = "LOAD DATA LOCAL INFILE '$archivo' 
                      INTO TABLE lista_fenix  
                      FIELDS TERMINATED BY ';'";
        $res = mysql_query($load_data);

        //Actualiza los articulos
        
        $sql_actualiza = "select codigo_fenix, codigo_oem, descripcion, stock, ubicacion, proveedor, reemplazo, marca, precio 
                          from lista_fenix";    
        $res = mysql_query($sql_actualiza);
        while($row = mysql_fetch_array($res)){
            
            $codigo_fenix = $row['codigo_fenix'];
            $codigo_oem = $row['codigo_oem'];
            $descripcion = $row['descripcion'];
            $descripcion = str_replace("'", "", $descripcion);
            $stock = $row['stock'];
            $ubicacion = $row['ubicacion'];
            $proveedor = $row['proveedor'];
            $reemplazo = $row['reemplazo'];
            $marca = $row['marca'];
            $precio = str_replace("\$", "", $row['precio']);

            $sql_art = "select * from articulos WHERE codigo_fenix = '$codigo_fenix'";
            $res_art = mysql_query($sql_art);
            $c = 0;
            while($row_art = mysql_fetch_array($res_art)) {
                $c++;    
                $update_sql = "UPDATE articulos SET codigo_oem = '$codigo_oem',"
                        . " descripcion = '$descripcion', precio_lista = '$precio',"
                        . " marca = '$marca', proveedor_testigo = '$proveedor' "
                        . " WHERE codigo_fenix = '$codigo_fenix'";
                $res_update = mysql_query($update_sql);
                if(!$res_update){
                    die('Error en:' . $update_sql);
                }
            }

            if($c == 0) {
                 $insert_sql = "INSERT INTO articulos(codigo_fenix, codigo_oem, descripcion, precio_lista) 
                                            values('$codigo_fenix', '$codigo_oem', '$descripcion', '$precio')";   
                 $res_insert = mysql_query($insert_sql);        
                 if(!$res_update){
                    die('Error en:' . $insert_sql);
                 }
            }
            
            //Actualiza stock y ubicacion
            /*
            $sql_stk = "SELECT articulo_fenix FROM stock WHERE articulo_fenix = '$codigo_fenix'";
            $res_stk = mysql_query($sql_stk);
            $c_stk = 0;
            while($row_stk = mysql_fetch_array($res_stk)) {
                $c_stk++;    
                $update_stk = "UPDATE stock SET cantidad = '$stock', ubicacion = '$ubicacion'
                                WHERE articulo_fenix = '$codigo_fenix'";
                $res_update_stk = mysql_query($update_stk); 
            }

            if($c_stk == 0) {
                 $insert_stk = "INSERT INTO stock(articulo_fenix, cantidad, sucursal_id, ubicacion) 
                                            values('$codigo_fenix', '$stock', '1', '$ubicacion')";   
                 $res_insert = mysql_query($insert_stk);        
            }
            */
        }

        //cantidad de registros
        $sql_cant = "select count(*) as registros from lista_fenix";    
        $res = mysql_query($sql_cant);
        $row = mysql_fetch_array($res);
        $registros_importados = $row['registros'];
    }

    //Update lista
    $sql_update_fecha = "UPDATE lista SET fecha_actualizacion = now() where id = $id_lista";
    $res = mysql_query($sql_update_fecha);

}
?>

<?php $this->load->view('administrador/dashboard/header'); ?>
<!-- BEGIN PAGE -->
<div id="container" class="row-fluid">
    <!-- BEGIN SIDEBAR -->
    <?php $this->load->view('administrador/dashboard/sidebar'); ?>
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE -->  
    <div id="main-content">
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <h3 class="page-title">
                        <button class="btn btn-danger" onclick="window.history.back()"><i class="icon-arrow-left"></i></button>
                        Importar listas de precio
                    </h3>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>
            <?php
               $query = "SELECT proveedor_id, p.`nombre_proveedor` , l.`nombre_archivo`, l.`id`
                    FROM listas l
                    INNER JOIN proveedores p ON p.`id` =  l.`proveedor_id`";
               $result = mysql_query($query);     
            ?>
            <div>
                <form method="get" action="" id="form-importar">
                    <label>Lista<label>
                    <select name="lista">
                        <?php 
                         while($row = mysql_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['nombre_proveedor'];?></option>
                            <?php    
                         }  
                        ?>                    
                    </select>
                    <br/>
                    <button type="submit" id="btn-importar" class="btn btn-primay">Importar</button>
                </form>  
            </div>
            <br/>
            <?php

            if(isset($_GET['lista'])) {
                echo 'Se importaron ' . number_format($registros_importados,0,'','.') . ' registros';
            }

            ?>    
            <script src="//oss.maxcdn.com/jquery/1.8.3/jquery-1.8.3.min.js"></script>
            
            <script src="<?= base_url() ?>assets/js/jquery.blockUI.js"></script>
            <script src="<?= base_url() ?>assets/js/ajaxupload.3.5.js"></script>
            <script src="<?= base_url() ?>assets/js/application.js"></script>

        </div>
    </div>
</div>
<script>
    $('#btn-importar').click(function(){
        $(this).text("Importando...");
        $(this).attr('disabled',true);
        $('#form-importar').submit();
    });
</script>
 <!-- END PAGE -->
 <?php $this->load->view('administrador/dashboard/footer'); ?>

