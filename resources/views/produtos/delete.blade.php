<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir um Produto</title>
</head>
<body>
    <h2>Excluir Produto</h2>
    <form action="{{ route('produtos.destroy', ['produto' => $produto->id]) }}" method="POST">
        @csrf <!-- Token CSRF -->
        @method('DELETE') <!-- Especifica o método DELETE -->
        <label for="nome">Tem certeza que deseja excluir este produto?</label><br/>
        <input type="text" name="nome" value="{{ $produto->nome }}" readonly><br/>
        <button type="submit">Sim</button>
    </form>
</body>
</html>
