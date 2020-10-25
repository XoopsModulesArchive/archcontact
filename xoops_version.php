<?php

$modversion['name'] = _AC_MODULE_NAME;
$modversion['version'] = 0.1;
$modversion['description'] = _AC_MODULE_DESC;
$modversion['credits'] = 'http://www.archangelartifacts.com';
$modversion['author'] = 'Archangel Artifacts, Inc.';
$modversion['help'] = '';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'images/archcontact_slogo.png';
$modversion['dirname'] = 'archcontact';

//Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';

// Menu
$modversion['hasMain'] = 1;

// Templates
$modversion['templates'][1]['file'] = 'archcontact_index.html';
$modversion['templates'][1]['description'] = '';

//Config
$modversion['config'][1]['name'] = 'cfgArchcontact';
$modversion['config'][1]['title'] = '_AC_MESSAGE';
$modversion['config'][1]['description'] = '';
$modversion['config'][1]['formtype'] = 'textarea';
$modversion['config'][1]['valuetype'] = 'text';
$modversion['config'][1]['default'] =
'Archangel Artifacts, Inc.
PO BOX 120973
West Melbourne, Fl 32912
321-984-8600';
