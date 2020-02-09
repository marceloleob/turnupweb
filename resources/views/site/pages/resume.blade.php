@extends('site.layouts.pages')

@section('subtitle', ' - ' . trans('pages/contact.title'))

@section('content')




<!DOCTYPE html>
<html lang="en">
<head>

	<title>Resume - Marcelo Leopold</title>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Marcelo Leopold - marceloleob@gmail.com" />

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/libs/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" type="text/css" href="css/libs/fontawesome-all-5.5.0.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<div class="main-wrapper">
    <div class="container px-3 px-lg-5">
        <article class="resume-wrapper mx-auto theme-bg-light p-5 mb-5 my-5 shadow-lg">

            <!-- HEADER -->
            <div class="resume-header">
                <div class="row align-items-center">
                    <div class="resume-title col-12 col-md-6 col-lg-8 col-xl-9">
                        <h2 class="resume-name mb-0 text-uppercase">Marcelo Leopold</h2>
                        <div class="resume-tagline mb-3 mb-md-0">PHP Developer</div>
                    </div>
                    <div class="resume-contact col-12 col-md-6 col-lg-4 col-xl-3">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fas fa-mobile-alt fa-fw fa-lg mr-2"></i><a class="resume-link" href="tel:#">(727) 238.4933</a></li>
                            <li class="mb-2"><i class="far fa-envelope fa-fw fa-lg mr-2"></i><a class="resume-link" href="mailto:#">marceloleodev@gmail.com</a></li>
                            <li class="mb-2"><i class="fas fa-globe-americas fa-fw fa-lg mr-2"></i><a class="resume-link" href="#">www.marceloleodev.com</a></li>
                            <li class="mb-0"><i class="fas fa-map-pin fa-fw fa-lg mr-2"></i>Boston</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- HEADER -->

            <hr />

            <!-- RESUME -->
            <div class="resume-intro py-3">
                <div class="media flex-column flex-md-row align-items-center">
                    <img class="resume-profile-image mb-3 mb-md-0 mr-md-5 ml-md-0 rounded mx-auto" src="images/marcelo.png" alt="image">
                    <div class="media-body text-left">
                        <p class="mb-0">
                            Graduated in Civil Engineer University of Belo Horizonte, Brazil. <br />
                            I learned to program by myself and have been experience for more than 10 years as a PHP Systems Developer, I was part of several advanced teams like Analysts, DBAs, Diagrammers and Architects, most of the time using Agile Methodologies. I’m always open to learn new things.
                        </p>
                    </div>
                </div>
            </div>
            <!-- RESUME -->

            <hr />

            <div class="resume-body">
                <div class="row">
                    <div class="resume-main col-12 col-lg-8 col-xl-9 pr-0 pr-lg-5">
                        <section class="work-section py-3">
                            <h3 class="text-uppercase resume-section-heading mb-4">Work Experiences</h3>
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">PHP Developer</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">August 2017 - Present</div>
                                </div>
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-content col-12 col-md-6 col-lg-6 mb-2 mb-md-0"><i class="far fa-building"></i> &nbsp; Freelance</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">Boston, Massachusetts, USA</div>
                                </div>
                                <div class="item-content">
                                    <p>--</p>
                                </div>
                            </div>
                            <hr />
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">Construction Supplies Negotiator</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">August 2016 - July 2017</div>
                                </div>
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-content col-12 col-md-6 col-lg-6 mb-2 mb-md-0"><i class="far fa-building"></i> &nbsp; <a href="https://www.mrv.com.br" target="_blank">MRV Engenharia</a></h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">Pernambuco, Brazil</div>
                                </div>
                                <div class="item-content">
                                    <p>
                                        After completing college in Civil Engineering, I was hired by the company "MRV Engenharia" for complex necociations of machinery and equipment for construction in the area of the State of Pernambuco, Brazil. <br />
                                        Advanced Excel Skills.
                                    </p>
                                </div>
                            </div>
                            <hr />
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">Web System Developer</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">June 2014 - August 2016</div>
                                </div>
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-content col-12 col-md-6 col-lg-6 mb-2 mb-md-0"><i class="far fa-building"></i> &nbsp; <a href="https://www.maxmilhas.com.br" target="_blank">MaxMilhas</a></h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">Belo Horizonte, Minas Gerais, Brazil</div>
                                </div>
                                <div class="item-content">
                                    <p>
                                        I was one of the first developers of the MaxMilhas. <br />
                                        Complex system that connects people who want to sell airline miles with people who want to buy airline tickets. <br />
                                        I was part of the PHP team and System Architect. <br />
                                        After a year I was one of those responsible for the website's Financial System (Online Payment and Internal Financial Control of the company).
                                    </p>
                                </div>
                            </div>
                            <hr />
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">PHP Developer</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">September 2012 - June 2014</div>
                                </div>
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-content col-12 col-md-6 col-lg-6 mb-2 mb-md-0"><i class="far fa-building"></i> &nbsp; <a href="http://www.aceleradoradeempresa.com.br" target="_blank">Aceleradora de Empresa</a></h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">Belo Horizonte, Minas Gerais, Brazil</div>
                                </div>
                                <div class="item-content">
                                    <p>
                                        PHP Developer, ExtJs4, Zend Framework and Doctrine 2, Unit Tests using PHPUnit and DBUnit. <br />
                                        Development a big system with remote developers in 3 different towns, we work together to make the project. <br />
                                        System to "Fundação de Apoio à Universidade Federal" (Federal University Support Foundation).
                                    </p>
                                </div>
                            </div>
                            <hr />
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">PHP Developer</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">October 2009 - August 2012</div>
                                </div>
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-content col-12 col-md-6 col-lg-6 mb-2 mb-md-0"><i class="far fa-building"></i> &nbsp; <a href="http://useinternational.com" target="_blank">useInternational</a></h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">Belo Horizonte, Minas Gerais, Brazil</div>
                                </div>
                                <div class="item-content">
                                    <p>
                                        System Analyst, PHP Developer, CSS support, MySQL support, Selenium Test using PHP.
                                    </p>
                                </div>
                            </div>
                            <hr />
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">PHP Developer</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">February 2008 - June 2009</div>
                                </div>
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-content col-12 col-md-6 col-lg-6 mb-2 mb-md-0"><i class="far fa-building"></i> &nbsp; <a href="https://algartech.com" target="_blank">Algar Tech</a></h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">Belo Horizonte, Minas Gerais, Brazil</div>
                                </div>
                                <div class="item-content">
                                    <p>
                                        I was part of the virtual store development team for the newspaper "Estado de Minas" using PHP, JavaScript, MySQL. <br />
                                        As a system maintenance of "SEMAD - Secretaria de Estado de Meio Ambiente e Desenvolvimento Sustentável" (State Secretariat for the Environment and Sustainable Development) using JAVA.
                                    </p>
                                </div>
                            </div>
                            <hr />
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">Web Developer (PHP, ASP, Javascript)</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">September 2006 - October 2007</div>
                                </div>
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-content col-12 col-md-6 col-lg-6 mb-2 mb-md-0"><i class="far fa-building"></i> &nbsp; <a href="https://www.bolt.com.br" target="_blank">Bolt Brasil Comunicação Digital</a></h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">Belo Horizonte, Minas Gerais, Brazil</div>
                                </div>
                                <div class="item-content">
                                    <p>
                                        Development and maintenance on several systems and websites, including managers and online stores.
                                    </p>
                                </div>
                            </div>
                            <hr />
                        </section>

                        <section class="project-section py-3">
                            <h3 class="text-uppercase resume-section-heading mb-4">Education</h3>
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-12 col-lg-12 mb-2 mb-md-0">English Second Language</h4>
                                </div>
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-content col-12 col-md-12 col-lg-12 mb-2 mb-md-0"><i class="fas fa-graduation-cap"></i> &nbsp; <a href="https://somerville.k12.ma.us/adult-learning/scale" target="_blank">SCALE - Somerville Center for Adult Learning Experiences</a></h4>
                                </div>
                                <div class="item-content">
                                    <p>
                                        Somerville, Massachusetts, USA <br />
                                        (2020 - Present)
                                    </p>
                                </div>
                            </div>
                            <hr />
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-12 col-lg-12 mb-2 mb-md-0">English Second Language</h4>
                                </div>
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-content col-12 col-md-12 col-lg-12 mb-2 mb-md-0"><i class="fas fa-graduation-cap"></i> &nbsp; <a href="#">Everett Adult Learning Center</a></h4>
                                </div>
                                <div class="item-content">
                                    <p>
                                        Everett, Massachusetts, USA <br />
                                        (2018 - Present)
                                    </p>
                                </div>
                            </div>
                            <hr />
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-12 col-lg-12 mb-2 mb-md-0">Bachelor’s Degree, Civil Engineering</h4>
                                </div>
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-content col-12 col-md-12 col-lg-12 mb-2 mb-md-0"><i class="fas fa-graduation-cap"></i> &nbsp; <a href="http://www.unibh.br" target="_blank">Centro Universitário de Belo Horizonte</a></h4>
                                </div>
                                <div class="item-content">
                                    <p>
                                        Belo Horizonte, Minas Gerais, Brazil <br />
                                        (2010 - 2015)
                                    </p>
                                </div>
                            </div>
                            <hr />
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-12 col-lg-12 mb-2 mb-md-0">Computer Engineering</h4>
                                </div>
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-content col-12 col-md-12 col-lg-12 mb-2 mb-md-0"><i class="fas fa-graduation-cap"></i> &nbsp; <a href="http://www.fumec.br" target="_blank">Universidade FUMEC</a></h4>
                                </div>
                                <div class="item-content">
                                    <p>
                                        Belo Horizonte, Minas Gerais, Brazil <br />
                                        (2009 - 2010 LOA)
                                    </p>
                                </div>
                            </div>
                        </section>
                    </div>

                    <aside class="resume-aside col-12 col-lg-4 col-xl-3 px-lg-4 pb-lg-4">

                        <section class="skills-section py-3">
                            <h3 class="text-uppercase resume-section-heading mb-4">Languages</h3>
                            <ul class="list-unstyled resume-lang-list">
                                <li class="mb-2">Portuguese <span class="text-muted">(Native)</span></li>
                                <li>English <span class="text-muted">(Limited working proficiency)</span></li>
                            </ul>
                        </section>

                        <section class="skills-section py-3">
                            <h3 class="text-uppercase resume-section-heading mb-4">Skills</h3>
                            <div class="item">
                                <h4 class="item-title">Technical</h4>
                                <ul class="list-unstyled resume-skills-list">
                                    <li class="mb-2">PHP</li>
                                    <li class="mb-2">jQuery / NodeJS / ExtJs4</li>
                                    <li class="mb-2">HTML5 / CSS3</li>
                                    <li class="mb-2">Laravel 6 / Symfony</li>
                                    <li class="mb-2">Docker / LaraDock</li>
                                    <li class="mb-2">GIT</li>
                                    <li class="mb-2">MySQL / PostgreSQL</li>
                                    <li class="mb-2">Doctrine 2</li>
                                    <li class="mb-2">TDD / PHPUnit / DBUnit</li>
                                    <li class="mb-2">Selenium</li>
                                    <li class="mb-2">OOP</li>
                                    <li class="mb-2">MVC</li>
                                    <li class="mb-2">PSR</li>
                                </ul>
                            </div>
                            <div class="item">
                                <h4 class="item-title">Professional</h4>
                                <ul class="list-unstyled resume-skills-list">
                                    <li class="mb-2">Open Mindedness</li>
                                    <li class="mb-2">Creativity</li>
                                    <li class="mb-2">Teamwork<li>
                                    <li class="mb-2">Problem-Solving</li>
                                    <li class="mb-2">Critical Thinking</li>
                                    <li>Willingness to learn</li>
                                </ul>
                            </div>
                        </section>

                    </aside>
                </div>
            </div>
            <hr />

            <div class="resume-footer text-center">
                <ul class="resume-social-list list-inline mx-auto mb-0 d-inline-block text-muted">
                    <li class="list-inline-item mb-lg-0 mr-3"><a class="resume-link" href="https://github.com/marceloleob"><i class="fab fa-github-square fa-2x mr-2" data-fa-transform="down-4"></i><span class="text-footer d-none d-lg-inline-block text-muted">github.com/marceloleob</span></a></li>
                    <li class="list-inline-item mb-lg-0 mr-3"><a class="resume-link" href="https://www.linkedin.com/in/marcelo-leopold-batista"><i class="fab fa-linkedin fa-2x mr-2" data-fa-transform="down-4"></i><span class="text-footer d-none d-lg-inline-block text-muted">linkedin.com/in/marcelo-leopold-batista</span></a></li>
                    <li class="list-inline-item mb-lg-0 mr-lg-3"><a class="resume-link" href="https://twitter.com/marceloleob"><i class="fab fa-twitter-square fa-2x mr-2" data-fa-transform="down-4"></i><span class="text-footer d-none d-lg-inline-block text-muted">@marceloleob</span></a></li>
                </ul>
            </div>

        </article>
    </div>

    <footer class="footer text-center py-4">
        <!-- This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com -->
        <small class="copyright text-muted">Designed with <i class="fas fa-heart"></i> by <a class="theme-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
    </footer>

</div>

</body>
</html>
