<?php

namespace OOP\app\Controller;
use OOP\app\Core\View;
use OOP\app\Model\Akun;

// include '../View/header.php';


class HomeController
{
    public $account;

    public function __construct()
    {
        $this->account = new Akun();
    }

    public function index()
    {
    //    require_once '/xampp/htdocs/php2/miniframework/app/View/header.php';
    //     // foreach($this->account->show() as $row){
    //     //     echo '<tr style="background-color: lightskyblue;">';
    //     //     echo '<td>'.$row['id'].'</td>';
    //     //     echo '<td>'.$row['name'].'</td>';
    //     //     echo '<td>'.$row['email'].'</td>';
    //     //     echo '<td>'.$row['password'].'</td>';
    //     //     echo '</tr>';
    //     // }
    //     require_once '/xampp/htdocs/php2/miniframework/app/View/footer.php';
        View::render('view/body', $this->account->show());
        
    }
}