<?php
function validateInput($str) {
    return stripslashes(htmlspecialchars(trim($str)));
}