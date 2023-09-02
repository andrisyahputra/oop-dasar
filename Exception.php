<?php
require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
// $loginRequest->username = ""; //eror username belum diisi
$loginRequest->username = "  "; //eror username belum diisi
$loginRequest->password = "ANDRI";

// validateLoginRequest($loginRequest);
// try {
//     validateLoginRequest($loginRequest);
// } catch (ValidationException $e) {
//     echo "Validation Exception: " . $e->getMessage();
// } catch (Exception $e) {
//     echo "General Exception: " . $e->getMessage();
// }
// echo "berhasil login" . PHP_EOL;


// multi
try {
    validateLoginRequest($loginRequest);
    echo "Benar" . PHP_EOL;
} catch (ValidationException | Exception $e) {
    echo "Eror: " . $e->getMessage() . PHP_EOL;
} finally {
    echo "Selalu dijalanklan" . PHP_EOL;
}
