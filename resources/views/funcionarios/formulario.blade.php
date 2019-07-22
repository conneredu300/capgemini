<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>formulario</title>

        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>
    </head>

    <body>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>            </ul>
        </div>
    @endif
    <div class="container">
        <form method="post" action="{{ route('addFuncionario') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nome">Nome</label>

                @if($errors->has('nome'))
                    <span class="help-block text-muted"><strong>{{ $errors->first('nome') }}</strong></span>
                @endif

                <input type="text" class="form-control" name="nome" id="nome" aria-describedby="infonome" required>
                <small id="infonome" class="form-text text-muted">Insira seu nome completo.</small>
            </div>

            <div class="form-group">
                <label for="nasc">Nascimento</label>

                @if($errors->has('nascimento'))
                    <span class="help-block text-muted"><strong>{{ $errors->first('nascimento') }}</strong></span>
                @endif

                <input type="date" class="form-control" name="nascimento" id="nasc" aria-describedby="infonasc" required>
                <small id="infonasc" class="form-text text-muted">Escolha sua data de nascimento.</small>
            </div>


            <div class="form-group">
                <label for="cidade">Cidade</label>

                @if($errors->has('cidade'))
                    <span class="help-block text-muted"><strong>{{ $errors->first('cidade') }}</strong></span>
                @endif

                <input type="text" class="form-control" name="cidade" id="cidade" aria-describedby="infocidade" required>
                <small id="infocidade" class="form-text text-muted">Insira o nome da sua cidade.</small>
            </div>

            <div class="form-group">
                <label for="tel">Telefone</label>

                @if($errors->has('telefone'))
                    <span class="help-block text-muted"><strong>{{ $errors->first('telefone') }}</strong></span>
                @endif

                <input type="tel" class="form-control" name="telefone" id="tel" aria-describedby="infotel" required>
                <small id="infotel" class="form-text text-muted">Insira o seu telefone.</small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </body>
</html>
