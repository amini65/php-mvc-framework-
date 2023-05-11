<?php

include_once  __DIR__.'/../layouts/master.php';

?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User Lists</h1>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">full name</th>
            <th scope="col">email</th>
            <th scope="col">status</th>
            <th scope="col">create</th>
        </tr>
        </thead>
        <tbody>
        <?php
            if(isset($users)):
                foreach ($users as $key=>$user):
        ?>
        <tr>
            <td><?= $key+1 ?></td>
            <td><?= $user['firstname'] .' '.$user['lastname'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['status'] ?></td>
            <td><?= $user['created_at'] ?></td>
        </tr>
        <?php
            endforeach;
            endif;
        ?>
     </tbody>
    </table>
</div>



<?php
include_once  __DIR__.'/../layouts/footer.php';
?>
