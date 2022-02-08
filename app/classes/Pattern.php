<?php


namespace App\classes;


class Pattern
{
    protected $length;
    protected $msg;

    public function __construct($post=null)
    {
        if (isset($post['input_length'])) {
            $this->length = $post['input_length'];
            /*echo $this->length."<br/>";*/
        }
    }

    public function index()
    {
        if ($this->length<1)
        {
            $this->msg= "0 or Negative value not acceptable";
            return $this->msg;
        }

        else {

        }

    }


}