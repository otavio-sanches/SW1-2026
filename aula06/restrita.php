<?php
    $nome = isset($_GET["nome"]) ? htmlspecialchars($_GET["nome"]) : "Usuário";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Área Restrita - Minha Empresa</title>

    <link rel="icon" href="assets/favicon.ico" />

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
            <div class="masthead-subheading">
                Bem-vindo, <?php echo $nome; ?> 👋
            </div>

            <div class="masthead-heading text-uppercase">
                Área Restrita
            </div>

            <a class="btn btn-primary mt-3" href="index.html">Voltar ao site</a>
        </div>
    </header>

    <!-- SERVIÇOS -->
    <section class="page-section" id="services">
        <div class="container text-center">

            <h2 class="section-heading text-uppercase">O que você pode fazer aqui</h2>
            <h3 class="section-subheading text-muted">Acesso às funcionalidades do sistema.</h3>

            <div class="row mt-5">

                <div class="col-md-4">
                    <i class="fas fa-user fa-3x text-primary mb-3"></i>
                    <h4>Seu Perfil</h4>
                    <p class="text-muted">Visualize e edite suas informações pessoais.</p>
                </div>

                <div class="col-md-4">
                    <i class="fas fa-cog fa-3x text-primary mb-3"></i>
                    <h4>Configurações</h4>
                    <p class="text-muted">Gerencie preferências e configurações da conta.</p>
                </div>

                <div class="col-md-4">
                    <i class="fas fa-lock fa-3x text-primary mb-3"></i>
                    <h4>Segurança</h4>
                    <p class="text-muted">Altere sua senha e mantenha sua conta protegida.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- PAINEL SIMPLES -->
    <section class="page-section bg-light">
        <div class="container text-center">

            <h2 class="section-heading text-uppercase">Painel do Usuário</h2>
            <p class="text-muted">Aqui você pode acessar rapidamente suas opções.</p>

            <div class="mt-4">
                <button class="btn btn-primary m-2">Meu Perfil</button>
                <button class="btn btn-secondary m-2">Configurações</button>
                <button class="btn btn-danger m-2">Sair</button>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer py-4 bg-light">
        <div class="container text-center">

            <p>© 2026 - Otávio Sanches Carvalho. Todos os direitos reservados.</p>

            <a href="#" class="me-3">Política de Privacidade</a>
            <a href="#">Termos de Uso</a>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>