
<div class="row justify-content-center" style="max-width: 100%; margin-top: 5vw;">
    <div class="col-md-5 mt-5 bg-light rounded">
        <h1 class="text-center font-weight-bold" style="color: #502F4C;">Contato</h1>
        <hr class="bg-light">
        <h6 class="text-center text-muted mb-2 ">Deixe seu Feedback ou Sugestão!</h6>
        <h5 class="text-center text-success"></h5>
        <?php echo form_open('contato/enviar', 'class="p-2" id="contato"') ?>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" name="nome" class="form-control" placeholder="Seu nome" value="<?php echo set_value('nome'); ?>" required>
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="Seu e-mail" value="<?php echo set_value('email'); ?>" required>
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-comment-alt"></i></span>
                </div>
                <textarea name="descricao" id="descricao" class="form-control" placeholder="Sua mensagem" cols="30" rows="6" value="<?php echo set_value('descricao'); ?>" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Enviar">
            </div>
        <?= form_close()?>
    </div>
</div> 
