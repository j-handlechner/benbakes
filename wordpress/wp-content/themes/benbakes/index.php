    <?php get_header(); ?>
            <main>
                <section id="suggestion">
                    <div class="left-arrow">
                        <img id="left_slider" src="<?= get_template_directory_uri() ?>/images/bb-arrow-left.png" alt="Left navigation arrow" width="15" height="15">
                    </div>
                    <div class="right-arrow">
                        <img id="right_slider" src="<?= get_template_directory_uri() ?>/images/bb-arrow-right.png" alt="Left navigation arrow" width="15" height="15">
                    </div>
                    <div class="suggestion-header-container">
                        <h2>Our Suggestions</h2>
                        <div class="vertical-line-top">
                        </div>
                    </div>
                    <div id="slidable-container" class="suggestion-container">
                        <div class="column1">
                            <h3>Drinks</h3>

                            <?php
                                $drinks = new WP_Query(array('category_name' => 'drinks' ));
                                if( $drinks->have_posts() ) {
                                    while( $drinks->have_posts() ) {
                                        $drinks->the_post(); // iterate the post here
                            ?>
                                <ul>
                                    <li><?= the_title(); ?></li>
                                    <li><?= the_content(); ?></li>
                                    <li><?= get_post_custom_values('price')[0] ?></li>
                                </ul>
                            <?php
                                    }
                                }
                            ?>

                        </div>
                        <div class="column2">
                            <h3>Breakfast</h3>
                            
                            <?php
                                $drinks = new WP_Query(array('category_name' => 'breakfast' ));
                                if( $drinks->have_posts() ) {
                                    while( $drinks->have_posts() ) {
                                        $drinks->the_post(); // iterate the post here
                            ?>
                                <ul>
                                    <li><?= the_title(); ?></li>
                                    <li><?= the_content(); ?></li>
                                    <li><?= get_post_custom_values('price')[0] ?></li>
                                </ul>
                            <?php
                                    }
                                }
                            ?>

                        </div>
                        <div class="column3">
                            <h3>Lunch</h3>

                            <?php
                                $drinks = new WP_Query(array('category_name' => 'lunch' ));
                                if( $drinks->have_posts() ) {
                                    while( $drinks->have_posts() ) {
                                        $drinks->the_post(); // iterate the post here
                            ?>
                                <ul>
                                    <li><?= the_title(); ?></li>
                                    <li><?= the_content(); ?></li>
                                    <li><?= get_post_custom_values('price')[0] ?></li>
                                </ul>
                            <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>

                    <div class="suggestion-button-container">
                        <div class="vertical-line-bot">
                        </div>
                        <button>View full Menu</button>
                    </div>
                </section>
    
                <section id="philosophy" class="full-bleed">
                    <div class="philosophy-container">
                        <!-- <img src="<?= get_template_directory_uri() ?>/images/bb-pic-segment-bread.png" class="pic1" alt="Bread on a wooden plate"> -->

                        <div class="tasty-treat-text">
                            <?php 
                                $args = array(
                                'name'        => 'philosophy',
                                'post_type'   => 'post',
                                'post_status' => 'publish',
                                'numberposts' => 1
                                );

                                $philosophyQuery = new WP_Query( $args );
                                if($philosophyQuery->have_posts()) :
                                    while($philosophyQuery->have_posts()): $philosophyQuery->the_post(); 
                            ?>
                            
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                            
                            <?php   endwhile; 
                                endif;
                            ?>
                        </div>

                        <?php 
                            $args = array(
                            'name'        => 'philosophy-gallery-left',
                            'post_type'   => 'post',
                            'post_status' => 'publish',
                            'numberposts' => 1
                            );

                            $philosophyQuery = new WP_Query( $args );
                            if($philosophyQuery->have_posts()) :
                                while($philosophyQuery->have_posts()): $philosophyQuery->the_post(); 
                        ?>
                        
                        <?php the_post_thumbnail('full', array('class' => 'pic1')); ?>
                        
                        <?php   endwhile; 
                            endif;
                        ?>
                        
                        <?php 
                            $args = array(
                            'name'        => 'philosophy-gallery-right',
                            'post_type'   => 'post',
                            'post_status' => 'publish',
                            'numberposts' => 1
                            );

                            $philosophyQuery = new WP_Query( $args );
                            if($philosophyQuery->have_posts()) :
                                while($philosophyQuery->have_posts()): $philosophyQuery->the_post(); 
                        ?>
                        
                        <?php the_post_thumbnail('full', array('class' => 'pic1')); ?>
                        
                        <?php   endwhile; 
                            endif;
                        ?>

<?php 
                            $args = array(
                            'name'        => 'philosophy-gallery-bottom',
                            'post_type'   => 'post',
                            'post_status' => 'publish',
                            'numberposts' => 1
                            );

                            $philosophyQuery = new WP_Query( $args );
                            if($philosophyQuery->have_posts()) :
                                while($philosophyQuery->have_posts()): $philosophyQuery->the_post(); 
                        ?>
                        
                        <?php the_post_thumbnail('full', array('class' => 'pic1')); ?>
                        
                        <?php   endwhile; 
                            endif;
                        ?>
                    </div>     
                </section>

                <section id="energy">
                    <article class="left">
                    <?php 
                                $args = array(
                                'name'        => 'sustainable-statement-upper',
                                'post_type'   => 'post',
                                'post_status' => 'publish',
                                'numberposts' => 1
                                );

                                $sustainableQuery = new WP_Query( $args );
                                if($sustainableQuery->have_posts()) :
                                    while($sustainableQuery->have_posts()): $sustainableQuery->the_post(); 
                            ?>
                            
                            <?php the_content(); ?>
                            
                            <?php   endwhile; 
                                endif;
                            ?>

                    <?php 
                                $args = array(
                                'name'        => 'sustainable-statement-lower',
                                'post_type'   => 'post',
                                'post_status' => 'publish',
                                'numberposts' => 1
                                );

                                $sustainableQuery = new WP_Query( $args );
                                if($sustainableQuery->have_posts()) :
                                    while($sustainableQuery->have_posts()): $sustainableQuery->the_post(); 
                            ?>
                            
                            <?php the_content(); ?>
                            
                            <?php   endwhile; 
                                endif;
                            ?>
                            
                        <!-- <p>Ben Bakes is <span>100%</span> sustainable.</p>
                        <p>We are using <span>renewable</span> energy in every store!</p> -->
                    </article>

                    <article class="bordered right">

                    <?php 
                        $args = array(
                        'name'        => 'sustainability-partners',
                        'post_type'   => 'post',
                        'post_status' => 'publish',
                        'numberposts' => 1
                        );

                        $sustainableQuery = new WP_Query( $args );
                        if($sustainableQuery->have_posts()) :
                            while($sustainableQuery->have_posts()): $sustainableQuery->the_post(); 
                    ?>
                    
                    <?php the_content(); ?>
                    
                    <?php   endwhile; 
                        endif;
                    ?>
                        
                        <a href="/sustainability">
                            <svg width="52" height="24" viewBox="0 0 52 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10.5C1.17157 10.5 0.5 11.1716 0.5 12C0.5 12.8284 1.17157 13.5 2 13.5L2 10.5ZM51.0607 13.0607C51.6464 12.4749 51.6464 11.5251 51.0607 10.9393L41.5147 1.3934C40.9289 0.807611 39.9792 0.807611 39.3934 1.3934C38.8076 1.97919 38.8076 2.92893 39.3934 3.51472L47.8787 12L39.3934 20.4853C38.8076 21.0711 38.8076 22.0208 39.3934 22.6066C39.9792 23.1924 40.9289 23.1924 41.5147 22.6066L51.0607 13.0607ZM2 13.5L50 13.5V10.5L2 10.5L2 13.5Z" fill="#7E8C49"/>
                            </svg>
                        </a>
                            
                        <img src="<?= get_template_directory_uri() ?>/images/plant.png" alt="line art of plant">
                    </article>
                </section>

                <section id="workshops">
                <?php 
                        $args = array(
                        'name'        => 'workshops',
                        'post_type'   => 'post',
                        'post_status' => 'publish',
                        'numberposts' => 1
                        );

                        $workshopQuery = new WP_Query( $args );
                        if($workshopQuery->have_posts()) :
                            while($workshopQuery->have_posts()): $workshopQuery->the_post(); 
                    ?>
                    
                    <?php the_post_thumbnail(); ?>
                    <h2> <?php the_title(); ?></h2>
                    <div class="text-content">

                        <p class="subtitle"> <?= get_post_custom_values( 'subheadline' )[0]; ?> </p>

                        <?php the_content(); ?>
                        <button>Book workshops</button>
                    </div>
                    
                    <?php   endwhile; 
                        endif;
                    ?>

                    <div class="background-rect"></div>
                </section>

                <section id="jobs">
                    <div class="left">
                        <div class="top">
                        <?php 
                                $args = array(
                                'name'        => 'jobs',
                                'post_type'   => 'post',
                                'post_status' => 'publish',
                                'numberposts' => 1
                                );

                                $workshopQuery = new WP_Query( $args );
                                if($workshopQuery->have_posts()) :
                                    while($workshopQuery->have_posts()): $workshopQuery->the_post(); 
                            ?>
                            
                            <h2> <?php the_title(); ?></h2>
                            <div class="subtitle-wrapper">
                                <?php the_content(); ?>
                            </div>

                            <?php   endwhile; 
                        endif;
                    ?>
                        </div>

                        <a href="/teampage" class="button-wrapper">
                            <div class="button-left">
                                <p>Find out more about</p>
                                <p class="big">our team</p>
                            </div>

                            <svg width="52" height="30" viewBox="0 0 52 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 13C0.89543 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17L2 13ZM51.4142 16.4142C52.1953 15.6332 52.1953 14.3668 51.4142 13.5858L38.6863 0.857864C37.9052 0.0768156 36.6389 0.0768156 35.8579 0.857864C35.0768 1.63891 35.0768 2.90524 35.8579 3.68629L47.1716 15L35.8579 26.3137C35.0768 27.0948 35.0768 28.3611 35.8579 29.1421C36.6389 29.9232 37.9052 29.9232 38.6863 29.1421L51.4142 16.4142ZM2 17L50 17V13L2 13L2 17Z" fill="#E2C49F"/>
                            </svg>
                        </a>
                    </div>

                    <div class="right">
                    <?php
                            $jobOffers = new WP_Query(array('category_name' => 'job-offer' ));
                            if( $jobOffers->have_posts() ) {
                                while( $jobOffers->have_posts() ) {
                                    $jobOffers->the_post(); // iterate the post here
                        ?>

                        <article> 
                            <div class="text-content">
                                    <p class="job-title"><?php the_title(); ?></p>

                                    <ul class="tags">
                                        <li><?= get_post_custom_values( 'location' )[0]; ?> </li>
                                        <div class="seperator"></div>
                                        <li><?= get_post_custom_values( 'workload' )[0]; ?> </li>
                                        <div class="seperator"></div>
                                    </ul>
                                </div>

                            <svg width="52" height="30" viewBox="0 0 52 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 13C0.89543 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17L2 13ZM51.4142 16.4142C52.1953 15.6332 52.1953 14.3668 51.4142 13.5858L38.6863 0.857864C37.9052 0.0768156 36.6389 0.0768156 35.8579 0.857864C35.0768 1.63891 35.0768 2.90524 35.8579 3.68629L47.1716 15L35.8579 26.3137C35.0768 27.0948 35.0768 28.3611 35.8579 29.1421C36.6389 29.9232 37.9052 29.9232 38.6863 29.1421L51.4142 16.4142ZM2 17L50 17V13L2 13L2 17Z" fill="#fff"/>
                            </svg>
                        </article>

                        <div class="seperator"></div>

                        <?php
                                }
                            }
                        ?>

                        <article>
                            <div class="text-content">
                                <p class="job-title">
                                    Not what you are looking for?
                                </p>
    
                                <ul class="tags">
                                    <li>Initiative Application</li>
                                </ul>
                            </div>

                            <svg width="52" height="30" viewBox="0 0 52 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 13C0.89543 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17L2 13ZM51.4142 16.4142C52.1953 15.6332 52.1953 14.3668 51.4142 13.5858L38.6863 0.857864C37.9052 0.0768156 36.6389 0.0768156 35.8579 0.857864C35.0768 1.63891 35.0768 2.90524 35.8579 3.68629L47.1716 15L35.8579 26.3137C35.0768 27.0948 35.0768 28.3611 35.8579 29.1421C36.6389 29.9232 37.9052 29.9232 38.6863 29.1421L51.4142 16.4142ZM2 17L50 17V13L2 13L2 17Z" fill="#fff"/>
                            </svg>
                        </article>
                    </div>

                </section>
            </main>

            <?php get_footer(); ?>