<?php 

/*
    Template Name: Home
*/

get_header();?>


<section>
    <div class="container__compressed">
        <div class="svg__image1">
            <img src="<?php echo get_template_directory_uri() . '/images/image.svg' ?>" />
        </div>

        <div class="content textCentre">
            <h3>
                <?php the_field('about-header');?>
            </h3>
            <p>
                <?php the_field('about-text');?>
            </p>
        </div>
    </div>
</section>

<section>
    <div class="container__compressed">
        <div class="box">
            <div class="flex two-side">
                <div class="left__content__30">
                    <div class="svg__image2">
                        <img src="<?php echo get_template_directory_uri() . '/images/image2.svg' ?>" />
                    </div>
                    <div class="box__button">
                        <a class="btn btn__default">Sign Up</a>
                    </div>
                </div>

                <div class="right__content__70">
                    <h5>Lorem Ipsum</h5>
                    <p>vitae congue ipsum volutpat non. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    <p class="smallp">Popular Features</p>
                    <div class="split">
                        <div class="split__3">
                            <div class="split__3__fa">
                                <i class="fas fa-mobile"></i>
                            </div>
                            <div class="split__3__content">
                                <p>Suspendisse vulputate velit nec</p>
                            </div>
                        </div>
                        <div class="split__3">
                            <div class="split__3__fa">
                                <i class="fas fa-address-card"></i>
                            </div>
                            <div class="split__3__content">
                                <p>Nulla molestie enim id urna viverra</p>
                            </div>
                        </div>
                        <div class="split__3">
                            <div class="split__3__fa">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div class="split__3__content">
                                <p>Curabitur imperdiet tempor lorem</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container__compressed">
        <div class="center">
            <h1 class="dark">Follow these steps</h1>
        </div>
    </div>

    <div class="container__compressed">
        <div class="split">
            <div class="split__3">
                <div class="box border orange" data-aos="fade-down" data-aos-duration="700">
                    <div class="circle">
                        <h1>1</h1>
                    </div>
                    <div class="split__3__content">
                        <div class="fa-large">
                            <i class="far fa-address-book"></i>
                        </div>
                        <div class="split__3__header">
                            <h5>Curabitur</h5>
                        </div>
                        <div class="split__3__text">
                            <p>Vestibulum sed sem eu diam hendrerit iaculis. Etiam quis ipsum augue.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="split__3">
                <div class="box border purple" data-aos="fade-up" data-aos-duration="700">
                    <div class="circle">
                        <h1>2</h1>
                    </div>
                    <div class="split__3__content">
                        <div class="fa-large">
                            <i class="far fa-address-card"></i>
                        </div>
                        <div class="split__3__header">
                            <h5>Morbi ut</h5>
                        </div>
                        <div class="split__3__text">
                            <p>Nunc accumsan elit vitae sapien scelerisque fringilla. Praesent blandit semper dignissim.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="split__3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">
                <div class="box border blue">
                    <div class="circle">
                        <h1>3</h1>
                    </div>
                    <div class="split__3__content">
                        <div class="fa-large">
                            <i class="far fa-arrow-alt-circle-down"></i>
                        </div>
                        <div class="split__3__header">
                            <h5>Donec et</h5>
                        </div>
                        <div class="split__3__text">
                            <p>Nunc consequat leo non volutpat finibus. Ut congue facilisis magna.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>
