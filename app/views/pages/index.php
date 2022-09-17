<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/nav.php'; ?>
<!-- main content -->
<main id="main-site">
    <section id="Product-sale">
        <div class="container py-5">
            <div class="d-flex justify-content-between">
                <div class="col-auto">
                    <h1 class="font-rubik font-size-20" style="font-weight: bold;">Product List</h1>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <a class="btn btn-danger" href="addProduct" role="button">ADD</a>
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
<!-- end main content -->
<?php $page = 1; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>