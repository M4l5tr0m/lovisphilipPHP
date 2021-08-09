<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php 
        # Exercise 1
        $fullname = "Philip Mahlberg";
        echo "<h1 class=\"text-center m-1\">$fullname</h1>";
        
        # Exercise 2
        // create a couple of variables, name, age, and job title, and after that, you print a message on the screen "hi, my name is NAME, and i am AGE, and i work as a JOB_TITLE"    

        $name = "Philip Mahlberg";
        $age = 29;
        $job_title = "Web Developer";
        echo "<span class=\"d-flex justify-content-center text-center bg-primary text-light fw-bold rounded p-2 mx-5 my-2\">
        hi, my name is $name, and i am $age, and i work as a $job_title</span>";

        # Exercise 3
        // create an array that has names Mark, John, Georg and Lisa, print the 3rd player on the screen like this: "the third player in the team is 3rd_player".
        $players = array("Mark", "John", "Georg", "Lisa");
        echo "<p class=\"text-center\">the third player in the team is <em>$players[2]</em>.<p>";


    ?>    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>