<?php


namespace App\classes;


class FileUpload
{
    protected $image;
    protected $imageName;
    protected $directory;

    public function __construct($post=null)
    {
        /*echo "<pre>";
        print_r(POST);
        exit();*/
        if (isset($post['image']))
        {
            $this->image    =   $post['image'];
        }
    }

    public function index()
    {
        $this->imageName = $_FILES ['image']['name'];
        $this->directory = '../assets/upload';
        move_uploaded_file($_FILES['image']['tmp_name'], $this->directory);
        echo "success";

    }

}