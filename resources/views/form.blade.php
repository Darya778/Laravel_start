@extends('layouts.app')

@section('title', 'Форма')

@section('content')
    <h2>Форма</h2>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form action="/form" method="POST">
        @csrf
        <label>Имя: <input type="text" name="name" value="{{ old('name') }}"></label>
        @error('name') <p>{{ $message }}</p> @enderror
        <label>Email: <input type="email" name="email" value="{{ old('email') }}"></label>
        @error('email') <p>{{ $message }}</p> @enderror
        <button type="submit">Отправить</button>
    </form>
@endsection
