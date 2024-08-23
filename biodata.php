<?php
require_once 'BiodataPage.php'; 

$biodataPage = new BiodataPage(
    "Nakhadwa Muhammad Razky",
    "223443019",
    "Cimahi, 18 September 2003",
    "Laki-Laki",
    "Islam",
    "Indonesia",
    "081394682537",
    "nkhdwmr_@gmail.com",
    "Jl. Alamanda Raya IV"
);

$biodataPage->render();
?>
