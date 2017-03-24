@include('header')
<div class ="banner-wrap">
    <div class="home-slide slide-active" style="background-image:  url('img/slide1.jpg'); " data-slide="1">
                        <!-- <div class="innerwrap">
                            <div class="slide-text">
                            <h2 class="slide-header">The Rhema Experience</h2>
                            <article class="slide-subtext line-clamp">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</article>
                            <button class="form-btn">learn more</button>
                            </div>
                        </div> -->
                </div>
                <div class="home-slide" style="background-image:  url('img/slide2.jpg'); " data-slide="2">
                        <!-- <div class="innerwrap">
                            <div class="slide-text">
                            <h2 class="slide-header">The Rhema Solution</h2>
                            <article class="slide-subtext line-clamp">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</article>
                            <button class="form-btn">learn more</button>
                            </div>
                        </div> -->
                </div>
                <div class="home-slide" style="background-image:  url('img/slide3.jpg'); " data-slide="3">
                        <!-- <div class="innerwrap">
                            <div class="slide-text">
                            <h2 class="slide-header">Tailored Solutions For your business</h2>
                            <article class="slide-subtext line-clamp">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</article>
                            <button class="form-btn">learn more</button>
                            </div>
                        </div> -->
                </div>

</div>
<div class="slide-indicator-wrap">
                    <div class="slide-indicator active-indicator" data-slide="1"></div>
                    <div class="slide-indicator" data-slide="2"></div>
                    <div class="slide-indicator" data-slide="3"></div>
</div>
<div class ="welcome-section">

    <div class="section-container">
        <h1 class="section-title">Welcome to Auto Ghana</h1>

        <p class="content-text">
            orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
        </p>

    </div>
</div>
<div class ="categories-section">
    <div class="section-container">
        <h2 class="mini-section-title">Browse Categories</h2>
        <p class="content-text">
            orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>

        <div class="category-wrap">
            <div class="category-card">
                <a href="{{url('/menu')}}">
                    <div class="cat-icon-wrap">
                        <div class="cat-icon">
                            <div class="cat-img"><img src="img/car-compact.png" style="height:inherit"/></div>
            </div>
                        </div>
                    <div class="cat-description">

                        <div class="cat-text">
                            Local Garages
                        </div>
                    </div>
                </a>
            </div>

            <div class="category-card">
        <div class="cat-icon-wrap">
            <div class="cat-icon">
                <div class="cat-img">
                    <img src="img/break.png" style="height :inherit"/>

                </div>
            </div>  
        </div>
        <div class="cat-description">
            <div class="cat-text">
                Car Parts
            </div>
        </div>
    </div>

        <div class="category-card">
        <div class="cat-icon-wrap">
            <div class="cat-icon">
                <div class="cat-img">
                    <img src="img/industrial-robot.png" style="height :inherit"/>

                </div>
            </div>  
        </div>
        <div class="cat-description">
            <div class="cat-text">
                Industrial Machinery
            </div>
        </div>
    </div>
        <div class="category-card">
        <div class="cat-icon-wrap">
            <div class="cat-icon">
                <div class="cat-img">
                    <img src="img/driving.png" style="height :inherit"/>

                </div>
            </div>  
        </div>
        <div class="cat-description">
            <div class="cat-text">
                Driving Schools
            </div>
        </div>
    </div>
        <div class="category-card">
        <div class="cat-icon-wrap">
            <div class="cat-icon">
                <div class="cat-img">
                    <img src="img/car-insurance.png" style="height :inherit"/>

                </div>
            </div>  
        </div>
        <div class="cat-description">
            <div class="cat-text">
                Insurance Companies
            </div>
        </div>
    </div>
        </div>

    </div>
</div>

</div>
<div class ="contact-section">
    <div class="innerwrap">
        <h1 class="section-title">Have something to sell?</h1>
        <button class="submit-button">
            Contact us</button>
    </div>
</div>
@include('footer')