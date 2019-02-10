<div class="slider">
    <ul class="slides">

        @foreach($lista as $key =>$value)
        <li>
            <img src="{{$value->imagem}}" class="img-responsive">
            <div class="caption center-align">
                @if(isset($value->titulo))
                    <h3 style="text-shadow: black 0.1em 0.1em 0.2em">"{{$value->titulo}}"</h3>
                @endif

                @if(isset($value->descricao))
                    <h5 style="text-shadow: black 0.1em 0.1em 0.2em" class="light grey-text text-lighten-3">"{{$value->descricao}}"</h5>
                @endif
            </div>
        </li>
        @endforeach

    </ul>
</div>