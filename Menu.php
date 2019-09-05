<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--Bootstrap-->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="Css/Style.css">


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <title>Intranet</title>

  <script>
  function Texto() {
    $(document).keypress(function(e) {
      if (e.wich == 32 || e.keyCode == 32) {

        var texto = ['#firebird', '#rpv', '#configbd'];
        var mensagem = ['Erro firebird //', 'Erro RPV //', 'Configuração banco de dados //'];

        for (let i = 0; i <= 3; i++) {

          var textoDigitado = document.getElementById("txt");

          if (texto[i].toUpperCase() == textoDigitado.value.toUpperCase() && textoDigitado.value != '') {
            textoDigitado.value = mensagem[i];
          }

        }
      }
    })


  }
  </script>

</head>

<body>

  <nav class="navbar navbar-expand-md bg-purple navbar-dark fixed-top">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Intranet</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-plus "></i> Novo Atendimento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-search "></i> Pesquisar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-bell"></i> Avisos <span
              class="badge badge-light badge-pill">2</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><img src="imagens/default-user.jpg" class="LogoC"> <i
              class="fas fa-sort-down"></i></a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="Menu">
    <div class="Atalhos">
      <ul>
        <li class="strong"><i class="fas fa-home"></i> Inicio</li>
        <!-- <li class="strong"><i class="fas fa-user"></i> Meu Perfil</li> -->
        <hr>
        <span style="font-size: 14px; font-weight: bold;"> INTRA COMUNICAÇÃO</span>
        <li><i class="fas fa-users"></i> Clientes</li>
        <li><i class="fas fa-list-alt"></i> Tarefas Jyra</li>
        <li><i class="fas fa-calendar-alt"></i> Eventos</li>
        <li><i class="fas fa-phone"></i> Ramais</li>
        <li><i class="fas fa-globe-americas"></i> Blog</li>
        <li><i class="fas fa-image"></i> Galeria</li>
        <li><i class="fas fa-box"></i> Estoque</li>
      </ul>
    </div>
  </div>

  <div class="Pagina">
    <div class="form-atd">
      <h4>Novo Atendimento</h4>
      <hr>
      <form action="" method="post" onload="form()">
        <div class="row">
          <div class="col-sm-6 row">
            <div class="col-sm-12 escolha display-n">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio7" value="opcao1"
                  checked>
                <label class="form-check-label" for="inlineRadio7">Cliente</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio9"
                  value="opcao2">
                <label class="form-check-label" for="inlineRadio9">Demonstração</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio10"
                  value="opcao3">
                <label class="form-check-label" for="inlineRadio10">Interno </label>
              </div>
            </div>
            <div class="col-sm-6">
              <!-- 
             
              <input type="text" class="form-control" id="atd" placeholder="Digite o código"> 
              -->
              <label for="atd"><strong>Código</strong></label>
              <div class="input-group mb-3">
              
                <div class="input-group-prepend">
                  <select class="form-control">
                    <option selected>Cliente</option>
                    <option>Demo</option>
                    <option>Interno</option>
                  </select>
                </div>
                <input type="text" class="form-control" placeholder="Digite o código">
              </div>
              <label for="atd"><strong>Contato</strong></label>
              <input type="text" class="form-control" id="atd" placeholder="Digite o nome">
              <label for="atd"><strong>Protocolo</strong></label>
              <input type="text" class="form-control" id="atd" placeholder="Digite o protocolo">
            </div>
            <div class="col-sm-6">
              <label for="atd"><strong>Nome Fantasia</strong></label>
              <input type="text" class="form-control" id="atd" placeholder="Digite o nome fantasia">
              <label for="atd"><strong>Acesso Remoto</strong></label>
              <input type="text" class="form-control" id="atd" placeholder="Digite o acesso">
              <label for="atd"><strong>Sistemas</strong></label>
              <select class="form-control" name="situacao" id="situacao">
                <option value="Todos">Todos</option>
                <option value="Administrador">Administrador</option>
                <option value="Contabiliade">Contabiliade</option>
                <option value="Escrita Fiscal">Escrita Fiscal</option>
                <option value="Folha de Pagamento">Folha de Pagamento</option>
              </select>

            </div>
            <div class="col-sm-6 escolha">
              <label for="atendimento"><strong>Atendimento</strong></label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="opcao1"
                  checked>
                <label class="form-check-label" for="inlineRadio1"><i class="fas fa-desktop"></i> </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="opcao2">
                <label class="form-check-label" for="inlineRadio2"><img src="imagens/teams.png"
                    style="height: 20px;"></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="opcao3">
                <label class="form-check-label" for="inlineRadio3"><i class="fas fa-phone"></i> </label>
              </div>
            </div>
            <div class="col-sm-6 escolha">
              <label for="atendimento"><strong>Situação</strong></label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio4" value="opcao1"
                  checked>
                <label class="form-check-label" for="inlineRadio4"><i class="fas fa-comments"></i> </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio5"
                  value="opcao2">
                <label class="form-check-label" for="inlineRadio5"><i class="fas fa-history"></i> </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio6"
                  value="opcao3">
                <label class="form-check-label" for="inlineRadio6"><i class="fas fa-check"></i> </label>
              </div>
            </div>
            <div class="col-sm-12">
              <label for="atd"><strong>Observação</strong></label>
              <textarea class="form-control" rows="5" onfocus="Texto()" id="txt"></textarea>
            </div>
            <button class="btn btn-purple btn-block badge-pill mt-4">Gravar</button>
          </div>

          <div class="col-sm-6 row mt-20">

            <div class="col-xl-12">
              <div class="alert alert-primary alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <div class="col-xl-12 mb-1">
                  Cliente entrou em contato, foi passado os passos e não quer fazer. - <strong>Bruno Amorim
                    (31/08/19)</strong>
                </div>

              </div>
              <div id="accordion">
                <div class="card">
                  <div class="card-header bg-dark text-white" data-toggle="collapse" href="#collapseOne">
                    <a class="card-link">
                      Atendimentos
                    </a>
                  </div>
                  <div id="collapseOne" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                      <table class="table text-center">
                        <thead class="">
                          <tr>
                            <th scope="col">Cliente</th>
                            <th scope="col">Data</th>
                            <th scope="col">Situação</th>
                            <th scope="col">Atendente</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">12345</th>
                            <td>10/08/2019</td>
                            <td><i class="fas fa-comments text-danger"></i></td>
                            <td>Bruno Amorim</td>
                          </tr>
                          <tr>
                            <th scope="row">12345</th>
                            <td>10/08/2019</td>
                            <td><i class="fas fa-history text-warning"></i></td>
                            <td>Bruno Amorim</td>
                          </tr>
                          <tr>
                            <th scope="row">12345</th>
                            <td>10/08/2019</td>
                            <td><i class="fas fa-check text-success"></i></td>
                            <td>Bruno Amorim</td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header bg-danger text-white" data-toggle="collapse" href="#collapseTwo">
                    <a class="collapsed card-link">
                      <i class="text-white fright">Os Sistemas não foram instalados</i>
                      Instalações
                    </a>
                  </div>
                  <div id="collapseTwo" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                      <table class="table text-center">
                        <thead class="">
                          <tr>
                            <th scope="col">Cliente</th>
                            <th scope="col">Data</th>
                            <th scope="col">Situação</th>
                            <th scope="col">Atendente</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">12345</th>
                            <td>10/08/2019</td>
                            <td><i class="fas fa-comments text-danger"></i></td>
                            <td>Bruno Amorim</td>
                          </tr>
                          <tr>
                            <th scope="row">12345</th>
                            <td>10/08/2019</td>
                            <td><i class="fas fa-history text-warning"></i></td>
                            <td>Bruno Amorim</td>
                          </tr>
                          <tr>
                            <th scope="row">12345</th>
                            <td>10/08/2019</td>
                            <td><i class="fas fa-check text-success"></i></td>
                            <td>Bruno Amorim</td>
                          </tr>

                        </tbody>
                      </table>


                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Cancelado
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Bloqueado por Débito
                        </label>
                      </div>

                    </div>
                  </div>
                </div>



              </div>







            </div>
          </div>

        </div>
      </form>
    </div>

  </div>



  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="bootstrap4/css/bootstrap.css"></script>
  <script type="text/javascript" src="bootstrap4/js/JQmask.js"></script>

</body>

</html>