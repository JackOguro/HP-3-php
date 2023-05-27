<?php get_header();?>
  <main>
    <section id="blog">
      <h1>Blog</h1>
      <div class="blog-all">
        <ul>
        <?php if (have_posts()) :
          while (have_posts()) :
          the_post();?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <p class="blog-txt"><?php echo get_post_time('F Y');?><span><?php the_title();?></span></p>
              <div class="blog-img">
                <?php the_post_thumbnail();?>
              </div>
            </a>
          </li>
        <?php endwhile; endif; ?>
        </ul>
      </div>
    </section>
    <p class="copyright copyright-blog">©SHIKI ALL rights reserved</p>
  </main>
<?php get_footer();?>