<!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->
          <ul class="sidebar-menu">
              <li class="sub-menu active">
                  <a class="" href="<?php echo site_url('administrador/dashboard') ?>">
                      <i class="icon-dashboard"></i>
                      <span>Tablero</span>
                  </a>
              </li>
              
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>Articulos</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo site_url('administrador/consulta_articulos') ?>">Consulta Articulos</a></li>
                      <li><a class="" href="<?php echo site_url('administrador/abm_articulos') ?>">ABM Articulos</a></li>
                      <li><a class="" href="<?php echo site_url('administrador/abm_rubros') ?>">ABM Rubros</a></li>
                      <li><a class="" href="<?php echo site_url('administrador/stock') ?>">Stock</a></li>                      
                  </ul>
              </li>

              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>Listas de Precio</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo site_url('administrador/abm_proveedores') ?>">ABM Proveedores</a></li>
                      <li><a class="" href="<?php echo site_url('administrador/abm_listas') ?>">ABM Listas</a></li>
                      <li><a class="" href="<?php echo site_url('administrador/importar_listas') ?>">Importar Listas</a></li>
                      <li><a class="" href="<?php echo site_url('administrador/listavw') ?>">Lista VW</a></li>
                      <li><a class="" href="<?php echo site_url('administrador/tabla_dto') ?>">Tabla Dto</a></li>
                  </ul>
              </li>

              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>ABM Auxiliares</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo site_url('administrador/abm_sucursales') ?>">ABM Sucursales</a></li>
                      <li><a class="" href="<?php echo site_url('administrador/abm_marcas') ?>">ABM Marcas</a></li>
                  </ul>
              </li>

			        <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-user"></i>
                      <span>Usuarios</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo site_url('administrador/usuarios/add') ?>">Agregar</a></li>
                      <li><a class="" href="<?php echo site_url('administrador/usuarios') ?>">Listado</a></li>
                  </ul>
              </li>
              <!--
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-user"></i>
                      <span>Clientes</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo site_url('administrador/clientes') ?>">Listado</a></li>
                  </ul>
              </li>
              -->
              
          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      </div>
<!-- END SIDEBAR -->