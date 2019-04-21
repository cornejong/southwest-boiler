<?php

use SouthCoast\SouthWest\Core\Route;

Route::base('v3');

Route::set(Route::ALL_REQUEST_METHODS, ['test', '$testing', '$extra*'], 'TestController', 'testMethod');

Route::set(Route::ALL_REQUEST_METHODS, ['action', '$value'], 'TestController', 'testMethod');

/* Use $NAME to imply a required varible path */
//Route::set(['GET', 'POST', 'PUT', 'DELETE'], ['collection', '$provider', '$collection'], 'CollectionController', 'Method');
/* User NAME* to imply an optional variable sub route */
//Route::set(['GET', 'PUT', 'POST'], ['$provider', 'configuration', '$config_tab*'], 'Configuration', 'Method');

// Route::set('GET', ['sophie', 'users'], 'UserController', 'getUsers');

Route::redirect(['data', 'test'], 'https://google.com');
// Route::redirect(['sophie', 'dashboard'], ['sophie', 'ui']);
