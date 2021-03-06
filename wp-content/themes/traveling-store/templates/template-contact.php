<!DOCTYPE html>
<html lang="en">
<?php
	/**
	 * Template Name: Contacts page template
	 * Template Post Type: page
	 *
	 * @package WordPress
	 * @subpackage Traveling Store
	 * @since Traveling Store 1.0
	 */
wp_head(); ?>
<body>
<div class="wrapper innerPageHeader">

    <?php get_header(); ?>
    <section class="innerPageSection contactUsPageSection">
        <div class="content">
            <?php $text = get_field('text_content'); ?>

            <div class="titleWrap innerPageTitleWrap">
                <div class="h2"><?php the_title(); ?></div>
            </div>
            <div class="textPageContent">
                <div class="contactUsContent">
                    <div class="p">
                        <?php echo $text; ?>
                    </div>

                    <div class="iconsRow">
                        <?php $contacts = get_field('contact_items');
                        foreach ( $contacts as $contact_items ) : ?>

                            <a href="<?php echo $contact_items['link']['url']; ?>" class="iconBlock">
                                <div class="iconPic">
	                                <?php echo wp_get_attachment_image($contact_items['image']['ID'], array(36, 36), false); ?>
                                </div>
                                <div class="iconText"><?php echo $contact_items['link']['title']; ?></div>
                            </a>

                        <?php endforeach; ?>
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