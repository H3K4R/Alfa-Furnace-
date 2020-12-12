<?php
include('templates/header.html');

if (isset($_GET['home'])) {
    include('templates/home.html');
} elseif (isset($_GET['contact'])) {
    include('templates/contact.html');
} else {
    header('Location: ?home');
}
include('templates/footer.html');
