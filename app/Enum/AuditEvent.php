<?php

namespace App\Enum;

enum AuditEvent: int
{
    case REPORT = 1;
    case REGISTER = 2;
    case LOGIN = 3;
    case LOGOUT = 4;
    case MESSAGE = 5;
}