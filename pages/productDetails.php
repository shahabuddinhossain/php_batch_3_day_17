<?php include "header.php";?>

    <section class="py-5">
        <div class="container">
            <div class="row"> <!-- row Starts here-->

                    <div class="col-md-8 mb-4 mx-auto">
                        <div class="card">
                            <img src="<?php echo isset($details['image'])? $details['image'] : ''; ?>" alt="" class="card-img-top h-600">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo isset($details['name'])? $details['name'] : ''; ?></h3>
                                <h4><?php echo isset($details['price'])? 'Price: '.$details['price'] : ''; ?></h4>
                                <h5><?php echo isset($details['brand'])? $details['brand'] : ''; ?></h5>
                                <h5><?php echo isset($details['category'])? $details['category'] : ''; ?></h5>
                                <h5><?php echo isset($details['description'])? $details['description'] : ''; ?></h5>
                                <hr/>
                                <a href="" class="btn btn-outline-info">Add to Cart</a>

                            </div>
                        </div>
                    </div>


            </div> <!-- row Ends-->
        </div>  <!-- Container Ends-->
    </section>


<?php include "footer.php";?>