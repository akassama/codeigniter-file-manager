<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//CI-FILE MANAGER ROUTES
$routes->group(env("CI_FM_ROUTE"), function ($routes) {
    $routes->get('/', 'FileManagerController::index');
    $routes->post('renameFile', 'FileManagerController::renameFile');
    $routes->post('deleteFile', 'FileManagerController::deleteFile');
    $routes->post('uploadFiles', 'FileManagerController::uploadFiles');
    $routes->post('bulkDelete', 'FileManagerController::bulkDelete');
});