<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shoppers</title>
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <!--font icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--css file-->
  <link rel="stylesheet" href="style.css">
  <!-- <script defer src="index.js"></script> -->


</head>

<body>

  <header id="header">
    <nav class="navbar navbar-expand-lg" style="background-color: #ff003d;">
      <a class="navbar-brand" href="#" style="color:#ffffff;">Shoppers</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto font-rubik">
          <li class="nav-item">
            <a class="nav-link" href="/scandiweb" style="color:#ffffff;">Products </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Category </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#ffffff;">Coming Soon</a>
          </li>
        </ul>
        <form class="d-flex" class="font-size-14 font-rubik" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit"
            style="color: #ffffff; border-color: #ffffff; border-width: 2px;">Search</button>
        </form>

      </div>
  </header>


  <main id="main-site">
    <section id="Product-sale">
      <div class="container py-5">
        <div class="d-flex justify-content-between">
          <div class="col-auto">
            <h1 class="font-rubik font-size-20" style="font-weight: bold;">Product List</h1>
          </div>
          <div class="row">
            <div class="col-auto">
              <a class="btn btn-danger" href="add-product.php" role="button">ADD</a>
            </div>
            <div class="col-auto">
              <button class="btn btn-danger" role="button" id="delete-product-btn">MASS DELETE</button>
            </div>
          </div>
        </div>
        <hr>
        <div class="container text-center">
          <div class="row g-2 align-items-center d-flex justify-content-center" id="products">

          </div>
        </div>
      </div>
    </section>

  </main>
  <hr>
  <div class="card-footer text-muted">

    <footer style="display: flex; justify-content: center">Scandiweb Test assignment
    </footer>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
    crossorigin="anonymous"></script>

  <!--jquery-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!--vanilla js-->
  <script src="js/index.js"></script>

</body>

</html>