@extends('layouts.index')


<style>
    body, html {
        height: 100%;
    }
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }
    .error-message {
        text-align: center;
    }
</style>
</head>
<body>
<div class="container">
    <div class="error-message">
        <h5>{{ $errorMessage }}</h5>
        <h3>You do not have permission to edit or delete this blog post!</h3>
    </div>
</div>