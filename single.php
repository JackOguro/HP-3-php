<?php get_header(); the_post();?>
  <!-- メイン -->
  <main>
    <div class="blog-tetail-wrapper">
      <?php the_post_thumbnail();?>
      <h2><?php the_time('Y.m.d'); ?><span><?php the_title(); ?></span></h2>
      <p><?php the_content();?></p>
      <ul class="blog-detail-btn">
        <li class="preview-btn">
          <?php if (get_previous_post()):?>
          <?php previous_post_link('%link', 'preview');?>
          <?php endif; ?>
        </li>
        <li class="BLOG-btn">
          <a href="<?php echo get_permalink(get_page_by_path('blog')->ID);?>">BLOG</a>
        </li>
        <li class="next-btn">
          <?php if (get_next_post()):?>
          <?php next_post_link('%link', 'next');?>
          <?php endif; ?>
        </li>
      </ul>
    </div>
    <p class="copyright copyright-blog-detail">©SHIKI ALL rights reserved</p>
  </main>
<?php get_footer();?>