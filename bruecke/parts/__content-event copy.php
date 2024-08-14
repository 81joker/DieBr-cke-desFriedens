<section class="events" id="events-section" style="background-image: url('<?php echo get_theme_file_uri('assets/images/events-bg.png') ?>');">
    <div class="content-wrapper">
        <div class="inner-container container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-heading">
                        <div class="filter-categories">
                            <ul class="project-filter">
                                <li class="filter" data-filter="all"><span>Show All</span></li>
                                <?php
                                $today = date('Ymd');
                                $homepageEvents = new WP_Query(array(
                                    'posts_per_page' => 10,
                                    'post_type' => 'event',
                                    'meta_key' => 'event_date',
                                    'orderby' => 'meta_value_num',
                                    'order' => 'ASC'
                                ));
                                $loop_counter = 1;
                                while ($homepageEvents->have_posts()) {
                                    $homepageEvents->the_post(); ?>
                                    <?php
                                    $eventType  = get_field('event_type');
                                    if ( $eventType ) {
                                    $eventType = str_replace(' ', '-', $eventType);
                                    }
                                    ?>
                                    <?php if (get_field('event_type')): ?>
                                        <li class="filter filter-<?php echo  $loop_counter; ?>" data-filter="<?php echo  $eventType; ?>"><span><?php echo  get_field('event_type') ?></span></li>
                                    <?php endif; ?>
                                    <?php  $loop_counter++;?>
                                    <?php wp_reset_postdata(); ?>

                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-sm-12 col-md-offset-1">
                    <div class="projects-holder">
                        <div class="event-list">
                            <ul>
                                <?php
                                $today = date('Ymd');
                                $homepageEvents = new WP_Query(array(
                                    'posts_per_page' => 10,
                                    'post_type' => 'event',
                                    'meta_key' => 'event_date',
                                    'orderby' => 'meta_value_num',
                                    'order' => 'ASC',
                                    'meta_query' => array(
                                        array(
                                            'key' => 'event_date',
                                            'compare' => '>=',
                                            'value' => $today,
                                            'type' => 'numeric'
                                        )
                                    )
                                ));
                                $loop_counter = 1;
                                while ($homepageEvents->have_posts()) {
                                    $homepageEvents->the_post(); ?>
                                    <?php
                                    $eventType  = get_field('event_type');
                                    if ( $eventType ) {
                                    $eventType = str_replace(' ', '-', $eventType);
                                    }
                                    ?>
                                    <li class="project-item first-child mix <?php echo  $eventType; ?>">
                                        <ul class="event-item <?php echo  $eventType; ?>">
                                            <li>
                                                <div class="date">
                                                    <?php $eventDate = new DateTime(get_field('event_date')); ?>
                                                    <span><?php echo $eventDate->format('d') ?><br><?php echo $eventDate->format('M'); ?></span>
                                                </div>
                                            </li>
                                            <li>
                                                <h4><?php the_title() ?></h4>
                                                <!-- <h4>four loko franzen</h4> -->
                                                <div class="web-<?php echo $loop_counter;?>">
                                                    <span><?php echo ucwords(get_field('event_type')); ?></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="time">
                                                    <span><?php echo $eventDate->format('g:i A') ?><br><?php echo $eventDate->format('l') ?></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="white-button">
                                                    <a href="<?php the_permalink(); ?>">Read More</a>
                                                    <!-- <a href="#">I am interested</a> -->
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php  $loop_counter++;?>
                                    <?php wp_reset_postdata(); ?>

                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



