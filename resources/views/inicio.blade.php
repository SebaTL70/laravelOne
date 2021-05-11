<div>
    <h1>{{$mensaje}}</h1>
    @foreach ($dias as $orden=>$dia)
        <p>{{$orden+1}}:{{$dia}}</p>
    @endforeach
</div>