<?php get_header();
$contentPilares = get_field('nuestros_pilares');
$title = get_the_title(); 
$foto0 = get_the_post_thumbnail_url(get_the_ID(), 'large');
$foto1 = get_field('foto1')["sizes"]["medium_large"];
$foto2 = get_field('foto2')["sizes"]["medium_large"];
$foto3 = get_field('foto3')["sizes"]["medium_large"];
?>

<div class="container-propiedades">
    <?php if (have_posts()) : ?>
        <h1><?php echo $title; ?></h1>
        <div class="propiedad-details">
            <div class="image-container">
                <div class="images-mini">
                    <img src="<?= $foto0 ?>" alt="<?php the_title(); ?>" onmouseover="showImage('<?= $foto0 ?>')" onclick="showImage('<?= $foto0 ?>')">
                    <img src="<?= $foto1 ?>" alt="<?php the_title(); ?>" onmouseover="showImage('<?= $foto1 ?>')" onclick="showImage('<?= $foto0 ?>')">
                    <img src="<?= $foto2 ?>" alt="<?php the_title(); ?>" onmouseover="showImage('<?= $foto2 ?>')" onclick="showImage('<?= $foto0 ?>')">
                    <img src="<?= $foto3 ?>" alt="<?php the_title(); ?>" onmouseover="showImage('<?= $foto3 ?>')" onclick="showImage('<?= $foto0 ?>')">
                </div>
                <div class="images-main">
                    <img src="<?= $foto0 ?>" alt="<?php the_title(); ?>">
                </div>
            </div>
            <div class="details-container">
                <h2><?php echo $title;?></h2>
                
                <div class="propiedad-content">
                    <?php the_content(); ?>
                </div>
    
                <div class="propiedad-meta">
                    <table>
                        <tbody>
                            <tr class="row">
                                <td class="column-1"><strong>Ubicación:</strong></td>
                                <td class="column-2"><?php echo get_post_meta(get_the_ID(), 'ciudad', true); ?></td>
                            </tr>
                            <tr class="row">
                                <td class="column-1"><strong>Barrio:</strong>
                                <td class="column-2"><?php $barrio = get_post_meta(get_the_ID(), 'barrio', true); echo $barrio; ?></td>
                            </tr>
                            <tr class="row">
                                <td class="column-1"><strong>Precio:</strong>
                                <td class="column-2"><?php echo '$' . number_format(get_post_meta(get_the_ID(), 'valor', true), 0); ?></td>
                            </tr>
                            <tr class="row">
                                <td class="column-1"><strong>Area:</strong>
                                <td class="column-2"><?php echo number_format(get_post_meta(get_the_ID(), 'area', true), 2); ?> m2</td>
                            </tr>
                            <tr class="row">
                                <td class="column-1"><strong>Estrato:</strong>
                                <td class="column-2"><?php echo get_post_meta(get_the_ID(), 'estrato', true); ?></td>
                            </tr>
                            <tr class="row">
                                <td class="column-1"><strong>Alcobas:</strong>
                                <td class="column-2"><?php echo get_post_meta(get_the_ID(), 'alcobas', true); ?></td>
                            </tr>
                            <tr class="row">
                                <td class="column-1"><strong>Baños:</strong>
                                <td class="column-2"><?php echo get_post_meta(get_the_ID(), 'banos', true); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="contact-container">
                    <a href="/#contacto" class="slide__text-link">Me Interesa!</a>
                </div>
            </div>
        </div>
    <?php else : ?>
        <p>No se encontró la propiedad.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>

