
<div class="container text-bg-light m-3">
    
    <h3>New Article Form</h3>
    <p class="lead">Use the following form to add a new article to the database.</p>

    <form action="start.php?action=articleAdd" method="POST">
    <div class="form-group p-2">
      <label for="username">Title:</label>
      <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="form-group p-2">
      <label for="lastname">Image Path (Example: myImage.jpg):</label>
      <input type="text" class="form-control" id="imgPath" name="imgPath">
    </div>
    <div class="form-group p-2">
      <label for="firstname">Content:</label>
      <input type="text" class="form-control" id="content" name="content">
    </div>
    <div class="form-group p-2">
        <button type="submit" name="submit" value="Confirm" class="btn btn-primary">Save Article</button>
        <button type="submit" name="submit" value="Cancel" class="btn btn-primary">Cancel</button>
    </div>
  </form>
</div>