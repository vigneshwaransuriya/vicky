<?php
include('get-to-do.php');
$getTask = getTask(); 
?>

<?php
if(count($getTask['data'])) {
foreach($getTask['data'] as $task) {
?>

<div class="row my-3">
    <div class="col-sm-10">
        <?php
       echo $task['task'];
        ?>
    </div>
    <div class="col-sm-1">
        <a href="index.php?edit-task=<?php echo $task['id']; ?>" class="text-success text-decoration-none">
        edit
       </a>
    </div>
    <div class="col-sm-1">
    <a href="delete-to-do.php?delete-task=<?php echo $task['id']; ?>" class="text-danger text-decoration-none">
   delete
    </a>
    </div>
</div>
<hr>

<?php 
} 
}
?>