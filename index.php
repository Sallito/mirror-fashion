
    <body>
        <?php 
        $cabecalho_title = "index";
        include("cabecalho.php");
        ?>
        <div class="container destaque">
        
            <section class="busca">
        
                <h2>Busca</h2>
                <form action="">
                    <input type="search">
                    <input type="image" src="img/busca.png">
                </form>
            </section> <!-- Fim Busca -->
            
            <section class="menu-departamentos">
                <h2>Departamentos</h2>
                <nav>
                    <ul><li><a href="#">Blusas e Camisas</a>
                        <ul>
                            <li><a href="#"></a>Manga Curta</li>
                            <li><a href="#"></a>Manga Comprida</li>
                            <li><a href="#"></a>Camisa Social</li>
                            <li><a href="#"></a>Camisa Casual</li>
                        </ul>
                        </li>
                        <li><a href="#">Calças</a></li>
                        <li><a href="#">Saias</a></li>
                        <li><a href="#">Vestidos</a></li>
                        <li><a href="#">Sapatos</a></li>
                        <li><a href="#">Bolsas e Carteiras</a></li>
                        <li><a href="#">Acessórios</a></li>
                    </ul>
                </nav>
            </section><!-- Fim Departamentos-->

            <img src="img/destaque-home.png" alt="Promoção: Big City Night" id="bc">
        </div><!-- Fim .container .destaque-->
        
        <div class="container paineis">
            <section class="painel novidades ">
                <h2>Novidades</h2>
                <ol>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura1.png" alt="">
                                <figcaption>Fuzz Cartingar por R$129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura2.png" alt="">
                                <figcaption>Fuzz Cartingar por R$129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura3.png" alt="">
                                <figcaption>Fuzz Cartingar por R$129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura4.png" alt="">
                                <figcaption>Fuzz Cartingar por R$129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura5.png" alt="">
                                <figcaption>Fuzz Cartingar por R$129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura6.png" alt="">
                                <figcaption>Fuzz Cartingar por R$129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </section>

            <section class="painel mais-vendidos ">
                <h2>Mais vendidos</h2>
                <ol>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura10.png" alt="">
                                <figcaption>Fuzz Cartingar por R$129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura11.png" alt="">
                                <figcaption>Fuzz Cartingar por R$129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura12.png" alt="">
                                <figcaption>Fuzz Cartingar por R$129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura13.png" alt="">
                                <figcaption>Fuzz Cartingar por R$129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura14.png" alt="">
                                <figcaption>Fuzz Cartingar por R$129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura15.png" alt="">
                                <figcaption>Fuzz Cartingar por R$129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </section>

        </div><!--Fim .container .paineis-->
        
       <?php include ("rodape.php");?>  
    </body>
