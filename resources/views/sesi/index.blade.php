@extends('layout/aplikasi')

@section('perpustakaanphp artisan ')
    <div class="w-50 center border rounded px-3 py-3 mx-aouto">
        <h1>login</h1>
        <form action="/Pengunjung/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>

@endsection