<?php
$reseaux_sociaux = [
    'twitter'   =>  'Twitter',
    'facebook'  =>  'Facebook',
    'instagram' =>  'Instagram'
];
?>

<div class="footer__credits"><?= esc_html($instance['credits']); ?></div>
<div class="footer__social">
    <?php foreach ($reseaux_sociaux as $name => $label) : ?>
        <?php if (!empty($instance[$name])) : ?>
            <a href="<?= esc_url($instance[$name]) ?>" title="<?= sprintf(esc_attr('Nous suivre sur %s', 'Agence-Immo'), $label); ?>">
                <?= ft_agence_immo_icone($name); ?>
            </a>
        <?php endif; ?>
    <?php endforeach; ?>
</div>