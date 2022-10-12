@include('templates.header')

@yield('content-1')

@yield('content-2')

@isset($main)
        <center>
                <p><u>Data of main: <b>{{ $main }}</b></u></p>
        </center>
@endisset

@include('templates.footer')