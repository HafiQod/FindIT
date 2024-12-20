<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card and Scrollable Navbar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            cursor: pointer;
        }
        .navbar-nav {
            flex-wrap: nowrap;
            overflow-x: auto;
        }
        .navbar-nav::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Link 1</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 2</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 3</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 4</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 5</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 6</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link 7</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card" onclick="moveCard(this)">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function moveCard(card) {
            const container = card.closest('.container');
            container.appendChild(card.closest('.col-md-4'));
        }
    </script>
</body>
</html>