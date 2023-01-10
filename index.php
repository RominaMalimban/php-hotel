<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootsrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Php Hotel</title>

    <?php
    // array di Hotels: 
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    ?>
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Hotel Name</th>
                <th scope="col">Hotel Description</th>
                <th scope="col">Hotel Parking</th>
                <th scope="col">Hotel Vote</th>
                <th scope="col">Hotel distance to center</th>
            </tr>
        </thead>
        <tbody>
            <?php

            // ciclo per stampare su pagina hotel con dati: 
            foreach ($hotels as $hotel) {
                $name = $hotel["name"];
                $description = $hotel["description"];
                $parking = $hotel["parking"];
                $vote = $hotel["vote"];
                $distanceToCenter = $hotel["distance_to_center"];

                echo '<tr>';
                echo '<th scope="row">' . $name . '</th>';
                echo '<td>' . $description . '</td>';

                // condizione per parcheggio:
                if ($parking === true) {
                    echo '<td>' . 'Parking Available' . '</td>';
                } else {
                    echo '<td>' . 'Parking not Available' . '</td>';
                }

                echo '<td>' . $vote . '</td>';
                echo '<td>' . $distanceToCenter . ' ' . 'km' . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

    <!-- Js Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384- 
    q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384- 
    ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384- 
    ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>