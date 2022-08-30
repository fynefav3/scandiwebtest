<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!--font icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css file-->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main id="main-site">
        <section id="Product-sale">
            <div class="container py-5">
                <div class="row">
                    <div class="col-auto">
                        <h1 class="font-rubik font-size-20" style="font-weight: bold;">Product Add</h1>
                    </div>
                    <div class="col-auto"></div>
                    <div class="col-auto">
                        <button class="btn btn-danger" form="product-form" type="submit" role="button" ">Save</button>
          </div>
          <div class=" col-auto">
                            <button class="btn btn-danger" form="product-form" type="reset" role="button">Cancel</button>
                    </div>
                </div>
                <hr>
                <div class="admin-product-form-container  font-rubik font-size-16">
                    <form action="router/product.php" method="POST" id="product-form" required>
                        <div class="row g-2 align-items-center">
                            <div class="col-2 ">
                                <label for="sku" class=" col-form-label">SKU</label>
                            </div>
                            <div class="col-10">
                                <input required type="text" name="sku" id="sku" class="form-control" placeholder="#sku">
                            </div>
                            <div class="col-2 ">
                                <label for="name" class="col-form-label">Name</label>
                            </div>
                            <div class="col-10">
                                <input required name="name" type="text" id="name" class="form-control" placeholder="#name">
                            </div>
                            <div class="col-2">
                                <label for="price" class=" col-form-label">Price ($)</label>
                            </div>
                            <div class="col-10">
                                <input required name="price" type="number" id="price" class="form-control" placeholder="#price">
                            </div>
                            <div class="col-2"></div>
                            <div class="col-10">
                                <select required class="form-select" name="productType" aria-label="product-category" id="productType">
                                    <option value="default">Select Product Category </option>
                                    <option value="DVD">DVD</option>
                                    <option value="Furniture">Furniture</option>
                                    <option value="Book">Book</option>
                                </select>
                            </div>
                            <div class="row g-2 align-items-center ">
                                <div class="row g-2 align-items-center DVD" id="DVD" style="display: none;">
                                    <div class="col-2">
                                        <label for="size" class=" col-form-label">Size (MB)</label>

                                    </div>
                                    <div class="col-10">
                                        <input type="number" name="size" id="size" class="form-control" placeholder="#size">
                                    </div>
                                    <div>
                                        <p>Please, provide size</p>
                                    </div>
                                </div>

                                <div class="row g-2 align-items-center" id="Furniture" style="display: none;">
                                    <div class="col-2">
                                        <label for="height" class=" col-form-label">Height (CM)</label>
                                    </div>
                                    <div class="col-10">
                                        <input type="number" name="height" id="height" class="form-control" placeholder="#height">
                                    </div>
                                    <div class="col-2">
                                        <label for=width" class=" col-form-label">Width (CM)</label>
                                    </div>
                                    <div class="col-10">
                                        <input type="number" name="width" id="width" class="form-control" placeholder="#width">
                                    </div>

                                    <div class="col-2">
                                        <label for="length" class=" col-form-label">Length (CM)</label>

                                    </div>
                                    <div class="col-10">
                                        <input type="number" name="length" id="length" class="form-control" placeholder="#length">
                                    </div>
                                    <div>
                                        <p>Please, provide dimensions</p>
                                    </div>
                                </div>


                                <div class="row g-2 align-items-center" id="Book" style="display: none;">
                                    <div class="col-2">
                                        <label for="weight" class=" col-form-label">Weight (KG)</label>
                                    </div>
                                    <div class="col-10">
                                        <input type="number" name="weight" id="weight" class="form-control" placeholder="#weight">
                                    </div>
                                    <div>
                                        <p>Please, provide weight</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div style="color: #ff0000;" id="labelForm"></div>
                            </div>
                        </div>
                    </form>
                </div>
        </section>
    </main>
    <hr>
    <div class="card-footer text-muted">

        <footer style="display: flex; justify-content: center">Scandiweb Test assignment
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <!--jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--vanilla js-->
    <script src="js/add-product.js"></script>
</body>

</html>