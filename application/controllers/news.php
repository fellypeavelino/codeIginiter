<?php
class News extends CI_Controller {

public function __construct()
{
parent::__construct();

$this->load->helper('url');

}



public function view()
{

echo "news";


}
}
?>