<?php
session_start();

// ROUTEUR : Lien entre URL => logique (controller)
// recuperation de l'url
// recuperation de l'url
$page='';

if ((isset($_GET['page'])))
{
    $page=$_GET['page'];
}
else 
{
    include __DIR__.'/Controllers/controlHome.php';

    showTickets();
}
    

if ($page=="admin"){
    include_once __DIR__ . '/Template/viewHeader.php';
    include __DIR__.'/Template/viewAdmin.php';
    
}

if ($page=="login"){
    include_once __DIR__ . '/Template/viewHeader.php';
    include_once __DIR__.'/Template/viewLogin.php';

    
}
if ($page=="basket"){
    include_once __DIR__.'/Controllers/controlBasket.php';

     putTicket();
}

if ($page=="create"){
    include_once __DIR__ . '/Template/viewHeader.php';
    include_once __DIR__.'/Template/viewForm.php';

}


if ($page=="tickets"){
    include __DIR__.'/Controllers/controlRead.php';

    readCountry();
}

if ($page=="log-out"){
    include_once __DIR__.'/Controllers/controlLogoutU.php';
    logoutUser();

}

if ($page=="log-out-admin"){
    include_once __DIR__.'/Controllers/controlLogoutA.php';
    logoutAdmin();

}

if ($page=="history"){
    include __DIR__.'/Controllers/controlHistory.php';

    ticketsHistory();
}
?>