<?php
require_once'public/web/routing.php';
require_once'public/web/menu.php';

if(isset($_GET['page'])){
    switch ($_GET['page']){
        case 'user/add':
            require_once 'view/user/add.php';
        break;
        case 'user/list':
            require_once 'model/DB.php';
            require_once 'model/userDao.php';
            $users = listeUser();
            require_once 'view/user/list.php';
            break;
        case 'user/edit':
            require_once 'view/user/edit.php';
            break;
        case 'role/add':
            require_once 'view/role/add.php';
            break;
        case 'role/list':
            require_once 'model/DB.php';
            require_once 'model/roleDao.php';
            $roles = listeRole();
            require_once 'view/role/list.php';
            break;
        case 'role/edit':
            require_once 'view/role/edit.php';
            break;
        case 'user_role/add':
            require_once 'view/user_role/add.php';
            break;
        case 'user_role/list':
            require_once 'model/DB.php';
            require_once 'model/user_roleDao.php';
            $users_roles = listeUser_Role();
            require_once 'view/user_role/list.php';
            break;
        case 'user_role/detail':
            require_once 'view/user_role/detail.php';
            break;
        default :
            header("location:$base_url");
            break;
    }

}



?>