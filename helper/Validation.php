<?php

function validateLoginRequest(LoginRequest $request)
{
    if (!isset($request->username)) {
        throw new ValidationException("Username kosong");
    } elseif (!isset($request->password)) {
        throw new ValidationException("Password kosong");
    } elseif (trim($request->username) == "") {
        throw new Exception("Username belum diisi");
    } elseif (trim($request->password) == "") {
        throw new Exception("Password belum diisi");
    }
}
