@extends('layouts.ascemu')

@section('content')
    <div class="content">
        <!-- Hack to make the top of the box visible :] -->
        <br />
        
        <div class="box">
            <h1 class="title">
                Welcome to AscEmu
            </h1>
            <p>
                This is a temporary page, and the time now is {{ date("h:i:sa") }}
            </p>
        </div>
    </div>
@endsection