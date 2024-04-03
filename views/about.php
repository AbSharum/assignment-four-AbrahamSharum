<h1>Instructions for Using PHP MVC Framework</h1>

<ol>
  <li><strong>Download the Framework Files:</strong><br>
    Download the framework files to your project directory. Ensure that you have the <code>Controller.php</code> file and the file containing the <code>Router</code> class in the <code>framework</code> directory.</li>
  
  <li><strong>Include the Framework Files:</strong><br>
    Include the <code>Controller.php</code> file and the file containing the <code>Router</code> class in your PHP script where you intend to use the MVC framework.</li>

  <li><strong>Create Controller Classes:</strong><br>
    Create controller classes that extend the <code>Controller</code> class provided by the framework. Each controller class should implement a method named <code>performAction()</code> to define the action it should perform.</li>

  <li><strong>Instantiate the Router:</strong><br>
    Instantiate the <code>Router</code> class provided by the framework.</li>

  <li><strong>Add Controllers to the Router:</strong><br>
    Use the <code>addController()</code> method of the <code>Router</code> class to add controllers for different actions.</li>

  <li><strong>Run the Router:</strong><br>
    Call the <code>run()</code> method of the <code>Router</code> class to start the routing process.</li>

  <li><strong>Accessing Actions:</strong><br>
    Actions can be accessed via HTTP requests by specifying the <code>action</code> parameter in the URL.</li>

  <li><strong>Error Handling:</strong><br>
    If you want to display errors for debugging purposes, set the debug mode by calling the <code>showErrors()</code> method of the <code>Router</code> class with a parameter of <code>1</code>.</li>
</ol>

<div class="card m-3" style="width: 40rem;">
  <div class="card-body">
    <h5 class="card-title">MVC Framework</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Controller.php</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <?php
    $homepage = file_get_contents('./framework/Controller.php');
    highlight_string($homepage);
    ?>   
  </div>
</div>


<div class="card m-3" style="width: 40rem;">
  <div class="card-body">
    <h5 class="card-title">MVC Framework</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Router.php</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <?php
    $homepage = file_get_contents('./framework/Router.php');
    highlight_string($homepage);
    ?>   
  </div>
</div>
