<?php 
require_once '../../config.php';
require_once '../../src/actions.user.php';
require_once '../../src/modules/messages.php';
require_once '../../src/modules/header.php';

$users = readUserAction($conn);
?>

<div class="container">
 <div class="row">
    <a href="../../../"><h1>Users - Read</h1></a>
    <a class="btn btn-sucess text-white" href="./creat.php">New</a>
 </div>
 <div class="row flex-center">
 <?php if(isset($_GET['message'])) echo(printMessage($_GET['message'])); ?>
 </div>
        <table class="table-users">
            
        </table>

</div>