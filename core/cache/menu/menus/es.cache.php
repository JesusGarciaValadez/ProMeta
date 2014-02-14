<?php  return array (
  0 => 
  array (
    'text' => 'Tablero',
    'parent' => '',
    'action' => 0,
    'description' => '',
    'icon' => 'images/misc/logo_tbar.gif',
    'menuindex' => 0,
    'params' => '',
    'handler' => 'MODx.loadPage(""); return false;',
    'permissions' => 'home',
    'controller' => '',
    'namespace' => NULL,
    'children' => 
    array (
      0 => 
      array (
        'text' => 'dashboards',
        'parent' => 'dashboard',
        'action' => 53,
        'description' => 'dashboards_desc',
        'icon' => 'images/icons/information.png',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'dashboards',
        'controller' => 'system/dashboards',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
    ),
  ),
  1 => 
  array (
    'text' => 'Sitio',
    'parent' => '',
    'action' => 0,
    'description' => '',
    'icon' => 'images/misc/logo_tbar.gif',
    'menuindex' => 1,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_site',
    'controller' => '',
    'namespace' => NULL,
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Ver',
        'parent' => 'site',
        'action' => 0,
        'description' => 'Carga tu página de inicio en una ventana nueva.',
        'icon' => 'images/icons/show.gif',
        'menuindex' => 0,
        'params' => '',
        'handler' => 'MODx.preview(); return false;',
        'permissions' => '',
        'controller' => '',
        'namespace' => NULL,
        'children' => 
        array (
        ),
      ),
      1 => 
      array (
        'text' => 'Limpiar Cache',
        'parent' => 'site',
        'action' => 0,
        'description' => 'Limpiar el cache de tu sitio.',
        'icon' => 'images/icons/refresh.png',
        'menuindex' => 1,
        'params' => '',
        'handler' => 'MODx.clearCache(); return false;',
        'permissions' => 'empty_cache',
        'controller' => '',
        'namespace' => NULL,
        'children' => 
        array (
        ),
      ),
      2 => 
      array (
        'text' => 'Remover Bloqueos',
        'parent' => 'site',
        'action' => 0,
        'description' => 'Esto removera cualquier bloqueo que haya en cualquier página del admin como resultado de que otros usuarios las hayan editado.',
        'icon' => 'images/ext/default/grid/hmenu-unlock.png',
        'menuindex' => 2,
        'params' => '',
        'handler' => '
MODx.msg.confirm({
    title: _(\'remove_locks\')
    ,text: _(\'confirm_remove_locks\')
    ,url: MODx.config.connectors_url+\'system/remove_locks.php\'
    ,params: {
        action: \'remove\'
    }
    ,listeners: {
        \'success\': {fn:function() { Ext.getCmp("modx-resource-tree").refresh(); },scope:this}
    }
});',
        'permissions' => 'remove_locks',
        'controller' => '',
        'namespace' => NULL,
        'children' => 
        array (
        ),
      ),
      3 => 
      array (
        'text' => 'Buscar',
        'parent' => 'site',
        'action' => 54,
        'description' => 'Buscar recursos.',
        'icon' => 'images/icons/context_view.gif',
        'menuindex' => 3,
        'params' => '',
        'handler' => '',
        'permissions' => 'search',
        'controller' => 'search',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      4 => 
      array (
        'text' => 'Documento Nuevo',
        'parent' => 'site',
        'action' => 55,
        'description' => 'Crear un documento nuevo.',
        'icon' => 'images/icons/folder_page_add.png',
        'menuindex' => 4,
        'params' => '',
        'handler' => '',
        'permissions' => 'new_document',
        'controller' => 'resource/create',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      5 => 
      array (
        'text' => 'Weblink Nuevo',
        'parent' => 'site',
        'action' => 55,
        'description' => 'Crear un weblink nuevo que apunta a un URL existente y redirecciona.',
        'icon' => 'images/icons/link_add.png',
        'menuindex' => 5,
        'params' => '&class_key=modWebLink',
        'handler' => '',
        'permissions' => 'new_weblink',
        'controller' => 'resource/create',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      6 => 
      array (
        'text' => 'Symlink Nuevo',
        'parent' => 'site',
        'action' => 55,
        'description' => 'Crear un symlink nuevo que apunta a un URL existente sin redireccionar.',
        'icon' => 'images/icons/link_add.png',
        'menuindex' => 6,
        'params' => '&class_key=modSymLink',
        'handler' => '',
        'permissions' => 'new_symlink',
        'controller' => 'resource/create',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      7 => 
      array (
        'text' => 'Recurso Estático Nuevo',
        'parent' => 'site',
        'action' => 55,
        'description' => 'Crear un recurso estático nuevo basado en un archivo.',
        'icon' => 'images/icons/link_add.png',
        'menuindex' => 7,
        'params' => '&class_key=modStaticResource',
        'handler' => '',
        'permissions' => 'new_static_resource',
        'controller' => 'resource/create',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      8 => 
      array (
        'text' => 'Salir',
        'parent' => 'site',
        'action' => 0,
        'description' => 'Salir del Admin de MODX.',
        'icon' => 'images/misc/logo_tbar.gif',
        'menuindex' => 8,
        'params' => '',
        'handler' => 'MODx.logout(); return false;',
        'permissions' => 'logout',
        'controller' => '',
        'namespace' => NULL,
        'children' => 
        array (
        ),
      ),
    ),
  ),
  2 => 
  array (
    'text' => 'Componentes',
    'parent' => '',
    'action' => 0,
    'description' => '',
    'icon' => 'images/icons/plugin.gif',
    'menuindex' => 2,
    'params' => '',
    'handler' => '',
    'permissions' => 'components',
    'controller' => '',
    'namespace' => NULL,
    'children' => 
    array (
    ),
  ),
  3 => 
  array (
    'text' => 'Seguridad',
    'parent' => '',
    'action' => 0,
    'description' => '',
    'icon' => 'images/icons/lock.gif',
    'menuindex' => 3,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_security',
    'controller' => '',
    'namespace' => NULL,
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Administrar usuarios',
        'parent' => 'security',
        'action' => 56,
        'description' => 'Añadir, actualizar, y asignar permisos a usuarios.',
        'icon' => 'images/icons/user.gif',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'view_user',
        'controller' => 'security/user',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      1 => 
      array (
        'text' => 'Controles de Acceso',
        'parent' => 'security',
        'action' => 57,
        'description' => 'Administrar grupos de usuarios, roles y políticas de acceso.',
        'icon' => 'images/icons/mnu_users.gif',
        'menuindex' => 1,
        'params' => '',
        'handler' => '',
        'permissions' => 'access_permissions',
        'controller' => 'security/permission',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      2 => 
      array (
        'text' => 'Grupos de Recursos',
        'parent' => 'security',
        'action' => 58,
        'description' => 'Administrar los grupos a los que pertenecen los recursos.',
        'icon' => '',
        'menuindex' => 2,
        'params' => '',
        'handler' => '',
        'permissions' => 'access_permissions',
        'controller' => 'security/resourcegroup/index',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      3 => 
      array (
        'text' => 'Personalización de Formas',
        'parent' => 'security',
        'action' => 59,
        'description' => 'Personalizar formas del admin por permisos de seguridad.',
        'icon' => 'images/misc/logo_tbar.gif',
        'menuindex' => 3,
        'params' => '',
        'handler' => '',
        'permissions' => 'customize_forms',
        'controller' => 'security/forms',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      4 => 
      array (
        'text' => 'Vaciar Permisos',
        'parent' => 'security',
        'action' => 0,
        'description' => 'Vaciar todos los permisos y recargar el cache.',
        'icon' => 'images/icons/unzip.gif',
        'menuindex' => 4,
        'params' => '',
        'handler' => 'MODx.msg.confirm({
    title: _(\'flush_access\')
    ,text: _(\'flush_access_confirm\')
    ,url: MODx.config.connectors_url+\'security/access/index.php\'
    ,params: {
        action: \'flush\'
    }
    ,listeners: {
        \'success\': {fn:function() { location.href = \'./\'; },scope:this}
    }
});',
        'permissions' => 'access_permissions',
        'controller' => '',
        'namespace' => NULL,
        'children' => 
        array (
        ),
      ),
      5 => 
      array (
        'text' => 'Vaciar Todas las Sesiones',
        'parent' => 'security',
        'action' => 0,
        'description' => 'Vaciar todas las sesiones y cerrar la sesión de todos los usuarios.',
        'icon' => 'images/icons/unzip.gif',
        'menuindex' => 5,
        'params' => '',
        'handler' => 'MODx.msg.confirm({
    title: _(\'flush_sessions\')
    ,text: _(\'flush_sessions_confirm\')
    ,url: MODx.config.connectors_url+\'security/flush.php\'
    ,params: {
        action: \'flush\'
    }
    ,listeners: {
        \'success\': {fn:function() { location.href = \'./\'; },scope:this}
    }
});',
        'permissions' => 'flush_sessions',
        'controller' => '',
        'namespace' => NULL,
        'children' => 
        array (
        ),
      ),
    ),
  ),
  4 => 
  array (
    'text' => 'Herramientas',
    'parent' => '',
    'action' => 0,
    'description' => '',
    'icon' => 'images/icons/menu_settings.gif',
    'menuindex' => 4,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_tools',
    'controller' => '',
    'namespace' => NULL,
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Importar Recursos',
        'parent' => 'tools',
        'action' => 60,
        'description' => 'Importar un lote de recursos estáticos a este sitio.',
        'icon' => 'images/icons/application_side_contract.png',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'import_static',
        'controller' => 'system/import',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      1 => 
      array (
        'text' => 'Importar HTML',
        'parent' => 'tools',
        'action' => 61,
        'description' => 'Importar un lote de archivos HTML a este sitio.',
        'icon' => 'images/icons/application_side_contract.png',
        'menuindex' => 1,
        'params' => '',
        'handler' => '',
        'permissions' => 'import_static',
        'controller' => 'system/import/html',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      2 => 
      array (
        'text' => 'Colecciones de Propiedades',
        'parent' => 'tools',
        'action' => 62,
        'description' => 'Administra todas las colecciones de propiedades de tu sitio y los elementos a los que están asignados.',
        'icon' => 'images/misc/logo_tbar.gif',
        'menuindex' => 2,
        'params' => '',
        'handler' => '',
        'permissions' => 'property_sets',
        'controller' => 'element/propertyset/index',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      3 => 
      array (
        'text' => 'sources',
        'parent' => 'tools',
        'action' => 63,
        'description' => 'sources_desc',
        'icon' => 'images/misc/logo_tbar.gif',
        'menuindex' => 2,
        'params' => '',
        'handler' => '',
        'permissions' => 'sources',
        'controller' => 'source/index',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
    ),
  ),
  5 => 
  array (
    'text' => 'Reportes',
    'parent' => '',
    'action' => 0,
    'description' => '',
    'icon' => 'images/icons/menu_settings16.gif',
    'menuindex' => 5,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_reports',
    'controller' => '',
    'namespace' => NULL,
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Calendario del Sitio',
        'parent' => 'reports',
        'action' => 64,
        'description' => 'Ver recursos con fechas próximas de publicación o despublicación.',
        'icon' => 'images/icons/cal.gif',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'view_document',
        'controller' => 'resource/site_schedule',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      1 => 
      array (
        'text' => 'Acciones del Administrador',
        'parent' => 'reports',
        'action' => 65,
        'description' => 'Ver la actividad reciente en el administrador.',
        'icon' => '',
        'menuindex' => 1,
        'params' => '',
        'handler' => '',
        'permissions' => 'logs',
        'controller' => 'system/logs/index',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      2 => 
      array (
        'text' => 'Bitácora de Errores',
        'parent' => 'reports',
        'action' => 66,
        'description' => 'Ver el error.log de MODX.',
        'icon' => 'images/icons/comment.gif',
        'menuindex' => 2,
        'params' => '',
        'handler' => '',
        'permissions' => 'view_eventlog',
        'controller' => 'system/event',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      3 => 
      array (
        'text' => 'Información del Sistema',
        'parent' => 'reports',
        'action' => 67,
        'description' => 'Ver información del servidor, como phpinfo, información de la base de datos MySQL, y más.',
        'icon' => 'images/icons/logging.gif',
        'menuindex' => 3,
        'params' => '',
        'handler' => '',
        'permissions' => 'view_sysinfo',
        'controller' => 'system/info',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      4 => 
      array (
        'text' => 'Acerca de',
        'parent' => 'reports',
        'action' => 68,
        'description' => 'Más información acerca de MODX Revolution.',
        'icon' => 'images/icons/information.png',
        'menuindex' => 4,
        'params' => '',
        'handler' => '',
        'permissions' => 'about',
        'controller' => 'help',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
    ),
  ),
  6 => 
  array (
    'text' => 'Sistema',
    'parent' => '',
    'action' => 0,
    'description' => '',
    'icon' => 'images/misc/logo_tbar.gif',
    'menuindex' => 6,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_system',
    'controller' => '',
    'namespace' => NULL,
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Administración de Paquetes',
        'parent' => 'system',
        'action' => 69,
        'description' => 'Descargar Componentes de Terceros, añadir Proveedores e instalar paquetes.',
        'icon' => 'images/icons/sysinfo.gif',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'packages',
        'controller' => 'workspaces',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      1 => 
      array (
        'text' => 'Configuración de Sistema',
        'parent' => 'system',
        'action' => 70,
        'description' => 'Cambiar o crear configuración de sistema para todo el sitio.',
        'icon' => 'images/icons/sysinfo.gif',
        'menuindex' => 1,
        'params' => '',
        'handler' => '',
        'permissions' => 'settings',
        'controller' => 'system/settings',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      2 => 
      array (
        'text' => 'Administración del Léxico',
        'parent' => 'system',
        'action' => 71,
        'description' => 'Editar cualquiera de los textos de idioma a lo largo del admin de MODX.',
        'icon' => 'images/icons/logging.gif',
        'menuindex' => 2,
        'params' => '',
        'handler' => '',
        'permissions' => 'lexicons',
        'controller' => 'workspaces/lexicon',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      3 => 
      array (
        'text' => 'Tipos de Contenido',
        'parent' => 'system',
        'action' => 72,
        'description' => 'Añadir tipos de contenido para recursos, como .html, .js, etc.',
        'icon' => 'images/icons/logging.gif',
        'menuindex' => 3,
        'params' => '',
        'handler' => '',
        'permissions' => 'content_types',
        'controller' => 'system/contenttype',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      4 => 
      array (
        'text' => 'Contextos',
        'parent' => 'system',
        'action' => 73,
        'description' => 'Administrar contextos del sitio y su configuración.',
        'icon' => 'images/icons/sysinfo.gif',
        'menuindex' => 4,
        'params' => '',
        'handler' => '',
        'permissions' => 'view_context',
        'controller' => 'context',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      5 => 
      array (
        'text' => 'Acciones',
        'parent' => 'system',
        'action' => 74,
        'description' => 'Administrar Acciones y la estructura del Menú Principal.',
        'icon' => 'images/icons/sysinfo.gif',
        'menuindex' => 5,
        'params' => '',
        'handler' => '',
        'permissions' => 'menus,actions',
        'controller' => 'system/action',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      6 => 
      array (
        'text' => 'Espacios de Nombres',
        'parent' => 'system',
        'action' => 75,
        'description' => 'Maneja espacios de nombres que distinguen entre los diferentes componentes añadidos.',
        'icon' => '',
        'menuindex' => 6,
        'params' => '',
        'handler' => '',
        'permissions' => 'namespaces',
        'controller' => 'workspaces/namespace',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
    ),
  ),
  7 => 
  array (
    'text' => 'Usuario',
    'parent' => '',
    'action' => 0,
    'description' => '',
    'icon' => 'images/icons/user_go.png',
    'menuindex' => 7,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_user',
    'controller' => '',
    'namespace' => NULL,
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Perfil',
        'parent' => 'user',
        'action' => 76,
        'description' => 'Actualiza tu perfil personal.',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'change_profile',
        'controller' => 'security/profile',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
      1 => 
      array (
        'text' => 'Mensajes',
        'parent' => 'user',
        'action' => 77,
        'description' => 'Ve tus mensajes y envía nuevos a usuarios.',
        'icon' => 'images/icons/messages.gif',
        'menuindex' => 1,
        'params' => '',
        'handler' => '',
        'permissions' => 'messages',
        'controller' => 'security/message',
        'namespace' => 'core',
        'children' => 
        array (
        ),
      ),
    ),
  ),
  8 => 
  array (
    'text' => 'Soporte',
    'parent' => '',
    'action' => 0,
    'description' => 'Soporte Futuro',
    'icon' => 'images/icons/sysinfo.gif',
    'menuindex' => 8,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_support',
    'controller' => '',
    'namespace' => NULL,
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Foros',
        'parent' => 'support',
        'action' => 0,
        'description' => 'Ver los foros oficiales de MODX.',
        'icon' => 'images/icons/sysinfo.gif',
        'menuindex' => 0,
        'params' => '',
        'handler' => 'window.open("http://modx.com/forums");',
        'permissions' => '',
        'controller' => '',
        'namespace' => NULL,
        'children' => 
        array (
        ),
      ),
      1 => 
      array (
        'text' => 'Wiki',
        'parent' => 'support',
        'action' => 0,
        'description' => 'Lanza el wiki Confluence de MODX, donde se almacena la documentación de MODX Revolution.',
        'icon' => 'images/icons/sysinfo.gif',
        'menuindex' => 1,
        'params' => '',
        'handler' => 'window.open("http://rtfm.modx.com/");',
        'permissions' => '',
        'controller' => '',
        'namespace' => NULL,
        'children' => 
        array (
        ),
      ),
      2 => 
      array (
        'text' => 'Bugs',
        'parent' => 'support',
        'action' => 0,
        'description' => 'Ir al bugtracker de MODX para rastrear y archivar bugs.',
        'icon' => 'images/icons/sysinfo.gif',
        'menuindex' => 2,
        'params' => '',
        'handler' => 'window.open("http://bugs.modx.com/projects/revo/issues");',
        'permissions' => '',
        'controller' => '',
        'namespace' => NULL,
        'children' => 
        array (
        ),
      ),
      3 => 
      array (
        'text' => 'Documentación del API',
        'parent' => 'support',
        'action' => 0,
        'description' => 'documentación manejada por phpDocumentor del API de Revolution.',
        'icon' => 'images/icons/sysinfo.gif',
        'menuindex' => 3,
        'params' => '',
        'handler' => 'window.open("http://api.modx.com/revolution/2.2/");',
        'permissions' => '',
        'controller' => '',
        'namespace' => NULL,
        'children' => 
        array (
        ),
      ),
    ),
  ),
);