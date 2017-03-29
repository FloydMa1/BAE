<h1>Floyd Lehman GD1A</h1>
<?php
// ------------------------------------------------------------------------
// Maak het onderstaande script werkend:
// Vul de code aan en zorg dat de include-bestanden in de juiste map staan
// ------------------------------------------------------------------------
if(!empty($_GET)){
    $page = $_GET['page'];
}
else{
    $page = 'home';
}


include 'includes/config.php';

include 'views/header.php';

include 'views/menu.php';

include 'views/head.php';


switch ($page) {

    case 'about':
        include 'views/about.php';
        break;

    case 'contact':
        include 'views/contact.php';
        break;

    default:
        include 'views/home.php';

}


include 'views/footer.php';
?>