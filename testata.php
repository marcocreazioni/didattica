<?php

//Qui ci sara la parte alte del sito web con il menu di navigazione
$bootstrap = "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB' crossorigin='anonymous'>";
$css = "<link href='fogliodistile.css' rel='stylesheet' type='text/css'>";
echo $bootstrap."<br>".$css;
$navigazione = "<body><nav class='navbar navbar-expand-lg bg-body-tertiary'>
  <div class='container-fluid'>
    <a class='navbar-brand' href='#'>Navbar</a>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarNav'>
      <ul class='navbar-nav'>
        <li class='nav-item'>
          <a class='nav-link active' aria-current='page' href='#'>Home</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='#'>Features</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='#'>Pricing</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link disabled' aria-disabled='true'>Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>";
echo $navigazione;



?>