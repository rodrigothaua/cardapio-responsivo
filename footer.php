    <footer>
        <a href="#">Política de Privacidade</a>
        <div class="creditos">
            <span>Desenvolvido por <a href="#">RB3 Digital</a></span>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>
</html>

<script type="text/javascript">
        $('.btn').on('click', function(){
        var cat = $(this).attr('data-cad')
        if(cat == 'todos'){
            $('.categorias div').show()
        }else{
            $('.categorias div').each(function(){
                if(!$(this).hasClass(cat)){
                    $(this).hide()
                }else{
                    $(this).show()
                }
            })
        }
    })
</script>