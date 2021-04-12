<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel Vue — CRUD DOCTOR</title>
<! — Fonts →
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- 準備給 Vue 的掛載點 -->
    <div id="app">
        <!-- 使用我們建立的元件，
             一個有傳入名字，一個沒有 -->
        <Hello name="Tony"></Hello>
        <Hello></Hello>
    </div>
    <!-- 載入打包後的 js 檔 -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
