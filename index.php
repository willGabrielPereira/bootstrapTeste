<?php
include "php/util.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Hello World</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <link rel="stylesheet" type="text/css" href="css/style.css" />

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!--Icones fontAwesome-->
        <script src="https://kit.fontawesome.com/51dba22c11.js" crossorigin="anonymous"></script>
        <!--JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/script.js"></script>
    </head>

    <body>
        <div class="full">
            <!--    NOTIFICAÇÃO    -->
            <div class=" notify">
                <div class="col-5 border mx-auto shadow-lg p-2 fixed-top alerta conteudo">
                    <div class="p-3">
                        <div id="resposta"></div>
                        <button type="button" id="okMsg">ok</button>
                    </div>
                </div>
            </div>

            <!--    CABEÇALHO    -->
            <header>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row align-items-center header">
                                <div class="col-md-auto bg-light shadow-lg rounded ml-3 mr-3">
                                    <?php echo $header; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <!--    MENU    -->
            <div class="container-fuid col-2 position-fixed">

                <nav class="navbar navbar-light border mt-3 conteudo">

                    <!--    BOTÃO TOGGLE    -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--    DIV COLLAPSE COM TOGGLE    -->
                    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">

                        <ul class="navbar-nav mr-auto">
                            <?php
                            foreach ($opcoes as $opcao) {
                                switch ($opcao->opType) {
                                    case 'normal':
                                        echo "<li class = 'nav-item'>
                                            <a class = 'nav-link' href = '" . $opcao->link . "'>" . $opcao->texto . "<span class = 'sr-only'>" . $opcao->srOnly . "</span></a>
                                            </li>";
                                        break;
                                    case 'dropdown':
                                        $html = "<li class='nav-item dropdown'>"
                                                . "<a class='nav-link dropdown-toggle' href='' id='navbarDropdown' role'button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"
                                                . $opcao->texto . "</a>"
                                                . "<div class='dropdown-menu' aria-labelldby='navbarDropdown'>";
                                        foreach ($opcao->dropdown as $op) {
                                            $html .= "<a class='dropdown-item' href=" . $op->link . ">" . $op->texto . "</a>";
                                        }
                                        $html .= "</div></li>";
                                        echo $html;
                                        break;
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </nav>

            </div>

            <!--    CONTEÚDO    -->
            <div class="container-fluid">
                <div class="row mt-3">
                    <div class="col-8 border mx-auto conteudo">
                        <div class="p-3">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <p>
                                Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                            </p>
                            <p>
                                Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat ipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum, nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.
                            </p>
                            <p>
                                Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae tristique magna lacus sit amet eros. Nullam ornare. Praesent odio ligula, dapibus sed, tincidunt eget, dictum ac, nibh. Nam quis lacus. Nunc eleifend molestie velit. Morbi lobortis quam eu velit. Donec euismod vestibulum massa. Donec non lectus. Aliquam commodo lacus sit amet nulla. Cras dignissim elit et augue. Nullam non diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Aenean vestibulum. Sed lobortis elit quis lectus. Nunc sed lacus at augue bibendum dapibus.
                            </p>
                            <p>
                                Aliquam vehicula sem ut pede. Cras purus lectus, egestas eu, vehicula at, imperdiet sed, nibh. Morbi consectetuer luctus felis. Donec vitae nisi. Aliquam tincidunt feugiat elit. Duis sed elit ut turpis ullamcorper feugiat. Praesent pretium, mauris sed fermentum hendrerit, nulla lorem iaculis magna, pulvinar scelerisque urna tellus a justo. Suspendisse pulvinar massa in metus. Duis quis quam. Proin justo. Curabitur ac sapien. Nam erat. Praesent ut quam.
                            </p>
                            <p>
                                Vivamus commodo, augue et laoreet euismod, sem sapien tempor dolor, ac egestas sem ligula quis lacus. Donec vestibulum tortor ac lacus. Sed posuere vestibulum nisl. Curabitur eleifend fermentum justo. Nullam imperdiet. Integer sit amet mauris imperdiet risus sollicitudin rutrum. Ut vitae turpis. Nulla facilisi. Quisque tortor velit, scelerisque et, facilisis vel, tempor sed, urna. Vivamus nulla elit, vestibulum eget, semper et, scelerisque eget, lacus. Pellentesque viverra purus. Quisque elit. Donec ut dolor.
                            </p>
                            <p>
                                Duis volutpat elit et erat. In at nulla at nisl condimentum aliquet. Quisque elementum pharetra lacus. Nunc gravida arcu eget nunc. Nulla iaculis egestas magna. Aliquam erat volutpat. Sed pellentesque orci. Etiam lacus lorem, iaculis sit amet, pharetra quis, imperdiet sit amet, lectus. Integer quis elit ac mi aliquam pretium. Nullam mauris orci, porttitor eget, sollicitudin non, vulputate id, risus. Donec varius enim nec sem. Nam aliquam lacinia enim. Quisque eget lorem eu purus dignissim ultricies. Fusce porttitor hendrerit ante. Mauris urna diam, cursus id, mattis eget, tempus sit amet, risus. Curabitur eu felis. Sed eu mi. Nullam lectus mauris, luctus a, mattis ac, tempus non, leo. Cras mi nulla, rhoncus id, laoreet ut, ultricies id, odio.
                            </p>
                            <p>
                                Donec imperdiet. Vestibulum auctor tortor at orci. Integer semper, nisi eget suscipit eleifend, erat nisl hendrerit justo, eget vestibulum lorem justo ac leo. Integer sem velit, pharetra in, fringilla eu, fermentum id, felis. Vestibulum sed felis. In elit. Praesent et pede vel ante dapibus condimentum. Donec magna. Quisque id risus. Mauris vulputate pellentesque leo. Duis vulputate, ligula at venenatis tincidunt, orci nunc interdum leo, ac egestas elit sem ut lacus. Etiam non diam quis arcu egestas commodo. Curabitur nec massa ac massa gravida condimentum. Aenean id libero. Pellentesque vitae tellus. Fusce lectus est, accumsan ac, bibendum sed, porta eget, augue. Etiam faucibus. Quisque tempus purus eu ante.
                            </p>
                            <p>
                                Vestibulum sapien nisl, ornare auctor, consectetuer quis, posuere tristique, odio. Fusce ultrices ullamcorper odio. Ut augue nulla, interdum at, adipiscing non, tristique eget, neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut pede est, condimentum id, scelerisque ac, malesuada non, quam. Proin eu ligula ac sapien suscipit blandit. Suspendisse euismod. Ut accumsan, neque id gravida luctus, arcu pede sodales felis, vel blandit massa arcu eget ligula. Aenean sed turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sem eros, ornare ut, commodo eu, tempor nec, risus. Donec laoreet dapibus ligula. Praesent orci leo, bibendum nec, ornare et, nonummy in, elit. Donec interdum feugiat leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque feugiat ullamcorper ipsum. Donec convallis tincidunt urna.
                            </p>
                            <p>
                                Suspendisse et orci et arcu porttitor pellentesque. Sed lacus nunc, fermentum vel, vehicula in, imperdiet eget, urna. Nam consectetuer euismod nunc. Nulla dignissim posuere nulla. Integer iaculis lacinia massa. Nullam sapien augue, condimentum vel, venenatis id, rhoncus pellentesque, sapien. Donec sed ipsum ultrices turpis consectetuer imperdiet. Duis et ipsum ac nisl laoreet commodo. Mauris eu est. Suspendisse id turpis quis orci euismod consequat. Donec tellus mi, luctus sit amet, ultrices a, convallis eu, lorem. Proin faucibus convallis elit. Maecenas rhoncus arcu at arcu. Proin libero. Proin adipiscing. In quis lorem vitae elit consectetuer pretium. Nullam ligula urna, adipiscing nec, iaculis ut, elementum non, turpis. Fusce pulvinar.
                            </p>
                        </div>
                    </div>
                </div>

                <!--    INTEGRAÇÃO BD    -->
                <div class="row mt-3">
                    <div class="col-8 mx-auto conteudo">
                        <div class="row border">
                            <!--    CONTATO   -->
                            <div class="col-4 border-right">
                                <form>
                                    <h1 class="display-4">Contato</h1>
                                    <div class="form-group">
                                        <label for="nome">nome</label>
                                        <input type="text" class="form-control form-control-lg" id="nomeContato" placeholder="Nome">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="Email" class="form-control form-control-sm" id="emailContato" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="fone">Fone</label>
                                        <input type="text" class="form-control form-control-sm" id="foneContato" placeholder="Fone">
                                    </div>
                                    <button type="button" id="contato" class="btn btn-enviar">Enviar</button>
                                </form><br>
                            </div>

                            <!--    CADASTRO    -->
                            <div class="col-8 ">
                                <form>
                                    <h1 class="display-4">Cadastro</h1>
                                    <div class="form-row">
                                        <div class="col-3">
                                            <input type="text" class="form-control" id="nome" placeholder="Nome">
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome">
                                        </div>
                                        <div class="col-5">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="far fa-user"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="usuario" placeholder="Usuario">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group"></div>
                                    <div class="form-row">
                                        <div class="col-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                                </div>
                                                <input type="email" class="form-control" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group"></div>
                                    <div class="form-row">
                                        <div class="col-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                                </div>
                                                <input type="password" class="form-control" id="password" placeholder="Senha">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                                </div>
                                                <input type="password" class="form-control" id="repetir" placeholder="Repetir senha">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group"></div>
                                    <button type="button" id="cadastro" class="btn btn-enviar">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--    RODAPÉ    -->
            <footer>
                <div class="container-fluid">
                    <div class="row mt-3">
                        <div class="col-12 border conteudo">
                            <p>Rodapé aqui</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
