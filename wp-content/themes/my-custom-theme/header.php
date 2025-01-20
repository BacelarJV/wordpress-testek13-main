<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <header>
        <div class="top-bar"></div>
        <div class="container">
            <div class="box-header">
                <div class="logo">
                    <img src="http://localhost/wordpress-testek13-main/wp-content/uploads/2025/01/Grupo-2433.png" alt="">
                </div>
                <nav class="navbar">
                    <ul>
                        <li>
                            <a class="item" href="#section-1">Home</a>
                        </li>
                        <li>
                            <a class="item"  href="#section-2">Institucional</a>
                        </li>
                        <li>
                            <a class="item"  href="#section-3">Produtos</a>
                        </li>
                        <li>
                            <a class="item"  href="#section-4">Trabalhe Conosco</a>
                        </li>
                        <li>
                            <a class="item"  href="#section-5">Contatos</a>
                        </li>
                        <li>
                            <a class="item search" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 18 18">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>