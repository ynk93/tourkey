<!DOCTYPE html>
<html lang="en">
<?php
/**
 * Template Name: Cart page
 */
wp_head(); ?>
<body>
<div class="wrapper innerPageHeader">

    <?php get_header(); ?>

    <section class="innerPageSection basketPageSection">

        <div class="content">

            <div class="titleWrap innerPageTitleWrap">
                <div class="h2">
                    <?php _e('Моя корзина', 'traveling-store'); ?>
                </div>
            </div>

            <div class="basketPageContent">

	            <?php get_template_part('woocommerce/cart/cart')?>

                <div class="basketLeftSide">
                    <div class="basketItemRow">
                        <div class="itemPic">
                            <img src="images/uploads/toursPic/image%204.png">
                        </div>
                        <div class="itemInfo">
                            <div class="itemName">
                                Экскурсия в собор Святой Софии (Стамбул)
                            </div>
                            <div class="infoBlock">
                                <div class="label">Дата и время</div>
                                <div class="value">
                                    <span class="date">20 марта 2020</span>
                                    <span class="time">12:00</span>
                                </div>
                            </div>
                            <div class="infoBlock">
                                <div class="label">Язык</div>
                                <div class="value">английский</div>
                            </div>
                        </div>
                        <div class="itemNumbersInfo">
                            <div class="itemBlock">
                                <div class="itemRow">
                                    <div class="itemRowName">Взрослые</div>
                                    <div class="itemRowNumberBlock">2</div>
                                </div>
                                <div class="itemRow">
                                    <div class="itemRowName">Дети (до 3 лет)</div>
                                    <div class="itemRowNumberBlock">0</div>
                                </div>
                            </div>
                            <div class="itemBlock">
                                <div class="itemRow">
                                    <div class="itemRowName">Дети (4 - 6 лет)</div>
                                    <div class="itemRowNumberBlock">1</div>
                                </div>
                                <div class="itemRow">
                                    <div class="itemRowName">Дети (7 - 12 лет)</div>
                                    <div class="itemRowNumberBlock">1</div>
                                </div>
                            </div>
                        </div>
                        <div class="itemPrice">
                            <span class="onlyOnMobile h5"><?php _e('Стоимость', 'traveling-store')?></span>
                            <div class="h5">
                                120$
                            </div>
                        </div>
                    </div>
                    <div class="basketItemRow">
                        <div class="itemPic">
                            <img src="images/uploads/toursPic/image%205.png">
                        </div>
                        <div class="itemInfo">
                            <div class="itemName">
                                Экскурсия в собор Святой Софии (Стамбул)
                            </div>
                            <div class="infoBlock">
                                <div class="label">Дата и время</div>
                                <div class="value">
                                    <span class="date">20 марта 2020</span>
                                    <span class="time">12:00</span>
                                </div>
                            </div>
                            <div class="infoBlock">
                                <div class="label">Язык</div>
                                <div class="value">английский</div>
                            </div>
                        </div>
                        <div class="itemNumbersInfo">
                            <div class="itemBlock">
                                <div class="itemRow">
                                    <div class="itemRowName">Взрослые</div>
                                    <div class="itemRowNumberBlock">2</div>
                                </div>
                                <div class="itemRow">
                                    <div class="itemRowName">Дети (до 3 лет)</div>
                                    <div class="itemRowNumberBlock">0</div>
                                </div>
                            </div>
                            <div class="itemBlock">
                                <div class="itemRow">
                                    <div class="itemRowName">Дети (4 - 6 лет)</div>
                                    <div class="itemRowNumberBlock">1</div>
                                </div>
                                <div class="itemRow">
                                    <div class="itemRowName">Дети (7 - 12 лет)</div>
                                    <div class="itemRowNumberBlock">1</div>
                                </div>
                            </div>
                        </div>
                        <div class="itemPrice">
                            <span class="onlyOnMobile h5"><?php _e('Стоимость', 'traveling-store')?></span>
                            <div class="h5">
                                120$
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rightSideSideBar">
                    <div class="basketSideBarHead">
                        <span class="label"><?php _e('Итого', 'traveling-store'); ?></span>
                        <span class="value confirmationPrice">$240</span>
                    </div>
                    <a href="#" class="confirmOrderButton">
                        <span><?php _e('Оформить заказ', 'traveling-store'); ?></span>
                    </a>
                    <a href="#" class="continueShoppingButton">
                        <span><?php _e('Продолжить поиск', 'traveling-store'); ?></span>
                    </a>
                    <div class="sideBarInfoBlock">
                        <div class="sideBarInfoTitle"><?php _e('Гарантия лучшей цены', 'traveling-store'); ?></div>
                        <div class="sideBarInfoText">
                            <?php _e('Наш сервис даёт возможность туристическому объекту-исполнителю, предоставить услугу
                            туристам, минуя посредников, агентств и т. п. Что в разы сокращает стоимость туристических
                            услуг.', 'traveling-store'); ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <?php get_footer(); ?>

</div>
</body>
<?php wp_footer(); ?>
</html>