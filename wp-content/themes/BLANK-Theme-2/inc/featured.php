<div id="page-info">
  <div id="featured">
    <div id="accordion">
      <dl class="easy-accordion">

      <?php
        global $post;
        $args = array('numberposts'=>3, 'category'=>3, 'orderby'=>'rand');
        $custom_posts = get_posts($args);
        foreach($custom_posts as $post) : setup_postdata($post);
        ?>

          <dt><?php the_title(); ?></dt>
            <dd>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p>
                <?php the_post_thumbnail("thumbnail"); ?> <?php the_excerpt(); ?><br>
                <a href="#" class="more">Read more</a>
              </p>
            </dd>

        <?php endforeach; wp_reset_postdata(); ?>
      </dl>
    </div>
  </div>
</div>
