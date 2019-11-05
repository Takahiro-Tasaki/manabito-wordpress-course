<?php get_header(); ?>
  <div class="wrapper clearfix">
    <main class="main">
      <h2 class="hidden">HOT TOPIC</h2>
      <a href="#" class="hot-topic clearfix">
        <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/hot-topic.jpg" alt="コーディング画面">
        <div class="content">
          <h3 class="title">実務で使えるHTML/CSS<br>モダンコーディングTIPS</h3>
          <p class="desc">Webフロントエンドの進化の勢いはとどまるところを知りません。新しい要素が増えて大幅に表現力が広がったHTML5/CSS3を活用して...</p>
          <time class="date" datetime="2015-09-01">2015.09.01 TUE</time>
        </div>
      </a>
      <h2 class="heading">NEWS</h2>
      <ul class="scroll-list">
				<?php while( have_posts() ) : the_post(); ?>
        <li class="scroll-item">
          <a href="#">
            <time class="date" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y-m-d（D）' ); ?></time>
						<?php
							$cat = get_the_category();
						?>
            <span class="category news"><?php echo $cat[0]->cat_name; ?></span>
            <span class="title"><?php the_title(); ?></span>
          </a>
        </li>
				<?php endwhile ?>
      </ul>
      <h2 class="hidden">ARTICLES</h2>
      <div class="clearfix">
        <a href="#" class="article-box">
          <h3 class="title">実務で使えるHTML/CSSモダンコーディングTIPS</h3>
          <p class="desc">新しい要素が増えてz大幅に表現力が広がったHTML5/CSS3を活用し、モダンなコーディングにチャレンジしましょう！</p>
          <time class="date" datetime="2015-06-17">2015.06.17 WED</time>
          <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/article.jpg" alt="コーディング画面">
        </a>
        <a href="#" class="article-box">
          <h3 class="title">実務で使えるHTML/CSSモダンコーディングTIPS</h3>
          <p class="desc">新しい要素が増えてz大幅に表現力が広がったHTML5/CSS3を活用し、モダンなコーディングにチャレンジしましょう！</p>
          <time class="date" datetime="2015-06-17">2015.06.17 WED</time>
          <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/article.jpg" alt="コーディング画面">
        </a>
        <a href="#" class="article-box">
          <h3 class="title">実務で使えるHTML/CSSモダンコーディングTIPS</h3>
          <p class="desc">新しい要素が増えてz大幅に表現力が広がったHTML5/CSS3を活用し、モダンなコーディングにチャレンジしましょう！</p>
          <time class="date" datetime="2015-06-17">2015.06.17 WED</time>
          <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/article.jpg" alt="コーディング画面">
        </a>
        <a href="#" class="article-box">
          <h3 class="title">実務で使えるHTML/CSSモダンコーディングTIPS</h3>
          <p class="desc">新しい要素が増えてz大幅に表現力が広がったHTML5/CSS3を活用し、モダンなコーディングにチャレンジしましょう！</p>
          <time class="date" datetime="2015-06-17">2015.06.17 WED</time>
          <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/article.jpg" alt="コーディング画面">
        </a>
      </div>
    </main>
    <?php get_sidebar(); ?>
  </div>
  <?php get_footer();