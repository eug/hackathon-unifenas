<!doctype html>
<html lang={{ app()->getLocale() }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Alchemists - Hackathon</title>

    <link rel="stylesheet" href="css/app.css">
</head>
<body>

{{--<div class="container">--}}
{{--<h1>Data Alchemists - Hackathon</h1>--}}
<div class="map">
    {!! Mapper::render() !!}
</div>
<div class="site-container">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Digite aqui">
                </div>
            </form>
        </div>
    </div>

</div>
</div>

<script src="js/app.js"></script>
</body>
</html>