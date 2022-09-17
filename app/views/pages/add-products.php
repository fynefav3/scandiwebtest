<?php require APPROOT . '/views/inc/header.php'; ?>
<!-- <?php //require APPROOT . '/views/inc/nav.php'; 
        ?> -->
<!-- main content -->
<main id="main-site">
    <section id="Product-sale">
        <div class="container py-5">
            <div class="row">
                <div class="col-auto">
                    <h1 class="font-rubik font-size-20" style="font-weight: bold;">Product Add</h1>
                </div>
                <div class="col-auto"></div>
                <div class="col-auto">
                    <button class="btn btn-danger" form="product_form" type="submit" role="button" ">Save</button>
          </div>
          <div class=" col-auto">
                        <button class="btn btn-danger" form="product_form" type="reset" role="button">Cancel</button>
                </div>
            </div>
            <hr>
            <div class="admin-product_form-container  font-rubik font-size-16">
                <form action="api/AddProduct" method="POST" id="product_form" required>
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
<!-- end main content -->
<?php $page = 2; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>