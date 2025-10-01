<?php
// api/index.php

// Request の URI を書き換える
$request = Illuminate\Http\Request::capture();
$path = $request->getPathInfo();

// /api プレフィックスを削除
if (str_starts_with($path, '/api')) {
    $request->server->set('REQUEST_URI', substr($path, 4) ?: '/');
}

require __DIR__ . '/../public/index.php';
