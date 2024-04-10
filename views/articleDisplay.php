<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display for Articles</title>
</head>
<body>
        <?php
            for($index=0;$index<count($data);$index++){
                $userDAO = new UserDAO();
                $user = $userDAO->getUser($data[$index]->getUserID());
                echo "<ul><tr><td class=\"text-center\"></td>";
                echo "<td><strong>".$data[$index]->getTitle()."</strong><br></td>";
                echo "<td> <img src=".$data[$index]->getImgPath()."><br></td>";
                echo "<td><i>".$data[$index]->getContent()."</i><br></td><br>";
                echo "<td> <strong>Made by: </strong> ".$user->getFirstName()." ".$user->getLastName()."<br></td>";
                echo "<td> <strong>Email: </strong> ".$user->getEmail()."<br></td><br></ul>";
        }
        ?>        
</body>
</html>