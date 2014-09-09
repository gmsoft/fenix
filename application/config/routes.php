<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['administrador'] = 'user_admin_controller/index';

/* Usuarios */
$route['administrador/usuarios'] = 'user_admin_controller/usuarios';
$route['administrador/usuarios/add'] = 'user_admin_controller/usuarios';
$route['administrador/usuarios/insert'] = 'user_admin_controller/usuarios';
$route['administrador/usuarios/success/(:num)'] = 'user_admin_controller/usuarios';
$route['administrador/usuarios/insert_validation'] = 'user_admin_controller/usuarios';
$route['administrador/usuarios/ajax_list_info'] = 'user_admin_controller/usuarios';
$route['administrador/usuarios/ajax_list'] = 'user_admin_controller/usuarios';
$route['administrador/usuarios/read/(:num)'] = 'user_admin_controller/usuarios';
$route['administrador/usuarios/edit/(:num)'] = 'user_admin_controller/usuarios';
$route['administrador/usuarios/update/(:num)'] = 'user_admin_controller/usuarios';
$route['administrador/usuarios/update_validation/(:num)'] = 'user_admin_controller/usuarios';
$route['administrador/usuarios/delete/(:num)'] = 'user_admin_controller/usuarios';
$route['administrador/usuarios/export'] = 'user_admin_controller/usuarios';
$route['administrador/usuarios/print'] = 'user_admin_controller/usuarios';
$route['administrador/usuarios'] = 'user_admin_controller/usuarios';


/* Clientes */
$route['administrador/clientes'] = 'customer_controller/manager_clientes';
$route['administrador/clientes/add'] = 'customer_controller/manager_clientes';
$route['administrador/clientes/insert'] = 'customer_controller/manager_clientes';
$route['administrador/clientes/success/(:num)'] = 'customer_controller/manager_clientes';
$route['administrador/clientes/insert_validation'] = 'customer_controller/manager_clientes';
$route['administrador/clientes/ajax_list_info'] = 'customer_controller/manager_clientes';
$route['administrador/clientes/ajax_list'] = 'customer_controller/manager_clientes';
$route['administrador/clientes/read/(:num)'] = 'customer_controller/manager_clientes';
$route['administrador/clientes/edit/(:num)'] = 'customer_controller/manager_clientes';
$route['administrador/clientes/update/(:num)'] = 'customer_controller/manager_clientes';
$route['administrador/clientes/update_validation/(:num)'] = 'customer_controller/manager_clientes';
$route['administrador/clientes/delete/(:num)'] = 'customer_controller/manager_clientes';
$route['administrador/clientes/export'] = 'customer_controller/manager_clientes';
$route['administrador/clientes/print'] = 'customer_controller/manager_clientes';
$route['administrador/clientes'] = 'customer_controller/manager_clientes';



/* categorias */
$route['administrador/categorias/add'] = 'category_controller/manager_category';
$route['administrador/categorias/insert'] = 'category_controller/manager_category';
$route['administrador/categorias/success/(:num)'] = 'category_controller/manager_category';
$route['administrador/categorias/insert_validation'] = 'category_controller/manager_category';
$route['administrador/categorias/ajax_list_info'] = 'category_controller/manager_category';
$route['administrador/categorias/ajax_list'] = 'category_controller/manager_category';
$route['administrador/categorias/read/(:num)'] = 'category_controller/manager_category';
$route['administrador/categorias/edit/(:num)'] = 'category_controller/manager_category';
$route['administrador/categorias/update/(:num)'] = 'category_controller/manager_category';
$route['administrador/categorias/update_validation/(:num)'] = 'category_controller/manager_category';
$route['administrador/categorias/delete/(:num)'] = 'category_controller/manager_category';
$route['administrador/categorias/export'] = 'category_controller/manager_category';
$route['administrador/categorias/print'] = 'category_controller/manager_category';
$route['administrador/categorias'] = 'category_controller/manager_category';
$route['administrador/categorias/upload_file/image_tile_url'] = 'category_controller/manager_category';
$route['administrador/categorias/delete_file/image_tile_url/'] = 'category_controller/manager_category';
$route['administrador/categorias/(:any)'] = 'category_controller/manager_category';

/* Sub categorias */
$route['administrador/sub-categorias/add'] = 'subcategory_controller/manager_subcategory';
$route['administrador/sub-categorias/insert'] = 'subcategory_controller/manager_subcategory';
$route['administrador/sub-categorias/success/(:num)'] = 'subcategory_controller/manager_subcategory';
$route['administrador/sub-categorias/insert_validation'] = 'subcategory_controller/manager_subcategory';
$route['administrador/sub-categorias/ajax_list_info'] = 'subcategory_controller/manager_subcategory';
$route['administrador/sub-categorias/ajax_list'] = 'subcategory_controller/manager_subcategory';
$route['administrador/sub-categorias/read/(:num)'] = 'subcategory_controller/manager_subcategory';
$route['administrador/sub-categorias/edit/(:num)'] = 'subcategory_controller/manager_subcategory';
$route['administrador/sub-categorias/update/(:num)'] = 'subcategory_controller/manager_subcategory';
$route['administrador/sub-categorias/update_validation/(:num)'] = 'subcategory_controller/manager_subcategory';
$route['administrador/sub-categorias/delete/(:num)'] = 'subcategory_controller/manager_subcategory';
$route['administrador/sub-categorias/export'] = 'subcategory_controller/manager_subcategory';
$route['administrador/sub-categorias/print'] = 'subcategory_controller/manager_subcategory';
$route['administrador/sub-categorias/upload_file/image_tile_url'] = 'subcategory_controller/manager_subcategory';
$route['administrador/sub-categorias/delete_file/image_tile_url/'] = 'subcategory_controller/manager_subcategory';
$route['administrador/sub-categorias/(:any)'] = 'subcategory_controller/manager_subcategory';
$route['administrador/sub-categorias'] = 'subcategory_controller/manager_subcategory';

/* configuracion */
$route['administrador/configuracion/add'] = 'configuration_controller/manager_configuration';
$route['administrador/configuracion/insert'] = 'configuration_controller/manager_configuration';
$route['administrador/configuracion/success/(:num)'] = 'configuration_controller/manager_configuration';
$route['administrador/configuracion/insert_validation'] = 'configuration_controller/manager_configuration';
$route['administrador/configuracion/ajax_list_info'] = 'configuration_controller/manager_configuration';
$route['administrador/configuracion/ajax_list'] = 'configuration_controller/manager_configuration';
$route['administrador/configuracion/read/(:num)'] = 'configuration_controller/manager_configuration';
$route['administrador/configuracion/edit/(:num)'] = 'configuration_controller/manager_configuration';
$route['administrador/configuracion/update/(:num)'] = 'configuration_controller/manager_configuration';
$route['administrador/configuracion/update_validation/(:num)'] = 'configuration_controller/manager_configuration';
$route['administrador/configuracion/delete/(:num)'] = 'configuration_controller/manager_configuration';
$route['administrador/configuracion/export'] = 'configuration_controller/manager_configuration';
$route['administrador/configuracion/print'] = 'configuration_controller/manager_configuration';
$route['administrador/configuracion'] = 'configuration_controller/manager_configuration';
$route['administrador/configuracion/upload_file/image_tile_url'] = 'configuration_controller/manager_configuration';
$route['administrador/configuracion/delete_file/image_tile_url/'] = 'configuration_controller/manager_configuration';
$route['administrador/configuracion/(:any)'] = 'category_controller/manager_configuration';

/* Roles */
$route['administrador/roles/add'] = 'rol_controller/manager_rol';
$route['administrador/roles/insert'] = 'rol_controller/manager_rol';
$route['administrador/roles/success/(:num)'] = 'rol_controller/manager_rol';
$route['administrador/roles/insert_validation'] = 'rol_controller/manager_rol';
$route['administrador/roles/ajax_list_info'] = 'rol_controller/manager_rol';
$route['administrador/roles/ajax_list'] = 'rol_controller/manager_rol';
$route['administrador/roles/read/(:num)'] = 'rol_controller/manager_rol';
$route['administrador/roles/edit/(:num)'] = 'rol_controller/manager_rol';
$route['administrador/roles/update/(:num)'] = 'rol_controller/manager_rol';
$route['administrador/roles/update_validation/(:num)'] = 'rol_controller/manager_rol';
$route['administrador/roles/delete/(:num)'] = 'rol_controller/manager_rol';
$route['administrador/roles/export'] = 'rol_controller/manager_rol';
$route['administrador/roles/print'] = 'rol_controller/manager_rol';
$route['administrador/roles'] = 'rol_controller/manager_rol';
$route['administrador/roles/upload_file/image_tile_url'] = 'rol_controller/manager_rol';
$route['administrador/roles/delete_file/image_tile_url/'] = 'rol_controller/manager_rol';
$route['administrador/roles/(:any)'] = 'rol_controller/manager_rol';



/* User Manager */
$route['registracion'] = 'user_manager_controller/register';
$route['activate'] = 'user_manager_controller/activate';
$route['ingresar'] = 'user_manager_controller/login';
$route['salir'] = 'user_manager_controller/logout'; 
$route['perfil'] = 'user_manager_controller/show_profile';
$route['editar-perfil'] = 'user_manager_controller/edit_profile';
$route['cambiar-password'] = 'user_manager_controller/reset_pass';
$route['reiniciar-password'] = 'user_manager_controller/reset';

/* Dashboard */
$route['administrador/dashboard'] = 'dashboard_controller/index';

/*Consulta Articulos*/
$route['administrador/consulta_articulos'] = 'articulo_controller/consulta_articulos';
$route['administrador/consulta_articulos/add'] = 'articulo_controller/consulta_articulos';
$route['administrador/consulta_articulos/insert'] = 'articulo_controller/consulta_articulos';
$route['administrador/consulta_articulos/success/(:num)'] = 'articulo_controller/consulta_articulos';
$route['administrador/consulta_articulos/insert_validation'] = 'articulo_controller/consulta_articulos';
$route['administrador/consulta_articulos/ajax_list_info'] = 'articulo_controller/consulta_articulos';
$route['administrador/consulta_articulos/ajax_list'] = 'articulo_controller/consulta_articulos';
$route['administrador/consulta_articulos/read/(:num)'] = 'articulo_controller/consulta_articulos';
$route['administrador/consulta_articulos/edit/(:num)'] = 'articulo_controller/consulta_articulos';
$route['administrador/consulta_articulos/update/(:num)'] = 'articulo_controller/consulta_articulos';
$route['administrador/consulta_articulos/update_validation/(:num)'] = 'articulo_controller/consulta_articulos';
$route['administrador/consulta_articulos/delete/(:num)'] = 'articulo_controller/consulta_articulos';
$route['administrador/consulta_articulos/export'] = 'articulo_controller/consulta_articulos';
$route['administrador/consulta_articulos/print'] = 'articulo_controller/consulta_articulos';
$route['administrador/consulta_articulos/upload_file/image_tile_url'] = 'articulo_controller/consulta_articulos';
$route['administrador/consulta_articulos/delete_file/image_tile_url/'] = 'articulo_controller/consulta_articulos';
$route['administrador/consulta_articulos/(:any)'] = 'articulo_controller/consulta_articulos';

/*Consulta Articulo Individual*/
$route['administrador/articulo'] = 'articulo_controller/consulta_articulo_individual';
$route['administrador/articulo/add'] = 'articulo_controller/consulta_articulo_individual';
$route['administrador/articulo/insert'] = 'articulo_controller/consulta_articulo_individual';
$route['administrador/articulo/success/(:num)'] = 'articulo_controller/consulta_articulo_individual';
$route['administrador/articulo/insert_validation'] = 'articulo_controller/consulta_articulo_individual';
$route['administrador/articulo/ajax_list_info'] = 'articulo_controller/consulta_articulo_individual';
$route['administrador/articulo/ajax_list'] = 'articulo_controller/consulta_articulo_individual';
$route['administrador/articulo/read/(:num)'] = 'articulo_controller/consulta_articulo_individual';
$route['administrador/articulo/edit/(:num)'] = 'articulo_controller/consulta_articulo_individual';
$route['administrador/articulo/update/(:num)'] = 'articulo_controller/consulta_articulo_individual';
$route['administrador/articulo/update_validation/(:num)'] = 'articulo_controller/consulta_articulo_individual';
$route['administrador/articulo/delete/(:num)'] = 'articulo_controller/consulta_articulo_individual';
$route['administrador/articulo/export'] = 'articulo_controller/consulta_articulo_individual';
$route['administrador/articulo/print'] = 'articulo_controller/consulta_articulo_individual';
$route['administrador/articulo/upload_file/image_tile_url'] = 'articulo_controller/consulta_articulo_individual';
$route['administrador/articulo/delete_file/image_tile_url/'] = 'articulo_controller/consulta_articulo_individual';
$route['administrador/articulo/(:any)'] = 'articulo_controller/consulta_articulo_individual';

/*ABM Articulos*/
$route['administrador/abm_articulos'] = 'articulo_controller/abm_articulos';
$route['administrador/abm_articulos/add'] = 'articulo_controller/abm_articulos';
$route['administrador/abm_articulos/insert'] = 'articulo_controller/abm_articulos';
$route['administrador/abm_articulos/success/(:num)'] = 'articulo_controller/abm_articulos';
$route['administrador/abm_articulos/insert_validation'] = 'articulo_controller/abm_articulos';
$route['administrador/abm_articulos/ajax_list_info'] = 'articulo_controller/abm_articulos';
$route['administrador/abm_articulos/ajax_list'] = 'articulo_controller/abm_articulos';
$route['administrador/abm_articulos/read/(:num)'] = 'articulo_controller/abm_articulos';
$route['administrador/abm_articulos/edit/(:num)'] = 'articulo_controller/abm_articulos';
$route['administrador/abm_articulos/update/(:num)'] = 'articulo_controller/abm_articulos';
$route['administrador/abm_articulos/update_validation/(:num)'] = 'articulo_controller/abm_articulos';
$route['administrador/abm_articulos/delete/(:num)'] = 'articulo_controller/abm_articulos';
$route['administrador/abm_articulos/export'] = 'articulo_controller/abm_articulos';
$route['administrador/abm_articulos/print'] = 'articulo_controller/abm_articulos';
$route['administrador/abm_articulos/upload_file/image_tile_url'] = 'articulo_controller/abm_articulos';
$route['administrador/abm_articulos/delete_file/image_tile_url/'] = 'articulo_controller/abm_articulos';
$route['administrador/abm_articulos/(:any)'] = 'articulo_controller/abm_articulos';

/*Listas de precios*/
$route['administrador/abm_listas'] = 'lista_precio_controller/abm_listas';
$route['administrador/abm_listas/add'] = 'lista_precio_controller/abm_listas';
$route['administrador/abm_listas/insert'] = 'lista_precio_controller/abm_listas';
$route['administrador/abm_listas/success/(:num)'] = 'lista_precio_controller/abm_listas';
$route['administrador/abm_listas/insert_validation'] = 'lista_precio_controller/abm_listas';
$route['administrador/abm_listas/ajax_list_info'] = 'lista_precio_controller/abm_listas';
$route['administrador/abm_listas/ajax_list'] = 'lista_precio_controller/abm_listas';
$route['administrador/abm_listas/read/(:num)'] = 'lista_precio_controller/abm_listas';
$route['administrador/abm_listas/edit/(:num)'] = 'lista_precio_controller/abm_listas';
$route['administrador/abm_listas/update/(:num)'] = 'lista_precio_controller/abm_listas';
$route['administrador/abm_listas/update_validation/(:num)'] = 'lista_precio_controller/abm_listas';
$route['administrador/abm_listas/delete/(:num)'] = 'lista_precio_controller/abm_listas';
$route['administrador/abm_listas/export'] = 'lista_precio_controller/abm_listas';
$route['administrador/abm_listas/print'] = 'lista_precio_controller/abm_listas';
$route['administrador/abm_listas/upload_file/image_tile_url'] = 'lista_precio_controller/abm_listas';
$route['administrador/abm_listas/delete_file/image_tile_url/'] = 'lista_precio_controller/abm_listas';
$route['administrador/abm_listas/(:any)'] = 'lista_precio_controller/abm_listas';

/*IMPORTAR Listas de precios*/
$route['administrador/importar_listas'] = 'lista_precio_controller/importar_listas';
$route['administrador/importar_listas/add'] = 'lista_precio_controller/importar_listas';
$route['administrador/importar_listas/insert'] = 'lista_precio_controller/importar_listas';
$route['administrador/importar_listas/success/(:num)'] = 'lista_precio_controller/importar_listas';
$route['administrador/importar_listas/insert_validation'] = 'lista_precio_controller/importar_listas';
$route['administrador/importar_listas/ajax_list_info'] = 'lista_precio_controller/importar_listas';
$route['administrador/importar_listas/ajax_list'] = 'lista_precio_controller/importar_listas';
$route['administrador/importar_listas/read/(:num)'] = 'lista_precio_controller/importar_listas';
$route['administrador/importar_listas/edit/(:num)'] = 'lista_precio_controller/importar_listas';
$route['administrador/importar_listas/update/(:num)'] = 'lista_precio_controller/importar_listas';
$route['administrador/importar_listas/update_validation/(:num)'] = 'lista_precio_controller/importar_listas';
$route['administrador/importar_listas/delete/(:num)'] = 'lista_precio_controller/importar_listas';
$route['administrador/importar_listas/export'] = 'lista_precio_controller/importar_listas';
$route['administrador/importar_listas/print'] = 'lista_precio_controller/importar_listas';
$route['administrador/importar_listas/upload_file/image_tile_url'] = 'lista_precio_controller/importar_listas';
$route['administrador/importar_listas/delete_file/image_tile_url/'] = 'lista_precio_controller/importar_listas';
$route['administrador/importar_listas/(:any)'] = 'lista_precio_controller/importar_listas';


/*ABM Proveedores*/
$route['administrador/abm_proveedores'] = 'proveedor_controller/abm_proveedores';
$route['administrador/abm_proveedores/add'] = 'proveedor_controller/abm_proveedores';
$route['administrador/abm_proveedores/insert'] = 'proveedor_controller/abm_proveedores';
$route['administrador/abm_proveedores/success/(:num)'] = 'proveedor_controller/abm_proveedores';
$route['administrador/abm_proveedores/insert_validation'] = 'proveedor_controller/abm_proveedores';
$route['administrador/abm_proveedores/ajax_list_info'] = 'proveedor_controller/abm_proveedores';
$route['administrador/abm_proveedores/ajax_list'] = 'proveedor_controller/abm_proveedores';
$route['administrador/abm_proveedores/read/(:num)'] = 'proveedor_controller/abm_proveedores';
$route['administrador/abm_proveedores/edit/(:num)'] = 'proveedor_controller/abm_proveedores';
$route['administrador/abm_proveedores/update/(:num)'] = 'proveedor_controller/abm_proveedores';
$route['administrador/abm_proveedores/update_validation/(:num)'] = 'proveedor_controller/abm_proveedores';
$route['administrador/abm_proveedores/delete/(:num)'] = 'proveedor_controller/abm_proveedores';
$route['administrador/abm_proveedores/export'] = 'proveedor_controller/abm_proveedores';
$route['administrador/abm_proveedores/print'] = 'proveedor_controller/abm_proveedores';
$route['administrador/abm_proveedores/upload_file/image_tile_url'] = 'proveedor_controller/abm_proveedores';
$route['administrador/abm_proveedores/delete_file/image_tile_url/'] = 'proveedor_controller/abm_proveedores';
$route['administrador/abm_proveedores/(:any)'] = 'proveedor_controller/abm_proveedores';

/*ABM Rubros*/
$route['administrador/abm_rubros'] = 'rubro_controller/abm_rubros';
$route['administrador/abm_rubros/add'] = 'rubro_controller/abm_rubros';
$route['administrador/abm_rubros/insert'] = 'rubro_controller/abm_rubros';
$route['administrador/abm_rubros/success/(:num)'] = 'rubro_controller/abm_rubros';
$route['administrador/abm_rubros/insert_validation'] = 'rubro_controller/abm_rubros';
$route['administrador/abm_rubros/ajax_list_info'] = 'rubro_controller/abm_rubros';
$route['administrador/abm_rubros/ajax_list'] = 'rubro_controller/abm_rubros';
$route['administrador/abm_rubros/read/(:num)'] = 'rubro_controller/abm_rubros';
$route['administrador/abm_rubros/edit/(:num)'] = 'rubro_controller/abm_rubros';
$route['administrador/abm_rubros/update/(:num)'] = 'rubro_controller/abm_rubros';
$route['administrador/abm_rubros/update_validation/(:num)'] = 'rubro_controller/abm_rubros';
$route['administrador/abm_rubros/delete/(:num)'] = 'rubro_controller/abm_rubros';
$route['administrador/abm_rubros/export'] = 'rubro_controller/abm_rubros';
$route['administrador/abm_rubros/print'] = 'rubro_controller/abm_rubros';
$route['administrador/abm_rubros/upload_file/image_tile_url'] = 'rubro_controller/abm_rubros';
$route['administrador/abm_rubros/delete_file/image_tile_url/'] = 'rubro_controller/abm_rubros';
$route['administrador/abm_rubros/(:any)'] = 'rubro_controller/abm_rubros';

/*ABM Sucursales*/
$route['administrador/abm_sucursales'] = 'sucursal_controller/abm_sucursales';
$route['administrador/abm_sucursales/add'] = 'sucursal_controller/abm_sucursales';
$route['administrador/abm_sucursales/insert'] = 'sucursal_controller/abm_sucursales';
$route['administrador/abm_sucursales/success/(:num)'] = 'sucursal_controller/abm_sucursales';
$route['administrador/abm_sucursales/insert_validation'] = 'sucursal_controller/abm_sucursales';
$route['administrador/abm_sucursales/ajax_list_info'] = 'sucursal_controller/abm_sucursales';
$route['administrador/abm_sucursales/ajax_list'] = 'sucursal_controller/abm_sucursales';
$route['administrador/abm_sucursales/read/(:num)'] = 'sucursal_controller/abm_sucursales';
$route['administrador/abm_sucursales/edit/(:num)'] = 'sucursal_controller/abm_sucursales';
$route['administrador/abm_sucursales/update/(:num)'] = 'sucursal_controller/abm_sucursales';
$route['administrador/abm_sucursales/update_validation/(:num)'] = 'sucursal_controller/abm_sucursales';
$route['administrador/abm_sucursales/delete/(:num)'] = 'sucursal_controller/abm_sucursales';
$route['administrador/abm_sucursales/export'] = 'sucursal_controller/abm_sucursales';
$route['administrador/abm_sucursales/print'] = 'sucursal_controller/abm_sucursales';
$route['administrador/abm_sucursales/upload_file/image_tile_url'] = 'sucursal_controller/abm_sucursales';
$route['administrador/abm_sucursales/delete_file/image_tile_url/'] = 'sucursal_controller/abm_sucursales';
$route['administrador/abm_sucursales/(:any)'] = 'sucursal_controller/abm_sucursales';

/*ABM marca*/
$route['administrador/abm_marcas'] = 'marca_controller/abm_marcas';
$route['administrador/abm_marcas/add'] = 'marca_controller/abm_marcas';
$route['administrador/abm_marcas/insert'] = 'marca_controller/abm_marcas';
$route['administrador/abm_marcas/success/(:num)'] = 'marca_controller/abm_marcas';
$route['administrador/abm_marcas/insert_validation'] = 'marca_controller/abm_marcas';
$route['administrador/abm_marcas/ajax_list_info'] = 'marca_controller/abm_marcas';
$route['administrador/abm_marcas/ajax_list'] = 'marca_controller/abm_marcas';
$route['administrador/abm_marcas/read/(:num)'] = 'marca_controller/abm_marcas';
$route['administrador/abm_marcas/edit/(:num)'] = 'marca_controller/abm_marcas';
$route['administrador/abm_marcas/update/(:num)'] = 'marca_controller/abm_marcas';
$route['administrador/abm_marcas/update_validation/(:num)'] = 'marca_controller/abm_marcas';
$route['administrador/abm_marcas/delete/(:num)'] = 'marca_controller/abm_marcas';
$route['administrador/abm_marcas/export'] = 'marca_controller/abm_marcas';
$route['administrador/abm_marcas/print'] = 'marca_controller/abm_marcas';
$route['administrador/abm_marcas/upload_file/image_tile_url'] = 'marca_controller/abm_marcas';
$route['administrador/abm_marcas/delete_file/image_tile_url/'] = 'marca_controller/abm_marcas';
$route['administrador/abm_marcas/(:any)'] = 'marca_controller/abm_marcas';


/* Lista VW */
$route['administrador/listavw'] = 'lista_precio_controller/lista_vw';
$route['administrador/listavw/add'] = 'lista_precio_controller/lista_vw';
$route['administrador/listavw/insert'] = 'lista_precio_controller/lista_vw';
$route['administrador/listavw/success/(:num)'] = 'lista_precio_controller/lista_vw';
$route['administrador/listavw/insert_validation'] = 'lista_precio_controller/lista_vw';
$route['administrador/listavw/ajax_list_info'] = 'lista_precio_controller/lista_vw';
$route['administrador/listavw/ajax_list'] = 'lista_precio_controller/lista_vw';
$route['administrador/listavw/read/(:num)'] = 'lista_precio_controller/lista_vw';
$route['administrador/listavw/edit/(:num)'] = 'lista_precio_controller/lista_vw';
$route['administrador/listavw/update/(:num)'] = 'lista_precio_controller/lista_vw';
$route['administrador/listavw/update_validation/(:num)'] = 'lista_precio_controller/lista_vw';
$route['administrador/listavw/delete/(:num)'] = 'lista_precio_controller/lista_vw';
$route['administrador/listavw/export'] = 'lista_precio_controller/lista_vw';
$route['administrador/listavw/print'] = 'lista_precio_controller/lista_vw';
$route['administrador/listavw/upload_file/image_tile_url'] = 'lista_precio_controller/lista_vw';
$route['administrador/listavw/delete_file/image_tile_url/'] = 'lista_precio_controller/lista_vw';
$route['administrador/listavw/(:any)'] = 'lista_precio_controller/lista_vw';


/*ABM Stock*/
$route['administrador/stock'] = 'stock_controller/abm_stock';
$route['administrador/stock/add'] = 'stock_controller/abm_stock';
$route['administrador/stock/insert'] = 'stock_controller/abm_stock';
$route['administrador/stock/success/(:num)'] = 'stock_controller/abm_stock';
$route['administrador/stock/insert_validation'] = 'stock_controller/abm_stock';
$route['administrador/stock/ajax_list_info'] = 'stock_controller/abm_stock';
$route['administrador/stock/ajax_list'] = 'stock_controller/abm_stock';
$route['administrador/stock/read/(:num)'] = 'stock_controller/abm_stock';
$route['administrador/stock/edit/(:num)'] = 'stock_controller/abm_stock';
$route['administrador/stock/update/(:num)'] = 'stock_controller/abm_stock';
$route['administrador/stock/update_validation/(:num)'] = 'stock_controller/abm_stock';
$route['administrador/stock/delete/(:num)'] = 'stock_controller/abm_stock';
$route['administrador/stock/export'] = 'stock_controller/abm_stock';
$route['administrador/stock/print'] = 'stock_controller/abm_stock';
$route['administrador/stock/upload_file/image_tile_url'] = 'stock_controller/abm_stock';
$route['administrador/stock/delete_file/image_tile_url/'] = 'stock_controller/abm_stock';
$route['administrador/stock/(:any)'] = 'stock_controller/abm_stock';

/*Tabla Dto*/

$route['administrador/tabla_dto'] = 'lista_precio_controller/tabla_dto';
$route['administrador/tabla_dto/add'] = 'lista_precio_controller/tabla_dto';
$route['administrador/tabla_dto/insert'] = 'lista_precio_controller/tabla_dto';
$route['administrador/tabla_dto/success/(:num)'] = 'lista_precio_controller/tabla_dto';
$route['administrador/tabla_dto/insert_validation'] = 'lista_precio_controller/tabla_dto';
$route['administrador/tabla_dto/ajax_list_info'] = 'lista_precio_controller/tabla_dto';
$route['administrador/tabla_dto/ajax_list'] = 'lista_precio_controller/tabla_dto';
$route['administrador/tabla_dto/read/(:num)'] = 'lista_precio_controller/tabla_dto';
$route['administrador/tabla_dto/edit/(:num)'] = 'lista_precio_controller/tabla_dto';
$route['administrador/tabla_dto/update/(:num)'] = 'lista_precio_controller/tabla_dto';
$route['administrador/tabla_dto/update_validation/(:num)'] = 'lista_precio_controller/tabla_dto';
$route['administrador/tabla_dto/delete/(:num)'] = 'lista_precio_controller/tabla_dto';
$route['administrador/tabla_dto/export'] = 'lista_precio_controller/tabla_dto';
$route['administrador/tabla_dto/print'] = 'lista_precio_controller/tabla_dto';
$route['administrador/tabla_dto/upload_file/image_tile_url'] = 'lista_precio_controller/tabla_dto';
$route['administrador/tabla_dto/delete_file/image_tile_url/'] = 'lista_precio_controller/tabla_dto';
$route['administrador/tabla_dto/(:any)'] = 'lista_precio_controller/tabla_dto';

/*Edit Precio*/

$route['administrador/edit_precio'] = 'lista_precio_controller/edit_precio';
$route['administrador/edit_precio/add'] = 'lista_precio_controller/edit_precio';
$route['administrador/edit_precio/insert'] = 'lista_precio_controller/edit_precio';
$route['administrador/edit_precio/success/(:num)'] = 'lista_precio_controller/edit_precio';
$route['administrador/edit_precio/insert_validation'] = 'lista_precio_controller/edit_precio';
$route['administrador/edit_precio/ajax_list_info'] = 'lista_precio_controller/edit_precio';
$route['administrador/edit_precio/ajax_list'] = 'lista_precio_controller/edit_precio';
$route['administrador/edit_precio/read/(:num)'] = 'lista_precio_controller/edit_precio';
$route['administrador/edit_precio/edit/(:num)'] = 'lista_precio_controller/edit_precio';
$route['administrador/edit_precio/update/(:num)'] = 'lista_precio_controller/edit_precio';
$route['administrador/edit_precio/update_validation/(:num)'] = 'lista_precio_controller/edit_precio';
$route['administrador/edit_precio/delete/(:num)'] = 'lista_precio_controller/edit_precio';
$route['administrador/edit_precio/export'] = 'lista_precio_controller/edit_precio';
$route['administrador/edit_precio/print'] = 'lista_precio_controller/edit_precio';
$route['administrador/edit_precio/upload_file/image_tile_url'] = 'lista_precio_controller/edit_precio';
$route['administrador/edit_precio/delete_file/image_tile_url/'] = 'lista_precio_controller/edit_precio';
$route['administrador/edit_precio/(:any)'] = 'lista_precio_controller/edit_precio';

/*Edit Stock*/
$route['administrador/edit_stock'] = 'lista_precio_controller/edit_stock';
$route['administrador/edit_stock/add'] = 'lista_precio_controller/edit_stock';
$route['administrador/edit_stock/insert'] = 'lista_precio_controller/edit_stock';
$route['administrador/edit_stock/success/(:num)'] = 'lista_precio_controller/edit_stock';
$route['administrador/edit_stock/insert_validation'] = 'lista_precio_controller/edit_stock';
$route['administrador/edit_stock/ajax_list_info'] = 'lista_precio_controller/edit_stock';
$route['administrador/edit_stock/ajax_list'] = 'lista_precio_controller/edit_stock';
$route['administrador/edit_stock/read/(:num)'] = 'lista_precio_controller/edit_stock';
$route['administrador/edit_stock/edit/(:num)'] = 'lista_precio_controller/edit_stock';
$route['administrador/edit_stock/update/(:num)'] = 'lista_precio_controller/edit_stock';
$route['administrador/edit_stock/update_validation/(:num)'] = 'lista_precio_controller/edit_stock';
$route['administrador/edit_stock/delete/(:num)'] = 'lista_precio_controller/edit_stock';
$route['administrador/edit_stock/export'] = 'lista_precio_controller/edit_stock';
$route['administrador/edit_stock/print'] = 'lista_precio_controller/edit_stock';
$route['administrador/edit_stock/upload_file/image_tile_url'] = 'lista_precio_controller/edit_stock';
$route['administrador/edit_stock/delete_file/image_tile_url/'] = 'lista_precio_controller/edit_stock';
$route['administrador/edit_stock/(:any)'] = 'lista_precio_controller/edit_stock';

$route['default_controller'] = "user_manager_controller/login";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */