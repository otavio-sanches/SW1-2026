<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Login - Minha Empresa</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" />

    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Minha Empresa</a>
        </div>
    </nav>

    <!-- TOPO -->
    <header class="masthead">
        <div class="container text-center">
            <div class="masthead-subheading">Acesse sua conta</div>
            <div class="masthead-heading text-uppercase">Área de Login</div>
        </div>
    </header>

    <!-- FORMULÁRIO -->
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">

                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0">Entrar</h4>
                    </div>

                    <div class="card-body">

                        <form action="processa.php" method="POST">

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Digite seu e-mail"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password" class="form-control"
                                    id="password"
                                    name="senha"
                                    placeholder="Digite sua senha"
                                    required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Entrar
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer py-4 mt-5 bg-light">
        <div class="container text-center">

            <p class="mb-2">© 2026 - Otávio Sanches Carvalho. Todos os direitos reservados.</p>

            <div>
                <a class="text-decoration-none me-3" href="#">Política de Privacidade</a>
                <a class="text-decoration-none" href="#">Termos de Uso</a>
            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>