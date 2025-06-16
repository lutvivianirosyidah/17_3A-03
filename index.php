<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Bloomiani.id</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Visi Misi
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container text-center">
  <div class="row">
    <div class="col">
      
      <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    menu
  </a>
  <a href="#" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
  <a href="#" class="list-group-item list-group-item-action">Sign-up</a>
  <a href="#" class="list-group-item list-group-item-action">Daftar Buku</a>
</div>
    </div>
    <div class="col-6">
      <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.allkpop.com/upload/2024/04/content/011552/1712001132-header-photo.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.bing.com/images/search?view=detailV2&ccid=1TfYJak3&id=615E2F02492DC51AA87018DF1E7856D8E151B44B&thid=OIP.1TfYJak3cSuTyQc5x_9ZfQHaEs&mediaurl=https%3a%2f%2fwww.nme.com%2fwp-content%2fuploads%2f2023%2f11%2fbabymonster-press-image-yg-ent.jpg&exph=1270&expw=2000&q=babymonster&simid=607994545052453098&FORM=IRPRST&ck=117D10DE32A924E1E2090657DAD3D98C&selectedIndex=1&itb=0&ajaxhist=0&ajaxserp=0https://www.bing.com/images/search?view=detailV2&ccid=1TfYJak3&id=615E2F02492DC51AA87018DF1E7856D8E151B44B&thid=OIP.1TfYJak3cSuTyQc5x_9ZfQHaEs&mediaurl=https%3a%2f%2fwww.nme.com%2fwp-content%2fuploads%2f2023%2f11%2fbabymonster-press-image-yg-ent.jpg&exph=1270&expw=2000&q=babymonster&simid=607994545052453098&FORM=IRPRST&ck=117D10DE32A924E1E2090657DAD3D98C&selectedIndex=1&itb=0&ajaxhist=0&ajaxserp=0" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="" class="d-block w-50" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>

<div class="col-3">
  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
      Jurusan
      </a>
  <a href="#" class="list-group-item list-group-item-action">Web Design</a>
  <a href="#" class="list-group-item list-group-item-action">Pemograman</a>
  <a href="#" class="list-group-item list-group-item-action">Database</a>
</div>

</div>
    </div>
  </div>

<div class="modal" id="exampleModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Login</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>

<hr>

<div class="row">
  <div class="col-2">
<div class="card mt-2">
  <img src="image.php" class="card-img-top" alt="image.php">
  width ="50">
    <h5 class="card-title">Buku babymonster</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="row">
  <div class="col-2">
<div class="card mt-2">
  <img src="image.php" class="card-img-top" alt="image.php">
    <h5 class="card-title">Buku babymonster</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>