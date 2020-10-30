<?php
include("includes/header.php");
?>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets_portfolio/css/styles.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">

<body>

<?php
  include("includes/nav.php");
?>

  <div class="container">
    <button id="switch" onclick="toggleTheme()">Dark mode 😎</button>
</div>

<div class="container">
<div class="post">
      <a href="contact.php"><img src="images/tess.png" alt="robot"></a>
      <ul class="post-user">
       <li>Adimael DevOps</li>
      </ul>
      <ul class="post-desc">
        <li>
          <div id="result2">Olá! Meu nome é Adimael, Sou Engenheiro de software.</div>
        </li>
      </ul>
      <a href="contact.html"><div class="btnsuport">
        <a class="btn btn-cta-primary pull-right" href="mailto:adimaelbr@gmail.com?Subject=Hello%20Hossain"><i class="fa fa-paper-plane"></i> Contact Me</a>
        <br>
      </div></a>
  </div>
  
  <div class="container sections-wrapper">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading">About Me</h2>
                        <div class="content">
                            <p>Sou um desenvolvedor apaixonado que sempre gosta de projetos e desafios interessantes. Amo trabalhar na web, mobile e tecnologias relacionadas.</p>

                            <p>Também adoro passar o tempo me mantendo atualizado com notícias de tecnologia e gadgets. Nas horas vagas, gosto de utilizar o tempo para aprender novas tecnologias ou procurar por projetos para aprimorar meu conhecimento.</p>

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

                <section class="latest section">
                    <div class="section-inner">
                        <h2 class="heading">Latest Projects</h2>
                        <div class="content">

                            <div class="item featured text-center"><!-- featured item-->
                                <h3 class="title"><a href="https://github.com/amardeshbd/android-police-brutality-incidents#google-play-submission-update" target="_blank"><i class="fa fa-users"></i> 2020 Police Brutality Incidents</a></h3>
                                <p class="summary">An Android&trade; app that allows users to browse reported police brutality incidents during the protests of 2020 following the murder of George Floyd.</p>
                                <div class="featured-image">
                                    <a href="https://github.com/amardeshbd/android-police-brutality-incidents#google-play-submission-update" target="_blank">
                                        <img class="img-responsive project-image" src="assets_portfolio/images/projects/2020pb-android-app.png" alt="2020 Police Brutality Incidents during the 2020 George Floyd protests">
                                    </a>
                                    <div class="ribbon">
                                        <div class="text">New</div>
                                    </div>
                                </div>

                                <div class="desc text-left">
                                    <p>The &quot;2020PB&quot; app was created to share awareness of <code>#BlackLivesMatter</code> and <code>#JusticeForJeorgeFloyd</code> by surfacing all the incidents reported by the community
                                        that happened during peaceful protests for George Floyd's murder by law enforcement personnel.</p>

                                    <blockquote>All the community reported incidents are collected via <a href="https://github.com/2020PB/police-brutality" target="_blank">2020PB/police-brutality</a> GitHub repository. The community is driven by <i class="fa fa-reddit-alien" aria-hidden="true"></i> <a href="https://www.reddit.com/r/2020PoliceBrutality/" target="_blank">r/2020PoliceBrutality/</a> reddit community.</blockquote>
                                </div><!--//desc-->
                                <a class="btn btn-cta-secondary" href="https://github.com/amardeshbd/android-police-brutality-incidents#google-play-submission-update" target="_blank"><i class="fa fa-download"></i> Test drive the app</a>
                                <a class="btn btn-cta-secondary" href="https://github.com/amardeshbd/android-police-brutality-incidents" target="_blank"><i class="fa fa-github"></i> Contribute on GitHub</a>
                            </div><!--//featured item-->

                            <div class="item featured text-center"><!-- featured item-->
                                <h3 class="title"><a href="https://play.google.com/store/apps/details?id=com.hossainkhan.vision" target="_blank"><i class="fa fa-television"></i> H.K. Vision Plugin for Muzei</a></h3>
                                <p class="summary">A simple Muzei Live Wallpaper plugin for my H.K. Vision photography site.</p>
                                <div class="featured-image">
                                    <a href="https://play.google.com/store/apps/details?id=com.hossainkhan.vision"
                                       target="_blank">
                                        <img class="img-responsive project-image"
                                             src="assets_portfolio/images/projects/android-muzei-plugin-feature-graphic.png"
                                             alt="H.K. Vision Muzei Plugin for Android">
                                    </a>
                                    <div class="ribbon">
                                        <div class="text">Beta</div>
                                    </div>
                                </div><!--//featured-image-->

                                <div class="desc text-left">
                                    <p>&quot;Vision Muzei Plugin&quot; is an Android plugin for my <b>H.K. Vision</b> <i class="fa fa-camera-retro" aria-hidden="true"></i> <a href="https://vision.hossainkhan.com/" class="dimmed-link">photography site</a>.
                                        The plugin app allows users to use the featured photos as background wallpaper on their Android phone that automatically changes over time.</p>
                                    <p>Get get advantage of this plugin, you <b>must</b> install the <a href="https://play.google.com/store/apps/details?id=net.nurik.roman.muzei">Muzei Live Wallpaper</a> app on you phone.
                                        Once installed, you can then install this plugin and the H.K. Vision featured photos will show as a "source" inside the Muzei app.
                                    </p>
                                    <p>Here is an example, where it shows how the H.K. Vision image source shows inside the <a href="https://play.google.com/store/apps/details?id=net.nurik.roman.muzei">Muzei app</a>
                                        &amp; how you can select photo and customize it:</p>
                                    <div class="featured-image">
                                        <a href="assets_portfolio/images/projects/android-muzei-plugin-demo-large.png"
                                           target="_blank">
                                            <img class="img-responsive project-image"
                                                 src="assets_portfolio/images/projects/android-muzei-plugin-demo-large-small.png"
                                                 alt="H.K. Vision Muzei Plugin for Android Demo Screenshots">
                                        </a>
                                        <div class="ribbon">
                                            <div class="text">Demo</div>
                                        </div>
                                    </div><!--//featured-image-->
                                    <p>The application is Open Source and available in <i class="fa fa-github-alt"></i><a href="https://github.com/amardeshbd/android-hk-vision-muzei-plugin" target="_blank">Github</a>. If you have similar source, you may also be interested in creating a plugin for that <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></p>
                                </div><!--//desc-->
                                <a class="btn btn-cta-secondary"
                                   href="https://play.google.com/store/apps/details?id=com.hossainkhan.vision"
                                   target="_blank"><i class="fa fa-download"></i> Get it from Google Play&trade;</a>
                                <a class="btn btn-cta-secondary"
                                   href="https://medium.com/@hossainkhan/hackathon-creating-the-simplest-muzei-wallpaper-plugin-for-android-9d080dbb4bf" target="_blank"><i
                                        class="fa fa-book"></i> Read more on Medium</a>

                            </div><!--//featured item-->


                            <!-- ========================================================================= -->
                            <!-- Example for fully featured project with links -->
                            <!-- Keeping this example as latest feature project can't have links -->
                            <!-- ========================================================================= -->

                            <!--<div class="item featured text-center">&lt;!&ndash; featured item&ndash;&gt;-->
                                <!--<h3 class="title"><a href="https://play.google.com/store/apps/details?id=info.hossainkhan.dailynewsheadlines" target="_blank"><i class="fa fa-television"></i> Daily Headlines</a></h3>-->
                                <!--<p class="summary">An Android&trade; TV application to skim through news headlines.</p>-->
                                <!--<div class="featured-image">-->
                                    <!--<a href="https://play.google.com/store/apps/details?id=info.hossainkhan.dailynewsheadlines" target="_blank">-->
                                        <!--<img class="img-responsive project-image" src="assets_portfolio/images/projects/news_headlines_tv_banner.png" alt="Daily Headlines - Android TV">-->
                                    <!--</a>-->
                                    <!--<div class="ribbon">-->
                                        <!--<div class="text">New</div>-->
                                    <!--</div>-->
                                <!--</div>-->

                                <!--<div class="desc text-left">-->
                                    <!--<p>&quot;Daily Headlines&quot; was created as result of personal need to check daily news headlines on <i class="fa fa-television"></i> TV rather than watching video clips from YouTube or other different source. This was also a personal experiment on creating Android TV application which is somewhat different than what Android TV applications are meant to be.</p>-->
                                    <!--<p>The application is Open Source and available in <i class="fa fa-github-alt"></i> Github</p>-->
                                <!--</div>&lt;!&ndash;//desc&ndash;&gt;-->
                                <!--<a class="btn btn-cta-secondary" href="https://play.google.com/store/apps/details?id=info.hossainkhan.dailynewsheadlines" target="_blank"><i class="fa fa-download"></i> Get it from Google Play&trade;</a>-->
                                <!--<a class="btn btn-cta-secondary" href="https://github.com/amardeshbd/android-daily-headlines" target="_blank"><i class="fa fa-github"></i> Clone from Github</a>-->
                            <!--</div>&lt;!&ndash;//featured item&ndash;&gt;-->


                            <!-- ========================================================================= -->
                            <hr class="divider"><!-- divider between featured and non-featured items -->
                            <!-- ========================================================================= -->

                            <!--<div class="item row">-->
                            <!--    <a class="col-md-4 col-sm-4 col-xs-12" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">-->
                            <!--        <img class="img-responsive project-image" src="assets_portfolio/images/projects/project-5.png" alt="project name">-->
                            <!--    </a>-->
                            <!--    <div class="desc col-md-8 col-sm-8 col-xs-12">-->
                            <!--        <h3 class="title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">Atom - Designed for Mobile Apps</a></h3>-->
                            <!--        <p>You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>-->
                            <!--        <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>-->
                            <!--    </div>&lt;!&ndash;//desc&ndash;&gt;-->
                            <!--</div>&lt;!&ndash;//item&ndash;&gt;-->

                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="#">
                                    <img class="img-responsive project-image" src="assets_portfolio/images/projects/android-music-app-banner-small.jpg" alt="Music Discovery Smart Speaker Control">
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><i class="fa fa-music"></i> Smart home speaker companion app with modern all-in-one music discovery.</h3>
                                    <p>Built a smart speaker companion application which allows user to fully control the smart speaker using
                                        any Android phone or tablet. The app also provides one stop content discovery and playback solution using
                                        popular music services like <i class="fa fa-spotify" aria-hidden="true"></i> Spotify&reg;,
                                        <i class="fa fa-amazon" aria-hidden="true"></i> Amazon Music, Deezer, <i class="fa fa-headphones"></i> Pandora®, SiriusXM, iHeartRadio™, TuneIn and so on.</p>
                                    <p>The application is available internationally supporting 24 different languages <i class="fa fa-language"></i></p>

                                    <p>Some of the key feature of the app includes:</p>
                                    <ul>
                                        <li>Control an manage one or more smart speakers in your <i class="fa fa-home" aria-hidden="true"></i> home.</li>
                                        <li>Allow multiple smart speakers to be grouped together for enhanced multi-room audio experience.</li>
                                        <li>Add/remove popular music services like <i class="fa fa-spotify" aria-hidden="true"></i> Spotify&reg;,
                                            <i class="fa fa-amazon" aria-hidden="true"></i> Amazon Music, Deezer, <i class="fa fa-headphones"></i> Pandora®, SiriusXM, iHeartRadio™, TuneIn and so on using one single app.
                                        </li>
                                        <li>Integrates with cloud services to provide personalized and persistent services across multiple device form factors.</li>
                                    </ul>
                                    <p>
                                        <i class="fa fa-info-circle"></i> <i><u class="dimmed-link">NOTE: Specific details is not available due to NDA <i class="fa fa-lock"></i></u></i>
                                    </p>
                                </div><!--//desc-->
                            </div><!--//item-->

                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="https://github.com/amardeshbd/android-barebone" target="_blank">
                                    <img class="img-responsive project-image" src="assets_portfolio/images/projects/barebone-banner-new.jpg" alt="Barebone Skeleton App Banner">
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="https://github.com/amardeshbd/android-barebone" target="_blank"><i class="fa fa-cogs"></i> Android Barebone App</a></h3>
                                    <p>A barebone MVVM Android project with some essential tools configured the right way for 2019 ^_^</p>
                                    <p>The application is Open Source and available in <i class="fa fa-github-alt"></i> Github</p>
                                    <p>
                                        <a class="more-link" href="https://github.com/amardeshbd/android-barebone" target="_blank"><i class="fa fa-external-link"></i> Clone from Github</a>
                                    </p>
                                </div><!--//desc-->
                            </div><!--//item-->


                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="https://play.google.com/store/apps/details?id=com.hossainkhan.android.constraintlayout" target="_blank">
                                    <img class="img-responsive project-image" src="assets_portfolio/images/projects/android-ConstraintLayout-app-banner.jpg" alt="ConstraintLayout Demo App">
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="https://play.google.com/store/apps/details?id=com.hossainkhan.android.constraintlayout" target="_blank"><i class="fa fa-th-list"></i> ConstraintLayout Demo</a></h3>
                                    <p>A demo application for Android ConstraintLayout with various usage with sample code.</p>
                                    <p>The application is Open Source and available in <i class="fa fa-github-alt"></i> Github</p>
                                    <p>
                                        <a class="more-link" href="https://github.com/amardeshbd/android-constraint-layout-cheatsheet" target="_blank"><i class="fa fa-external-link"></i> Clone from Github</a>
                                        &nbsp;&nbsp;<a class="more-link" href="https://play.google.com/store/apps/details?id=com.hossainkhan.android.constraintlayout" target="_blank"><i class="fa fa-external-link"></i> Available on Google Play&trade; (BETA Channel)</a>
                                    </p>
                                </div><!--//desc-->
                            </div><!--//item-->

                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="https://play.google.com/store/apps/details?id=info.hossainkhan.dailynewsheadlines" target="_blank">
                                    <img class="img-responsive project-image" src="assets_portfolio/images/projects/news_headlines_tv_banner.jpg" alt="Daily Headlines - Android TV">
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="https://play.google.com/store/apps/details?id=info.hossainkhan.dailynewsheadlines" target="_blank"><i class="fa fa-television"></i> Daily Headlines</a></h3>
                                    <p>&quot;Daily Headlines&quot; was created as result of personal need to check daily news headlines on <i class="fa fa-television"></i> TV rather than watching video clips from YouTube or other different source. This was also a personal experiment on creating Android TV application which is somewhat different than what Android TV applications
                                        are meant to be.</p>
                                    <p>The application is Open Source and available in <i class="fa fa-github-alt"></i> Github</p>
                                    <p>
                                        <a class="more-link" href="https://github.com/amardeshbd/android-daily-headlines" target="_blank"><i class="fa fa-external-link"></i> Clone from Github</a>
                                        &nbsp;&nbsp;<a class="more-link" href="https://play.google.com/store/apps/details?id=info.hossainkhan.dailynewsheadlines" target="_blank"><i class="fa fa-external-link"></i> Get it from Google Play&trade;</a>
                                    </p>
                                </div><!--//desc-->
                            </div><!--//item-->

                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="archive/dubdub/dubcandy%20–%20Apps%20on%20Google%20Play.html" target="_blank">
                                    <img class="img-responsive project-image" src="assets_portfolio/images/projects/dubdub_2.0_BUMPER_1280x720.jpg" alt="dubcandy&trade; - Companion app for video influencers.">
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="archive/dubdub/dubcandy%20–%20Apps%20on%20Google%20Play.html" target="_blank">dubcandy&trade; - Companion app for video influencers.</a></h3>
                                    <p>With dubcandy you can turn your videos into content that your viewers can buy from directly. When they buy, you earn revenue.</p>
                                    <p>That is the power of shoppable videos and dubcandy gives you that right from your mobile.</p>
                                    <p><i class="fa fa-info-circle" aria-hidden="true"></i> <i>UPDATE: The app has been taken offline, a snapshot of Google Play is available below.</i></p>
                                    <p><a class="more-link" href="archive/dubdub/dubcandy%20–%20Apps%20on%20Google%20Play.html" target="_blank"><i class="fa fa-external-link"></i> Google Play&trade; (Historic Snapshot)</a>
                                       &nbsp;&nbsp; <a class="more-link" href="archive/dubdub/video-preview.html"><i class="fa fa-external-link"></i> See App Demo Video</a>
                                    </p>
                                </div><!--//desc-->
                            </div><!--//item-->

                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="https://play.google.com/store/apps/details?id=tv.hooq.android&hl=en" target="_blank">
                                    <img class="img-responsive project-image" src="assets_portfolio/images/projects/hooq_banner.jpg" alt="HOOQ.tv">
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="https://play.google.com/store/apps/details?id=tv.hooq.android&hl=en" target="_blank">HOOQ&trade; TV</a></h3>
                                    <p>HOOQ is a video on demand streaming service. HOOQ is Asia's first premium video-on-demand service to launch across the South East Asia and India.</p>
                                    <p>HOOQ Android app allows you to watch over 10,000 movies and TV series ranging from the top Hollywood blockbusters, local box office hits and TV series same day as US telecast! </p>
                                    <p><a class="more-link" href="https://play.google.com/store/apps/details?id=tv.hooq.android&hl=en" target="_blank"><i class="fa fa-external-link"></i> More on Google Play&trade;</a></p>
                                </div><!--//desc-->
                            </div><!--//item-->

                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="https://play.google.com/store/apps/details?id=com.optiktv&hl=en" target="_blank">
                                    <img class="img-responsive project-image" src="assets_portfolio/images/projects/optik_tv_app_banner.png" alt="Optik TV®">
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="https://play.google.com/store/apps/details?id=com.optiktv&hl=en" target="_blank">Optik TV®</a></h3>
                                    <p>Optik TV® android app allows you to watch live and On Demand shows and movies on the go using your smartphone or tablet.</p>
                                    <p>Some of the key feature of the app includes:</p>
                                    <ul>
                                        <li>Enjoy many channels included in your subscription, including live news and sports.</li>
                                        <li>Set recordings while you are out.</li>
                                        <li>Choose from thousands of On Demand shows, series and movies.</li>
                                        <li>Save favourites, watch trailers and view ratings.</li>
                                        <li>Start a movie on your TV and pick up where you left off on your tablet.</li>
                                    </ul>
                                    <p><a class="more-link" href="https://play.google.com/store/apps/details?id=com.optiktv&hl=en" target="_blank"><i class="fa fa-external-link"></i> More on Google Play&trade;</a></p>
                                </div><!--//desc-->
                            </div><!--//item-->

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->


                <section class="projects section">
                    <div class="section-inner">
                        <h2 class="heading"><i class="fa fa-github"></i>pen Source and Other Projects</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><a href="https://github.com/amardeshbd/android-syntax-highlighter">Yet Another Android Syntax Highlighter (YAASH)</a></h3>
                                <p class="summary">Explore well established web based syntax highlighter like PrismJS and highlight.js, and showcase how anybody can quickly incorporate these into their Android project by following some examples provided in this project.</p>
                                <p><a class="more-link" href="https://github.com/amardeshbd/android-syntax-highlighter" target="_blank"><i class="fa fa-external-link"></i> See demo</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><a href="https://github.com/amardeshbd/kotlin-google-hangouts-parser">Hangouts.json Parser - Kotlin</a></h3>
                                <p class="summary">Kotlin based JSON parser for Google Takeout dump of Hangouts chats. It uses <em>Moshi JSON library</em> to model the JSON objects using kotlin classes
                                    and also uses <em>SQLDelight</em> library to insert parsed database into SQLite database for further analysis.</p>
                                <p><a class="more-link" href="https://github.com/amardeshbd/kotlin-google-hangouts-parser" target="_blank"><i class="fa fa-external-link"></i> See example</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><a href="https://github.com/amardeshbd/android-recycler-view-wrap-content">Android Recycler View - Wrap Content</a></h3>
                                <p class="summary">This is a sample android app which demonstrates `RecyclerView` wrap_content inside `ScrollView` issue on Marshmallow, Nougat and Oreo (API 23, 24, 25 &amp; 26) and how to work around it.</p>
                                <p><a class="more-link" href="https://github.com/amardeshbd/android-recycler-view-wrap-content" target="_blank"><i class="fa fa-external-link"></i> See it in action</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><a href="https://github.com/amardeshbd/medium-api-specification">Medium.com API Specification</a></h3>
                                <p class="summary">API spec for medium.com using OpenAPI Specification (aka Swagger 2.0). Generates PHP, Java, Python, Go, Android, Objective-C and many more client SDK.</p>
                                <p><a class="more-link" href="https://github.com/amardeshbd/medium-api-specification" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><a href="https://github.com/tomergoldst/tooltips">Android Tooltips UI Widget</a></h3>
                                <p class="summary">Simple to use library for Android, enabling to add a tooltip near any view with ease.<br>
                                    Contributed <a href="https://github.com/tomergoldst/tooltips/pull/23" class="dimmed-link" aria-label="Github PR Details"><i class="fa fa-link"></i></a> to the library to provide maximum flexibility on styling TextView and animation. The new release with additional feature was packaged as <code>v1.0.10</code></p>
                                <p><a class="more-link" href="https://github.com/tomergoldst/tooltips#whats-new" target="_blank" aria-label="Changelog"><i class="fa fa-external-link"></i> See changelog.</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><a href="https://github.com/amardeshbd/firebase-mock-api-server">Mock API Server using Firebase <i class="fa fa-fire"></i></a></h3>
                                <p class="summary">Created an example project to showcase how Firebase platform can be used to serve mocked API responses using
                                    <a href="https://expressjs.com/" target="_blank" class="dimmed-link" title="Fast, unopinionated, minimalist web framework for Node.js">Express.js</a>
                                    and <a href="https://firebase.google.com/docs/firestore/" target="_blank" class="dimmed-link">Firestore</a>.</p>
                                <p><a class="more-link" href="https://github.com/amardeshbd/firebase-mock-api-server" target="_blank"><i class="fa fa-external-link"></i> See mocked sample APIs</a></p>
                            </div><!--//item-->

                            <!-- Button to take to github profile page -->
                            <a class="btn btn-cta-secondary" href="https://github.com/amardeshbd">More on Github <i class="fa fa-chevron-right"></i></a>

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

                <section class="experience section">
                    <div class="section-inner">
                        <h2 class="heading">Work Experience</h2>
                        <div class="content">

                            <!--<div class="item">-->
                            <!--<h3 class="title">Title - <span class="place"><a href="#">Company</a></span> <span class="year">(2019 - 2020)</span></h3>-->
                            <!--<p>-->
                            <!--<ul>-->
                            <!--<li></li>-->
                            <!--</ul>-->
                            <!--</p>-->
                            <!--<p>-->
                            <!--<h6>Key Accomplishments</h6>-->
                            <!--<ul>-->
                            <!--<li></li>-->
                            <!--</ul>-->
                            <!--</p>-->
                            <!--</div>&lt;!&ndash;//item&ndash;&gt;-->


                            <div class="item">
                                <h3 class="title">Sr. Android Engineer - <span class="place"><a href="https://www.kijiji.ca/"><img alt="Kijiji Logo" src="assets_portfolio/images/kijiji-logo-110x57.svg" width="45" height="23"> Canada, eBay</a></span> <span
                                        class="year">(2019 - Present)</span></h3>
                                <p>Joined <a href="https://www.kijiji.ca/" target="_blank" class="dimmed-link">kijiji</a> Android team to accelerate mobile product development and enhance end user experience.</p>

                                <ul>
                                    <li>Recently launched feature that allows users to <i class="fa fa-star-half-o" aria-hidden="true"></i> review their buying or selling experience on Kijiji.</li>
                                    <li>Built feature that allows Ad-ops to run campaigns for different period of time.</li>
                                    <li>Held bi-weekly team meeting to keep everybody in the loop with industry standards and technologies that can help grow Kijiji and it's user base.</li>
                                    <li>Improved application crash free user session rate from 97.81% to 99.92%.</li>
                                    <li>Took initiative to create a proof of concept (PoC) for adding 🌗 dark mode support to the app.</li>
                                    <li>Improved code quality and engineering experience by taking following actions:
                                        <ul>
                                            <li>Enabled lint checks on CI build after creating a baseline.</li>
                                            <li>Enabled Kotlin code formatting lint checks on CI build.</li>
                                            <li>Resurrected UI Unit test on Firebase Test Lab and Jenkins using Android emulator.</li>
                                            <li>Added new Jenkins job to distribute CI builds using Firebase App Distribution.</li>
                                            <li>Took initiatives to introduce proper code dependency injection using Dagger2 library.</li>
                                            <li>Advocated for using consistent MVP pattern for newly developed features</li>
                                            <li>Added technical wiki for newcomers on application architecture, best practices, development &amp; PR process and so on.</li>
                                        </ul>
                                    </li>
                                </ul>

                                <h6><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Did you know?</h6>
                                <ul>
                                    <li>Four out of five Canadians (82%) participated in the second-hand economy in 2018, fuelling a $27.3 billion second-hand economy that has grown in size annually since 2015.</li>
                                    <li>In 2018 alone, Canadians gave 2.4 billion items a second life - 250 million more items than in 2014.</li>
                                </ul>
                                <p><a class="more-link dimmed-link" href="https://play.google.com/store/apps/details?id=com.ebay.kijiji.ca&hl=en" target="_blank"><i class="fa fa-external-link"></i>Kijiji app on Google Play&trade;</a></p>
                            </div><!--//item-->

                            <div class="item">
                                <h3 class="title">Sr. Android Engineer / Team Lead (Consultant) - <span class="place"><a href="#">Connected Inc.</a></span> <span class="year">(2017 - 2018)</span></h3>
                                <p>Created a complete solution for connected media device and a companion Android application to support device communication and media content discovery.</p>

                                <ul>
                                    <li>Used <a href="https://kotlinlang.org/" target="_blank" class="dimmed-link">Kotlin</a> &amp; MVVM architecture to implement application features.</li>
                                    <li>Added <a href="https://realm.io" target="_blank" class="dimmed-link">Realm</a> for data caching and offline support.</li>
                                    <li>Met with customer on-site and collaborated with their engineering team on different features.</li>
                                    <li>Planned weekly sprint items and assigned resources among team.</li>
                                    <li>Provided technical support to team members and product managers.</li>
                                    <li>On boarded new hires and paired with them to ramp up on the project.</li>
                                    <li>Collaborated with other platform team leads to discuss and finalize design and architecture of different core-components.</li>
                                    <li>Reviewed code using GitHub and provided constructive feedback to be compliant with currently defined project standards.</li>
                                    <li>Worked with Product Manager to plan and execute monthly releases to Google Play store.</li>
                                    <li>Closely worked with QA team to address and clarify any application related issues</li>
                                    <li>Created &ldquo;Developer's Guide&rdquo; wiki for key components of the app, consistently encouraged other team members to contribute to it.</li>
                                </ul>

                                <h6>Key Accomplishments</h6>
                                <ul>
                                    <li>Successfully launched the feature complete companion Android app on time.</li>
                                    <li>Improved crash free user session from 92% to 99.2% by constantly analyzing data from Crashlytics.</li>
                                    <li>Reduced application size by 15% by using vector images and lightweight <a href="https://developer.android.com/studio/write/convert-webp" target="_blank" class="dimmed-link">WebP</a> image assets_portfolio</li>
                                    <li>Reduced 8% background battery consumption on the application by using Android platform's <a href="https://developer.android.com/reference/android/app/job/JobScheduler" target="_blank" class="dimmed-link">JobScheduler</a>.</li>
                                </ul>

                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title">Platform Lead | Android - <span class="place"><a href="#">dubdub Inc.</a></span> <span class="year">(2016 - 2017)</span></h3>

                                <ul>
                                    <li>Worked with management to set priorities for upcoming releases and define stories accordingly</li>
                                    <li>Worked with UI/UX team to refine app experience</li>
                                    <li>Initiated weekly app improvement brainstorming meeting with the team and implemented material design patterns to make UX better.</li>
                                    <li>Supported QA team for various activities including UI test automation</li>
                                </ul>

                                <h6>Key Accomplishments</h6>
                                <ul>
                                    <li>Added automation script to reduce manual tasks that were required during day-to-day development.</li>
                                    <li>Improved code coverage by 7% for core components.</li>
                                </ul>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title">Sr. Android Engineer | Team Lead - <span class="place"><a href="#">dubdub Inc.</a></span> <span class="year">(2016 - 2017)</span></h3>
                                <ul>
                                    <li>Worked with management to set priorities for upcoming releases and define stories accordingly</li>
                                    <li>Worked with UI/UX team to refine app experience</li>
                                    <li>Initiated weekly app improvement brainstorming meeting with the team and implemented material design patterns to make UX better.</li>
                                    <li>Supported QA team for various activities including UI test automation</li>
                                    <li>Architected android app using modern MVP pattern recommended by Google engineers. The pattern was strictly enforced among the team.</li>
                                    <li>Participated in project planning, estimation and provided valuable feedback. Distributed planned tasks among team members</li>
                                    <li>Participated in code review for features, bug fixes and other changes.</li>
                                    <li>Designed API and translated API specification using OpenAPI Specification standard; formerly known as Swagger 2.0. The OpenAPI Specification contract was later used to generate rest-client library respective platforms.</li>
                                    <li>Created wiki containing technical-guide, developers-guide, and release-guide for future reference.</li>
                                    <li>Maintained Google Play store release cycles for Alpha, Beta and Production channels.</li>
                                    <li>Setup continuous integration (CI) using BuddyBuild for each pull-request which builds dev, staging and production builds.</li>
                                    <li>Constantly refactored code base to adhere to DRY principle.</li>
                                    <li>Improved application's draw performance by reducing overdraw and optimizing view higherchy inside recycler view.</li>
                                </ul>
                                <h6>Key Accomplishments</h6>
                                <ul>
                                    <li>Used APK analyzer to analyze APK, and optimized large image assets_portfolio using WebP reducing the size by 19mb, which resulted over 58% savings on APK size.</li>
                                    <li>Ran android lint tool, and reduced 36% of critical lint warning and errors for the project.</li>
                                    <li>Maintained unit tests and improved code-coverage by 8% for newly added features.</li>
                                    <li>Developed fully functional proof-of-concept Android TV(📺) app that uses same API and services for video content consumption.</li>
                                    <li>Added automation script to reduce manual tasks that were required during day-to-day development.</li>
                                </ul>
                            </div><!--//item-->

                            <div class="item">
                                <h3 class="title">Sr. Android Developer - <span class="place"><a href="#">QuickPlay Media</a></span> <span class="year">(2015 - 2016)</span></h3>
                                <p>Worked with R&amp;D android development team for current and future products.</p>
                                <ul>
                                    <li>Refactor and enhance existing library features, provide better solution where
                                        necessary.
                                    </li>
                                    <li>Provide and update documentation with each release.</li>
                                    <li>Build and maintain sample android application to showcase supported features.</li>
                                    <li>Write unit tests, review peer-code and provide input if applicable.</li>
                                </ul>
                            </div><!--//item-->


                            <div class="item">
                                <h3 class="title">Sr. Android Developer | Team Lead - <span class="place"><a href="#">QuickPlay Media</a></span><span class="year">(2012 - 2014)</span></h3>
                                <ul>
                                    <li>Managed, helped and guided team members to achieve sprint &amp; project goals</li>
                                    <li>Participate in daily scrum meetings and provide updates</li>
                                    <li>Participate in development estimations for clients or PMs</li>
                                    <li>Improve code-base by constantly refactoring or re-using established open-source
                                        software
                                    </li>
                                    <li>Help different project on-demand, to fix production issue</li>
                                    <li>Trained new hires to work on existing projects</li>
                                    <li>Documented project standards and process in wiki</li>
                                    <li>Collaborated with different team to gather requirements and implementation
                                        details
                                    </li>
                                    <li>Worked on multiple PoC phase for different clients</li>
                                </ul>
                                <h6>Key Accomplishments</h6>
                                <ul>
                                    <li>Released android app for major Canadian carrier which has support for LIVE and
                                        VOD video streaming on-the-go for Android phone &amp; tablet. The application has
                                        been optimized to run on set-top boxes and Android TV. It has 100,000 - 500,000
                                        install from Google Play store.
                                    </li>
                                    <li>A live streaming application using propitiatory technology for a closed group of
                                        people. Worked with specific future devices that has this technology enabled.
                                    </li>
                                </ul>
                            </div><!--//item-->

                        </div><!--//experience content-->
                    </div><!--//experience section-inner-->
                </section><!--//experience section-->
                <section class="github section">
                    <div class="section-inner">
                        <h2 class="heading">My GitHub</h2>
                        <p>My recent activity and stats on github.</p>

                        <div id="github-graph" class="github-graph">

                        </div><!--//github-graph-->
                    </div><!--//secton-inner-->
                </section><!--//section-->
            </div><!--//primary-->
            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>Gandu, Bahia, Brasil</li>
                                <li><i class="fa fa-envelope"></i><span class="sr-only">Email:</span><a href="mailto:adimaelbr@gmail.com?Subject=Hello%20there">adimaelbr@gmail.com</a></li>
                                <li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a href="#">hossainkhan.com</a></li>
                                <li><i class="fa fa-camera" aria-hidden="true"></i><span class="sr-only">Portfolio:</span><a href="https://vision.hossainkhan.com/">vision.hossainkhan.com</a></li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//aside-->

                <aside class="skills aside section">
                    <div class="section-inner">
                        <h2 class="heading">Skills</h2>
                        <div class="content">
                            <p class="intro">
                                I&rsquo;ve been working as software engineer for over <b>10+</b> years. Initially I started with web technologies and later migrated to mobile solution. I've worked on both hybrid and native solution for different Android device form factors.</p>
                            <p><i class="fa fa-hand-o-up"></i> <u>Tap on the <b>skill level</b></u> to get more details.</p>

                            <div class="skillset">

                                <div class="item">
                                    <h3 class="level-title">Android Development<span
                                            class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true"
                                            title="Native android development for different form factors. Familiar with material design, data binding, android support-lib and popular 3rd party library like Dagger, Retrofit, Picasso, OkHttp and so on."><i class="fa fa-info-circle" aria-hidden="true"></i> Pro</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="71%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Android Architectures<span
                                            class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true"
                                            title="Actively used well established android architectures like MVVM, MVP in recent projects"><i class="fa fa-info-circle" aria-hidden="true"></i> Semi-Pro</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="65%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Android Jetpack<span
                                            class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true"
                                            title="Actively trying to learn different Jetpack components. Recently worked with AppCompat, Android KTX, Multidex, Test, Data Binding, Lifecycles,
                                            Paging, ViewModel, Media & playback, Notifications, Permissions, Preferences, Animation & transitions, Layout, Navigation, TV"><i class="fa fa-info-circle" aria-hidden="true"></i> Intermediate</span>
                                    </h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="45%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Java<span
                                            class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true"
                                            title="8+ years of experience using Java in Android. However, last 3+ years have been Kotlin only."><i class="fa fa-info-circle" aria-hidden="true"></i> Semi-Pro</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="68%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Kotlin<span
                                            class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true"
                                            title="Started working on kotlin since it's official support announced at Google I/O 2017"><i class="fa fa-info-circle" aria-hidden="true"></i> Semi-Pro</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="54%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Tools/IDE<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="Proficient in Android Studio, Github, Fork, Debugger, Postman, Charles and so on."><i class="fa fa-info-circle" aria-hidden="true"></i> Pro</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="75%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">CI/CD<span
                                            class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true"
                                            title="I have experience over working with Jenkins Piplelines, Github Actions, Circle CI, Travis CI, Microsoft AppCenter."><i class="fa fa-info-circle" aria-hidden="true"></i> Intermediate</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="34%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                            </div>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="testimonials aside section">
                    <div class="section-inner">
                        <h2 class="heading">Testimonials</h2>
                        <div class="content">
                            <div class="item">
                                <blockquote class="quote">
                                    <p><i class="fa fa-quote-left"></i>Hossain is a hard-working Android developer capable of taking on large development tasks. He collaborates extremely well with other developers on tasks and features. He is adaptable to different challenges and
                                        soaks up changing priorities without flinching. He made my job as a manager easier, and was a pleasure to work with.</p>
                                </blockquote>
                                <p class="source"><span class="name">Doug Doe</span><br><span class="title">VP of Engineering at STAGE TEN</span></p>
                            </div><!--//item-->
                            <!--<div class="item">-->
                            <!--<blockquote class="quote">-->
                            <!--<p><i class="fa fa-quote-left"></i>Hossain was quick and expert in developing apps and working face to face with customers to gather and clarify requirements. Hossain worked well with other team members and even with difficult customers. He was always calm and respectful and was able to quickly develop new apps with complicated features, like eMBMS, LTE-B video and file delivery, 3rd party plug-ins for DRM and custom players, as well as work on other developers' code bases to fix bugs and extend new features. Hossain wrote very clean code which other developers readily accepted and leveraged. Hossain was a good multitasked and worked on multiple projects in parallel. I believe Hossain is a great individual contributor and has potential to be a team lead and manager. I'd work with Hossain again.</p>-->
                            <!--</blockquote>-->
                            <!--<p class="source"><span class="name">Dan Witmer</span><br /><span class="title">AT&T Entertainment Group Global Partnerships</span></p>-->
                            <!--</div>&lt;!&ndash;//item&ndash;&gt;-->
                            <div class="item">
                                <blockquote class="quote">
                                    <p><i class="fa fa-quote-left"></i>I had the pleasure of working with Hossain on multiple projects at QuickPlay. Hossain is an experienced and creative developer, a person you can trust when you want to be sure that important tasks are
                                        completed in a systematic and precise way. Always maintains a very good relationship with co-workers and clients. We call the few top engineers at QuickPlay "superstars", and Hossain is one of them.</p>
                                </blockquote>
                                <p class="source"><span class="name">Sebastian Jakubowski</span><br><span class="title">Associate Director, Software Engineering at AT&amp;T</span></p>
                            </div><!--//item-->
                            <!--<div class="item">-->
                            <!--<blockquote class="quote">-->
                            <!--<p><i class="fa fa-quote-left"></i>At QuickPlay, I have had the pleasure to work with Hossain on multiple Android projects. Hossain is excellent at breaking down complex problems into actionable pieces. He is reliable, detail-oriented and committed to delivering quality products that fulfill beyond the functional requirements. In the design process, he gives a lot of thought on how a product may evolve in the future, and produces an appropriate amount of useful documentation. In addition to his work ethics, Hossain brings to our team in-depth knowledge about the platform API and experience in application design. He has my full recommendation as a software engineer, in mobile development and otherwise.</p>-->
                            <!--</blockquote>-->
                            <!--<p class="source"><span class="name">Benedict Lau</span><br /><span class="title">Senior Software Engineer</span></p>-->
                            <!--</div>&lt;!&ndash;//item&ndash;&gt;-->
                            <p><a class="more-link" href="https://www.linkedin.com/in/hossain/"><i class="fa fa-external-link"></i> More on Linkedin</a></p>

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="education aside section">
                    <div class="section-inner">
                        <h2 class="heading">Education</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i> BSc Computer Science</h3>
                                <h4 class="university">University of Windsor <span class="year">(2005-2008)</span></h4>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="education aside section">
                    <div class="section-inner">
                        <h2 class="heading">Certification</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i>Associate Android Developer</h3>
                                <h4 class="university">Google <span class="year">(2017 - 2020)</span></h4>
                                <p><img class="img-responsive university" src="assets_portfolio/images/aad_certificate_small.png" alt="Associate Android Developer Certificate"></p>
                                <p><a class="more-link" href="https://www.credential.net/ioqs3hze?key=f199191c462c57d8489f89be040dbea1cc82387e27e230c0d6e8ae4bd5ba4657" target="_blank"><i class="fa fa-external-link"></i>See Digital Certificate</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i>CodementorX Certified Developer</h3>
                                <h4 class="university">codementor.io <span class="year">(2019 - Present)</span></h4>
                                <p><a href="https://www.codementor.io/freelance-developers/android?utm_source=certified_badge&referral=hossainkhan-" rel="noopener" target="_blank"><img class="img-responsive university" src="assets_portfolio/images/cmx-dev-badge.svg" alt="CodementorX Certified Developer Badge" width="230" height="92"></a></p>
                                <p><a class="more-link" href="https://www.codementor.io/hossainkhan?utm_source=certified_badge&referral=hossainkhan-" rel="noopener" target="_blank"><i class="fa fa-external-link"></i>See Profile &amp; Reserve</a></p>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="languages aside section">
                    <div class="section-inner">
                        <h2 class="heading">Languages</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li class="item">
                                    <i class="fa fa-language"></i> <span class="title"><strong>Bengali:</strong></span>
                                    <span class="level">Native Speaker <br class="visible-xs"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </span>
                                </li><!--//item-->
                                <li class="item">
                                    <i class="fa fa-language"></i> <span class="title"><strong>English:</strong></span>
                                    <span class="level">Professional Proficiency <br class="visible-sm visible-xs"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half"></i></span>
                                </li><!--//item-->
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="blog aside section">
                    <div class="section-inner">
                        <h2 class="heading">Latest Blog Posts</h2>
                        <p>My random thoughts...</p>
                        <div id="rss-feeds" class="content">
                            <!-- feed content loaded via ajax -->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="list music aside section">
                    <div class="section-inner">
                        <h2 class="heading">Favourite coding music</h2>
                        <div class="content">
                            <p>I <i class="fa fa-heart"></i> ambient music while working. Following are some of the artists I listen to when I work on my projects.</p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-headphones"></i> <a href="https://www.last.fm/music/Enigma" target="_blank">Enigma</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="https://www.last.fm/music/Eguana">Eguana</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="https://www.youtube.com/watch?v=as9BCiK16d0" target="_blank">Max Payne Theme Songs</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="https://www.last.fm/music/Yanni" target="_blank">Yanni</a></li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="list music hobby aside section">
                    <div class="section-inner">
                        <h2 class="heading">Hobby and activities</h2>
                        <div class="content">
                            <p>When I am not working, I enjoy various activities both indoor and outdoor.</p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-globe"></i> Traveling around the world</li>
                                <li><i class="fa fa-car"></i> Road trip through exiting terrain</li>
                                <li><i class="fa fa-gamepad"></i> Play video games</li>
                                <li><i class="fa fa-cutlery"></i> Try out food from different restaurants</li>
                                <li><i class="fa fa-camera-retro"></i> Take lots of pictures</li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="list conferences aside section">
                    <div class="section-inner">
                        <h2 class="heading">Conferences</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-calendar"></i> Present - Local meetups on Kotlin, Android.</li>
                                <li><i class="fa fa-calendar"></i> 2020 - <b>GitHub Satellite</b> (Virtual, Online)</li>
                                <li><i class="fa fa-calendar"></i> 2019 - <b>DroidconTO</b> (Toronto, ON)</li>
                                <li><i class="fa fa-calendar"></i> 2019 - <b>Google I/O</b> (Extended, Toronto, ON)</li>
                                <li><i class="fa fa-calendar"></i> 2018 - <b>Android Dev Summit</b> (Online)</li>
                                <li><i class="fa fa-calendar"></i> 2018 - <b>Google I/O</b> (Online)</li>
                                <li><i class="fa fa-calendar"></i> 2017 - <b>AndroidTO</b> (Toronto, ON)</li>
                                <li><i class="fa fa-calendar"></i> 2016 - <b>AndroidTO</b> (Toronto, ON)</li>
                                <li><i class="fa fa-calendar"></i> 2014 - <b>AnDevCon</b> (San Fransisco, CA)</li>
                                <li><i class="fa fa-calendar"></i> 2014 - <b>AndroidTO</b> (Toronto, ON)</li>
                                <li><i class="fa fa-calendar"></i> 2014 - <b>DroidCon</b> (New York, NY)</li>
                                <li><i class="fa fa-calendar"></i> 2013 - <b>GDG DevFest</b> (Waterloo, ON)</li>
                                <li><i class="fa fa-calendar"></i> 2013 - <b>Google I/O</b> (San Fransisco, CA)</li>
                                <li><i class="fa fa-calendar"></i> 2012 - <b>AndroidTO</b> (Toronto, ON)</li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->


            </div><!--//secondary-->
        <a href="#top" class="topbtn" aria-label="Scroll to top"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span></a>
    </div><!--//masonry-->
  
  <!-- dark mode -->
  <script type="text/javascript" src="js/darkmode.js"></script>
  <!-- Javascript -->
  <script src="assets_portfolio/plugins/jquery-1.11.3.min.js"></script>
    <script src="assets_portfolio/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets_portfolio/plugins/jquery-rss/dist/jquery.rss.min.js"></script>
    <!-- github calendar plugin -->
    <script src="assets_portfolio/plugins/github-calendar/dist/github-calendar.min.js"></script>
    <link rel="stylesheet" href="assets_portfolio/plugins/github-calendar/dist/github-calendar.css">
    <link rel="stylesheet" href="assets_portfolio/plugins/github-calendar/dist/github-calendar-responsive.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/3.0.2/es6-promise.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fetch/0.10.1/fetch.min.js"></script>
    <!-- custom js - initializes RSS, Github Calendar, Skills and so on -->
    <script src="assets_portfolio/js/main.js"></script>

  <?php
  include("includes/footer.php");
  ?>

</body>
</html>