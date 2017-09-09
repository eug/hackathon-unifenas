<!doctype html>
<html lang={{ app()->getLocale() }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Eugênio Cabral, Hugo Camargo, Maurício Vidal, Vinícius Albano">

    <title>Data Alchemists - Hackathon</title>

    <link rel="stylesheet" href="/css/app.css">

    {!! Charts::assets() !!}

</head>
<body>

<div class="map">
    {!! Mapper::render() !!}
</div>
<div class="site-container">
    <div class="row justify-content-center">
        <div class="toolbar">
            <form action="" class="toolbar-form" method="GET">
                {{--{{ csrf_field() }}--}}
                <div class="form-row">
                    <div class="input-group-addon">Filtros</div>
                    <select class="filter-select" id="inlineFormInputGroupUsername">
                        <option selected value="1">Nome</option>
                        <option value="2">Setor</option>
                    </select>
                    <input type="text" class="form-control by-name" placeholder="Digite aqui">
                    <select class="form-control filter-input by-category" placeholder="Digite aqui">
                        <option selected>Escolha um setor</option>
                        <option value="47.81-4-00">Comércio varejista de artigos do vestuário e acessórios</option>
                        <option value="47.83-1-01">Comércio varejista de artigos de joalheria</option>
                        <option value="46.33-8-01">Comércio atacadista de frutas, verduras, raízes, tubérculos,
                            hortaliças e legumes frescos
                        </option>
                        <option value="47.59-8-99">Comércio varejista de outros artigos de uso pessoal e doméstico não
                            especificados anteriormente
                        </option>
                        <option value="56.11-2-01">Restaurantes e similares</option>
                        <option value="47.82-2-01">Comércio varejista de calçados</option>
                        <option value="47.42-3-00">Comércio varejista de material elétrico</option>
                        <option value="45.30-7-03">Comércio a varejo de peças e acessórios novos para veículos
                            automotores
                        </option>
                        <option value="82.19-9-99">Preparação de documentos e serviços especializados de apoio
                            administrativo não especificados anteriormente
                        </option>
                        <option value="47.44-0-99">Comércio varejista de materiais de construção em geral</option>
                        <option value="56.11-2-03">Lanchonetes, casas de chá, de sucos e similares</option>
                        <option value="10.53-8-00">Fabricação de sorvetes e outros gelados comestíveis</option>
                        <option value="46.39-7-01">Comércio atacadista de produtos alimentícios em geral</option>
                        <option value="14.12-6-01">Confecção de peças de vestuário, exceto roupas íntimas e as
                            confeccionadas sob medida
                        </option>
                        <option value="47.22-9-01">Comércio varejista de carnes - açougues</option>
                        <option value="43.22-3-01">Instalações hidráulicas, sanitárias e de gás</option>
                        <option value="33.14-7-09">Manutenção e reparação de máquinas de escrever, calcular e de outros
                            equipamentos não-eletrônicos para escritório
                        </option>
                        <option value="56.11-2-02">Bares e outros estabelecimentos especializados em servir bebidas
                        </option>
                        <option value="47.12-1-00">Comércio varejista de mercadorias em geral, com predominância de
                            produtos alimentícios - minimercados, mercearias e armazéns
                        </option>
                        <option value="46.35-4-99">Comércio atacadista de bebidas não especificadas anteriormente
                        </option>
                        <option value="47.55-5-01">Comércio varejista de tecidos</option>
                        <option value="96.02-5-01">Cabeleireiros, manicure e pedicure</option>
                        <option value="93.29-8-99">Outras atividades de recreação e lazer não especificadas
                            anteriormente
                        </option>
                        <option value="45.20-0-03">Serviços de manutenção e reparação elétrica de veículos automotores
                        </option>
                        <option value="47.54-7-01">Comércio varejista de móveis</option>
                        <option value="47.23-7-00">Comércio varejista de bebidas</option>
                        <option value="45.11-1-02">Comércio a varejo de automóveis, camionetas e utilitários usados
                        </option>
                        <option value="56.20-1-02">Serviços de alimentação para eventos e recepções - bufê</option>
                        <option value="68.10-2-02">Aluguel de imóveis próprios</option>
                        <option value="82.19-9-01">Fotocópias</option>
                        <option value="43.21-5-00">Instalação e manutenção elétrica</option>
                        <option value="47.13-0-01">Lojas de departamentos ou magazines</option>
                        <option value="47.71-7-02">Comércio varejista de produtos farmacêuticos, com manipulação de
                            fórmulas
                        </option>
                        <option value="47.44-0-05">Comércio varejista de materiais de construção não especificados
                            anteriormente
                        </option>
                        <option value="47.21-1-02">Padaria e confeitaria com predominância de revenda</option>
                        <option value="45.30-7-01">Comércio por atacado de peças e acessórios novos para veículos
                            automotores
                        </option>
                        <option value="47.82-2-02">Comércio varejista de artigos de viagem</option>
                        <option value="95.21-5-00">Reparação e manutenção de equipamentos eletroeletrônicos de uso
                            pessoal e doméstico
                        </option>
                        <option value="47.71-7-01">Comércio varejista de produtos farmacêuticos, sem manipulação de
                            fórmulas
                        </option>
                        <option value="47.89-0-05">Comércio varejista de produtos saneantes domissanitários</option>
                        <option value="47.71-7-04">Comércio varejista de medicamentos veterinários</option>
                        <option value="47.72-5-00">Comércio varejista de cosméticos, produtos de perfumaria e de higiene
                            pessoal
                        </option>
                        <option value="20.61-4-00">Fabricação de sabões e detergentes sintéticos</option>
                        <option value="47.63-6-01">Comércio varejista de brinquedos e artigos recreativos</option>
                        <option value="47.53-9-00">Comércio varejista especializado de eletrodomésticos e equipamentos
                            de áudio e vídeo
                        </option>
                        <option value="47.51-2-02">Recarga de cartuchos para equipamentos de informática</option>
                        <option value="45.20-0-07">Serviços de instalação, manutenção e reparação de acessórios para
                            veículos automotores
                        </option>
                        <option value="47.52-1-00">Comércio varejista especializado de equipamentos de telefonia e
                            comunicação
                        </option>
                        <option value="47.21-1-04">Comércio varejista de doces, balas, bombons e semelhantes</option>
                        <option value="47.61-0-03">Comércio varejista de artigos de papelaria</option>
                        <option value="47.51-2-01">Comércio varejista especializado de equipamentos e suprimentos de
                            informática
                        </option>
                        <option value="47.89-0-04">Comércio varejista de animais vivos e de artigos e alimentos para
                            animais de estimação
                        </option>
                        <option value="10.93-7-01">Fabricação de produtos derivados do cacau e de chocolates</option>
                        <option value="82.11-3-00">Serviços combinados de escritório e apoio administrativo</option>
                        <option value="23.30-3-02">Fabricação de artefatos de cimento para uso na construção</option>
                        <option value="47.56-3-00">Comércio varejista especializado de instrumentos musicais e
                            acessórios
                        </option>
                        <option value="47.89-0-99">Comércio varejista de outros produtos não especificados
                            anteriormente
                        </option>
                        <option value="69.20-6-01">Atividades de contabilidade</option>
                        <option value="47.74-1-00">Comércio varejista de artigos de óptica</option>
                        <option value="47.85-7-99">Comércio varejista de outros artigos usados</option>
                        <option value="14.12-6-02">Confecção, sob medida, de peças do vestuário, exceto roupas íntimas
                        </option>
                        <option value="33.12-1-03">Manutenção e reparação de aparelhos eletromédicos e
                            eletroterapêuticos e equipamentos de irradiação
                        </option>
                        <option value="77.22-5-00">Aluguel de fitas de vídeo, DVDs e similares</option>
                        <option value="47.73-3-00">Comércio varejista de artigos médicos e ortopédicos</option>
                        <option value="46.18-4-01">Representantes comerciais e agentes do comércio de medicamentos,
                            cosméticos e produtos de perfumaria
                        </option>
                        <option value="47.13-0-02">Lojas de variedades, exceto lojas de departamentos ou magazines
                        </option>
                        <option value="45.30-7-05">Comércio a varejo de pneumáticos e câmaras-de-ar</option>
                        <option value="47.31-8-00">Comércio varejista de combustíveis para veículos automotores</option>
                        <option value="52.23-1-00">Estacionamento de veículos</option>
                        <option value="62.01-5-01">Desenvolvimento de programas de computador sob encomenda</option>
                        <option value="26.21-3-00">Fabricação de equipamentos de informática</option>
                        <option value="96.02-5-02">Atividades de estética e outros serviços de cuidados com a beleza
                        </option>
                        <option value="47.63-6-03">Comércio varejista de bicicletas e triciclos; peças e acessórios
                        </option>
                        <option value="47.29-6-99">Comércio varejista de produtos alimentícios em geral ou especializado
                            em produtos alimentícios não especificados anteriormente
                        </option>
                        <option value="47.89-0-01">Comércio varejista de suvenires, bijuterias e artesanatos</option>
                        <option value="32.40-0-03">Fabricação de mesas de bilhar, de sinuca e acessórios associada à
                            locação
                        </option>
                        <option value="93.13-1-00">Atividades de condicionamento físico</option>
                        <option value="64.62-0-00">Holdings de instituições não-financeiras</option>
                        <option value="25.11-0-00">Fabricação de estruturas metálicas</option>
                        <option value="47.24-5-00">Comércio varejista de hortifrutigranjeiros</option>
                        <option value="77.23-3-00">Aluguel de objetos do vestuário, jóias e acessórios</option>
                        <option value="73.11-4-00">Agências de publicidade</option>
                        <option value="65.12-0-00">Sociedade seguradora de seguros não vida</option>
                        <option value="49.30-2-02">Transporte rodoviário de carga, exceto produtos perigosos e mudanças,
                            intermunicipal, interestadual e internacional
                        </option>
                        <option value="95.11-8-00">Reparação e manutenção de computadores e de equipamentos
                            periféricos
                        </option>
                        <option value="45.30-7-04">Comércio a varejo de peças e acessórios usados para veículos
                            automotores
                        </option>
                        <option value="46.21-4-00">Comércio atacadista de café em grão</option>
                        <option value="68.10-2-01">Compra e venda de imóveis próprios</option>
                        <option value="23.19-2-00">Fabricação de artigos de vidro</option>
                        <option value="75.00-1-00">Atividades veterinárias</option>
                        <option value="25.12-8-00">Fabricação de esquadrias de metal</option>
                        <option value="47.41-5-00">Comércio varejista de tintas e materiais para pintura</option>
                        <option value="73.19-0-02">Promoção de vendas</option>
                        <option value="47.61-0-01">Comércio varejista de livros</option>
                        <option value="47.89-0-08">Comércio varejista de artigos fotográficos e para filmagem</option>
                        <option value="47.11-3-02">Comércio varejista de mercadorias em geral, com predominância de
                            produtos alimentícios - supermercados
                        </option>
                        <option value="46.91-5-00">Comércio atacadista de mercadorias em geral, com predominância de
                            produtos alimentícios
                        </option>
                        <option value="18.13-0-99">Impressão de material para outros usos</option>
                        <option value="46.32-0-02">Comércio atacadista de farinhas, amidos e féculas</option>
                        <option value="47.55-5-02">Comercio varejista de artigos de armarinho</option>
                        <option value="47.85-7-01">Comércio varejista de antigüidades</option>
                        <option value="35.14-0-00">Distribuição de energia elétrica</option>
                        <option value="47.11-3-01">Comércio varejista de mercadorias em geral, com predominância de
                            produtos alimentícios - hipermercados
                        </option>
                        <option value="71.12-0-00">Serviços de engenharia</option>
                        <option value="85.93-7-00">Ensino de idiomas</option>
                        <option value="46.32-0-01">Comércio atacadista de cereais e leguminosas beneficiados</option>
                        <option value="95.29-1-02">Chaveiros</option>
                        <option value="47.43-1-00">Comércio varejista de vidros</option>
                        <option value="96.09-2-08">Higiene e embelezamento de animais domésticos</option>
                        <option value="46.45-1-01">Comércio atacadista de instrumentos e materiais para uso médico,
                            cirúrgico, hospitalar e de laboratórios
                        </option>
                        <option value="46.31-1-00">Comércio atacadista de leite e laticínios</option>
                        <option value="82.30-0-01">Serviços de organização de feiras, congressos, exposições e festas
                        </option>
                        <option value="46.89-3-99">Comércio atacadista especializado em outros produtos intermediários
                            não especificados anteriormente
                        </option>
                        <option value="47.84-9-00">Comércio varejista de gás liqüefeito de petróleo (GLP)</option>
                        <option value="47.57-1-00">Comércio varejista especializado de peças e acessórios para aparelhos
                            eletroeletrônicos para uso doméstico, exceto informática e comunicação
                        </option>
                        <option value="47.83-1-02">Comércio varejista de artigos de relojoaria</option>
                        <option value="47.29-6-01">Tabacaria</option>
                        <option value="95.29-1-99">Reparação e manutenção de outros objetos e equipamentos pessoais e
                            domésticos não especificados anteriormente
                        </option>
                        <option value="46.17-6-00">Representantes comerciais e agentes do comércio de produtos
                            alimentícios, bebidas e fumo
                        </option>
                        <option value="42.99-5-99">Outras obras de engenharia civil não especificadas anteriormente
                        </option>
                        <option value="53.10-5-01">Atividades do Correio Nacional</option>
                        <option value="25.13-6-00">Fabricação de obras de caldeiraria pesada</option>
                        <option value="10.91-1-02">Fabricação de produtos de padaria e confeitaria com predominância de
                            produção própria
                        </option>
                        <option value="47.63-6-02">Comércio varejista de artigos esportivos</option>
                        <option value="45.11-1-03">Comércio por atacado de automóveis, camionetas e utilitários novos e
                            usados
                        </option>
                        <option value="47.44-0-01">Comércio varejista de ferragens e ferramentas</option>
                        <option value="25.99-3-99">Fabricação de outros produtos de metal não especificados
                            anteriormente
                        </option>
                        <option value="42.21-9-05">Manutenção de estações e redes de telecomunicações</option>
                        <option value="47.55-5-03">Comercio varejista de artigos de cama, mesa e banho</option>
                        <option value="31.02-1-00">Fabricação de móveis com predominância de metal</option>
                        <option value="45.20-0-06">Serviços de borracharia para veículos automotores</option>
                        <option value="77.19-5-99">Locação de outros meios de transporte não especificados
                            anteriormente, sem condutor
                        </option>
                        <option value="47.63-6-04">Comércio varejista de artigos de caça, pesca e camping</option>
                        <option value="47.32-6-00">Comércio varejista de lubrificantes</option>
                        <option value="56.20-1-03">Cantinas - serviços de alimentação privativos</option>
                        <option value="25.99-3-02">Serviço de corte e dobra de metais</option>
                        <option value="45.41-2-02">Comércio por atacado de peças e acessórios para motocicletas e
                            motonetas
                        </option>
                        <option value="47.59-8-01">Comércio varejista de artigos de tapeçaria, cortinas e persianas
                        </option>
                        <option value="47.54-7-02">Comércio varejista de artigos de colchoaria</option>
                        <option value="94.20-1-00">Atividades de organizações sindicais</option>
                        <option value="29.49-2-99">Fabricação de outras peças e acessórios para veículos automotores não
                            especificadas anteriormente
                        </option>
                        <option value="18.22-9-01">Serviços de encadernação e plastificação</option>
                        <option value="45.20-0-01">Serviços de manutenção e reparação mecânica de veículos automotores
                        </option>
                        <option value="77.21-7-00">Aluguel de equipamentos recreativos e esportivos</option>
                        <option value="13.54-5-00">Fabricação de tecidos especiais, inclusive artefatos</option>
                        <option value="68.21-8-02">Corretagem no aluguel de imóveis</option>
                        <option value="74.90-1-99">Outras atividades profissionais, científicas e técnicas não
                            especificadas anteriormente
                        </option>
                        <option value="58.13-1-00">Edição de revistas</option>
                        <option value="82.99-7-07">Salas de acesso à internet</option>
                        <option value="43.99-1-03">Obras de alvenaria</option>
                        <option value="77.29-2-01">Aluguel de aparelhos de jogos eletrônicos</option>
                        <option value="41.10-7-00">Incorporação de empreendimentos imobiliários</option>
                    </select>
                </div>
                <a class="statistics-btn">Visão Geral</a>
            </form>
            <div style="font-weight: 400; margin-top:10px">
                <span><strong>Autores:</strong></span>
                <span>
                    <a style="padding-right:10px" href="https://www.linkedin.com/in/eugfc">Eugênio Cabral</a>
                    <a style="padding-right:10px" href="https://www.linkedin.com/in/hugo-pinto-6023a9141">Hugo Camargo</a>
                    <a style="padding-right:10px" href="https://www.linkedin.com/in/maurício-roque-vidal-11118454">Maurício Vidal</a>
                    <a style="padding-right:10px" href="https://www.linkedin.com/in/vinialbano">Vinícius Albano</a>
                </span>
            </div>
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
                            Empreendedores tem buscado cada vez mais instalar sua nova empresa no município, gerando
                            novos empregos e
                            perspectivas a todo instante!</p>
                    </div>
                </div>
            </section>
            <section class="mb-5 pb-5">
                <div class="row">
                    <div class="col">
                        <h1>Criação de empresas ao longo do tempo</h1>
                        <p>Novas empresas surgem a todo instante em Poços de Caldas. Os últimos anos tem sido de
                            constante mudança e evolução na cidade que cada vez mais se solidifica como polo
                            empreendedor. Instalar seu mais novo empreendorismo em Poços de Caldas definitivamente é uma
                            ótima opção!</p>
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
                    <div class="col">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Comércio varejista de artigos do vestuário e acessórios</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Lanchonetes, casas de chá, de sucos e similares</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Comércio varejista de mercadorias em geral, com predominância de produtos
                                    alimentícios
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Restaurantes e similares</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Bares e outros estabelecimentos especializados em servir bebidas</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Comércio a varejo de peças e acessórios novos para veículos automotores</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Transporte rodoviário de carga, exceto produtos perigosos e mudanças,
                                    intermunicipal,
                                    interestadual e internacional
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Comércio varejista de outros produtos não especificados anteriormente</td>
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
                            <tbody>
                            <tr>
                                <td>2,0M</td>
                                <td>Comércio atacadista de café em grão</td>
                            </tr>
                            <tr>
                                <td>1,6M</td>
                                <td>Outras obras de engenharia civil não especificadas anteriormente</td>
                            </tr>
                            <tr>
                                <td>1,4M</td>
                                <td>Corretagem no aluguel de imóvei</td>
                            </tr>
                            <tr>
                                <td>1,1M</td>
                                <td>Aluguel de imóveis próprios</td>
                            </tr>
                            <tr>
                                <td>1,0M</td>
                                <td>Compra e venda de imóveis próprios</td>
                            </tr>
                            <tr>
                                <td>750K</td>
                                <td>Fabricação de artigos de vidro</td>
                            </tr>
                            <tr>
                                <td>200K</td>
                                <td>Comércio por atacado de peças e acessórios para motocicletas e motonetas</td>
                            </tr>
                            <tr>
                                <td>190K</td>
                                <td>Comércio varejista de materiais de construção em geral</td>
                            </tr>
                            <tr>
                                <td>158K</td>
                                <td>Comércio varejista de combustíveis para veículos automotores</td>
                            </tr>
                            <tr>
                                <td>150K</td>
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


<script src="/js/app.js"></script>
<script src="/js/map_functions.js"></script>
<script>

    $(document).ready(function () {
        $(".filter-input").select2();

        $('.by-category').on('change', function () {
            let code = $(this).val();
            $(".toolbar-form").attr('action', "/setor/" + code).submit();
        });

        $('.by-name').on("keypress", function (e) {
            let code = (e.keyCode ? e.keyCode : e.which);
            if (code == 13) {
                e.preventDefault();
                e.stopPropagation();
                let name = $(this).val();
                console.log(name);
                $(".toolbar-form").attr('action', "/nome/" + name).submit();

            }
        });

        $(".statistics-btn").click(function (event) {
            event.preventDefault();
            $(".map").toggleClass("is-hidden");
            $(".article").toggleClass("is-hidden");
            $(".form-row").toggleClass("is-hidden");
            $(this).text(function (i, text) {
                return text === "Estatísticas" ? "Visão Geral" : "Estatísticas";
            })
        });

        $(".filter-select").change(function () {
            if ($(this).val() === '2') {
                $('.by-category').each(function () {
                    this.style.setProperty('display', 'block', 'important');
                });
                $('.by-category ~ .select2').each(function () {
                    this.style.setProperty('display', 'block', 'important');
                });
                $(".by-name").css("display", "none");
            } else {
                $(".by-category").css("display", "none");
                $(".by-category ~ .select2").css("display", "none");
                $(".by-name").css("display", "block");
            }
        });

    });

</script>
</body>
</html>
