<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';
switch ($submodule) {
    case 'view': default:
        include ('view.php');
        break;
    case 'add':
        include('module/subject/add.php');
    case 'save':
        include('module/subject/save.php');
    case 'edit':
        include('module/subject/edit.php');
    case 'update':
        include('module/subject/update.php');
    case 'delete':
        include('module/subject/delete.php');
}