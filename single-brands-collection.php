<!DOCTYPE html>
<html lang="ja" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>MILBON</title>
    <meta NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW">
</head>

<body>
<div id="loadcontents">
    <div class="entry">
        <div id="product">
            <!-- CMS:商品画像 -->
            <div class="image">
                <img src="<?php echo get_featured_url($post->ID); ?>" alt="<?php the_title(); ?>"/></div>
            <div class="detail">
                <div class="detailInner">
                    <!-- CMS:所属ブランド名 -->
                    <div class="brandName"><?php echo get_the_title($_GET['brandID']); ?></div>
                    <!-- CMS:商品名 -->
                    <h2><?php the_title(); ?></h2>
                    <!-- CMS:説明文 -->
                    <div class="exp">
                        <?php
                        if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile;
                        wp_reset_query();
                        endif;
                        ?>
                    </div>
                    <!-- CMS:注意文 -->
                    <div class="ext"></div>
                    <div class="link">
                        <ul>
                            <li>
                                <a href="
                                    <?php
                                    if(get_post_meta($post->ID, '_attachment_file_id', true) !== ''):
                                        echo wp_get_attachment_url(get_post_meta($post->ID, '_attachment_file_id', true));
                                    else:
                                        echo '#';
                                    endif;     
                                    ?>" 
                                    target="_blank"><span class="file">DÀNH CHO NHÀ TẠO MẪU TÓC</span><span class="line"></span></a>
                            </li>
                            <li>
                                <a href="
                                    <?php
                                        if (get_post_meta($post->ID, '_location', true) !== ''):
                                            echo get_post_meta($post->ID, "_location", true);
                                        else:
                                            echo '#';
                                        endif;    
                                    ?>"
                                    target="_blank"><span class="youtube">FOR CUSTOMER</span><span class="line"></span></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- END : detailInner -->
            </div>
        </div>
    </div>
</div>
</body>

</html>
