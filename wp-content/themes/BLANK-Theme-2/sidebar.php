<div id="content-wrap" class="container">
    <div class="row">
        <div id="first-sidebar" class="col-md-2">
            <div class="widget">
                <h2>Site Navigation</h2>
                <?php wp_nav_menu(array('menu'=>'Category Menu', 'container'=>'')); ?>
            </div>

            <div class="widget">
                <h2>RSS Feeds</h2>
                <?php if(function_exists('fetch_feed')) {
                  include_once(ABSPATH . WPINC . '/feed.php');
                  $feed = fetch_feed('https://news.google.com/news?cf=all&hl=en&pz=1&ned=vi_vn&output=rss');
                  $limit = $feed->get_item_quantity(2);
                  $items = $feed->get_items(0, $limit);
                  if(!$items) echo "The feed is unavailable";
                  else foreach ($items as $item) : ?>

                    <p class="date"><?php echo $item->get_date('F j, Y'); ?></p>
                    <p><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></p>
                    <!-- <p><?php #echo substr($item->get_description(), 0, 250); ?></p> -->
                  <?php endforeach;} ?>

            </div>
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Left Sidebar')) : else : ?>

<?php endif; ?>
        </div> <!--end first sidebar-->
