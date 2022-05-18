<?php

namespace APP\Model;

class Validation
{
    static function validateLogin($login)
    {
        return strlen($login) >= 3 && !is_numeric($login);
    }

    static function validatePassword($password)
    {
        return strlen($password) >= 8;
    }

    static function emailValidate($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    static function cityValidate($cidade)
    {
        return strlen($cidade) >= 1;
    }


    static function bairroValidate($bairro)
    {
        return strlen($bairro) >= 1;
    }

    static function streetValidate($rua)
    {
        return strlen($rua) >= 1;
    }

    static function numberStreetValidate($numero)
    {
        return is_numeric($numero) >= 3;
    }

    static function phoneValidate($fone)
    {
        return is_numeric($fone) >= 3;
    }

    static function titularValidate($titular)
    {
        return strlen($titular) >= 3 && !is_numeric($titular);
    }

    static function cartaoValidate($cartao)
    {
        return is_numeric($cartao) >= 12;
    }

    static function cvvValidate($cvv)
    {
        return is_numeric($cvv) >= 3;
    }

    static function vencimentoValidate($vencimento)
    {
        $expmonth = $_POST['expMonth']; //e.g 08
        $expyear = $_POST['expYear']; //e.g 15

        $rawExpiry = $expmonth . $expyear;

        $expiryDateTime = \DateTime::createFromFormat('my', $rawExpiry);
        $expiryDate = $expiryDateTime->format('m y');

        $currentDateTime = new \DateTime();
        $currentDate = $currentDateTime->format('m y');

        if ($expiryDate < $currentDate) {
            echo 'Expired';
        } else {
            echo 'Valid';
        }
    }
}
