<?php
    $router = new core\router;
    $router->urlBase = URL_BASE;

    // index (users table)
    // ======================================
    $router->get('/', function() {
        define('action', null);
        $ctrl = new controllers\userController;
        $ctrl->index();
    });
    
    // add user
    //========================================
    $router->get('/add/user', function() {
        define('action','add');
        $ctrl = new controllers\userController;
        $ctrl->add();
    });    
    $router->post('/add/user', function() {
        define('action','add');
        $ctrl = new controllers\userController;
        $ctrl->add();
    });

    // edit user
    //=========================================
    $router->get('/edit/user/:id', function($id) {
        define('action','edit');
        $ctrl = new controllers\userController;
        $ctrl->edit($id);
    });
    $router->post('/edit/user/:id', function($id) {
        define('action','edit');
        $ctrl = new controllers\userController;
        $ctrl->edit($id);
    });

    // delete user
    // ===========================================
    $router->get('/delete/user/:id', function($id) {
        define('action','delete');
        $ctrl = new controllers\userController;
        $ctrl->delete($id);
    });

    // run GET and POST queries
    // ===========================================
    $router->run();

    // 404
    // ============================================
    $router->notFund(function() {
        $ctrl = new controllers\userController;
        $ctrl->e404();
    });
?>