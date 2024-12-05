@extends('layouts.app')

@section('title', 'Данные')

@section('content')
    <h2>Данные</h2>
    <table>
        <thead>
            <tr>
                <th>Имя</th>
                <th>Email</th>
                <th>Дата</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataList as $data)
                <tr>
                    <td>{{ $data['name'] }}</td>
                    <td>{{ $data['email'] }}</td>
                    <td>{{ $data['timestamp'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
