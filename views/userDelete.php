
<div class="container text-bg-dark m-3">
    
    <h3>Delete User Form</h3>
    <p class="lead">Select to confirm the removal of an existing user from the database (All articles associated with this user will be deleted as well).</p>
    <h5><?php echo $data->getUserID()." ".$data->getFirstname()." ".$data->getLastname(); ?></h5>

  <form action="start.php?action=userDelete" method="POST">
    <div class="form-group p-2">
        <input type="hidden" name="userID" value="<?php echo $data->getUserID(); ?>">
        <input type="submit" name="submit" value="Confirm" class="btn btn-dark">
        <input type="submit" name="submit" value="Cancel" class="btn btn-dark">
    </div>
  </form>
</div>