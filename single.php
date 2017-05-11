<?php get_template_part('parts/header'); ?>

<div class="container">

  <div class="row">

    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
          <header>
            <h2><?php the_title()?></h2>
            <h4>
              <em>
              <!--  <span class="text-muted" class="author">Por <?php the_author() ?>,</span> -->
                <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('d \d\e F \d\e Y') ?></time>
              </em>
            </h4>
            <p class="text-muted" style="margin-bottom: 30px;">
          <!--    <i class="glyphicon glyphicon-folder-open"></i>&nbsp; Categoría: <?php _e(''); ?> <?php the_category(', ') ?><br/>
              <i class="glyphicon glyphicon-comment"></i>&nbsp; Comentarios: <?php comments_popup_link('ninguno', '1', '%'); ?>-->
            </p>
          </header>
          <?php // the_post_thumbnail('large'); ?>
          <?php the_content()?>
          <hr/>
        </article>
        <?php comments_template('/parts/comments.php'); ?>
        <?php endwhile; ?>
        <?php else: ?>
        <?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
        <?php endif;?>
      </div><!-- #content -->
    </div>

    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
      <div class="panel panel-default row">
        <?php get_template_part('parts/sidebar-internal'); ?>
      </div>
    </div>

  </div><!-- .row -->
</div><!-- .container -->

<?php get_template_part('parts/footer'); ?>
