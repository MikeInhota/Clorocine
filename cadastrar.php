<?php include "cabecalho.php" ?>

<body>
  <nav class="nav-extended cyan lighten-4">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li><a href="galeria.php">Galeria</a></li>
        <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header">
      <h1 class="center">Clorocine</h1>
    </div>
    <div class="nav-content">
      <!-- <ul class="tabs tabs-transparent cyan darken-1">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul> -->
    </div>
  </nav>

  <div class="row">
  <form action="inserirFilme.php" method="POST">
    <div class="col s6 offset-s3">
      <div class="card">
        <div class="card-content">
          <span class="card-title">Cadastrar Filme</span>
          <!-- Inicio Form -->
          <div class="row">
            <div class="input-field col s12">
              <input id="titulo" type="text" class="validate" name="titulo" required>
              <label for="titulo">Titulo do filme</label>
            </div>
          </div>
          <!-- Sinopse -->
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="sinopse" class="materialize-textarea" name="sinopse" required></textarea>
                  <label for="sinopse">Sinopse ...</label>
                </div>
              </div>
            </form>
          </div>
          <!-- Nota -->
          <div class="row">
            <div class="input-field col s4">
              <input id="nota" type="number" step=".1" min=0 max=10 class="validate" name="nota" require>
              <label for="nota">Nota</label>
            </div>
          </div>
          <!-- Arquivo -->
          <div class="file-field input-field">
            <div class="btn cyan accent-3">
              <span>Capa</span>
              <input type="file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" name="poster" required>
            </div>
          </div>
          <!-- Fim Form -->
        </div>
        <div class="card-action">
          <a href="galeria.php" class="waves-effect waves-light btn blue-grey darken-2">Cancelar</a>
          <button type="submit" class="waves-effect waves-light btn cyan accent-4">Confirmar</button>
        </div>
      </div>
    </div>
  </form>
  </div>
</body>

</html>