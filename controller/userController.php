<?php
include_once("model/user.php");

class Controller {
public $model;

public function __construct()
{
$this->model = new Model();
}

public function invoke()
{
if (!isset($_GET['/']))
{
// no special book is requested, we'll show a list of all available books
$user = $this->model->checkuser($user,$password);
include 'index.php';
}else{
 $books = $this->model->$_GET['/'];
include 'login.php';
}}}
?>