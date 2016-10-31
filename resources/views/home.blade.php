@extends("base.layout")

@section("content")
<div class="jumbotron">
    <h1>Cursos de Capacitación<br>
        <small class="green"></small>
    </h1>
    <p>Serie de cursos y talleres para el equipo de la Oficina Técnica de Informática.</p>
    <a href="#fakelink" class="btn btn-success btn-embossed btn-wide">@{{ cta }}</a>
    <p>{{ var_dump($dada) }}</p>
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
            cta: 'Ver cursos!!'
        }
    });
    console.dir(App);
</script>
@endsection
