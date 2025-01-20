<?php
/*
Template Name: Home
*/
?>

<?php
get_header();
?>

<main>
    <h1><?= get_field('texto'); ?></h1>
    <!-- Banner -->
    <section class="banner" id="section-1">
        <img src="<?= get_field('banner') ?>" alt="">
    </section>

    <!-- Seção com texto e botão -->
    <section class="intro" id="section-2">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h2>Where can I get some</h2>
                    <p class="card-text"><?= get_field('lorem_text') ?></p>
                    <a href="<?= get_field(selector: 'link') ?>" class="btn btn-card">Saiba Mais</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Seção com imagens lado a lado -->
    <section class="variations" id="section-3">
        <div class="container">
            <h2>There are many variations</h2>
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?= get_field('image-1') ?>" alt="">
                </div>
                <div class="col-lg-6">
                    <img src="<?= get_field('image-2') ?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--Seção campo com texto-->
    <section class="intro" id="section-4">
        <div class="container">
            <h2>Where can I get some</h2>
            <p class="text-free"><?= get_field('lorem_text-2') ?></p>
            <a href="<?= get_field(selector: 'link') ?>" class="btn">Conhecer</a>
        </div>
    </section>

    <!-- Formulário -->
    <section class="contact-form" id="section-5">
        <div class="container">
            <div class="form-container col-lg-10 mx-auto">
                <h1>Enviar Mensagem</h1>
                <form>
                    <div class="form-layout">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="Nome">Nome</label>
                                    <input type="text" name="Nome" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="text" name="email" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">Telefone</label>
                                    <input type="text" name="telefone" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" name="cidade" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Mensagem">Mensagem</label>
                                <textarea placeholder="" name="Mensagem" rows="5" required></textarea>
                            </div>
                            <div class="form-group btn-box">
                                <button type="submit">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>