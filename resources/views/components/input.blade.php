<div>
    <label for="{{$name}}">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" id="{{$name}}" value="{{old($name)}}">
    @if($demo != 0)
        {{$demo}}
    @endif
    @error($name)
        <span style="color: red">{{$message}}</span>
    @enderror
</div>