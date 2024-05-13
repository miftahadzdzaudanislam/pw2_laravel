<x-layout>
    <x-slot name="title">DASHBOARD</x-slot>
    <x-slot name="card_title">Dashboard Admin</x-slot>
    <h1>Welcome to Dashboard Admin {{$nama}}</h1>
    {{date('y/m/d')}} <br>
    {{time()}} <br>
    {{date('h:i:sa')}}

    {{--komentar--}}
</x-layout>