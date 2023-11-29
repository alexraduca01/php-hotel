<?php 

    include __DIR__ . '/model/data.php';

    if(isset($_GET['available'])){
        $available = $_GET['available'];
        $hotels = array_filter($hotels, fn($item) => $available == 'all' || $item['parking'] == (bool)$available);
    };

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>PHP Hotel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>
        <header>

            <h1 class="text-center text-danger">PHP Hotels</h1>
            <nav class="d-flex justify-content-center">
                <form action="index.php" class="w-50 d-flex" method="GET">
                    <select class="form-control me-2" type="search" placeholder="Search" name="available" aria-label="Search">
                        <option value="all">All</option>
                        <option value="0">Not available</option>
                        <option value="1">available</option>
                    </select>
                    <button class="btn btn-success" type="submit">filtra</button>
                </form>
            </nav>

        </header>
        <main>
            <div class="container mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Parking</th>
                            <th scope="col">Vote</th>
                            <th scope="col">Distance to center</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($hotels as $hotel) { ?>
                            <tr>
                                <?php foreach($hotel as $item) { ?>
                                    <td><?php echo $item ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>