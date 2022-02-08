<?php
require_once "vendor/autoload.php";
use App\classes\Home;
use App\classes\PasswordGenerator;
use App\classes\Blog;
use App\classes\Product;
use App\classes\ProductDetails;
use App\classes\Pattern;
use App\classes\FileUpload;

if(isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include "pages/home.php";
    }
    else if ( $_GET['pages'] == 'password-reset' )
    {
        include "pages/password-reset.php";

    } elseif($_GET['pages'] == 'blog')
    {
        $blog = new Blog();
        $blogs = $blog->getAllBlogs();

        /*echo "<pre>";
        print_r($blogs);*/
        include "pages/blog.php";
    } elseif ($_GET['pages'] == 'product')
    {
        if (isset($_GET['id']))
        {
            $productDetails = new Product();
            $details = $productDetails->getProductDetails($_GET['id']);

            include "pages/productDetails.php";

        } else
        {
            $product = new Product();
            $products = $product->getAllProducts();


            include "pages/product.php";
        }

    }
    elseif ($_GET['pages'] == 'productDetails')
    {
        $product = new ProductDetails();
        $products = $product->getAllProducts();


        include "pages/productDetails.php";

    }
    elseif ($_GET['pages'] == 'pattern')
    {
        if (isset($_POST['input_length']))
        {
            /*echo "<pre>";
            var_dump($_POST);
            echo "<br/>";*/
            $pattern = new Pattern($_POST);
            $pattern->index();

            /*include "pages/pattern.php";*/
        }
        else
        {
            include "pages/pattern.php";
        }

    }
    elseif ($_GET['pages'] == 'file-upload')
    {
        include "pages/fileUpload.php";
    }

    else
    {
        include "pages/home.php";
    }
}
elseif (isset($_POST['btn']))
{

    $passwordGenerator = new PasswordGenerator($_POST);
    $newPassword = $passwordGenerator->newPassword() ;

    include "pages/password-reset.php";

}
elseif (isset($_POST['img_btn']))
{

   $fileUpload = new FileUpload();
   $fileUpload->index();

}
/*elseif (isset($_POST['input_length']))
{
    echo "<pre>";
    var_dump($_POST);
    $pattern = new Pattern($_POST["input_length"]);
    $pattern->index();

    include "pages/pattern.php";
}*/