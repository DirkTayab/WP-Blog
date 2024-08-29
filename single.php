<?php get_header() ?>

<!-- Banner -->
<section class="single__banner bg--dark clr--light py--10">

      <?php 
                    $Banner = new WP_Query(array (
                    'post_type' => 'post',
                    'post_per_page' => 1,
                    'meta_key' => "Banner",
                    'meta_value' => "main",
                ))
                ?>

                <?php if($Banner->have_posts()) : while($Banner->have_posts()) : $Banner->the_post() ?>

      <div class="container">
        <div class="single__banner__header flex justify--between align--end">
          <h1>
            <?php the_title() ?>
          </h1>
          <ul>
            <li><?php echo get_the_date('M j, Y'); ?></li>
            <li>By: <?php echo get_the_author_meta('first_name'); ?></li>
          </ul>
        </div>
        <div class="single__banner__body">

            <?php the_content()?>

          <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    } ?>
        </div>
      </div>

      <?php endwhile;
                        else:
                          echo "No Content";
                        endif;
                        wp_reset_postdata();
                    ?>

</section>

<!-- Long Post -->
<main class="single__article py--10 bg--dark clr--light">
      <div class="container">

        <?php 
                        $single = new WP_Query(array (
                        'post_type' => 'post',
                        'post_per_page' => 1,
                        'meta_key' => "Single",
                        'meta_value' => "main",
                    ))
                    ?>

                    <?php if($single->have_posts()) : while($single->have_posts()) : $single->the_post() ?>
        <div class="single__article__wrapper">
          <div class="single__article__info bg--light clr--dark">
            <div class="single__article__meta">
              <h4>Category</h4>
              <p><?php echo get_the_category()[0]->name ?></p>
            </div>

            <div class="single__article__meta">
              <h4>Tags</h4>
              <p>
                <?php $tags = get_the_tags(); 
                        if($tags) {
                            foreach($tags as $tag){ ?>
                                <?php echo $tag->name;?>,
                           <?php }
                        }
                    ?>
              </p>
              
              
            </div>

            <div class="single__article__meta">
              <h4>Author</h4>
              <p>by: <?php echo get_the_author_meta('first_name'); ?></p>
            </div>

            <div class="single__article__meta">
              <h4>Reading</h4>
              <p><?php echo get_post_meta(get_the_ID(), 'Time', true); ?></p>
            </div>
          </div>

          <div class="single__article__body">
            <div class="wrapper">
              <h3>
                <?php the_title() ?>
              </h3>
              <?php the_content() ?>
            </div>

            <div class="single__navigation mt--10">
              <ul class="flex justify--between">
                <li><a href="#">Previous Story</a></li>
                <li><a href="#">Next Story</a></li>
              </ul>
            </div>
          </div>
        </div>

        <?php endwhile;
                        else:
                          echo "No Post";
                        endif;
                        wp_reset_postdata();
                    ?>

      </div>
</main>

<!-- Post 1:4 -->
<div class="single__other bg--dark clr--light">
      <div class="container">
        <div class="single__other__wrapper">
          <div class="single__other__sidebar">

           <?php 
                            $story = new WP_Query(array (
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'meta_key' => "Story",
                            'meta_value' => "sub",
                        ))
                        ?>

                        <?php if($story->have_posts()) : while($story->have_posts()) : $story->the_post() ?>
            <div class="card__sidebar">
              <ul class="card__meta flex">
                <li class="article__date"><?php echo get_the_date('M j, Y'); ?></li>
              </ul>
              <h3>
                <?php the_title() ?>
              </h3>
              <a href="#">Read more</a>
            </div>

            <?php endwhile;
                        else:
                          echo "No Post";
                        endif;
                        wp_reset_postdata();
                    ?>

          </div>
          <div class="single__other__main">

           <?php 
                    $card = new WP_Query(array (
                    'post_type' => 'post',
                    'post_per_page' => 1,
                    'meta_key' => "Card",
                    'meta_value' => "main",
                ))
                ?>

                <?php if($card->have_posts()) : while($card->have_posts()) : $card->the_post() ?>
                
            <div class="card__other">
              <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    } ?>
              <div class="overlay"></div>
              <div class="card__other__body">
                <h3>
                  <?php the_title() ?>
                </h3>
                <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                </p>
                <a href="#">Continue Reading</a>
              </div>
            </div>
            
          <?php endwhile;
                        else:
                          echo "No Posts";
                        endif;
                        wp_reset_postdata();
                    ?>

          </div>
        </div>
      </div>
</div>

<?php get_footer() ?>