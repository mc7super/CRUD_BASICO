<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Produto</title>
</head>
<body>
    <form action="{{ route('produtos.store') }}" method="POST"> <!-- Método POST -->
        @csrf <!-- Token CSRF -->
        <label for="nome">Nome</label><br/>
        <input type="text" id="nome" name="nome" required><br/>
        <label for="custo">Custo</label><br/>
        <input type="text" id="custo" name="custo" required><br/>
        <label for="preco">Preço</label><br/>
        <input type="text" id="preco" name="preco" required><br/>
        <label for="quantidade">Quantidade</label><br/>
        <input type="text" id="quantidade" name="quantidade" required><br/>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
