<?php include "header.php";?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">  <!--Row coll start-->

                <div>
                    <h1 class="text-center text-warning font-weight-bold ">All Blogs</h1>
                </div>

                <div class="row">
                    <?php foreach ($allBlogs as $blog) {?>

                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?php echo $blog['image']?>" alt="" class="h-200 card-img-top">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $blog['title']?></h4>
                                <span class="text-muted"><?php echo $blog['author']?></span>
                                <p class="text-justify"><?php echo $blog['description']?></p>

                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>



            </div>  <!--Row coll start-->
        </div>
    </div>
</section>

<?php include "footer.php";?>
