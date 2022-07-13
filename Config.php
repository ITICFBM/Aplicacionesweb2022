<!-- <?php 
$base_url = "http://" . $_SERVER['SERVER_NAME'] 
?>
 -->
<?php
trait URL {
    private $url = '';
    private $current_url = '';
    public $get = '';

    function __construct()
    {
        $this->url = $_SERVER['SERVER_NAME'];
        $this->current_url = $_SERVER['REQUEST_URI'];

        $clean_server = str_replace('', $this->url, $this->current_url);
        $clean_server = explode('/', $clean_server);

        $this->get = array('base_url' => "/".$clean_server[1]);
    }
}
/* URL AUTH */
trait URLDOS {
    private $url = '';
    private $current_url = '/views/auth';
    public $get = '';

    function __construct()
    {
        $this->url = $_SERVER['SERVER_NAME'].'/views/auth';
        $this->current_url = $_SERVER['REQUEST_URI'].'/views/auth';

        $clean_server = str_replace('', $this->url, $this->current_url);
        $clean_server = explode('/', $clean_server);

        $this->get = array('base_url2' => "/".$clean_server[1]);
    }
}
?>
