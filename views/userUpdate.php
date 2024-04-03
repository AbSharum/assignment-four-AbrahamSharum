
<div class="container text-bg-light m-3">
    <h3>Update User Form</h3>
    <p class="lead">Use the following form to modify information for an existing user in the database.</p>

  <form action="start.php?action=userUpdate" method="POST">
    <div class="form-group p-2">
      <input type="hidden" name="userID" value="<?php echo $data->getUserID(); ?>">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" name="username" value="<?php echo $data->getUsername(); ?>" required>
    </div>
    <div class="form-group p-2">
      <label for="lastname">Last Name:</label>
      <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $data->getLastname(); ?>">
    </div>
    <div class="form-group p-2">
      <label for="firstname">First Name:</label>
      <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $data->getFirstname(); ?>">
    </div>
    <div class="form-group p-2">
      <label for="passwd">Password:</label>
      <input type="text" class="form-control" id="passwd" name="passwd" value="<?php echo $data->getPasswd(); ?>" required>
    </div>
    <div class="form-group p-2">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" value="<?php echo $data->getEmail(); ?>" required>
    </div>
    <div class="form-group p-2">
      <label for="urole">Role:</label>
      <input type="text" class="form-control" id="urole" name="urole" value="<?php echo $data->getUrole(); ?>">
    </div>
    <div class="form-group p-2">
        <button type="submit" name="submit" value="Confirm" class="btn btn-primary">Save Changes</button>
        <button type="submit" name="submit" value="Cancel" class="btn btn-primary">Cancel</button>
    </div>
  </form>
</div>