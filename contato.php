<? require_once('header.php') ?>

<section class="contato-container">

    <div class="contato-msg-container">
        <article class="container">
            <h1>CANAL DE ATENDIMENTO - ALGU SOLUÇÕES!</h1>
            <h4>FALE CONOSCO! QUEREMOS SABER COMO PODEMOS AJUDAR</h4>
            <!-- <p>CONHEÇA A <strong>AUGU SOLUÇÕES!</strong></p> -->
        </article>
    </div>

    <div class="contato-form-container">
        <div class="container">
            <form class="form-horizontal" role="form" method="post">
                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" placeholder="Nome">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="assunto" class="col-sm-2 control-label">Assunto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="assunto" placeholder="Assunto">
                    </div>
                </div>

                <div class="form-group">
                    <label for="mensagem" class="col-sm-2 control-label">Mensagem</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="mensagem" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                        <button type="reset" class="btn btn-default btn-lg">Limpar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>




<? require_once('footer.php') ?>