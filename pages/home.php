<?php include "header.php";?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">

                <div class="card">
                    <div class="card-header text-center">
                        <h4>Please input the fields carefully</h4>
                    </div>
                    <div class="card-body"> <!--Card Body-->
                        <?php if (isset($messages)) { ?>
                            <h2 class="text-center text-success font-weight-bold"> <?php echo $messages?> </h2>
                        <?php } ?>

                        <form action="action.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group row">    <!-- Form row start-->
                                <label for="" class="col-form-label col-md-4">Blog Title</label>
                                <div class="col-md-8">
                                    <input type="text" name="title" id="" class="form-control" required>
                                </div>
                            </div>    <!-- Form row end-->

                            <div class="form-group row">    <!-- Form row start-->
                                <label for="" class="col-form-label col-md-4">Author</label>
                                <div class="col-md-8">
                                    <input type="text" name="author_name" id="" class="form-control" required>
                                </div>
                            </div>    <!-- Form row end-->
                            <div class="form-group row">    <!-- Form row start-->
                                <label for="" class="col-form-label col-md-4">description</label>
                                <div class="col-md-8">
                                    <textarea name="description" id="" cols="30" rows="5" class="form-control" required></textarea>
                                </div>
                            </div>    <!-- Form row end-->
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Upload File</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" id="" class="form-control-file" required>
                                </div>
                            </div>

                            <div class="form-group row">    <!-- Form row start-->
                                <label for="" class="col-form-label col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="blog_btn" id="" class="btn btn-outline-info btn-block" value="SUBMIT">
                                </div>
                            </div>    <!-- Form row end-->

                        </form>
                    </div> <!--Card Body-->
                    <div class="card-footer text-left">
                        Card footer.
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include "footer.php";?>
