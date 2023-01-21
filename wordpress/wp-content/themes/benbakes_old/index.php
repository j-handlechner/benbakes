<!--
    TODO: – Add title
    – Add keywords & description
    - Run https://realfavicongenerator.net/ for favicons, tile & touchicons
    – Run https://realfavicongenerator.net/social for og image & info
    - Edit privacy info
    - Create E-mail-address datenschutz@
    – Host fonts locally with https://google-webfonts-helper.herokuapp.com/fonts
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Ben bakes</title>
        <!-- <link rel='stylesheet' href='./style.css'> -->
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#2e2e2e">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#2e2e2e">

        <?php wp_head(); ?>
    </head>

    <body>
        <?php wp_body_open(); ?>
        <div class="hide-overflow-x">
            <header>
                <nav>
                    <button id="hamburger" class="closed">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                    </button>
                    <ul>
                        <li><a href="#suggestion">Suggestions</a></li>
                        <li><a href="#philosophy">Philosophy</a></li>
                        <li><a href="#news">Sustainability</a></li>
                        <li><a href="#news">Workshops</a></li>
                        <li><a href="#news">Career</a></li>
                    </ul>   
                </nav>
                <p class="hero-lines">Welcome to</p>
                <h1>Ben bakes</h1>
                <p>Where fresh cakes, bread and coffee<br>are made daily<br>with love</p>
            </header>
    
            <main>
                <section id="suggestion">
                    <div class="left-arrow">
                        <img id="left_slider" src="images/bb-arrow-left.png" alt="Left navigation arrow" width="15" height="15">
                    </div>
                    <div class="right-arrow">
                        <img id="right_slider" src="images/bb-arrow-right.png" alt="Left navigation arrow" width="15" height="15">
                    </div>
                    <div class="suggestion-header-container">
                        <h2>Our Suggestions</h2>
                        <div class="vertical-line-top">
                        </div>
                    </div>
                    <div id="slidable-container" class="suggestion-container">
                        <div class="column1">
                            <h3>Drinks</h3>
                            <ul>
                                <li>Espresso</li>
                                <li>Somalian Arabica</li>
                                <li>2,40€</li>
                            </ul>
                            <ul>
                                <li>Lungo</li>
                                <li>Somalian Arabica</li>
                                <li>3,90€</li>
                            </ul>
                            <ul>
                                <li>Milk Coffee</li>
                                <li>Indonesian Robusta</li>
                                <li>4,40€</li>
                            </ul>
                        </div>
                        <div class="column2">
                            <h3>Breakfast</h3>
                            <ul>
                                <li>Crossaints</li>
                                <li>Winter Edition</li>
                                <li>3,70€</li>
                            </ul>
                            <ul>
                                <li class="EBM">English Breakfast<br>Muffins</li>
                                <li>Make it Veggie</li>
                                <li>6,40€</li>
                            </ul>
                            <ul>
                                <li>Granola Bowl</li>
                                <li>Make it Veggie</li>
                                <li>6,40€</li>
                            </ul>
                        </div>
                        <div class="column3">
                            <h3>Lunch</h3>
                            <ul>
                                <li>Energy Bowl</li>
                                <li>With Homemade Bread</li>
                                <li>8,40€</li>
                            </ul>
                            <ul>
                                <li>Club Sandwich</li>
                                <li>With Homemade Bread</li>
                                <li>6,90€</li>
                            </ul>
                            <ul>
                                <li>Hummus Bagle</li>
                                <li>With Fresh Veggies</li>
                                <li>6,90€</li>
                            </ul>
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
                        <div class="pic1"></div>
                        <div class="tasty-treat-text">
                            <h3>A tasty treat</h3>
                            <p>
                                Baking bread is an art 
                                that involves combining 
                                flour, yeast, salt, and 
                                water to create a delicious 
                                and aromatic loaf. The 
                                dough is carefully kneaded 
                                and shaped, then left to 
                                rise before being baked to 
                                perfection in the oven. 
                                The result is a warm 
                                and satisfying treat.
                                Come in and try our homemade
                                bread.
                            </p>
                        </div>
                        <div class="pic2"></div> <!-- why no img tag? -> accessibilty would be better (alt tag, and so on) -->
                        <div class="pic3"></div>
                    </div>     
                </section>

                <section id="energy">
                    <article class="left">
                        <p>Ben Bakes is <span>100%</span> sustainable.</p>
                        <p>We are using <span>renewable</span> energy in every store!</p>
                    </article>

                    <article class="bordered right">
                        <p>Find out more about our sustain&shy;ability partners here</p>
                        
                        <svg width="52" height="24" viewBox="0 0 52 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10.5C1.17157 10.5 0.5 11.1716 0.5 12C0.5 12.8284 1.17157 13.5 2 13.5L2 10.5ZM51.0607 13.0607C51.6464 12.4749 51.6464 11.5251 51.0607 10.9393L41.5147 1.3934C40.9289 0.807611 39.9792 0.807611 39.3934 1.3934C38.8076 1.97919 38.8076 2.92893 39.3934 3.51472L47.8787 12L39.3934 20.4853C38.8076 21.0711 38.8076 22.0208 39.3934 22.6066C39.9792 23.1924 40.9289 23.1924 41.5147 22.6066L51.0607 13.0607ZM2 13.5L50 13.5V10.5L2 10.5L2 13.5Z" fill="#7E8C49"/>
                        </svg>
                            
                        <img src="images/plant.png" alt="line art of plant">
                    </article>
                </section>

                <section id="workshops">
                    <img src="images/bb-workshop-pic.png">

                    <h2>Want to bake it up a notch?</h2>
                    <div class="text-content">
                        <p class="subtitle">Welcome to our bakery workshops! </p>
                        <p> Here, you can satisfy your sweet tooth and unleash your inner baker. Our professional instructors will guide you through the entire baking process, from preparation to presentation. We offer a wide range of classes for all levels of experience, from novice bakers to advanced.</p>
                        <p>Our classes are designed to be both informative and enjoyable, with a relaxed and friendly atmosphere. We provide all the necessary ingredients and tools, so you can focus on learning the craft of baking. Our classes cover a wide range of topics, including breadmaking, cake decorating, pastry-making, and more.</p>
                        <button>Book workshops</button>
                    </div>

                    <div class="background-rect"></div>
                </section>

                <section id="jobs">
                    <div class="left">
                        <div class="top">
                            <h2>Do you have what it bakes?</h2>
                            <p class="subtitle">We knead you now!</p>
                        </div>

                        <a href="#" class="button-wrapper">
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
                        <article>
                            <div class="text-content">
                                <p class="job-title">
                                    Chief Bakery dough-rector
                                </p>
    
                                <ul class="tags">
                                    <li>Full-Time</li>
                                    <div class="seperator"></div>
                                    <li>Salzburg</li>
                                    <div class="seperator"></div>
                                </ul>
                            </div>

                            <svg width="52" height="30" viewBox="0 0 52 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 13C0.89543 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17L2 13ZM51.4142 16.4142C52.1953 15.6332 52.1953 14.3668 51.4142 13.5858L38.6863 0.857864C37.9052 0.0768156 36.6389 0.0768156 35.8579 0.857864C35.0768 1.63891 35.0768 2.90524 35.8579 3.68629L47.1716 15L35.8579 26.3137C35.0768 27.0948 35.0768 28.3611 35.8579 29.1421C36.6389 29.9232 37.9052 29.9232 38.6863 29.1421L51.4142 16.4142ZM2 17L50 17V13L2 13L2 17Z" fill="#fff"/>
                            </svg>
                        </article>

                        <div class="seperator"></div>

                        <article>
                            <div class="text-content">
                                <p class="job-title">
                                    Flour-ishng Baker
                                </p>
    
                                <ul class="tags">
                                    <li>Full-Time</li>
                                    <div class="seperator"></div>
                                    <li>Salzburg</li>
                                    <div class="seperator"></div>
                                </ul>
                            </div>

                            <svg width="52" height="30" viewBox="0 0 52 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 13C0.89543 13 0 13.8954 0 15C0 16.1046 0.89543 17 2 17L2 13ZM51.4142 16.4142C52.1953 15.6332 52.1953 14.3668 51.4142 13.5858L38.6863 0.857864C37.9052 0.0768156 36.6389 0.0768156 35.8579 0.857864C35.0768 1.63891 35.0768 2.90524 35.8579 3.68629L47.1716 15L35.8579 26.3137C35.0768 27.0948 35.0768 28.3611 35.8579 29.1421C36.6389 29.9232 37.9052 29.9232 38.6863 29.1421L51.4142 16.4142ZM2 17L50 17V13L2 13L2 17Z" fill="#fff"/>
                            </svg>
                        </article>

                        <div class="seperator"></div>

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
    

            <footer>
                <p>Made with ♡ BY Denis Stjepanovic & Johannes Handlechner</p>
                <ul>
                    <li><p>Sources</p></li>
                    <li><a href="https://unsplash.com/photos/jN_M0McVNeI">https://unsplash.com/photos/jN_M0McVNeI</a></li>
                    <li><a href="https://www.pexels.com/de-de/foto/mann-person-hande-koch-8477754">https://www.pexels.com/de-de/foto/mann-person-hande-koch-8477754</a></li>
                    <li><a href="https://unsplash.com/photos/IUk1S6n2s0o">https://unsplash.com/photos/IUk1S6n2s0o</a></li>
                    <li><a href="https://unsplash.com/photos/l6io0iQxMSk">https://unsplash.com/photos/l6io0iQxMSk</a></li>
                    <li><a href="https://unsplash.com/photos/vz36u5iTn38">https://unsplash.com/photos/vz36u5iTn38</a></li>
                </ul>
            </footer>
        </div>
        
        <script src='./main.js'></script>
        <?php wp_footer(); ?>
</body>

</html>

