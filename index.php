<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigitalBook</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Titillium+Web&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-principal">
        <div class="container">

            <a class="navbar-brand" href="index.html"><img class=" img-fluid logo" src="images/digitalbook.png" alt=""></a>

            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
            </button>





            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center justify-content-between">
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="collection.php">Colección</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li style="min-width: 56px;" class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i><sup>1</sup></a>
                    </li>
                    <li style="min-width: 56px;" class="nav-item">
                        <a class="nav-link" href="#"><i class="far fa-bell"></i><sup>5</sup></a>
                    </li>
                    <li class="nav-item dropdown d-none d-md-block">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="avatar" src="images/userm.png" alt="">
                        </a>


                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="row   px-4">
                                <div class="col-3">
                                    <img class="avatar" src="images/userm.png" alt="">
                                </div>
                                <div class="col-9">
                                    <a class="dropdown-item " href="#">Usuario 1</a>
                                    <small>covid@gmail.com</small>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section class="contenedor">
            <!-- acaba HEADER -->
            <div class="slider-contenedor">
                <section class="contenido-slider">
                    <div class="row ">
                        <div class="col">
                            <h5>Tendencia Especial Para Libros</h5>
                            <h1>TIENDA DE LIBROS EN LINEA</h1>
                            <a class="btn btn-danger" href="#">COMPRA AHORA</a>
                        </div>
                    </div>
                </section>
                <section class="contenido-slider">
                    <div class="row ">
                        <div class="col">
                            <h5>Tendencia Especial Para Libros</h5>
                            <h1>TIENDA DE LIBROS EN LINEA</h1>
                            <a class="btn btn-danger" href="#">COMPRA AHORA</a>
                        </div>
                    </div>
                </section>
                <section class="contenido-slider">
                    <div class="row ">
                        <div class="col">
                            <h5>Tendencia Especial Para Libros</h5>
                            <h1>TIENDA DE LIBROS EN LINEA</h1>
                            <a class="btn btn-danger" href="#">COMPRA AHORA</a>
                        </div>
                    </div>
                </section>

                <section class="contenido-slider">
                    <div class="row ">
                        <div class="col">

                            <h5>Tendencia Especial Para Libros</h5>
                            <h1>TIENDA DE LIBROS EN LINEA</h1>
                            <a class="btn btn-danger" href="#">COMPRA AHORA</a>
                        </div>
                    </div>

                </section>

            </div>
        </section>
        <section class="contenido ">
            <div class="flotante d-none d-md-block">
                <div class=" flotante-content row justify-content-center text-center">
                    <div class="item col-3">
                        <span class="d-block"><i  class="fas fa-truck"></i></span>
                        <h3>Free Shipping</h3>
                        <h6>Free Shipping World Wide</h6>
                    </div>
                    <div class="item col-3">
                        <span class="d-block"><i class="fas fa-calendar-alt"></i></span>
                        <h3>Money Back Guarante</h3>
                        <h6>100% Money Back Guarante</h6>
                    </div>
                    <div class="item col-3">
                        <span class="d-block"><i class="fas fa-phone-alt"></i></span>
                        <h3>Help & Support</h3>
                        <h6>Call Us : + 0123 456 789</h6>
                    </div>
                    <div class="item col-3">
                        <span class="d-block"><i class="fab fa-paypal"></i></span>
                        <h3>Online Payment</h3>
                        <h6>Contry To Popular Belief.</h6>
                    </div>
                </div>
            </div>
            <div class="contenido-libro">
                <div class="titulo text-center">
                    <h3 data-aos="zoom-in-right"> LOS MÁS POPULARES</h3>
                    <p>En esta seccion encontraremos los libros más populares de nuestra biblioteca.</p>
                </div>

                <div class=" galeria-libro d-flex flex-wrap justify-content-around align-items-center  py-2">
                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book01').style.display='none'" onmouseover="document.getElementById('book01').style.display='block'">
                            <div class="option-libro" id="book01">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book02').style.display='none'" onmouseover="document.getElementById('book02').style.display='block'">
                            <div class="option-libro" id="book02">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book03').style.display='none'" onmouseover="document.getElementById('book03').style.display='block'">
                            <div class="option-libro" id="book03">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>

                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book04').style.display='none'" onmouseover="document.getElementById('book04').style.display='block'">
                            <div class="option-libro" id="book04">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book05').style.display='none'" onmouseover="document.getElementById('book05').style.display='block'">
                            <div class="option-libro" id="book05">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>

                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book06').style.display='none'" onmouseover="document.getElementById('book06').style.display='block'">
                            <div class="option-libro" id="book06">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book07').style.display='none'" onmouseover="document.getElementById('book07').style.display='block'">
                            <div class="option-libro" id="book07">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book08').style.display='none'" onmouseover="document.getElementById('book08').style.display='block'">
                            <div class="option-libro" id="book08">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book09').style.display='none'" onmouseover="document.getElementById('book09').style.display='block'">
                            <div class="option-libro" id="book09">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book10').style.display='none'" onmouseover="document.getElementById('book10').style.display='block'">
                            <div class="option-libro" id="book10">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center d-lg-none d-xl-block mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book11').style.display='none'" onmouseover="document.getElementById('book11').style.display='block'">
                            <div class="option-libro" id="book11">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center d-lg-none d-xl-block mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book12').style.display='none'" onmouseover="document.getElementById('book12').style.display='block'">
                            <div class="option-libro" id="book12">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                </div>
                <div class="ver-mas text-center my-3">
                    <a class="btn btn-danger" href="">VER MÁS</a>

                </div>
        </section>

        <section class="contact libro px-5">
            <div class="detalle-contact">
                <h2 data-aos="zoom-in-right">OFERTAS COVID-19</h2>
                <p>Aproveche las ofertas de libros con un 30% de descuento.</p>
                <a class="btn btn-danger" href="">Ver Ofertas</a>
            </div>

        </section>
        <section class="contenido ">

            <div class="contenido-libro">
                <div class="titulo text-center">
                    <h3 data-aos="zoom-in-right"> LOS MEJORES OFERTAS</h3>
                    <p>En esta seccion encontraremos los libros con las mejores ofertas de nuestra biblioteca.</p>
                </div>

                <div class=" galeria-libro d-flex flex-wrap justify-content-around align-items-center border py-2">
                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book01').style.display='none'" onmouseover="document.getElementById('book01').style.display='block'">
                            <div class="option-libro" id="book01">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book02').style.display='none'" onmouseover="document.getElementById('book02').style.display='block'">
                            <div class="option-libro" id="book02">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book03').style.display='none'" onmouseover="document.getElementById('book03').style.display='block'">
                            <div class="option-libro" id="book03">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>

                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book04').style.display='none'" onmouseover="document.getElementById('book04').style.display='block'">
                            <div class="option-libro" id="book04">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book05').style.display='none'" onmouseover="document.getElementById('book05').style.display='block'">
                            <div class="option-libro" id="book05">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>

                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book06').style.display='none'" onmouseover="document.getElementById('book06').style.display='block'">
                            <div class="option-libro" id="book06">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book07').style.display='none'" onmouseover="document.getElementById('book07').style.display='block'">
                            <div class="option-libro" id="book07">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book08').style.display='none'" onmouseover="document.getElementById('book08').style.display='block'">
                            <div class="option-libro" id="book08">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book09').style.display='none'" onmouseover="document.getElementById('book09').style.display='block'">
                            <div class="option-libro" id="book09">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book10').style.display='none'" onmouseover="document.getElementById('book10').style.display='block'">
                            <div class="option-libro" id="book10">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center d-lg-none d-xl-block mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book11').style.display='none'" onmouseover="document.getElementById('book11').style.display='block'">
                            <div class="option-libro" id="book11">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                    <div class="detalle-libro text-center d-lg-none d-xl-block mt-4" data-aos="flip-left" data-aos-duration="500">
                        <div class="libro-portada p-1 " onmouseout="document.getElementById('book12').style.display='none'" onmouseover="document.getElementById('book12').style.display='block'">
                            <div class="option-libro" id="book12">
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="fas fa-sync-alt"></i></a>

                            </div>
                            <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion ">
                            <h5>Nuevo Libro</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                        </div>
                    </div>
                </div>
                <div class="ver-mas text-center my-3">
                    <a class="btn btn-danger" href="">VER MÁS</a>

                </div>
        </section>
        <section class=" contact px-5">
            <div class="detalle-contact">
                <h2 data-aos="zoom-in-right">CONTÁCTANOS</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sunt unde ratione, ipsum quas provident?</p>
                <a class="btn btn-danger" href="">Contactar</a>
            </div>
            <!-- empieza footer -->
        </section>
        <footer>
            <div class=" content-footer d-md-flex flex-md-wrap text-center justify-content-around align-items-start">
                <div class="col-md-5 col-lg-3 col-xl-3 order-lg-0 order-md-3 px-2 mt-md-5 mt-lg-4">
                    <h1 class=" text-sm-center text-lg-left"><img class="logo" src="images/digitalbook.png" alt=""></h1>
                    <ul class="lista mt-4">
                        <li><a href=""><i class="fas fa-map-marker-alt"></i> Librería online hecho en Perú</a></li>
                        <li><a href=""><i class="fas fa-phone-alt"></i> Call US: 123-456-789</a></li>
                        <li><a href=""><i class="fas fa-envelope"></i>Email: Support@Fiot.Com</a></li>
                    </ul>

                </div>
                <div class="col-md-7 col-lg-3 col-xl-3 order-lg-0 order-md-0 px-2">
                    <hr class="bg-principal">
                    <span>SU CUENTA</span>

                    <ul class="lista mt-4">
                        <li><a href="">Iniciar Sesión</a></li>
                        <li><a href="">Mi cuenta</a></li>
                        <li><a href="">Nueva Cuenta</a></li>
                        <li><a href="">Lista De Deseos</a></li>
                        <li><a href="">Mira El Libro</a></li>
                    </ul>

                </div>
                <div class="col-md-7 col-lg-3 col-xl-3 order-lg-0 order-md-2 px-3">
                    <hr class="bg-principal">
                    <span>NUESTRA COMPAÑIA</span>

                    <ul class="lista mt-4">
                        <li><a href="">Sobre Nosotros</a></li>
                        <li><a href="">Contáctenos</a></li>
                        <li><a href="">Portafolio</a></li>
                        <li><a href="">Guia De Tallas</a></li>
                        <li><a href="">Preguntas Frecuente</a></li>
                    </ul>
                </div>
                <div class="col-md-5 col-lg-3 col-xl-3  order-lg-0 order-md-1 px-2 px-sm-5  text-center">
                    <hr class="bg-principal">
                    <span>REGÍSTRESE Y OBTENGA OFERTA</span>

                    <div class="form-group mt-2">
                        <input class="form-control" type="email" name="" id="" placeholder="Ingrese su email">
                    </div>

                    <a class="sub btn btn-danger" href="">SUSCRIBIR</a>

                </div>
            </div>
            <div class="fin text-center  mt-4">
                <div class="iconos pt-2 text-center">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-google-plus"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-instagram"></i>

                    <small class="d-block mt-2">©2020 All Rights Reserved. Created by <a href="#" class="font-weight-bold">COVID-19</a></small>
                </div>
            </div>
        </footer>
    </main>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://kit.fontawesome.com/b84a853aee.js" crossorigin="anonymous"></script>

    <script src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>