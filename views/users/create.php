<?php

include_once  __DIR__.'/../layouts/master.php';

?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User create</h1>
</div>
<form method="post" action="/user/store">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">firstname</label>
        <input type="text" name="firstname" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">lastname</label>
        <input type="text" name="lastname" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="Email" name="Email" class="form-control" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
include_once  __DIR__.'/../layouts/footer.php';
?>
