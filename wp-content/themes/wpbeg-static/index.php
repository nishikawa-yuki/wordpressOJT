<?php get_header(); ?>
  <main>
    <div class="main-view">
      <img class="main-view-img switch" src="<?php echo get_template_directory_uri(); ?>/images/visual_1_sp.png"alt="main-viewsp"> 
      <div class="logo2">
        <img class="logo2 switch" src="<?php echo get_template_directory_uri(); ?>/images/visual_text_sp.png" alt="logo2">
      </div>
    </div>
    <div class="main-view-text">
      <p>進化し続ける「街」<br>アメリカンビレッジマガジン</p>
    </div>
    </div>
    <div class="main-h2">
      <h2>Latest Articles</h2>
    </div>
      <div class="box">
      <?php
      if( have_posts() ) :
          while( have_posts() ) :
              the_post(); ?>
          <div class="up-box">
            <?php the_post_thumbnail( 'medium' );?>
            <div class="text-box">
              <p class="up-date"><?php echo get_the_date(); ?></p>
              <?php the_title(); ?>
            </div>
            <div class="readmore">
              <span class="border">READ MORE</span>
            </div>
          </div>
                    <?php endwhile;
                else :
                    ?><p>表示する記事がありません</p><?php
                endif;
            ?>
          </div>
  </main>

  <?php get_footer(); ?> 