 <!-- Blog Post -->
            <div class="card mb-4">
                <!-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
                   <?php the_post_thumbnail('thumbnail')?>
                <div class="card-body">
                    <h2 class="card-title"><a href="<?php the_permalink()?>"><?php the_title()?>Post Title</a></h2>
                    <p><?php the_category(" ")?></p>
         <p class="card-text"><?php the_excerpt()?></p>
                    <!-- <a href="#" class="btn btn-primary">Read More →</a> -->
                    <a href="<?php the_permalink()?>" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
         Posted on <?php echo get_the_date() ?> by
         <a href="#">Start Bootstrap</a>
     </div>
            </div>