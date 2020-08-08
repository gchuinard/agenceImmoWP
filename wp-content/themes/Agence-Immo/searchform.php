<form action="<?= esc_url(home_url('/')) ?>" class="form-group form-search">
    <input type="search" placeholder="<?= __('Search post', 'Agence-Immo') ?>" name="s" value="<?= get_search_query() ?>">
    <button type="submit">
        <?= ft_agence_immo_icone('search') ?>
        <use xlink:href="sprite.14d9fd56.svg#search"></use>
        </svg>
    </button>
</form>