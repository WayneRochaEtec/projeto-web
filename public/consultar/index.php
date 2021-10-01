<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <title>cadastrar</title>
</head>

<body>
    <div class="container-flex">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">Clientes</span>
                </a>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="../cadastrar/index.html" class="nav-link"
aria-current="page">CADASTRO</a></li>
                    <li class="nav-item"><a href="../consultar/index.html" class="nav-link active">CONSULTA</a></li>
                </ul>
            </header>
        </div>
        <main class="container align-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nº</th>
                        <th scope="col" style="white-space: nowrap;">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Origem</th>
                        <th scope="col">Contato</th>
                        <th scope="col">Observação</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Wayne André</td>
                        <td class="phone">(11) 4002-8922</td>
                        <td class="origin">Fixo</td>
                        <td class="date">13/07/2019</td>
                        <td class="obs"></td>
                        <td>
                            <button type="button" class="btn btn-outline-primary">editar</button>
                            <button type="button" class="btn btn-outline-primary">excluir</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
    <style>
        body{
            overflow-x: hidden;
        }
        main{
            overflow-x: scroll;
        }
        :is(.phone, .origin, .date, .obs):empty::after{
            content: "--";
        }
        @media screen and (orientation: landscape){
            main::-webkit-scrollbar{
                display: none;
            }   
        }
    </style>
</body>
</html>