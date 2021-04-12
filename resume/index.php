<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>MardhaMardiyaCV</title>
</head>

<body>
    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="#" class="nav__logo">Mardha</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link">
                            <i class="bx bx-home nav__icon active-link"></i>Home
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#profil" class="nav__link">
                            <i class="bx bx-user nav__icon"></i>Profil
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#education" class="nav__link">
                            <i class="bx bx-book nav__icon"></i>Education
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#skill" class="nav__link ">
                            <i class="bx bx-receipt nav__icon"></i>Skill
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#experience" class="nav__link">
                            <i class="bx bx-briefcase-alt nav__icon"></i>experience
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#certificates" class="nav__link">
                            <i class="bx bx-award nav__icon"></i>Certificates
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#references" class="nav__link">
                            <i class="bx bx-link-external nav__icon"></i>references
                        </a>
                    </li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="bx bx-grid-alt"></i>
            </div>
        </nav>
    </header>

    <main class="l-main bd-container">
        <!-- All elements within this div, is generated in PDF -->
        <div class="resume" id="area-cv">
            <div class="resume__left">
                <!--========== HOME ==========-->
                <section class="home" id="home">
                    <div class="home__container section bd-grid">
                        <div class="home__data bd-grid">
                            <img src="assets/img/perfil.png" class="home__img" alt="">
                            <h1 class="home__title"><b>Mardha</b> Mardiya</h1>
                            <h3 class="home__profession">Web Developer</h3>
                            <div>
                                <a download="" href="assets/pdf/MardhaMardiya_CV.pdf" class="home__button-movil">Download</a>
                            </div>
                        </div>

                        <div class="home__address bd-grid">
                            <span class="home__information">
                                <i class="bx bx-map home__icon">
                                    Banjarbaru,South Borneo
                                </i>
                            </span>
                            <span class="home__information">
                                <i class="bx bx-envelope home__icon">
                                    mardhamardiya.18@gmail.com
                                </i>
                            </span>
                            <span class="home__information ">
                                <i class="bx bx-phone home__icon">
                                    +62 85210878435
                                </i>
                            </span>
                        </div>
                    </div>

                    <!-- Theme change button -->
                    <i class="bx bx-moon change-theme" title="Theme" id="theme-button"></i>

                    <!-- Button to generate and download the pdf. Available for desktop. -->
                    <div class="container-pdf" id="resume-button">
                        <i class="bx bx-download generate-pdf" title="Generate PDF"></i>
                    </div>
                </section>

                <!--========== SOCIAL ==========-->
                <section class="social section">
                    <h2 class="section-title">SOCIAL</h2>

                    <div class="social__container bd-grid">
                        <a href="" class="social__link">
                            <i class="bx bxl-linkedin-square social__icon"></i> Mardha Mardiya
                        </a>
                        <a href="" class="social__link">
                            <i class="bx bxl-instagram social__icon"></i> mrdhamar18
                        </a>
                        <a href="" class="social__link">
                            <i class="bx bxl-github social__icon"></i> mardhamardiya18
                        </a>
                        <a href="" class="social__link">
                            <i class="bx bxl-twitter social__icon"></i> Ansel_Oliver
                        </a>
                    </div>
                </section>

                <!--========== PROFILE ==========-->
                <section class="profile section" id="profile">
                    <h2 class="section-title">Profile</h2>

                    <p class="profile__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste
                        delectus exercitationem tenetur esse nisi modi laudantium sint ea dolores rem!</p>
                </section>

                <!--========== EDUCATION ==========-->
                <section class="education section" id="education">
                    <h2 class="section-title">Education</h2>

                    <div class="education__container bd-grid">
                        <div class="education__content">
                            <div class="education__time">
                                <span class="education__rounder"></span>
                                <span class="education__line"></span>
                            </div>
                            <div class="education__data bd-grid">
                                <h3 class="education__title">Information System</h3>
                                <span class="education__studies">Vocational Education of Brawijaya University</span>
                                <span class="education__year">2019 - Now</span>
                            </div>
                        </div>
                    </div>
                </section>


                <!--========== SKILLS  ==========-->
                <section class="skills section" id="skills">
                    <h2 class="section-title">Skills</h2>

                    <div class="skills__content bd-grid">
                        <ul class="skills_data">
                            <li class="skills__name">
                                <span class="skills__circle"></span> HTML
                            </li>
                            <li class="skills__name">
                                <span class="skills__circle"></span> CSS
                            </li>
                            <li class="skills__name">
                                <span class="skills__circle"></span> Javascript
                            </li>
                        </ul>
                        <ul class="skills_data">
                            <li class="skills__name">
                                <span class="skills__circle"></span> Vue
                            </li>
                            <li class="skills__name">
                                <span class="skills__circle"></span> Bootstrap
                            </li>
                            <li class="skills__name">
                                <span class="skills__circle"></span> Mongodb
                            </li>
                            <li class="skills__name">
                                <span class="skills__circle"></span> Express
                            </li>
                        </ul>
                    </div>
                </section>

            </div>

            <div class="resume__right">
                <!--========== EXPERIENCE ==========-->
                <section class="experience section" id="experience">
                    <h2 class="section-title">Experience</h2>

                    <div class="experience__content bd-grid">
                        <div class="experience__content">
                            <div class="experience__time">
                                <span class="experience__rounder"></span>
                                <span class="experience__line"></span>
                            </div>

                            <div class="experience__data bd-grid">
                                <h3 class="experience__title">LandingPage Resto</h3>
                                <span class="experience__company">Now | banuatumpeng.com</span>
                                <p class="experience__description">I built this landingpage using HTML, CSS and a
                                    combination of javascript like Jquery to make it easier, this landingpage was built
                                    for business that I hold myself.</p>
                            </div>

                        </div>
                    </div>
                    <div class="experience__content bd-grid">
                        <div class="experience__content">
                            <div class="experience__time">
                                <span class="experience__rounder"></span>
                                <span class="experience__line"></span>
                            </div>

                            <div class="experience__data bd-grid">
                                <h3 class="experience__title">WEBApps Developer Community Forum</h3>
                                <span class="experience__company">July - August 2020 | sanbercode.com</span>
                                <p class="experience__description">as a requirement for completing a minimum course of
                                    making an application from the course I am taking, which is about Laravel Web
                                    Development, I build this application with laravel</p>
                            </div>

                        </div>
                    </div>


                </section>

                <!--========== CERTIFICATES ==========-->
                <section class="certificate section" id="certificates">
                    <h2 class="section-title">Certificates</h2>

                    <div class="certificate__container bd-grid">
                        <div class="certificate__content">
                            <h3 class="certificate__title">Certified for Laravel Web Development Sanbercode Bootcamp
                            </h3>
                            <p class="certificate__description">have completed bootcamp and web development final
                                project with laravel</p>
                        </div>
                    </div>

                </section>

                <!--========== REFERENCES ==========-->
                <section class="references section" id="references">
                    <h2 class="section-title">References</h2>

                    <div class="references__container bd-grid">
                        <div class="reference__content bd-grid">
                            <span class="references__subtitle">Owner banuatumpeng.com</span>
                            <h3 class="references__title">Mamah Iis</h3>
                            <ul class="references__contact">
                                <li>Phone: +62 857-7939-5094</li>
                                <li>Email: iiskarlina75@gmail.com</li>
                            </ul>
                        </div>
                        <div class="reference__content bd-grid">
                            <span class="references__subtitle">Manager banuatumpeng.com</span>
                            <h3 class="references__title">Abdan Syakura</h3>
                            <ul class="references__contact">
                                <li>Phone: +62 822-5420-9032</li>
                                <li>Email: abdnsya@gmail.com</li>
                            </ul>
                        </div>


                    </div>
                </section>

                <!--========== LANGUAGES ==========-->
                <section class="languages section">
                    <h2 class="section-title">Languages</h2>

                    <div class="languages__container">
                        <ul class="languages__content bd-grid">
                            <li class="languages__name">
                                <span class="languages__circle"></span>Indonesia
                            </li>
                            <li class="languages__name">
                                <span class="languages__circle"></span>English
                            </li>
                        </ul>
                    </div>
                </section>

                <!--========== INTERESTS ==========-->
                <section class="interests section">
                    <h2 class="section-title">Interests</h2>

                    <div class="interests__container bd-grid">
                        <div class="interest__content">
                            <i class='bx bxs-music interest__icon'></i>
                            <span class="interests__name ">Music</span>
                        </div>
                        <div class="interest__content">
                            <i class='bx bx-game interest__icon'></i>
                            <span class="interests__name ">Game</span>
                        </div>
                        <div class="interest__content">
                            <i class='bx bx-dumbbell interest__icon'></i>
                            <span class="interests__name">Fitness</span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bxs-up-arrow scrolltop__icon'></i>
    </a>

    <!--========== HTML2PDF ==========-->
    <script src="assets/js/html2pdf.bundle.min.js"></script>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
</body>

</html>