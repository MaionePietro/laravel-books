<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('books.index') }}">Home</a>
            </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{ route('books.create') }}">Create</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
