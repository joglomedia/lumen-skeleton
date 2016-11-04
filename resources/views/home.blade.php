@extends("base.layout")

@section("content")
<div class="jumbotron">
    <h1>Cursos de Capacitación<br>
        <small class="green"></small>
    </h1>
    <p>Serie de cursos y talleres para el equipo de la Oficina Técnica de Informática.</p>
    <a href="#fakelink" class="btn btn-success btn-embossed btn-wide">@{{ cta }}</a>
    <h2>Titular: {{ $dada->name }}</h2>
    <p>Groups</p>
    @foreach($dada->groups as $item)
    <p>{{ $item->name }} | {{ $item->status }}</p>
    <ul>
        @foreach($item->balances as $item)
            <li>
                {{ $item->item->name }} (<i>{{ $item->item->description }}</i>) |
                {{ $item->isPositive() ? '+' : '-' }} S/{{ $item->item->mount }}
            </li>
        @endforeach
    </ul>
    @endforeach
    <p>Ingrese valor: <input type="text" class="input-control" v-model="cta"></p>
</div>
<div class="well well-sm">
    @{{ $data |json }}
</div>
@endsection

@section("scripts")
<script type="text/javascript">
    var App = new Vue({
        el: '#App',
        data: {
            cta: 'Ver cursos!!',
            foo: {!! json_encode($dada->groups) !!}
        }
    });
    console.dir(App);
</script>
@endsection
