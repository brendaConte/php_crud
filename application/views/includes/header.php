<header >

    <style> 
        .navbar {

            background-color:#216B79; 
    }
        .logo {
            width: 180px;
            height: auto;

    }
    .dropdown-toggle {
        background-color:#E4EDEE;
         }
    </style>

    <nav class="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url('EntradasController') ?>">
          <img class="logo" src="https://www.varcreative.com/frontend/varcreative23/assets/images/logo.png">
        </a>
        <div>
            <div class="dropdown">
              <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menú
              </button>
              <ul class="dropdown-menu">
                <li>
                    <a class="" href="<?php echo base_url('') ?>"><button class="dropdown-item" type="button">Registrarse</button></a>
                </li>
                <li>
                    <a class="" href="<?php echo base_url('Welcome') ?>"><button class="dropdown-item" type="button">Usuarios</button></a>
                </li>
                <li>
                  <a class="" href="<?php echo base_url('EntradasController') ?>"><button class="dropdown-item" type="button">Entradas</button></a>  
                </li>
              </ul>
            </div>
        </div>
      </div>
    </nav>

</header>