    <div class="container">
        <div class="col">
            <form action="start.php" method="GET">
            <a href="start.php?action=userAdd" class="btn btn-primary">Add User</a>
            <button class="btn btn-primary" type="submit" name="action" value="userUpdate">Update User</button>
            <button class="btn btn-primary" type="submit" name="action" value="userDelete">Delete User</button>
            <table class="table table-bordered table-striped mt-3">
                <thead><tr><th class="text-center">User ID</th><th>Last Name</th><th>First Name</th><th>User Name</th><th>Password</th>
                <th>Email</th><th>Role</th></tr></thead>
                <tbody>
                    <?php

                        for($index=0;$index<count($data);$index++){
                            echo "<tr><td class=\"text-center\"><input type=\"radio\" name=\"userID\" value=\"".$data[$index]->getUserID()."\" required></td>";
                            echo "<td>".$data[$index]->getLastname()."</td>";
                            echo "<td>".$data[$index]->getFirstname()."</td>";
                            echo "<td>".$data[$index]->getUsername()."</td>";
                            echo "<td>".$data[$index]->getPasswd()."</td>";
                            echo "<td>".$data[$index]->getEmail()."</td>";
                            echo "<td>".$data[$index]->getUrole()."</td></tr>\n";
                        }
                    ?>
                </tbody>        
            </table>  
            </form>
        </div>
    </div>