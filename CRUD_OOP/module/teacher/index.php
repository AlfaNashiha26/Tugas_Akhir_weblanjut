<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';
switch ($submodule) {
    case 'view': default:
        include ('view.php');
        break;
    case 'add':
        include('module/teacher/add.php');
    case 'save':
        include('module/teacher/save.php');
    case 'edit':
        include('module/teacher/edit.php');
    case 'update':
        include('module/teacher/update.php');
    case 'delete':
        include('module/teacher/delete.php');
}