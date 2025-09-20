<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Cesta de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php // include 'partials/nav.php'; ?>

    <div class="container mt-4">
        <h1>Minha Cesta</h1>
        <div class="row mt-4">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Produto A</td>
                            <td>R$ 25,50</td>
                        </tr>
                        <tr>
                            <td>Produto B</td>
                            <td>R$ 99,99</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Resumo do Pedido</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total de produtos:</span>
                                <strong>2</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Valor Total:</span>
                                <strong>R$ 125,49</strong>
                            </li>
                        </ul>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary">Finalizar Compra</button>
                            <button class="btn btn-outline-danger">Limpar Cesta</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>