<?php
include_once('./session.php');


if (isset($_GET['id'])) {
    unset($_SESSION['winkelmandje'][$_GET['id']]);
} else {
    unset($_SESSION['winkelmandje']);
}
