@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img
                    src="https://instagram.fprg1-1.fna.fbcdn.net/vp/e1ee0f88130e2fcc1bb6e14d9299d206/5E82A0D7/t51.2885-19/s150x150/70985486_577637296311063_2240788552625422336_n.jpg?_nc_ht=instagram.fprg1-1.fna.fbcdn.net"
                    class="rounded-circle">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{$user->username}}</h1>
                    <a href="#">add new post</a>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>153</strong> post</div>
                    <div class="pr-5"><strong>23л</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url ?? 'N/A'}}</a></div>
            </div>
        </div>

        <div class="row pt-6">
            <div class="col-4">
                <img
                    src="https://instagram.fprg1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.29.804.804a/s640x640/73329016_500631560534931_6641163343711350786_n.jpg?_nc_ht=instagram.fprg1-1.fna.fbcdn.net&_nc_cat=103&oh=938abb7a346cf21290ea11f7f5042a7b&oe=5E89117F"
                    class="w-100">
            </div>
            <div class="col-4">
                <img
                    src="https://instagram.fprg1-1.fna.fbcdn.net/v/t51.2885-15/e35/c127.0.496.496a/71842560_179815429869179_5569562397308320476_n.jpg?_nc_ht=instagram.fprg1-1.fna.fbcdn.net&_nc_cat=111&oh=f6222705b9036b160e8d3aada36e4c9b&oe=5E6CEDCC"
                    class="w-100">
            </div>
            <div class="col-4">
                <img
                    src="https://instagram.fprg1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c2.0.745.745a/s640x640/73423634_2423788067939118_598762339110485792_n.jpg?_nc_ht=instagram.fprg1-1.fna.fbcdn.net&_nc_cat=106&oh=d7c85b1177c6adef4a90e9bae5f7406b&oe=5E748490"
                    class="w-100">
            </div>
        </div>
    </div>
@endsection
