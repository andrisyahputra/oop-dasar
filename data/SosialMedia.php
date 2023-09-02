<?php
class SosialMedia
{
    public string $nama;
}

final class Facebook extends SosialMedia
{
}

class FakeFacebook extends Facebook
{
    // sudah final
}

class Twitter extends SosialMedia
{
    final public function Login(string $username, string $password): bool
    {
        return True;
    }
}

class FakeTwitter extends Twitter
{
    public function Login(string $username, string $password): bool
    {
        return True;
    }
}
    //