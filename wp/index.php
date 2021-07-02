<?php
/*
    Template Name: Home
*/
?>
<?php get_header(); ?>
<section class="home section" style="background-image: url(<?php the_field('herobanner'); ?>);">
    <div class="container home-header">
        <div class="tabs-wrapper row">
            <div class="col-lg-6">
                <a class="tab-wrapper col-lg-12" target="_blank" href="https://www.facebook.com/Moja-Chlina-103193468648825">
                    <div>
                        <h5 class="tab-header">AKTUALNOŚCI</h5>
                        <p class="tab-title">Sprawdź co się dzieje</p>
                    </div>
                    <span class="tab-arrow">
                        <svg class="tab-arrow-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" width=32 height=32 viewBox="0 0 32 32" >
                            <path d="M21.548 5.088c-0.436-0.451-1.162-0.451-1.613 0-0.436 0.436-0.436 1.162 0 1.596l8.177 8.177h-26.984c-0.629 0.001-1.129 0.501-1.129 1.13s0.5 1.145 1.129 1.145h26.984l-8.177 8.162c-0.436 0.451-0.436 1.178 0 1.613 0.451 0.451 1.178 0.451 1.613 0l10.113-10.113c0.451-0.436 0.451-1.162 0-1.596l-10.113-10.114z"></path>
                        </svg>
                    </span>
                </a>
            </div>
            <div class="col-lg-6">
                <a class="tab-wrapper green col-lg-12" href="/historia">
                    <div>
                        <h5 class="tab-header light-green">JESTEŚ CIEKAW?</h5>
                        <p class="tab-title white">Poznaj historię Chliny</p>
                    </div>
                    <span class="tab-arrow">
                        <svg class="tab-arrow-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" width=32 height=32 viewBox="0 0 32 32" >
                            <path d="M21.548 5.088c-0.436-0.451-1.162-0.451-1.613 0-0.436 0.436-0.436 1.162 0 1.596l8.177 8.177h-26.984c-0.629 0.001-1.129 0.501-1.129 1.13s0.5 1.145 1.129 1.145h26.984l-8.177 8.162c-0.436 0.451-0.436 1.178 0 1.613 0.451 0.451 1.178 0.451 1.613 0l10.113-10.113c0.451-0.436 0.451-1.162 0-1.596l-10.113-10.114z"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="about section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 content-wrapper">
                <h2 class="header-2">O Chlinie</h2>
                <p class="content-header about-header">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae tincidunt nisl, eu ullamcorper quam.</p>
                <p class="content about-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae tincidunt nisl, eu ullamcorper quam. Donec feugiat id arcu eu porttitor. Praesent sed rutrum elit. Phasellus pellentesque sagittis enim, quis tincidunt turpis dignissim blandit.</p>
                <p class="content about-content">Curabitur malesuada eu elit et cursus. Vivamus mollis tempus volutpat. Etiam ac orci pharetra tellus vulputate malesuada eget vitae lorem. Mauris gravida lectus id ipsum accumsan maximus. Morbi id cursus justo. Cras mattis turpis vel lorem consequat luctus.</p>
            </div>
            <div class="col-lg-5 col-md-12 image-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about.png" class="image-view"/>
            </div>
        </div>
    </div>
</section>
<section class="history section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 d-lg-block d-sm-none image-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/history.png" class="image-view">
            </div>
            <div class="col-lg-7 col-md-12 content-wrapper">
                <h2 class="header-2">Historia Chliny</h2>
                <p class="content-header history-header">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae tincidunt nisl, eu ullamcorper quam.</p>
                <p class="content history-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae tincidunt nisl, eu ullamcorper quam. Donec feugiat id arcu eu porttitor. Praesent sed rutrum elit. Phasellus pellentesque sagittis enim, quis tincidunt turpis dignissim blandit.</p>
                <p class="content history-content">Curabitur malesuada eu elit et cursus. Vivamus mollis tempus volutpat. Etiam ac orci pharetra tellus vulputate malesuada eget vitae lorem. Mauris gravida lectus id ipsum accumsan maximus. Morbi id cursus justo. Cras mattis turpis vel lorem consequat luctus.</p>
            </div>
            <div class="col-lg-5 col-md-12 d-lg-none image-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/history.png" class="image-view">
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

