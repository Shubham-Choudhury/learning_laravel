<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade Syntax</title>
    <style>
        section{
            display: flex;
            justify-content: space-between;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <center>
        <h1>Blade Syntax</h1>
        <h3>Blade is a simple, yet powerful templating engine provided with Laravel.</h3>
    </center>
    <section>
        <div>

            {{------------------------------------ PRINTING DATA ------------------------------------}}
            @php
                $data1 = "<h3>printing using {{ }}</h3>";
                $data2 = "<h3>printing using {!! !!}</h3>"
            @endphp

            <p><u>Printing Data</u></p>
            {{ $data1 }}
            {!! $data2 !!}
            
    
            {{------------------------------------ IF-ELSE CONDITIONS ------------------------------------}}
            @php
                $age = 17;
            @endphp

            <p><u>If-Else Condition</u></p>
            @if($age > 18 && $age < 51)
                <h3>You are an Adult</h3>
            @elseif($age > 12 && $age < 19)
                <h3>You are a Teenager</h3>
            @elseif($age > 2 && $age < 13)
                <h3>You are a Child</h3>
            @elseif($age > 0 && $age < 3)
                <h3>You are a Baby</h3>
            @elseif($age > -1 && $age < 1)
                <h3>You are not born yet</h3>
            @else
                <h3>You are a Senior Citizen</h3>
            @endif
    
    
            {{------------------------------------ UNLESS ------------------------------------}}
            @unless($age >= 18)
                <p><u>Unless</u></p>
                <h3>Too Young to Drive</h3>
            @endunless
    
    
            {{------------------------------------ ISSET ------------------------------------}}
            @php
                $name = 'John Doe';
                $myAge = null;
            @endphp
    
            @isset($name)
                <p><u>Isset</u></p>
                <h3>Name is set</h3>
            @endisset
            @isset($myAge)
                <h3>Age is set</h3>
            @endisset
        </div>
    
        <div>
            {{------------------------------------ FOREACH ------------------------------------}}
            @php
                $names = ['John', 'Jane', 'Doe'];
            @endphp
    
            <p><u>Foreach Loop</u></p>
            @foreach($names as $name)
                <h3>{{$name}}</h3>
            @endforeach
        </div>
    
        <div>
            {{------------------------------------ FOR ------------------------------------}}
            <p><u>For Loop</u></p>
            @for($i = 0; $i < 10; $i++)
                <h3>{{$i}}</h3>
            @endfor
        </div>
    
        <div>
            {{------------------------------------ WHILE ------------------------------------}}
            <p><u>While Loop</u></p>
            @php
                $i = 0;
            @endphp
            @while($i < 10)
                <h3>{{$i}}</h3>
                @php
                    $i++;
                @endphp
            @endwhile
        </div>
    
        <div>
            {{------------------------------------ For-Each Loop with key ------------------------------------}}
            @php
                $names = ['Shubham' => 'Choudhury', 'Riju' => 'Mondal', 'Subhadip' => 'Nag', 'Souvik' => 'Das', 'Avijit' => 'Mondal', 'Rahul' => 'Das'];
            @endphp
    
            <p><u>Foreach Loop with key</u></p>
            @foreach($names as $key => $name)
                <h3>{{$key}} => {{$name}}</h3>
            @endforeach
        </div>
    
        <div>
            {{------------------------------------ SWITCH ------------------------------------}}
            <p><u>Switch</u></p>
            @switch($age)
                @case(18)
                    <h3>You are 18</h3>
                    @break
                @case(19)
                    <h3>You are 19</h3>
                    @break
                @default
                    <h3>You are not 18 or 19</h3>
            @endswitch
    
    
            {{------------------------------------ BREAK ------------------------------------}}
            <p><u>Break</u></p>
            @for($i = 0; $i < 10; $i++)
                @if($i == 5)
                    @break
                @endif
                <h3>{{$i}}</h3>
            @endfor
    
    
            {{------------------------------------ CONTINUE ------------------------------------}}
            <p><u>Continue</u></p>
            @for($i = 0; $i < 10; $i++)
                @if($i == 5)
                    @continue
                @endif
                <h3>{{$i}}</h3>
            @endfor
        </div>
    </section>
</body>
</html>