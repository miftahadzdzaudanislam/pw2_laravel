<x-layout>
    @php
        $user = "Miftah";
        $role = "Admin"
    @endphp

    @if($role == "Admin")
        <h3>Selamat datang {{$user}}</h3>
    @endif
</x-layout>