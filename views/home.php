<div class="container">
   
    <p class="lead">
    A <b>Model-View-Controller (MVC)</b> web application is a design pattern commonly used in web development to structure applications into three interconnected components: the Model, the View, and the Controller. Each component has its own distinct responsibilities, which helps in maintaining a clean separation of concerns and makes the codebase easier to manage and extend.
    </p>
    <img src="images/mvcframework.png" alt="MVC Framework">
    <p class="lead mt-3">
    The primary components of <b>Model-View-Controller</b> applications are:
    </p>
    <p>
    <h5>Model</h5>
    <ul>
        <li>
        <b>Description:</b> The model represents the data and the business logic of the application. It encapsulates the data structures and functions that operate on that data. In a typical MVC setup, models interact with the database to perform CRUD (Create, Read, Update, Delete) operations.
        </li>
        <li>
        <b>Purpose:</b> The purpose of the model is to manage the application's data, ensuring its integrity and consistency. It abstracts away the data storage details and provides an interface for other parts of the application to interact with the data.
        </li>
    </ul>
    </p>
    <hr class="m-4">
    <p>
    <h5>View</h5>
    <ul>
        <li>
        <b>Description:</b> The view is responsible for presenting the data to the user and handling user interactions. It's typically composed of HTML templates, CSS stylesheets, and sometimes client-side scripting languages like JavaScript.
        </li>
        <li>
        <b>Purpose:</b> The purpose of the view is to provide a user interface that allows users to interact with the application. It displays data fetched from the model and sends user inputs back to the controller for processing.
        </li>
    </ul>
    </p>
    <hr class="m-4">
    <p>
    <h5>Controller</h5>
    <ul>
        <li>
        <b>Description:</b> The controller acts as an intermediary between the model and the view. It receives input from the user via the view, processes that input by interacting with the model, and then updates the view accordingly.
        </li>
        <li>
        <b>Purpose:</b> The purpose of the controller is to manage the flow of the application. It interprets user actions, decides which parts of the model to update, and selects the appropriate view to render. It contains the application's business logic, orchestrating the interactions between the model and the view.
        </li>
    </ul>
    </p>
    <hr class="m-4">
    <p>
    <h5>Router</h5>
    <ul>
        <li>
        <b>Description:</b> The router is an additional component that directs incoming requests to the appropriate controller or handler based on the URL and HTTP method.
        </li>
        <li>
        <b>Purpose:</b> The purpose of the router is to map URLs to specific controllers or actions within the application. It helps in organizing the application's routes and separating concerns related to request handling from the rest of the application logic.
        </li>
    </ul>
    </p>
</div>


<div class="container mt-5">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Model (/models)</th>
        <th>View (/views)</th>
        <th>Controller (/controllers)</th>
        <th>Comments</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>UserDAO.php</td>
        <td>userList.php</td>
        <td>UserList.php</td>
        <td></td>
      </tr>
      <tr>
        <td>UserDAO.php</td>
        <td>userAdd.php</td>
        <td>UserAdd.php</td>
        <td></td>
      </tr>
      <tr>
        <td>UserDAO.php</td>
        <td>userUpdate.php</td>
        <td>UserUpdate.php</td>
        <td></td>
      </tr>
      <tr>
        <td>UserDAO.php</td>
        <td>userDelete.php</td>
        <td>UserDelete.php</td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
