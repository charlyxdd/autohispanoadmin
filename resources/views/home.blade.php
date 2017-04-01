@extends('layout.master')
@section('title','Inicio')

@section('cuerpo')

    <!-- / main menu-->

    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12">
            <h2 class="content-header-title mb-0">User Profile</h2>
            <div class="row breadcrumbs-top">
            </div>
          </div>
          <div class="content-header-right text-md-right col-md-6 col-xs-12">
            <div class="form-group"></div>
            <!-- Round Outline Icon Buttons-->
            <button type="button" class="btn-icon btn btn-secondary btn-round"><i class="icon-bell4"></i></button>
            <button type="button" class="btn-icon btn btn-secondary btn-round"><i class="icon-help2"></i></button>
            <button type="button" class="btn-icon btn btn-secondary btn-round"><i class="icon-cog3"></i></button>
          </div>
          <div class="content-header-lead col-xs-12 mt-2">
            <p class="lead"></p>
          </div>
        </div>
        <div class="content-body"><div id="user-profile">
    <div class="row">
        <div class="col-xs-12">
            <div class="card profile-with-cover">
                <div class="card-img-top img-fluid bg-cover height-300" style="background: url('../../../robust-assets/images/carousel/22.jpg') 50%;"></div>
                <div class="media profil-cover-details">
                    <div class="media-left pl-2 pt-2">
                        <a href="#" class="profile-image">
                            <img src="../../../robust-assets/images/portrait/small/avatar-s-8.png" class="rounded-circle img-border height-100" alt="Card image">
                        </a>
                    </div>
                    <div class="media-body media-middle row">
                        <div class="col-xs-6">
                            <h3 class="card-title">Jose Diaz</h3>
                        </div>
                        <div class="col-xs-6 text-xs-right">
                            <button type="button" class="btn btn-primary hidden-xs-down"><i class="icon-plus4"></i> Follow</button>
                            <div class="btn-group hidden-md-down" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-success"><i class="icon-speech-bubble"></i> Message</button>
                                <button type="button" class="btn btn-warning"><i class="icon-cog3"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-light navbar-profile">
                    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation"></button>
                    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
                        <ul class="nav navbar-nav float-xs-right">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><i class="icon-content-left"></i> Timeline <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-head"></i> Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-briefcase4"></i> Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-heart6"></i> Favourites</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-bell4"></i> Notifications</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-sm-12 border-right-blue-grey border-right-lighten-5">
                            <div class="media px-1">
                                <div class="media-left media-middle">
                                    <i class="icon-box font-large-1 blue-grey"></i>
                                </div>
                                <div class="media-body text-xs-right">
                                    <span class="font-large-2 text-bold-300 info">5,879</span>
                                </div>
                                <p class="text-muted">Total Products <span class="info float-xs-right"><i class="icon-arrow-up4 info"></i> 16.89%</span></p>
                                <progress class="progress progress-sm progress-info" value="80" max="100"></progress>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-12 border-right-blue-grey border-right-lighten-5">
                            <div class="media px-1">
                                <div class="media-left media-middle">
                                    <i class="icon-tag3 font-large-1 blue-grey"></i>
                                </div>
                                <div class="media-body text-xs-right">
                                    <span class="font-large-2 text-bold-300 deep-orange">423</span>
                                </div>
                                <p class="text-muted">New Orders<span class="deep-orange float-xs-right"><i class="icon-arrow-up4 deep-orange"></i> 5.14%</span></p>
                                <progress class="progress progress-sm progress-deep-orange" value="45" max="100"></progress>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-12 border-right-blue-grey border-right-lighten-5">
                            <div class="media px-1">
                                <div class="media-left media-middle">
                                    <i class="icon-shuffle3 font-large-1 blue-grey"></i>
                                </div>
                                <div class="media-body text-xs-right">
                                    <span class="font-large-2 text-bold-300 danger">61%</span>
                                </div>
                                <p class="text-muted">Conversion Rate<span class="danger float-xs-right"><i class="icon-arrow-down4 danger"></i> 2.24%</span></p>
                                <progress class="progress progress-sm progress-danger" value="75" max="100"></progress>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="media px-1">
                                <div class="media-left media-middle">
                                    <i class="icon-dollar font-large-1 blue-grey"></i>
                                </div>
                                <div class="media-body text-xs-right">
                                    <span class="font-large-2 text-bold-300 success">$6,87M</span>
                                </div>
                                <p class="text-muted">Total Profit<span class="success float-xs-right"><i class="icon-arrow-up4 success"></i> 43.84%</span></p>
                                <progress class="progress progress-sm progress-success" value="60" max="100"></progress>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                
        <!--<div class="row match-height">
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Card</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-block">
                                <h5>Basic Card With Header & Footer</h5>
                            </div>
                            <img class="img-fluid" src="../../../robust-assets/images/carousel/02.jpg" alt="Card image cap">
                            <div class="card-block">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                        <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                            <span class="float-xs-left">3 hours ago</span>
                            <span class="float-xs-right">
                                <a href="#" class="card-link">Read More <i class="icon-ios-arrow-right"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Card</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-block">
                                <h5>Basic Card With Header & Footer</h5>
                            </div>
                            <img class="img-fluid" src="../../../robust-assets/images/carousel/02.jpg" alt="Card image cap">
                            <div class="card-block">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                        <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                            <span class="float-xs-left">3 hours ago</span>
                            <span class="float-xs-right">
                                <a href="#" class="card-link">Read More <i class="icon-ios-arrow-right"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Card</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-block">
                                <h5>Basic Card With Header & Footer</h5>
                            </div>
                            <img class="img-fluid" src="../../../robust-assets/images/carousel/02.jpg" alt="Card image cap">
                            <div class="card-block">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                        <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                            <span class="float-xs-left">3 hours ago</span>
                            <span class="float-xs-right">
                                <a href="#" class="card-link">Read More <i class="icon-ios-arrow-right"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Card</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-block">
                                <h5>Basic Card With Header & Footer</h5>
                            </div>
                            <img class="img-fluid" src="../../../robust-assets/images/carousel/02.jpg" alt="Card image cap">
                            <div class="card-block">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                        <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                            <span class="float-xs-left">3 hours ago</span>
                            <span class="float-xs-right">
                                <a href="#" class="card-link">Read More <i class="icon-ios-arrow-right"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Card</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-block">
                                <h5>Basic Card With Header & Footer</h5>
                            </div>
                            <img class="img-fluid" src="../../../robust-assets/images/carousel/02.jpg" alt="Card image cap">
                            <div class="card-block">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                        <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                            <span class="float-xs-left">3 hours ago</span>
                            <span class="float-xs-right">
                                <a href="#" class="card-link">Read More <i class="icon-ios-arrow-right"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
        </div>

        </div>
    </div>-->
<section id="card-actions">
    <div class="row">
        <div class="col-xs-12">
            <div class="card" id="inventarioContainer">
                <div class="card-header">
                    <h4 class="card-title">Tu inventario</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li>
                                <nav aria-label="Page navigation" id="paginacionInventario">
                                    <ul>
                                        <li class="page-item">
                                            <a class="page-link no-border"  aria-label="Previous" class="anteriorInventario">
                                                <span aria-hidden="true">«</span>
                                                <span class="sr-only">Anterior</span>
                                            </a>
                                        </li>
                                        <li id="paginaInvenatario1" class="paginaInventario page-item active"><a class="page-link no-border"></a></li>
                                        <li id="paginaInvenatario2" class="paginaInventario page-item"><a class="page-link no-border"></a></li>
                                        <li id="paginaInvenatario3" class="paginaInventario page-item"><a class="page-link no-border"></a></li>

                                        <li class="page-item">
                                            <a class="page-link no-border" href="#" aria-label="Next" class="siguienteInventario">
                                                <span aria-hidden="true">»</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </li>
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload" id="cmdRecargarInventario" ><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div class="row" id="carrosContainer">
                            <!--cards here

                            <div class="col-xl-3 col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Marca modelo anio</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-block">
                                            <h5>Basic Card With Header & Footer</h5>
                                        </div>

                                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                                                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                                <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item">
                                                    <img src="../../../robust-assets/images/carousel/02.jpg" alt="First slide">
                                                </div>
                                                <div class="carousel-item active left">
                                                    <img src="../../../robust-assets/images/carousel/03.jpg" alt="Second slide">
                                                </div>
                                                <div class="carousel-item next left">
                                                    <img src="../../../robust-assets/images/carousel/01.jpg" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                <span class="icon-prev" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                <span class="icon-next" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>


                                        <div class="card-block">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="card-link">Card link</a>
                                            <a href="#" class="card-link">Another link</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            -->

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>


</section>
<!-- // card-actions section end -->





@endsection
@section('js')
<script type="text/javascript" src="{{ url('/js/main.js') }}"></script>
@endsection