<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Configuration\Exceptions;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',   // ✅ สำคัญมาก ต้องมีบรรทัดนี้
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // ถ้าใช้ Sanctum แบบ token-based ไม่ต้องเพิ่มอะไรที่นี่
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->create();
