<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="{{Request::is('basicwebsite') ? 'active' : ''}}">
            <a class="nav-link" href="/basicwebsite">Home</a>
          </li>
           <li class="{{Request::is('basicwebsite/about') ? 'active' : ''}}">
            <a class="nav-link" href="/basicwebsite/about">About</a>
          </li>
            <li class="{{Request::is('basicwebsite/contact') ? 'active' : ''}}">
            <a class="nav-link" href="/basicwebsite/contact">Contact</a>
          </li>

            </div>
          </li>
        </ul>
       
      </div>
    </nav>