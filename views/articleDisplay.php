<div class=content>
<body style="background-color: wheat;">
    <div style="text-wrap: wrap;">
        <?php
            echo "<ul id=z>";
            for($index=0;$index<count($data);$index++){
                $userDAO = new UserDAO();
                $user = $userDAO->getUser($data[$index]->getUserID());
                echo "<li id=name  ><strong>".$data[$index]->getTitle()."<br></strong>";
                echo "<div class=pic><img style= width= 50px height = 350px; src=".$data[$index]->getImgPath()."></div><br>";
                echo "<p id=text><i>".$data[$index]->getContent()."</i></p><br><br>";
                echo "<strong>Made by: </strong> ".$user->getFirstName()." ".$user->getLastName()."<br>";
                echo "<strong>Email: </strong> ".$user->getEmail()."<br><br><li>";
        }
        echo "</ul>";
        ?>  
    </div>
    <style>
        #z{
            list-style-type: none;
        }
        #name {
            display: inline;
            float: left;
            padding-left: 200px;
            height: 600px;
            width: 800px;
        }
        .pic{
            padding-right: 400px;
        }
        #text {
            word-wrap: break-word;
            width: 300px;
        }
    </style>      
</body>
</div>