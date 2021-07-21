<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T6RV4NNsZ4eqUiRB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pdfalumnos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pdfalumnos',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'excel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/productos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'productos',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/carrito' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'carrito',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/actualizar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'actualizar',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/borrar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'borrar',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/index1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'index1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/qrcode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'qrcode',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/escanearQR' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LXgOJIPWcxdHF0nf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/editar/([^/]++)(*:23)|/destroy/([^/]++)(*:47)|/agregar/([^/]++)(*:71))/?$}sDu',
    ),
    3 => 
    array (
      23 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'editar',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      47 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      71 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agregar',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::T6RV4NNsZ4eqUiRB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":289:{@mUDnw5A6r+PPRt/+9NXKdLErmc8JvTgUDFTEzRYkuAM=.a:5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000007b776bf400000000585c8548";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::T6RV4NNsZ4eqUiRB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'index',
        'uses' => '\\App\\Http\\Controllers\\AlumnosController@index',
        'controller' => '\\App\\Http\\Controllers\\AlumnosController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'editar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'editar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'editar',
        'uses' => '\\App\\Http\\Controllers\\AlumnosController@edit',
        'controller' => '\\App\\Http\\Controllers\\AlumnosController@edit',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'store',
        'uses' => '\\App\\Http\\Controllers\\AlumnosController@store',
        'controller' => '\\App\\Http\\Controllers\\AlumnosController@store',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'destroy',
        'uses' => '\\App\\Http\\Controllers\\AlumnosController@destroy',
        'controller' => '\\App\\Http\\Controllers\\AlumnosController@destroy',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pdfalumnos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pdfalumnos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'pdfalumnos',
        'uses' => '\\App\\Http\\Controllers\\AlumnosController@getPdfAlumnos',
        'controller' => '\\App\\Http\\Controllers\\AlumnosController@getPdfAlumnos',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'excel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'excel',
        'uses' => '\\App\\Http\\Controllers\\AlumnosController@export',
        'controller' => '\\App\\Http\\Controllers\\AlumnosController@export',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'import',
        'uses' => '\\App\\Http\\Controllers\\AlumnosController@import',
        'controller' => '\\App\\Http\\Controllers\\AlumnosController@import',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'productos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'productos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'productos',
        'uses' => '\\App\\Http\\Controllers\\ProductosController@index',
        'controller' => '\\App\\Http\\Controllers\\ProductosController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'carrito' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'carrito',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'carrito',
        'uses' => '\\App\\Http\\Controllers\\ProductosController@carrito',
        'controller' => '\\App\\Http\\Controllers\\ProductosController@carrito',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agregar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agregar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'agregar',
        'uses' => '\\App\\Http\\Controllers\\ProductosController@agregar',
        'controller' => '\\App\\Http\\Controllers\\ProductosController@agregar',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'actualizar' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'actualizar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'actualizar',
        'uses' => '\\App\\Http\\Controllers\\ProductosController@actualizar',
        'controller' => '\\App\\Http\\Controllers\\ProductosController@actualizar',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'borrar' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'borrar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'borrar',
        'uses' => '\\App\\Http\\Controllers\\ProductosController@borrar',
        'controller' => '\\App\\Http\\Controllers\\ProductosController@borrar',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'index1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'index1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PrincipalController@index1',
        'controller' => 'App\\Http\\Controllers\\PrincipalController@index1',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'index1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'qrcode' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'qrcode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'qrcode',
        'uses' => '\\App\\Http\\Controllers\\AlumnosController@QrCode',
        'controller' => '\\App\\Http\\Controllers\\AlumnosController@QrCode',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LXgOJIPWcxdHF0nf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'escanearQR',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::LXgOJIPWcxdHF0nf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'escanearQR',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
