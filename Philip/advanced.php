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
        # Day 1 | Advanced
        $name_keys = ["Mickey Mouse", "Super Mario", "Goku", "Pokémon"];

        $characters = array(
            $name_keys[0] => array
                (
                    "owned" => "Disney",
                    "img" => "https://duckduckgo.com/i/67a477a4.png",
                    "age" => 92
                ),

            $name_keys[1] =>  array
                (
                    "owned" => "Nintendo",
                    "img" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimgix.elitedaily.com%2Felite-daily%2F2017%2F05%2F08082439%2FSuper-Mario-2.jpg%3Fw%3D610%26fit%3Dmax%26auto%3Dformat%26q%3D70&f=1&nofb=1",
                    "age" => 26
                ),

            $name_keys[2] =>  array
                (
                    "owned" => "Toei Animation",
                    "img" => "https://static.wikia.nocookie.net/ultradragonball/images/2/29/285px-Goku149.jpg",
                    "age" => 47
                ),

            $name_keys[3] =>  array
                (
                    "owned" => "Game Freak",
                    "img" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.numerama.com%2Fcontent%2Fuploads%2F2018%2F03%2Fhttps-blogs-images-forbes-com-davidthier-files-2018-03-800px-mew_po-1024x694.png&f=1&nofb=1",
                    "age" => 25
                )
                                
        );

        function CreateCard() {
            static $i = -1;
            $ca = $GLOBALS['characters'];
            $nk = $GLOBALS['name_keys'];
            $i++;            
            return  "<div class='col'>
                        <div class='card h-100 p-2'>
                            <img src='{$ca[$nk[$i]]['img']}' class='img-fluid' alt='{$nk[$i]}' style='height:300px;' />
                            <div class='card-body'>
                                <h5 class='card-title text-center'>{$nk[$i]}</h5>
                                <p class='card-text text-center'>{$nk[$i]} is {$ca[$nk[$i]]['age']} years old.</p>
                            </div>
                            <div class='card-footer'>
                                <p class='text-small  text-center muted'><b>Owned by: </b>{$ca[$nk[$i]]['owned']}</p>
                            </div>
                        </div>
                    </div>";

        }

        echo "<div class='row row-cols-1 row-cols-md-2 g-4 mx-1 mx-lg-4 mb-4'>";
        
        // echo "
        //         <div class='card'>
        //             <img src='{$characters[$name_keys[0]]['img']}' class='card-img-top' alt='{$name_keys[0]}' style='width:auto;height:15rem;' />
        //             <div class='card-body'>
        //                 <h5 class='card-title text-center'>{$name_keys[0]}</h5>
        //                 <p class='card-text text-center'>{$name_keys[0]} is {$characters[$name_keys[0]]['age']} years old.</p>
        //             </div>
        //             <div class='card-footer'>
        //             <p class='text-small  text-center muted'><b>Owned by: </b>{$characters[$name_keys[0]]['owned']}</p>
        //             </div>
        //         </div>";

        // 0
        echo CreateCard();
        // 1
        echo CreateCard();
        // 2
        echo CreateCard();
        // 3
        echo CreateCard();

        echo "
            </div>
        </div>";

    ?>    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>