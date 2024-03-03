<?php
/**

 * Template Name: Blocks Page

*/

get_header();
?>

<section class="landing-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex">
                <div class="landing-block__info">
                    <div class="landing-block__title">Hi, i am Robert Garcia.</div>
                    <div class="landing-block__description">
                        <p>A Sydney based front-end developer passionate about building accessible and user friendly websites.</p>
                    </div>
                    <div class="landing-block__links">
                        <a href="#" class="btn d-lg-flex d-none">
                            Contact Me 
                            <span class="landing-block__icon landing-block__icon-1"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/circle.svg"); ?></span>
                            <span class="landing-block__icon landing-block__icon-2 d-none"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/circle-hover.svg"); ?></span>
                        </a>
                        <a href="#" class="btn d-lg-none d-flex">
                            Contact Me 
                            <span class="landing-block__icon"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/circle-hover.svg"); ?></span>
                        </a>
                        <a href="#"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/linkedin.svg"); ?></a>
                        <a href="#"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/github.svg"); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="landing-block__image">
                    <img src="http://localhost/12-MyPortfolioPage/myPortfolioPage/wp-content/uploads/2024/03/my-image.png" alt="My Image">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featured-projects-block" id="work">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="featured-projects-block__header-title">Featured Projects</div>
                <div class="featured-projects-block__header-description">
                    <p>Here are some of the selected projects that showcase my passion for front-end development.</p>
                </div>
            </div>
        </div>
        <div class="featured-projects-block__project">
            <div class="row">
                <div class="col-lg-6">
                    <div class="featured-projects-block__image-frame">
                        <div class="featured-projects-block__tag">Conceptual Work</div>
                        <div class="featured-projects-block__image">
                            <img src="http://localhost/12-MyPortfolioPage/myPortfolioPage/wp-content/uploads/2024/03/Project-1.png" alt="Project 1">
                        </div> 
                    </div>
                </div>
                <div class="col-lg-6 d-flex">
                    <div class="featured-projects-block__project-info">
                        <div class="featured-projects-block__project-title">Promotional landing page for our favorite show</div>
                        <div class="featured-projects-block__project-description">
                            <p>Teamed up with a designer to breathe life into a promotional webpage for our beloved show, Adventure Time. Delivered a fully responsive design with dynamic content capabilities, seamlessly integrating a newsletter feature to keep fans updated with the latest adventures.</p>
                        </div>
                        <div class="featured-projects-block__project-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Project Info</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Year</td>
                                        <td>2023</td>
                                    </tr>
                                    <tr>
                                        <td>Role</td>
                                        <td>Front-end Developer</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="featured-projects-block__project-links">
                            <a href="#" class="link">Live Demo <?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/arrow-yellow.svg"); ?></a>
                            <a href="#" class="link">See on Github <?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/github-yellow.svg"); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="featured-projects-block__project">
            <div class="row">
                <div class="col-lg-6">
                    <div class="featured-projects-block__image-frame">
                        <div class="featured-projects-block__image">
                            <img src="http://localhost/12-MyPortfolioPage/myPortfolioPage/wp-content/uploads/2024/03/Project-2.png" alt="Project 2">
                        </div> 
                    </div>
                </div>
                <div class="col-lg-6 d-flex">
                    <div class="featured-projects-block__project-info">
                        <div class="featured-projects-block__project-title">Blog site for World News</div>
                        <div class="featured-projects-block__project-description">
                            <p>Mastered CSS Grid complexities in building an innovative news homepage, navigating intricate design decisions for a seamless user experience. Leveraged the challenge to enhance skills in  front-end development.</p>
                        </div>
                        <div class="featured-projects-block__project-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Project Info</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Client</td>
                                        <td>World News</td>
                                    </tr>
                                    <tr>
                                        <td>Year</td>
                                        <td>2022</td>
                                    </tr>
                                    <tr>
                                        <td>Role</td>
                                        <td>Front-end Developer</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="featured-projects-block__project-links">
                            <a href="#" class="link">View project <?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/arrow-yellow.svg"); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="featured-projects-block__project">
            <div class="row">
                <div class="col-lg-6">
                    <div class="featured-projects-block__image-frame">
                        <div class="featured-projects-block__tag">Challenge</div>
                        <div class="featured-projects-block__image">
                            <img src="http://localhost/12-MyPortfolioPage/myPortfolioPage/wp-content/uploads/2024/03/Project-3.png" alt="Project 3">
                        </div> 
                    </div>
                </div>
                <div class="col-lg-6 d-flex">
                    <div class="featured-projects-block__project-info">
                        <div class="featured-projects-block__project-title">E-commerce product page</div>
                        <div class="featured-projects-block__project-description">
                            <p>Successfully crafted an engaging product page featuring a dynamic lightbox gallery and seamless cart functionality, showcasing proficiency in JavaScript development.</p>
                        </div>
                        <div class="featured-projects-block__project-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Project Info</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Year</td>
                                        <td>2022</td>
                                    </tr>
                                    <tr>
                                        <td>Role</td>
                                        <td>Front-end Developer</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="featured-projects-block__project-links">
                            <a href="#" class="link">Live Demo <?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/arrow-yellow.svg"); ?></a>
                            <a href="#" class="link">See on Github <?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/github-yellow.svg"); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-homepage-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="about-homepage-block__header">About me</div>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="about-homepage-block__title">I am a front-end developer based in Sydney. Has Mechanical Engineering background.</div>
                <div class="about-homepage-block__description">
                    <p>I am a front-end developer based in Sydney looking for exciting opportunities. Has Mechanical Engineering background. Likes to focus on accessibility when developing. Passionate and curious about solving problems. Currently, I’m exploring Reactjs, Webflow and a bit of Designing. While I am not programming, I enjoy playing football, photography and playing Valorant. Learning more to improve skill.</p>
                </div>
                <div class="about-homepage-block__link">
                    <a href="#">More about me</a>
                </div>
                <div class="about-homepage-block__image d-lg-none d-md-none d-sm-none d-block">
                    <img src="http://localhost/12-MyPortfolioPage/myPortfolioPage/wp-content/uploads/2024/03/my-image-about.png" alt="My Image">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-block" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-right-lg-2 d-flex flex-column justify-content-between">
                <div class="contact-block__info">
                    <div class="contact-block__title">Let’s connect</div>
                    <div class="contact-block__description">
                        <p>Say hello at <a href="#">robertgarcia@gmail.com</a></p>
                        <p>For more info, here's my <a href="#">resume</a></p>
                    </div>
                    <div class="contact-block__links">
                        <a href="#"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/linkedin-contact.svg"); ?></a>
                        <a href="#"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/github-contact.svg"); ?></a>
                        <a href="#"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/instagram-contact.svg"); ?></a>
                    </div>
                </div>
                <div class="contact-block__copyright d-lg-block d-none">© 2023 Robert Garcia</div>
            </div>
            <div class="col-lg-6">
                <div class="contact-block__form">
                    <?php echo do_shortcode('[contact-form-7 id="41c780f" title="Contact"]'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="contact-block__copyright d-lg-none d-block">© 2023 Robert Garcia</div>
            </div>
        </div>
    </div>
</section>

<section class="about-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="about-block__header">About me</div>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="about-block__title">I am a front-end developer based in Sydney. Has Mechanical Engineering background.</div>
                <div class="about-block__description">
                    <p>I am a front-end developer based in Sydney looking for exciting opportunities. Has Mechanical Engineering background. Likes to focus on accessibility when developing. Passionate and curious about solving problems. Currently, I’m exploring Reactjs, Webflow and a bit of Designing. While I am not programming, I enjoy playing football, photography and playing Valorant. Learning more to improve skill.</p>
                </div>
                <div class="about-block__links">
                    <a href="#" class="btn d-lg-flex d-none">
                        Download Resume
                        <span class="about-block__icon about-block__icon-1"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/circle.svg"); ?></span>
                        <span class="about-block__icon about-block__icon-2 d-none"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/circle-download.svg"); ?></span>
                    </a>
                    <a href="#" class="btn d-lg-none d-flex">
                    Download Resume
                        <span class="landing-block__icon"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/circle-download.svg"); ?></span>
                    </a>
                    <a href="#"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/linkedin.svg"); ?></a>
                    <a href="#"><?php echo file_get_contents("C:/xampp/htdocs/12-MyPortfolioPage/myPortfolioPage/wp-content/themes/amirkurtagic/assets/icons/github.svg"); ?></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="about-block__image">
                    <img src="http://localhost/12-MyPortfolioPage/myPortfolioPage/wp-content/uploads/2024/03/my-image-banner.png" alt="My Image Banner">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-capabilities-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="my-capabilities-block__title">My Capabilities</div>
            </div>
            <div class="col-lg-6 offset-lg-2">
                <div class="my-capabilities-block__description">
                    <p>I am always looking to add more skills.Morbi egestas neque eu blandit fermentum. Nulla ac lobortis ligula. Pellentesque ac ex at purus faucibus tristique ut et dolor. </p>
                </div>
                <div class="my-capabilities-block__tags">
                    <div class="my-capabilities-block__tag">HTML</div>
                    <div class="my-capabilities-block__tag">CSS</div>
                    <div class="my-capabilities-block__tag">Javascript</div>
                    <div class="my-capabilities-block__tag">Jquery</div>
                    <div class="my-capabilities-block__tag">Accessibility</div>
                    <div class="my-capabilities-block__tag">Figma</div>
                    <div class="my-capabilities-block__tag">Tailwind Css</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-experience-block" id="work">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="my-experience-block__title">My Experience</div>
            </div>
            <div class="col-lg-6 offset-lg-2">
                <div class="my-experience-block__job">
                    <div class="my-experience-block__job-first">
                        <div class="my-experience-block__job-title">Freelance Developer</div>
                        <div class="my-experience-block__job-date">Nov 2023 — Present</div>
                    </div>
                    <div class="my-experience-block__job-description">
                        <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
                <div class="my-experience-block__job">
                    <div class="my-experience-block__job-first">
                        <div class="my-experience-block__job-title">Front-End Intern</div>
                        <div class="my-experience-block__job-date">Sep 2023 — Nov 2023 </div>
                    </div>
                    <div class="my-experience-block__job-second">
                        <a href="#" class="my-experience-block__job-company">Roos Tech</a>
                    </div>
                    <div class="my-experience-block__job-description">
                        <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();