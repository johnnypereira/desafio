<?php
// Inclui o arquivo de conexão
include_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #1d1c1c;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #1d1c1c, #1f1e1e, #333232, #464445);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #1d1c1c, #1f1e1e, #333232, #464445);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
    </style>
</head>

<body>
    <main>
        <div>
            <section class="h-100 gradient-form" style="background-color: #eee;">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-xl-10">
                            <div class="card rounded-3 text-black">
                                <div class="row g-0">
                                    <div class="col-lg-6">
                                        <div class="card-body p-md-5 mx-md-4">

                                            <div class="text-center">
                                                <h4 class="mt-1 mb-5 pb-1"><img src="YB_logo.png" style="width: 72px;" alt="logo">YahBanking Mariner4</h4>
                                            </div>

                                            <form action="testLogin.php" method="POST">
                                                <h1 class="mt-1 mb-5 pb-1">Login</h1>
                                                <input class="form-control" type="text" name="email" placeholder="Email">
                                                <br><br>
                                                <input class="form-control" type="password" name="senha" placeholder="Senha">
                                                <br><br>
                                                <input class="w-100 btn btn-primary btn-lg" type="submit" name="submit" value="Enviar">
                                            </form>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                            <h4 class="mb-4">Somos mais que um Banco</h4>
                                            <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>