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
<div class="map">
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
                        <option value="1">Nome</option>
                        <option value="2">Setor</option>
                    </select>
                    <input type="text" class="form-control" placeholder="Digite aqui">
                </div>
                <button class="statistics-btn">Estatísticas</button>
            </form>
        </div>
    </div>
    <article class="article is-hidden">
        <section class="container">
            <section class="mb-5 pb-5">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1">Poços de Caldas</h1>
                        <p class="h4">Informações gerais e estatísticas</p>

                    </div>
                </div>
            </section>
            <section class="mb-5 pb-5">
                <div class="row">
                    <div class="col">{!! $chartCapital->render() !!}</div>
                    <div class="col">
                        <h1>Investimento Inicial</h1>
                        <p>O polo empreendedor de Poços de Caldas possui os mais diversos tipos de investimentos, desde
                            grandes indústrias que afetam a economia de todo o estado, até empreendimentos individuais,
                            que se tornam cada vez mais comuns no município, representando cerca de 3 em cada 10
                            empreendimentos.</p>
                    </div>
                </div>
            </section>
            <section class="mb-5 pb-5">
                <div class="row">
                    <div class="col">
                        <h1>Quantas empresas estão nos nossos bairros?</h1>
                        <p>Apesar de bem distribuídas geograficamente, alguns bairros da cidade possum maior percentual
                            de empresas. Apenas no centro do município, aproximadamente 7 em cada 10 empreendimentos
                            estão estabelecidos. Vila Nova e Vila Cascata das Antas vem em seguida no ranking!</p>
                    </div>
                    <div class="col">{!! $chartBairros->render() !!}</div>
                </div>
            </section>
            <section class="mb-5 pb-5">
                <div class="row">
                    <div class="col">{!! $chartIdades->render() !!}</div>
                    <div class="col">
                        <h1>Qual é a idade das nossas empresas?</h1>
                        <p>Os últimos anos tem sido positivos para a cidade.
                        A movimentação do ecossistema empreendedor é
                            nítida nos nos últimos 5 anos e a tendência é aumentar.
                            Empreendedores tem buscado cada vez mais instalar sua nova empresa no município, gerando novos empregos e
                            perspectivas a todo instante!</p>
                    </div>
                </div>
            </section>
            <section class="mb-5 pb-5">
                <div class="row">
                    <div class="col">
                        <h1>Criação de empresas ao longo do tempo</h1>
                        <p>Novas empresas surgem a todo instante em Poços de Caldas. Os últimos anos tem sido de constante mudança e evolução na cidade que cada vez mais se solidifica como polo empreendedor. Instalar seu mais novo empreendorismo em Poços de Caldas definitivamente é uma ótima opção!</p>
                    </div>
                    <div class="col">{!! $chartEvolucao->render() !!}</div>
                </div>
            </section>
            <section class="mb-5 pb-5">
                <div class="row">
                    <div class="col">
                        <h1>Setores com maior participação no comércio</h1>
                    </div>
                </div>
                <div class="row">
                    {{--<div class="col"><h1>Setores com maior participação no comércio</h1></div>--}}
                    <div class="col">
                        <table class="table">
                            {{--<thead>--}}
                            {{--<tr>--}}
                            {{--<th>#</th>--}}
                            {{--<th>Setor</th>--}}
                            {{--<th>Percentual de Participação</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Comércio varejista de artigos do vestuário e acessórios</td>
                                {{--<td>37.745975</td>--}}
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Lanchonetes, casas de chá, de sucos e similares</td>
                                {{--<td>17.173524</td>--}}
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Comércio varejista de mercadorias em geral, com predominância de produtos
                                    alimentícios
                                </td>
                                {{--<td>15.384615</td>--}}
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Restaurantes e similares</td>
                                {{--<td>15.026834</td>--}}
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Bares e outros estabelecimentos especializados em servir bebidas</td>
                                {{--<td>10.196780</td>--}}
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Comércio a varejo de peças e acessórios novos para veículos automotores</td>
                                {{--<td>9.302326</td>--}}
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Transporte rodoviário de carga, exceto produtos perigosos e mudanças,
                                    intermunicipal,
                                    interestadual e internacional
                                </td>
                                {{--<td>7.692308</td>--}}
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Comércio varejista de outros produtos não especificados anteriormente</td>
                                {{--<td>6.976744</td>--}}
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section class="mb-5 pb-5">
                <div class="row">
                    <div class="col">
                        <h1>Maiores médias de capital social (R$) por setor</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table">
                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th>Capital Social</th>--}}
                                {{--<th>#</th>--}}
                                {{--<th>Setor</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            <tbody>
                            <tr>
                                <td>2,0M</td>
                                {{--<th scope="row">1</th>--}}
                                <td>Comércio atacadista de café em grão</td>
                            </tr>
                            <tr>
                                <td>1,6M</td>
                                {{--<th scope="row">2</th>--}}
                                <td>Outras obras de engenharia civil não especificadas anteriormente</td>
                            </tr>
                            <tr>
                                <td>1,4M</td>
                                {{--<th scope="row">3</th>--}}
                                <td>Corretagem no aluguel de imóvei</td>
                            </tr>
                            <tr>
                                <td>1,1M</td>
                                {{--<th scope="row">4</th>--}}
                                <td>Aluguel de imóveis próprios</td>
                            </tr>
                            <tr>
                                <td>1,0M</td>
                                {{--<th scope="row">5</th>--}}
                                <td>Compra e venda de imóveis próprios</td>
                            </tr>
                            <tr>
                                <td>750K</td>
                                {{--<th scope="row">6</th>--}}
                                <td>Fabricação de artigos de vidro</td>
                            </tr>
                            <tr>
                                <td>200K</td>
                                {{--<th scope="row">7</th>--}}
                                <td>Comércio por atacado de peças e acessórios para motocicletas e motonetas</td>
                            </tr>
                            <tr>
                                <td>190K</td>
                                {{--<th scope="row">8</th>--}}
                                <td>Comércio varejista de materiais de construção em geral</td>
                            </tr>
                            <tr>
                                <td>158K</td>
                                {{--<th scope="row">9</th>--}}
                                <td>Comércio varejista de combustíveis para veículos automotores</td>
                            </tr>
                            <tr>
                                <td>150K</td>
                                {{--<th scope="row">10</th>--}}
                                <td>Comércio atacadista de instrumentos e materiais para uso médico, cirúrgico,
                                    hospitalar e de laboratórios
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </section>
    </article>
</div>

<script src="js/app.js"></script>
<script src="js/map_functions.js"></script>
<script>
    $(".statistics-btn").click(function (event) {
        event.preventDefault();
        $(".map").toggleClass("is-hidden");
        $(".article").toggleClass("is-hidden");
        $(".form-row").toggleClass("is-hidden");
        $(this).text(function (i, text) {
            return text === "Estatísticas" ? "Mapa" : "Estatísticas";
        })
    });
</script>
</body>
</html>
