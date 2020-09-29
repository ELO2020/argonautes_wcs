<?php 

if(isset($_POST["name"])) {
 
include("../app/model/add_argonautes.php");
$add_argonautes= add_argonautes($_POST);

header("Location: index?module=view&action=view_argonautes");
}