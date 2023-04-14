<footer style="margin-top: 10vw;">
    <div class="container">
        <!-- <p class="float-right"><a href="#">Back to top</a></p> -->
        <p>&copy; <?= date("Y"); ?> Pérolas da Neide, Inc. &middot; <a href="">Privacidade</a> &middot; <a href="">Termos</a></p>
    </div>
</footer>
<script>
    $(document).ready(function() {
        // Inicialmente, oculta os campos quando o form for carregado
        $('#divBloqueio').hide();
        $('#ativo').change(function() {
            if (!this.checked) {
                $('#ativo').attr('value', 1);
                $('#divBloqueio').toggle(20);
            } else {
                $('#ativo').attr('value', 0);
                $('#divBloqueio').toggle(20);
            }
        });
    });
</script>