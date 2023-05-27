<?php get_header(); ?>
  <!-- ローディングアニメーション -->
  <div id="load-animation">
    <h1 class="season-ttl-index">Four seasons<span>四季</span></h1>
    <ul class="slideShowIndex">
      <li class="box"><img src="<?php echo get_template_directory_uri();?>/img/spring/sakura.jpg" alt="春画像"></li>
      <li><img src="<?php echo get_template_directory_uri();?>/img/summer/summer.jpg" alt="夏画像"></li>
      <li><img src="<?php echo get_template_directory_uri();?>/img/autumn/fall.jpg" alt="秋画像"></li>
      <li><img src="<?php echo get_template_directory_uri();?>/img/winter/fuyu.jpg" alt="冬画像"></li>
    </ul>
  </div>
  <!-- メイン -->
  <main>
    <!-- 四季 -->
    <!-- <section class="four-seasons top"> 
      <h1>Four seasons<span>四季</span></h1>
    </section> -->
    <!-- 四季説明 -->
    <section class="four-seasons season-desc-index box">
      <div class="season-txt-background fadeInTrigger">
        <div class="season-txt-ttl">
          <h1>Four seasons<span>四季</span></h1>
        </div>
        <p class="world-season">世界の四季</p>
        <p>日本の四季<br>
           日本の四季は特殊です<br>
           日本が特徴的なのは「春」<br>
           と<br>
           「秋」が明確に季節になっ<br>
           ていることです。
        </p>
      </div>
    </section>
    <!-- 春セクション -->
    <section class="four-seasons spring-index box">
      <h1 class="season-ttl-index">Spring</h1>
      <div class="home-btn">
        <a href="<?php echo get_permalink(get_page_by_path('photos')->ID);?>">View Photos</a>
      </div>
    </section>
    <!-- 夏セクション -->
    <section class="four-seasons summer-index box">
      <h1 class="season-ttl-index">Summer</h1>
      <div class="home-btn">
        <a href="<?php echo get_permalink(get_page_by_path('photos')->ID);?>">View Photos</a>
      </div>
    </section>
    <!-- 秋セクション -->
    <section class="four-seasons autumn-index box">
      <h1 class="season-ttl-index">Autumn</h1>
      <div class="home-btn">
        <a href="<?php echo get_permalink(get_page_by_path('photos')->ID);?>">View Photos</a>
      </div>
    </section>
    <!-- 冬セクション -->
    <section class="four-seasons winter-index box">
      <h1 class="season-ttl-index">Winter</h1>
      <div class="home-btn">
        <a href="<?php echo get_permalink(get_page_by_path('photos')->ID);?>">View Photos</a>
      </div>
    </section>
    <p class="copyright copyright-index">©SHIKI ALL rights reserved</p>
  </main>
<?php get_footer(); ?>