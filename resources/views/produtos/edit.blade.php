<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar um Produto</title>
</head>
<body>
    <h2>Editar Produto</h2>
    <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
        @csrf <!-- Token CSRF -->
        @method('PUT') <!-- Método PUT para atualização -->

        <label for="nome">Nome</label><br/>
        <input type="text" id="nome" name="nome" value="{{ $produto->nome }}" required><br/>

        <label for="custo">Custo</label><br/>
        <input type="number" id="custo" name="custo" value="{{ $produto->custo }}" required><br/>

        <label for="preco">Preço</label><br/>
        <input type="number" id="preco" name="preco" value="{{ $produto->preco }}" required><br/>

        <label for="quantidade">Quantidade</label><br/>
        <input type="number" id="quantidade" name="quantidade" value="{{ $produto->quantidade }}" required><br/>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
