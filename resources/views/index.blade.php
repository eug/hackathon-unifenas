<!doctype html>
<html lang={{ app()->getLocale() }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Alchemists - Hackathon</title>

    <link rel="stylesheet" href="css/app.css">

    {!! Charts::assets() !!}

</head>
<body>

{{--<div class="container">--}}
{{--<h1>Data Alchemists - Hackathon</h1>--}}
<div class="map is-active">
    {!! Mapper::render() !!}
</div>
<div class="site-container">
    <div class="row justify-content-center">
        <div class="toolbar">
            <form action="" class="toolbar-form">
                <div class="form-row">
                    <div class="input-group-addon">Filtros</div>
                    <select class="filter-select" id="inlineFormInputGroupUsername">
                        <option selected>Escolha o filtro</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <input type="text" class="form-control" placeholder="Digite aqui">
                </div>
                <button class="statistics-btn">Estatísticas</button>
            </form>
        </div>
    </div>
    <article class="article">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-1">Poços de Caldas</h1>
                    <p class="h4">Informações gerais e estatísticas</p>

                </div>
            </div>
            <div class="row">
                <div class="col">{!! $chartCapital->render() !!}</div>
                <div class="col">
                    <h1>Capital Declarado</h1>
                    <p>Cerca de 3 em cada 10 empresas de Poços de Caldas não possuem renda declarada.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>Os 10 bairros com mais empresas</h1>
                    <p>O centro da cidade contém aproximadamente 7 em cada 10 empresas estabelecidas em Poços de Caldas!</p>
                </div>
                <div class="col">{!! $chartBairros->render() !!}</div>
            </div>
            <div class="row">
                <div class="col">{!! $chartIdades->render() !!}</div>
                <div class="col">
                    <h1>Qual é a idade das nossas empresas?</h1>
                    <p>Veja no gráfico ao lado, burrinho!</p>
                </div>
            </div>
            <div class="row">
                <div class="col">{!! $chartEvolucao->render() !!}</div>
                <div class="col">
                    <h1>Criação de empresas ao longo do tempo</h1>
                    <p>Blah blah.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">{!! $chartSetoresComercio->render() !!}</div>
                <div class="col">
                    <h1>Ranking de setores do comércio</h1>
                    <p>Blah blah.</p>
                </div>
            </div>
        </div>

    </article>
</div>

<script src="js/app.js"></script>
<script src="js/map_functions.js"></script>
<script>
    $(".statistics-btn").click(function (event) {
        event.preventDefault();
        $(".map").toggleClass("is-active");
        $(".form-row").toggleClass("is-hidden");
        $(this).text(function (i, text) {
            return text === "Estatísticas" ? "Mapa" : "Estatísticas";
        })
    });
</script>
</body>
</html>
