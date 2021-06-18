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
    <?php
        if( have_posts() ) :
            while( have_posts() ) :
                the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <ul class="post__meta">
                        <li class="post__meta__item">
                            <date class="post__meta__date"><?php echo get_the_date(); ?></date>
                        </li>
                        <li class="post__meta__item"><?php the_category( ', ' ); ?></li>
                        <li class="post__meta__item"><?php the_tags( '' ); ?></li>
                    </ul>
                    <?php the_post_thumbnail(); ?>
                    <?php the_content( 'READ MORE' ); ?>
                </div>
            <?php endwhile;
        else :
            ?><p>表示する記事がありません</p><?php
        endif;
    ?>
    <div class="box">
      
      <div class="up-box">
        <img src="" alt="">
        <div class="text-box">
          <p class="up-date">2017.7.8</p>
          <p class="p-title">あのネオンはいつ交換するのか！？観覧車の謎に迫る</p>
        </div>
        <div class="readmore">
          <a href="/" class="border">READ MORE</a>
        </div>
      </div>
      <div class="up-box">
        <img src="" alt="">
        <div class="text-box">
          <p class="up-date">2017.7.8</p>
          <p class="p-title">ラソナの社内はこんなよ</p>
        </div>
        <div class="readmore">
          <a href="/" class="border">READ MORE</a>
        </div>
      </div>
    </div>
  </main>

  <?php get_footer(); ?> 