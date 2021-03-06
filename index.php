<!DOCTYPE html>
<html lang="es">

<?php require_once('./includes/emailer.php') ?>

<head>
    <!-- ============== meta ============== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="JG">
    <meta name="description" content="Broux Soluciones Tecnologicas- Sistema líder en de control de tu negocio- Sistemas integrados de organización empresarial- Sistemas de Gestion Comercial- Gestion Comercial estructura innovadora- Interfaz de usuarios- Módulos contables.">
    <meta name="keywords" content="Soluciones, Tecnología, Sistemas, Sistemas Integrados, Gestion, Contabilidad, Impuestos, Comercio, Sueldos, RRHH, Acopio Cereales, Aceiteras, Molinos, Agroinsumos, Frigorificos, Logistica, AFIP, QR, Remito, Facturas, Documentos electrónicos">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="http://broux.com.ar/">
    <meta property="og:image" content="http://broux.com.ar/assets/img/favicon/favicon-196x196.png">
    <meta property="og:image:secure_url" content="https://broux.com.ar/assets/img/favicon/favicon-196x196.png">
    <meta property="og:image:type" content="image/svg">
    <meta property="og:image:width" content="196">
    <meta property="og:image:height" content="196">
    <meta property="og:image:alt" content="Broux Logotipo">
    <meta property="og:locale" content="es_AR">
    <meta property="og:locale:alternate" content="es_LA">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Broux">
    <meta property="og:description" content="Broux Soluciones Tecnologicas- Sistema líder en de control de tu negocio- Sistemas integrados de organización empresarial- Sistemas de Gestion Comercial- Gestion Comercial estructura innovadora- Interfaz de usuarios- Módulos contables.">
    <meta property="og:url" content="http://broux.com.ar/">
    <meta property="og:site_name" content="BST">
    <!-- ============== favicon ============== -->
    <!-- apple -->
    <link rel="apple-touch-icon" href="./assets/img/favicon/apple-touch-icon-181x181.png">
    <!-- metro tile icon -->
    <meta name="msapplication-TileColor" content="#072D60">
    <meta name="msapplication-TileImage" content="./assets/img/favicon/metro-tile-145x145.png">
    <!-- windows tile -->
    <meta name="application-name" content="Broux">
    <meta name="msapplication-tooltip" content="B-Soluciones Tecnológicas">
    <meta name="msapplication-config" content="./assets/img/favicon/ieconfig.xml">
    <!-- web -->
    <link rel="icon" href="./assets/img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="./assets/img/favicon/favicon-16x16.png" sizes="16x16">
    <!-- android -->
    <link rel="manifest" href="./assets/img/favicon/site.webmanifest">
    <link rel="shortcut icon" sizes="196x196" href="./assets/img/favicon/favicon-196x196.png">
    <!-- safari -->
    <link rel="mask-icon" href="./assets/img/favicon/safari-pinned-tab.svg" color="#FFFFFF">
    <meta name="theme-color" content="#072D60">

    <!-- ============== css ============== -->
    <link rel="stylesheet" href="./assets/css/base.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="./assets/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="./assets/css/mobile.css" as="style" media="(max-width: 968px)" onload="this.onload=null;this.rel='stylesheet'">

    <!-- ============== fonts ============== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&amp;display=swap" as="style" onload="this.onload=null; this.rel='stylesheet'">

    <!-- ============== noscript ============== -->
    <noscript>
        <link rel="stylesheet" href="./assets/css/base.css">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/responsive.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    </noscript>

    <!-- ============== title ============== -->
    <title>BROUX</title>
</head>

<body>
    <!-- ============== header ============== -->
    <header class="header">
        <div class="container d-flex navbar">
            <!-- <a href="http://broux.com.ar" class="navbar__brand" rel="noopener noreferrer">Broux.</a> -->
            <a href="http://broux.com.ar" rel="noopener noreferrer">
                <img src="./assets/img/logos/logo.svg" alt="Broux logo azul navbar" width="133" height="138" class="navbar__brand">
            </a>
            <!-- menu-mobile -->
            <i class="fas navbar__menu fa-bars" id="menu-icon" aria-label="Menú"></i>
            <!-- links -->
            <div class="navbar__links d-flex">
                <a href="#index" class="navbar__links-link">Inicio</a>
                <a href="#service" class="navbar__links-link">Servicios</a>
                <a href="#clients" class="navbar__links-link">Clientes</a>
                <a href="#contact" class="navbar__links-link">Contacto</a>
            </div>
            <div class="navbar__social d-flex">
                <a href="http://panel.broux.com.ar/" class="navbar__social-icon" target="_blank" rel="noopener noreferrer" aria-label="Iniciar Sesión"><i class="fas fa-user"></i></a>
                <a href="https://api.whatsapp.com/send/?phone=5492352540334&text=Hola%21+Me+gustaria+hacer+una+consulta&app_absent=0!" class="navbar__social-icon" target="_blank" rel="noopener noreferrer" aria-label="Enviar un Whatsapp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://youtube.com" class="navbar__social-icon" target="_blank" rel="noopener noreferrer" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                <a href="https://t.me/user" class="navbar__social-icon" target="_blank" rel="noopener noreferrer" aria-label="Enviar un Telegram"><i class="fab fa-telegram-plane"></i></a>
            </div>
        </div>
    </header>

    <main>
        <div class="background-index"></div>
        <div class="container">
            <!-- ============== index ============== -->
            <section id="index" class="index">
                <div class="index__jumbotron d-flex">

                    <picture class="index__jumbotron-logo">
                        <img class="index-logo" width="133" height="138" src="./assets/img/logos/logo.svg" alt="BROUX logo azul">
                    </picture>

                    <h1 class="index__jumbotron-title" aria-label="Broux">
                        <picture class="index__jumbotron-isologo">
                            <img class="index-isologo" width="583" height="80" src="./assets/img/logos/broux-isotipo.svg" alt="BROUX logo azul">
                        </picture>
                    </h1>

                    <h3 class="index__jumbotron-subtitle">Soluciones Tecnológicas</h3>

                    <a href="#contact" class="index__jumbotron-btn btn">Contactanos</a>
                </div>
            </section>
            <!-- ============== services ============== -->
            <section id="service" class="service">
                <h2 class="heading">Servicios</h2>
                <div class="service__container d-flex">
                    <div class="service__container-card d-flex">
                        <div class="info">
                            <h3>Gestion</h3>
                            <p>Gestión de plan de cuentas contables.</p>
                            <p>Asientos automáticos de cierre y apertura de ejercicios y ajuste por inflación.</p>
                            <p>Generación de listados de control: balance, mayores, libro diario.</p>
                            <p>Libro de IVA Digital.</p>
                        </div>
                        <div class="card">
                            <i class="fas fa-receipt"></i>
                            <h3>Gestión</h3>
                        </div>
                    </div>
                    <div class="service__container-card d-flex">
                        <div class="info">
                            <h3>Comercio</h3>
                            <p>Facturación electrónica. Codigo QR.</p>
                            <p> Depósitos de productos por rubro y código de barras.</p>
                            <p>Control de stock de mercadería.</p>
                            <p>Cierre diario de cajas.</p>
                        </div>
                        <div class="card">
                            <i class="fas fa-shopping-cart"></i>
                            <h3>Comercio</h3>
                        </div>
                    </div>
                    <div class="service__container-card d-flex">
                        <div class="info">
                            <h3>Sueldos</h3>
                            <p>Cálculo personalizado de liquidación de haberes por empleado.</p>
                            <p>Adaptación de cálculos por convenios.</p>
                            <p>Presentación de formularios.</p>
                            <p>Libro de Sueldos Digital.</p>
                        </div>
                        <div class="card">
                            <i class="fas fa-coins"></i>
                            <h3>Sueldos</h3>
                        </div>
                    </div>
                    <div class="service__container-card d-flex">
                        <div class="info">
                            <h3>Acopio de Cereales</h3>
                            <p>Documentos electrónicos de traslado.</p>
                            <p>Certificación y liquidación de venta de granos.</p>
                            <p>Planillas y fichas de productores.</p>
                        </div>
                        <div class="card">
                            <i class="fas fa-warehouse"></i>
                            <h3>Acopio de Cereales</h3>
                        </div>
                    </div>
                    <div class="service__container-card d-flex">
                        <div class="info">
                            <h3>Aceiteras y Molinos</h3>
                            <p>Administración completa del proceso de granos.</p>
                            <p>Traslado a sectores de producción e industrialización.</p>
                            <p>Remito electrónico harinero.</p>
                            <p>Integración de archivos para aplicaciones de proveedores de semilla.</p>
                        </div>
                        <div class="card">
                            <i class="fas fa-industry"></i>
                            <h3>Aceiteras y Molinos</h3>
                        </div>
                    </div>
                    <div class="service__container-card d-flex">
                        <div class="info">
                            <h3>Agroinsumos</h3>
                            <p>Múltiples depósitos.</p>
                            <p>Reserva de Agroquímicos.</p>
                            <p>Integración de archivos para aplicaciones de proveedores de semilla.</p>
                            <p>Control de stock.</p>
                        </div>
                        <div class="card">
                            <i class="fas fa-seedling"></i>
                            <h3>Agroinsumos</h3>
                        </div>
                    </div>
                    <div class="service__container-card d-flex">
                        <div class="info">
                            <h3>Frigoríficos</h3>
                            <p>Remito electrónico cárnico.</p>
                            <p>Ingreso de cortes de carne con códigos de Afip.</p>
                            <p>Control de stock.</p>
                        </div>
                        <div class="card">
                            <i class="fas fa-piggy-bank"></i>
                            <h3>Frigoríficos</h3>
                        </div>
                    </div>
                    <div class="service__container-card d-flex">
                        <div class="info">
                            <h3>Logística</h3>
                            <p>Facturación Liquido-Producto.</p>
                            <p>Administración de recorridos de transportistas.</p>
                            <p>Control e ingreso de vales por combustible.</p>
                        </div>
                        <div class="card">
                            <i class="fas fa-truck-moving"></i>
                            <h3>Logística</h3>
                        </div>
                    </div>
                </div>
            </section>
            <div class="carousel">
                <button class="carousel__button carousel__button-left is-hidden">
                    <i class="fas fa-angle-left"></i>
                </button>
                <div class="carousel__track-container">
                    <ul class="carousel__track">
                        <li class="carousel__slide current-slide">
                            <img class="carousel__image" src="./assets/img/services/service-01.jpg" alt="Aceiteras y molinos">
                        </li>
                        <li class="carousel__slide">
                            <img class="carousel__image" src="./assets/img/services/service-02.jpg" alt="Agroquimicos">
                        </li>
                        <li class="carousel__slide">
                            <img class="carousel__image" src="./assets/img/services/service-03.jpg" alt="Cereales">
                        </li>
                        <li class="carousel__slide">
                            <img class="carousel__image" src="./assets/img/services/service-04.jpg" alt="Comercio">
                        </li>
                        <li class="carousel__slide">
                            <img class="carousel__image" src="./assets/img/services/service-05.jpg" alt="Gestion">
                        </li>
                        <li class="carousel__slide">
                            <img class="carousel__image" src="./assets/img/services/service-06.jpg" alt="Logistica">
                        </li>
                        <li class="carousel__slide">
                            <img class="carousel__image" src="./assets/img/services/service-07.jpg" alt="Sueldos">
                        </li>
                        <li class="carousel__slide">
                            <img class="carousel__image" src="./assets/img/services/service-08.jpg" alt="Ajuste">
                        </li>
                        <li class="carousel__slide">
                            <img class="carousel__image" src="./assets/img/services/service-09.jpg" alt="Productos">
                        </li>
                        <li class="carousel__slide">
                            <img class="carousel__image" src="./assets/img/services/service-10.jpg" alt="Recibo">
                        </li>
                    </ul>
                </div>
                <button class="carousel__button carousel__button-right">
                    <i class="fas fa-angle-right"></i>
                </button>
            </div>
            <!-- ============== clients ============== -->
            <section id="clients" class="clients">
                <h2 class="heading">Nuestros Clientes</h2>
                <picture>
                    <source media="(max-width: 768px )" srcset="./assets/img/client/clients-mobile.webp">
                    <img src="./assets/img/client/clients-desktop.svg" alt="Clientes destacados Broux">
                </picture>
            </section>
            <!-- ============== contact ============== -->
            <section id="contact" class="contact">
                <h2 class="heading">Contacto</h2>
                <div class="contact__info d-flex">
                    <div class="contact__info-map">
                        <div class="contact__info-address">
                            <p><i class="fas fa-map-marker"></i>San Juan 79, Chacabuco, Buenos Aires</p>
                            <p><i class="fas fa-phone-alt"></i>(02352) 430795</p>
                            <p><i class="fas fa-envelope"></i>info@broux.com.ar</p>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.591256966033!2d-60.47315498416663!3d-34.63976816691474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b925c9252d60ad%3A0x6075078b2a6d864c!2sSan%20Juan%2079%2C%20Chacabuco%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1644463420140!5m2!1ses-419!2sar" width="200" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <form action="./includes/emailer.php" method="POST" class="contact__info-form">
                        <div class="contact__info-inputs d-flex">
                            <input class="contact__info-input" type="text" id="name" name="name" placeholder="Nombre(s) y Apellido(s)" required>
                            <input class="contact__info-input" type="email" id="email" name="email" placeholder="Correo electrónico" required>
                        </div>
                        <textarea class="contact__info-input" name="message" id="message" cols="30" rows="10" placeholder="Mensaje" required></textarea>
                        <div class="contact__info-message">
                            <?php if (count($errores) > 0) : ?>
                                <?php foreach ($errores as $error) : ?>
                                    <span class="error"><?php echo $error ?></span>
                                <?php endforeach ?>
                            <?php endif ?>

                            <?php if (count($successful) > 0) : ?>
                                <?php foreach ($successful as $successes) : ?>
                                    <span class="successes"><?php echo $successes ?></span>
                                <?php endforeach ?>
                            <?php endif ?>
                        </div>
                        <input class="btn" type="submit" name="submit" value="Contactanos">
                    </form>
                </div>
            </section>
        </div>
    </main>

    <!-- ============== footer ============== -->
    <footer>
        <div class="container">
            <div class="footer d-flex">
                <div class="footer__copyright d-flex">
                    <div class="footer__copyright-logo">
                        <img class="isologo" src="./assets/img/logos/broux-isotipo-snd.svg" alt="">
                        <img class="logo" src="./assets/img/logos/logo-snd.svg" alt="">
                    </div>
                    <div class="footer__copyright-text">
                        <p><i class="far fa-copyright"></i>BROUX - Todos los derechos reservados</p>
                        <p>Soluciones Tecnologicas</p>
                    </div>
                </div>
                <div class="footer__contact d-flex">
                    <div class="footer__contact-navbar">
                        <div class="navbar-group">
                            <a href="#index" class="footer-link">Inicio</a>
                            <a href="#contact" class="footer-link">Contacto</a>
                        </div>
                        <div class="navbar-group">
                            <a href="#service" class="footer-link">Servicios</a>
                            <a href="#clients" class="footer-link">Clientes</a>
                        </div>
                    </div>
                    <div class="footer__contact-phone">
                        <p><span class="bold">Comunicate al</span> (02352) 430795</p>
                    </div>
                    <div class="footer__social navbar__social d-flex">
                        <a href="http://panel.broux.com.ar/" class="navbar__social-icon" target="_blank" rel="noopener noreferrer" aria-label="Iniciar Sesión"><i class="fas fa-user"></i></a>
                        <a href="https://api.whatsapp.com/send/?phone=5492352540334&text=Hola%21+Me+gustaria+hacer+una+consulta&app_absent=0!" class="navbar__social-icon" target="_blank" rel="noopener noreferrer" aria-label="Enviar un Whatsapp"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://youtube.com/" class="navbar__social-icon" target="_blank" rel="noopener noreferrer" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                        <a href="https://t.me/user" class="navbar__social-icon" target="_blank" rel="noopener noreferrer" aria-label="Enviar un Telegram"><i class="fab fa-telegram-plane"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ============== fontawesome js ============== -->
    <script src="https://kit.fontawesome.com/65e563f321.js" crossorigin="anonymous"></script>
    <!-- ============== menu js ============== -->
    <script src="./assets/js/menu.js"></script>
    <!-- ============== verify js ============== -->
    <script src="./assets/js/verify.js"></script>
    <!-- ============== collapsible js ============== -->
    <script src="./assets/js/collapsible.js"></script>
    <!-- ============== carousel js ============== -->
    <script src="./assets/js/carousel.js"></script>

</body>

</html>