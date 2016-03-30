<?php
namespace Controller;
use \Model\PageRepository;

class PageController
{
    private $conn;

    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;
    }

    public function homeAction()
    {
        $inst = new PageRepository($this->conn);


        include(APP_ROOT_DIR."/Views/home.php");
    }

    public function aboutAction()
    {
        $prenom = "toto";
        if(isset($_GET['prenom'])){
            $prenom = $_GET['prenom'];
        }
        else{
            $prenom = "Jacqueline";
        }
        include(APP_ROOT_DIR."/Views/about.php");
    }
}
