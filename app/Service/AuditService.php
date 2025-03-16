<?php

namespace App\Service;

use App\Models\Audit;
use App\Enum\AuditEvent;
class AuditService
{
    public function loginReport(int $userId):void{
        $audit = new Audit();
        $audit->user_id = $userId;
        $audit->event = AuditEvent::LOGIN;
        $audit->message = 'User logged in';
        $audit->save();
    }

    public function registerReport(int $userId):void{
        $audit = new Audit();
        $audit->user_id = $userId;
        $audit->event = AuditEvent::REGISTER;
        $audit->message = 'User registered';
        $audit->save();
    }

    public function report(int $userId, int $reportId):void{
        $audit = new Audit();
        $audit->user_id = $userId;
        $audit->event = AuditEvent::REPORT;
        $audit->message = 'User created report for goon '. $reportId;
        $audit->save();
    }

    public function message(int $userId, string $message):void{
        $audit = new Audit();
        $audit->user_id = $userId;
        $audit->event = AuditEvent::MESSAGE;
        $audit->message = $message;
        $audit->save();
    }

    public function logout(int $userId):void{
        $audit = new Audit();
        $audit->user_id = $userId;
        $audit->event = AuditEvent::LOGOUT;
        $audit->message = 'User logged out';
        $audit->save();
    }


}