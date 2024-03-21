<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TECH360 DASH</title>
  <!---Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  table {
  border: 2px solid #a6a6a6;
  border-collapse: collapse;
  width: 100%;
  }

  th, td {
  border: 1px solid #a6a6a6;
  padding: 8px;
  }

  th {
  background-color: #f2f2f2;
  font-weight: bold;
  text-align: center;
  }

  tr:nth-child(even) {
  background-color: #f9f9f9;
  }

  tr:hover {
  background-color: #e6f7ff;
  }
</head>

<body>
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">TECH360 System Panel</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Inventory System
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="inbound.php">Inbound Inventory</a></li>
                <li><a class="dropdown-item" href="outbound.php">Outbound Inventory</a></li>
              </ul>
            </li>
          </ul>
          <div class="mt-3">
            <div class="mb-2">
              <a href="display.php" class="btn btn-warning" role="button">User Management</a>

            </div>
            <div>
              <a href="login.php" class="btn btn-danger" role="button">Logout</a>
            </div>
          </div>
        </div>
      </div>
      <a class="navbar-brand" href="#">TECH360 Demo Dash</a>
    </div>
  </nav>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>