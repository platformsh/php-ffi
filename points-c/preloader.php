<?php
declare(strict_types=1);

FFI::load(__DIR__ . "/points.h");
opcache_compile_file(__DIR__ . "/classes.php");
