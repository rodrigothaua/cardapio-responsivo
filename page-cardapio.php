<?php get_header(); ?>
  <!-- Other Content here -->

  <?php
      $query = new WP_Query( array( 
        'post_type'         => 'cadastrar_produto',
        'posts_per_page'    => 50,
        'order'             => 'ASC',
        'orderby'           => 'date',
        'paged'             => $paged,
        ) 
    );
  ?>

    <main>

        <!--CARD CATEGORIAS-->
        <div class="card-categorias">
            <strong>Categorias</strong>
            <div class="box-cat">
            
                <!--
                <a href="#" class="btn" data-cad="front">Front-End</a>
                <a href="#" class="btn" data-cad="back">Back-End</a>
                
                <div class="cursos">
                    <div class="curso front">Javascript</div>    
                    <div class="curso front">HTML</div>
                    <div class="curso front">CSS</div>
                    <div class="curso back">NodeJS</div>
                    <div class="curso back">MongoDB</div>
                </div>
-->
          
                <div class="card-cat">
                    <div class="icon">
                        <img src="http://localhost/wordcardapio/wp-content/themes/cardapio-responsivo/assets/images/icons/waiter.3c7aad91.svg" alt="">
                    </div>
                    <span><a href="#" class="btn" data-cad="todos">Todos</a></span>
                </div>
        
                <div class="card-cat">
                    <div class="icon">
                        <img src="http://localhost/wordcardapio/wp-content/themes/cardapio-responsivo/assets/images/icons/waiter.3c7aad91.svg" alt="">
                    </div>
                    <span>Entradas</span>
                </div>
        
                <div class="card-cat">
                    <div class="icon">
                        <img src="http://localhost/wordcardapio/wp-content/themes/cardapio-responsivo/assets/images/icons/plate.87931b99.svg" alt="">
                    </div>
                    <span>Pratos Principais</span>
                </div>
    
                <div class="card-cat">
                    <div class="icon">
                        <img src="http://localhost/wordcardapio/wp-content/themes/cardapio-responsivo/assets/images/icons/dessert.0a9922fa.svg" alt="">
                    </div>
                    <span>Sobremesas</span>
                </div>
    
                <div class="card-cat">
                    <div class="icon">
                        <img src="http://localhost/wordcardapio/wp-content/themes/cardapio-responsivo/assets/images/icons/drinks.a6871b7d.svg" alt="">
                    </div>
                    <span>Bebidas</span>
                </div>
    
                <div class="card-cat">
                    <div class="icon">
                        <img src="http://localhost/wordcardapio/wp-content/themes/cardapio-responsivo/assets/images/icons/wine.74c2b49e.svg" alt="">
                    </div>
                    <span>Vinhos</span>
                </div>
            </div>
        </div>

        <!--PRODUTOS-->
        <div class="produtos">
            <strong>Produtos</strong>

            <div class="alert alert-danger" role="alert">
                <h2>Atenção</h2>
                <strong>Meio prato será cobrado 60% do valor. O tempo médio de entrega de nossos pratos é de 30 a 45 minutos.</strong>
            </div>

            <div class="alert alert-success" role="alert">
                <h2>Classificação de pratos</h2>
                <strong>Meio prato será cobrado 60% do valor. O tempo médio de entrega de nossos pratos é de 30 a 45 minutos.</strong>
            </div>

            
            <div class="categorias">
                <div class="title-categorias">
                    <img src="http://localhost/wordcardapio/wp-content/themes/cardapio-responsivo/assets/images/icons/waiter-white.d21771a0.svg" alt="">
                    <span>Entradas</span>
                </div>
                <?php while ( $query->have_posts()) : $query->the_post();?>
                    <div class="produto-main">
                        <img src="<?php the_field('imagem_produto') ?>" alt="">
                        <div class="produto-descricao">
                            <div class="produto-title-descricao">
                                <strong><?php echo the_title(); ?></strong>
                                <span><?php the_field('descricao_do_produto') ?></span>
                            </div>
                            <div class="produto-preco">
                                <strong>R$ <?php the_field('preco') ?></strong>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </main>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Accordion Item #1
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Accordion Item #2
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Accordion Item #3
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                  </div>
                </div>
              </div>
        </div>
    </div>



<?php get_footer(); ?>