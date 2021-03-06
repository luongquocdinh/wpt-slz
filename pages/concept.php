

<script src="<?php echo get_template_directory_uri(); ?>/js/concept/script.js"></script>
<!-- /////////////////////////////////////////////////////////////////////////
    contents
 //////////////////////////////////////////////////////////////////////////////-->
<div id="contents">

    <!-- /////////////////////////////////////////////////////////////////////////
       breadcrumb
    //////////////////////////////////////////////////////////////////////////////-->
    <nav id="breadcrumb">
        <ul>
            <li><a href="<?php echo esc_url(home_url('/')) ?>" class="pageLink">TRANG CHỦ<span></span></a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ) . 'concept';?>" class="pageLink">TRIẾT LÝ<span></span></a></li>
        </ul>
    </nav>


    <section id="concept">
        <a href="<?php echo esc_url( home_url( '/' ) ) . 'brand_tenpan/';?>" class="btn_about_product pageLink"><span>Về sản phẩm của Milbon</span></a>

        <!-- メインビジュアル -->
        <div class="mainvisual">
            <!-- CMS:ブランド画像 -->
            <div class="visual" style="background: url(<?php echo get_template_directory_uri(); ?>/images/concept/mainvisual.jpg) no-repeat center center;background-size: cover;">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/concept/btn_play.png" alt=""></a>
            </div>
        </div>

        <!-- 詳細 -->
        <article class="detail">
            <header class="detail_header">
                <h1>TRIẾT LÝ</h1>
                <div class="scrolldown"><a href="#"><span>CUỘN XUỐNG</span></a></div>
            </header>
            <section class="detail_main">
                <?php
                while ( have_posts() ) :
                    the_post();
                    the_content();
                endwhile;
                ?>
                <section class="product">
                    <a href="<?php echo esc_url( home_url( '/' ) ) . 'brand_tenpan/';?>" class="pageLink">
                        <h3>VỀ SẢN PHẨM CỦA MILBON</h3>
                        <div class="ja"></div>
                        <div class="view">CHI TIẾT →<span class="line"></span></div>
                    </a>
                </section>
            </section>

            <h4>TRANG WEB GROUP MILBON</h4>

                <!-- GROUP LIST -->
                 <?php
                  // GET BLOG POSTS
                    $shortcode_blog_query = new WP_Query(array(
                      'post_type' => 'milbon-links',
                      'tax_query' => array(
                          array(
                            'taxonomy' => 'link_category',
                            'field' => 'slug',
                            'terms' => 'group-slug'
                          )
                       ),
                      'showposts' => 4,
                      'order' => 'ASC'
                    ));

                ?>
                <section class="list">
                  <?php if ( $shortcode_blog_query->have_posts() ) {
                  while($shortcode_blog_query->have_posts()) : $shortcode_blog_query->the_post(); ?>
                  <div class="column">
                    <a href="<?php echo get_post_meta($post->ID, "_location", true); ?>" target="_blank">
                      <div class="visual"><img src="
                        <?php
                          if ( has_post_thumbnail($post->ID) ) :
                              get_featured_url($post->ID);
                          endif;
                       ?>
                       " height="126" width="224" alt="<?php the_title(); ?>"></div>
                      <div class="defalt"><span><?php the_title(); ?></span></div>
                      <div class="over"><div class="bg"></div><span><?php the_title(); ?><p class="ja">
                        <?php
                          if (get_post_meta($post->ID,'_title_japanese', true) != '') { 
                            echo esc_html( "[" . get_post_meta($post->ID,'_title_japanese', true) . "]" );
                          } 
                        ?>
                      </p></span><p class="icon">XEM TRANG WEB</p></div>
                    </a>
                  </div>
                  <?php
                    endwhile;
                  }
                  ?>
                </div>

        </article>

    </section>
</div><!-- end contents -->