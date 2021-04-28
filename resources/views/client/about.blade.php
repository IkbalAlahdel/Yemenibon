@include('client/header')

<div class='blurImg'>
    <!-- style="background-image: url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=656&q=80')" -->
    <div class="page-bg"></div>
    <div class='blur' style="background-image: url('https://d262ilb51hltx0.cloudfront.net/fit/c/1600/1280/gradv/29/81/40/darken/50/blur/50/1*4ncz3hLxmL8E_bUh-0z62w.jpeg')"></div>
</div>
<!-- style="background-color: #e3c47a;" -->
<header class="pages-header">
    <div>
        <h1>
            About Yemeni Bon
        </h1>
        <p>
            It used to be impossible to find. Now mocha’s taking the coffee world by storm.
        </p>
    </div>
</header>
<main>
    <div class="about-wrapper">
        <h1>The initiative</h1>
        <p class="s1-desc">The Rowad Foundation for Entrepreneurship endeavored to adopt and launch an initiative
            that comes within the framework of a project ("STEPS" Local Product Support Initiative) in an effort
            to support the local product, with the aim of helping startups in local communities to grow, and
            encouraging them to learn in order to develop their products so that they can ultimately have a
            greater presence in the global markets.
            This initiative has devoted its efforts, and through a number of activities, to support Yemeni
            coffee products in particular, and in order to achieve this, Ruwwad has involved the relevant
            authorities and paid attention to the stage before starting the project to know the needs of this promising sector.
            The initiative targeted workers in the sector, including learners, young entrepreneurs, and companies
            concerned with providing guidance and training services in the field, in addition to coffee exporters
            and farmers, as well as interested people and workers in the field in general.</p>

        <h1>Training program</h1>
        <div class="training-video">
            <video id="video_id" controls="false">
                <source src="{{asset('asset/video/yemeni_coffee.mp4')}}" type="video/mp4;codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
            </video>
        </div>
        <p class="s2-desc ">The program was held in Taiz Governorate, and targeted those interested in the coffee
            trade among young entrepreneurs of both genders, aged between 18-35 years, provided that they had completed
            secondary school studies and were residents of the governorate.
            Two trainers took turns in the training sessions, explaining the methods of assessing the quality of coffee
            that is grown in some regions, referring to the stages of the value chains that it passes through, and
            clarifying to the attendees the preferences and expectations of global markets interested in and importing Yemeni coffee.
            The methods of promoting specialized coffee and coffee, in particular, in competitive markets at the global
            level, were also reviewed, and the need to focus on understanding the differences in coffee types, and the
            variation in its varying levels of quality, from farm to farm and from one geographic region to another,
            in the pursuit of the initiative to create awareness that would contribute In improving the quality of Yemeni coffee
            Over the course of the six training days, all attendees went through a coffee tasting experience,
            learned about its quality evaluation form, were exposed to the experience of distinguishing the difference
            between the thirty-six aromatic aromas, and underwent a test of knowing the different cup of coffee in the "trinity" experiment.
            The training program also covered various methods of preparing coffee, and learning the correct methods of
            growing coffee seedlings and storing them.</p>

        <h1>The objectives of the training workshop:</h1>
        <div class="s3-desc">
            <ul>
                <li>Building the cognitive abilities of the trainees in distinguishing the defects of coffee that may affect its
                    quality and value</li>
                <li>Inform them of the requirements of the global importing coffee market</li>
                <li>Enhancing confidence among some reluctant entrepreneurs, and urging them to start their projects</li>
                <li>Introduce trainees to value chains and the importance of each stage in the chain</li>
                <li>Design an electronic communication platform for networking and to support the Yemeni coffee product</li>
            </ul>
        </div>
        <div class="s4-desc">
            <div class="teams-wrapper">
                <h1 class="team-title">Our Trainers</h1>
                <div class="testimonials">
                    <blockquote class="testimonials__item testimonial">
                        <div class="testimonial__photo">
                            <img src="{{asset('asset/img/logo.png')}}" alt="Abdullatif Aljaradi">
                        </div>
                        <div class="testimonial__text">
                            <p>His curiosity to search for coffee led him to know its secrets, and to attend the coffee gourmets
                                skills-building workshop organized by the Specialty Coffee Association *,
                                by obtaining accreditation in taste from the Institute of Coffee Quality in Malaysia.
                                Abdul Latif is one of the Yemeni residents authorized to evaluate the Arabica coffee,
                                "the coffee bush of Arab origins", according to the international standards developed
                                and developed by the American Association for Specialized Coffee. Flavors.</p>
                        </div>
                        <cite class="testimonial__person">Abdullatif Aljaradi <span>
                                Founder of Mocha Route and Mocha Story.</span></cite>
                    </blockquote>
                    <blockquote class="testimonials__item testimonial">
                        <div class="testimonial__photo">
                            <img src="{{asset('asset/img/logo.png')}}" alt="Hussin Ahmed">
                        </div>
                        <div class="testimonial__text">
                            <p>His interest in coffee began in the year 2008 AD, and he founded the first coffee shop? You ask, "How was the first
                                coffee shop
                                (was the first Yemeni coffee cafe, not the first coffee shop) in the Japanese city of Tokyo in the year .....
                                He obtained an international certificate of taste in coffee from ... in the state of California, in the United
                                States of America, in the year .... M.
                                In 2016, he established the Mocha Hunters company to export specialty coffee, and opened the first coffee shop
                                to offer and sell specialty coffee in Yemen in the same year.
                                His picture drinking a cup of coffee was on the cover of Forbes * Middle East magazine in its March issue of the
                                year ..... m.</p>
                        </div>
                        <cite class="testimonial__person">Hussin Ahmed<span>Entrepreneur nicknamed the coffee hunter.</span></cite>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="s5-desc">
            <div class="trainee-wrapper">
                <h1 class="trainee-title">Trainees' Quotations</h1>
                <div class="t-quotes">
                    <div class="one slide">
                        <blockquote class="t-b-quote">
                            <span class="leftq quotes">&ldquo;</span>
                            <p>Before joining the workshop, I was hesitant to start my project, and the information I had about coffee was scattered,
                                but after that it became more arranged, and I became more determined to start.</p><span class="rightq quotes">&bdquo; </span>
                        </blockquote>

                        <h2>Majid Ahmed</h2>
                        <h6>Coffeemaker / prepares to open Magic Café</h6>
                    </div>
                </div>

                <div class="t-quotes">
                    <div class="one slide">
                        <blockquote class="t-b-quote">
                            <span class="leftq quotes">&ldquo;</span>
                            <p>The opportunities to invest in coffee are varied and always available,
                                but how can I invest them? The question that I finally found the answer to was always.</p><span class="rightq quotes">&bdquo; </span>
                        </blockquote>

                        <h2>Haitham Al-Hamiri</h2>
                        <h6>A coffee trader and founder of Dakka Company</h6>
                    </div>
                </div>

                <div class="t-quotes">
                    <div class="one slide">
                        <blockquote class="t-b-quote">
                            <span class="leftq quotes">&ldquo;</span>
                            <p>In order to be able to compete, I have to be fully aware and aware of the characteristics of the coffee that I can compete with, and the requirements of the market in which I will compete, and this was really what I realized well during the workshop.</p><span class="rightq quotes">&bdquo; </span>
                        </blockquote>

                        <h2>Eman Al-Ariqi</h2>
                        <h6>Cafe owner</h6>
                    </div>
                </div>

                <div class="t-quotes">
                    <div class="one slide">
                        <blockquote class="t-b-quote">
                            <span class="leftq quotes">&ldquo;</span>
                            <p>I achieved an integrated knowledge building for the coffee culture, and became more confident in what I possessed of the information.
                                More than ever, I am able to determine the parameters of the coffee that I buy, and I know very well the characteristics of the coffee that I sell.</p><span class="rightq quotes">&bdquo; </span>
                        </blockquote>

                        <h2>Mohamed Farea</h2>
                        <h6>Entrepreneur and Trainer</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="s6-desc">
            <div class="gallery-wrapper">
                <h1 class="gallery-title">Training Photos</h1>

                <div class="gallery">

                    <div class="gallery-item">
                        <img data-src="{{asset('asset/img/t1.jpg')}}" alt="" class="cld-responsive gallery-image">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{asset('asset/img/t2.jpg')}}" alt="sunset behind San Francisco city skyline">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{asset('asset/img/t3.jpg')}}" alt="people holding umbrellas on a busy street at night lit by street lights and illuminated signs in Tokyo, Japan">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{asset('asset/img/t4.jpg')}}" alt="car interior from central back seat position showing driver and blurred view through windscreen of a busy road at night">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{asset('asset/img/t5.jpg')}}" alt="back view of woman wearing a backpack and beanie waiting to cross the road on a busy street at night in New York City, USA">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{asset('asset/img/t6.jpg')}}" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
                    </div>

                    <div class="gallery-item">
                        <img data-src="{{asset('asset/img/t7.jpg')}}" alt="" class="cld-responsive gallery-image">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{asset('asset/img/t8.jpg')}}" alt="sunset behind San Francisco city skyline">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{asset('asset/img/t9.jpg')}}" alt="people holding umbrellas on a busy street at night lit by street lights and illuminated signs in Tokyo, Japan">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{asset('asset/img/t10.jpg')}}" alt="car interior from central back seat position showing driver and blurred view through windscreen of a busy road at night">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{asset('asset/img/t11.jpg')}}" alt="back view of woman wearing a backpack and beanie waiting to cross the road on a busy street at night in New York City, USA">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{asset('asset/img/t12.jpg')}}" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
                    </div>

                    <div class="gallery-item">
                        <img data-src="{{asset('asset/img/t13.jpg')}}" alt="" class="cld-responsive gallery-image">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{asset('asset/img/t14.jpg')}}" alt="sunset behind San Francisco city skyline">
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@include('client/footer')