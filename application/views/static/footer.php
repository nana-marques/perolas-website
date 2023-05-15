<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<footer class="page-footer" style="margin-top: 10vw;background-color: #f4afbd;">
    <div class="container pt-3">
        <div class="row">
            <div class="col-md-12 py-2">
                <div class="mb-4 justify-content-around d-flex"> 
                    <a style="font-weight:bolder;" href="<?= base_url('contato') ?>">E-mail</a><span style="color:#f7f7f7;font-size:24px;">&middot;</span>
                    <a style="font-weight:bolder;" href="<?= base_url('about') ?>">Sobre</a><span style="color:#f7f7f7;font-size:24px;">&middot;</span>
                    <a style="font-weight:bolder;" href="#" title="Nosso Whatsapp"><i style="font-size:24px" class="fa fa-whatsapp"></i></a><span style="color:#f7f7f7;font-size:24px;">&middot;</span>
                    <a style="font-weight:bolder;" href="#" title="Nosso Instagram"><i style="font-size:24px" class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-2">
            <p>&copy; <?= date("Y"); ?> Pérolas da Neide, Inc.</p>
        </div>
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



