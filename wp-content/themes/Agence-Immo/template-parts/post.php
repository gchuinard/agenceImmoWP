<article class="news">
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" title="<?= esc_attr(get_the_title()); ?>" class="news__image">
            <?php the_post_thumbnail(); ?>
        <?php else : ?>
            <img width="250px" height="250px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNccelSPQAHQwLNMZR4/wAAAABJRU5ErkJggg==">
        </a>
    <?php endif; ?>
    <div class="news__body">
        <header class="news__header">
            <?php $categories = get_the_category();
            if (!empty($categories)) : ?>
                <a class="news__tag" href="<?= get_term_link($categories[0]) ?>"><?= $categories[0]->name ?></a>
            <?php endif; ?>
            <a class="news__title" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
            <div class="news__date"><?= sprintf(__('Published on %s at %s', 'Agence_Immo'), get_the_date(), get_the_time()); ?></div>
        </header>
        <div class="news__content">
            <?php the_excerpt(); ?>
        </div>
        <a href="news-single.html" class="news__action">
            Lire la suite
            <?= ft_agence_immo_icone('arrow'); ?>
            <use xlink:href="sprite.14d9fd56.svg#arrow"></use>
            </svg>
        </a>
    </div>
</article>