<?php


namespace App\classes;


class Blog
{

    protected $blogs;
    protected $title;
    protected $authorName;
    protected $description;
    protected $image;
    protected $imageName;
    protected $directory;
    protected $fileName;
    protected $file;
    protected $data;
    protected $array;
    protected $array1;
    protected $array2;

    public function __construct($post=null)
    {

/*        echo "<pre>";
        print_r($post);
        print_r($_FILES);*/


        if ($post)
        {
            $this->title        =   $post['title'];
            $this->authorName   =   $post['author_name'];
            $this->description  =   $post['description'];
        }

    }

    public function index()
    {
        $this->image = $this->imageUpload();

        $this->fileName =   'db.txt';
        $this->file     =    fopen('db.txt','a');
        $this->data     =   "$this->title,$this->authorName,$this->description,$this->image$";
        fwrite($this->file ,$this->data);
        fclose($this->file);
        return "Data save successfully";
    }

    protected function imageUpload()
    {
        $this->imageName    =   $_FILES['image']['name'];
        $this->directory    =   'assets/img/upload/'.$this->imageName;
        move_uploaded_file($_FILES['image']['tmp_name'],$this->directory);
        return $this->directory;
    }




    public function getBlogs ( )
    {
        $this->blogs =
            [
                0   =>
                    [
                        'title'         => 'Blog no: 01',
                        'description'   => 'Blog Description 01',
                        'author'        => 'Shahabuddin',
                        'image'         => 'assets/img/pa1.jpg'
                    ],
                1   =>
                    [
                        'title'         => 'Blog no: 02',
                        'description'   => 'Blog Description 02',
                        'author'        => 'Tarikul',
                        'image'         => 'assets/img/pa2.jpg'
                    ],
                2   =>
                    [
                        'title'         => 'Blog no: 03',
                        'description'   => 'Blog Description 03',
                        'author'        => 'Mahmud',
                        'image'         => 'assets/img/pa3.jpg'
                    ],
            ];
        return $this->blogs;

    }

    public function getAllBlogs()
    {
        $this->fileName =   'db.txt';
        $this->data     =   file_get_contents($this->fileName);
        $this->array    =   explode('$', $this->data);
        foreach ($this->array as $key => $value)
        {
            if($this->array2[0])
            {
                $this->array2 = explode(',', $value);
                $this->array1['key']['title'] = $this->array2[0];
                $this->array1['key']['author'] = $this->array2[1];
                $this->array1['key']['description'] = $this->array2[2];
                $this->array1['key']['image'] = $this->array2[3];
            }

        }
        return $this->array1;

    }

}