<?php

function sanitizeAndFormatString($variable) {
    return isset($variable) ? str_replace(['-', '_'], ' ', htmlspecialchars($variable)) : '';
}


?>