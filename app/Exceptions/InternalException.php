<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class InternalException extends Exception
{
    protected $msgForUser;
    public function __construct($message = "",$msgForUser='系统内部错误' ,$code = 0)
    {
        parent::__construct($message, $code);
        $this->msgForUser=$msgForUser;
    }
    public function render(Request $request)
    {
        if ($request->expectsJson()) {
            return response()->json(['msg' => $this->msgForUser], $this->code);
        }

        return view('pages.error', ['msg' => $this->msgForUser]);
    }
}
