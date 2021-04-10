<?php

get_header();

while(have_posts()) {
    the_post();
    pageBanner(array(
        'title' => '',
        'photo' => 'https://svoya.ucoz.ru/_ph/24/841300738.jpg'
    ));
    ?>

    <div class="container container--narrow page-section">

        <?php
        $theParent = wp_get_post_parent_id(get_the_ID());//возвращает ID родительского поста
        if($theParent) { ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>">
                        <i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a>
                    <span class="metabox__main"><?php the_title(); ?></span></p></php>
            </div>
        <?php }
        ?>

        <?php
        $testArray = get_pages(array(
            'child_of' => get_the_ID()//ищет дочерние страницы по ID родителя
        ));
        if ($theParent or $testArray) { ?>
            <div class="page-links">
                <h2 class="page-links__title"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title($theParent);
                        ?></a></h2>
                <ul class="min-list">
                    <?php
                    if($theParent) {
                        $findChildrenOf = $theParent;
                    } else {
                        $findChildrenOf = get_the_ID();
                    }
                    wp_list_pages(array(//Выводит список постоянных страниц в виде ссылок.
                        'title_li' => NULL,//Заголовок списка
                        'child_of' => $findChildrenOf,//показывает дочерние страницы отдельной страницы
                        'sort_column' => 'menu_order'//сортирует список по порядку, который
                        // указывается на админ-панели на странице редактирования постоянной страницы
                    ));
                    ?>
                </ul>
            </div>
        <?php } ?>

        <div class="generic-content">
            <form class="search-form" method="get" action="<?php echo esc_url(site_url('/')); ?>"><!--путь по котоорому оправляеться форма-->
                <label class="headline headline--medium" for="s">Perform a New Search:</label>
                <div class="search-form-row">
                    <input placeholder="What are you looking for?" class="s" id="s" type="search" name="s">
                                      <!--подсказывающий текст-->
                    <input class="search-submit" type="submit" value="Search">
                    <!--Submit Кнопка для отправки данных формы на сервер.  -->
                </div>
            </form>
        </div>

    </div>

<?php }

get_footer();

?>