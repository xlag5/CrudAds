<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Fornecedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php // include 'partials/nav.php'; ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <h3>Cadastrar Fornecedor</h3>
                <form id="form-fornecedor">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome do Fornecedor</label>
                        <input type="text" class="form-control" id="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="cnpj" class="form-label">CNPJ</label>
                        <input type="text" class="form-control" id="cnpj" required>
                    </div>
                     <div class="mb-3">
                        <label for="contato" class="form-label">Contato (Telefone/Email)</label>
                        <input type="text" class="form-control" id="contato">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>

            <div class="col-md-8">
                <h3>Fornecedores Cadastrados</h3>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>CNPJ</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="tabela-fornecedores">
                        <tr>
                            <td>1</td>
                            <td>Fornecedor Exemplo A</td>
                            <td>11.222.333/0001-44</td>
                            <td>
                                <button class="btn btn-sm btn-warning">Editar</button>
                                <button class="btn btn-sm btn-danger">Excluir</button>
                            </td>
                        </tr>
                         <tr>
                            <td>2</td>
                            <td>Fornecedor Exemplo B</td>
                            <td>55.666.777/0001-88</td>
                            <td>
                                <button class="btn btn-sm btn-warning">Editar</button>
                                <button class="btn btn-sm btn-danger">Excluir</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>