@extends('master')
@section('title', 'Home')
@section('content')

        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Discover the Artistry of Traditional Chinese Tattoos.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.png" alt="Mystic tiger" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2015</h4>
                                <h4 class="subheading">A Passion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">We started with a dream and just a handful of needles. But our commitment and love for traditional Chinese tattoo art led us to take our first steps. In 2015, we officially embarked on our journey as a full-fledged tattoo studio.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2016</h4>
                                <h4 class="subheading">Elevating Artistry</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">A year after founding, we took our commitment to traditional Chinese tattoo art to the next level. This marked the beginning of our transition to a full-service studio. Our focus on elevating artistry and delivering exceptional tattoo experiences remained unwavering.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.png" alt="Award" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>May 2018</h4>
                                <h4 class="subheading">Recognition and Awards</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">By May 2018, our dedication to the craft had started to gain recognition. We proudly received our first awards for outstanding achievements in traditional Chinese tattoo art. These accolades fueled our passion and reaffirmed our dedication to excellence.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.png" alt="Digital innovation" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>October 2021</h4>
                                <h4 class="subheading">Digital Innovation</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"> In October 2021, we embraced the digital age while staying true to our traditional roots. We introduced innovative digital tools and techniques to enhance our designs and provide clients with even more personalized tattoo experiences. This marked a significant milestone in our journey of combining tradition with technology.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Get Ink
                                <br />
                                With
                                <br />
                                Us !
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
       
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">We will get back to you as soon as possible.</h3>
                </div>


        <!-- Contact information modal popup-->
        <div class="portfolio-modal modal fade" id="contactModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal">
                        <img src="assets/img/close-icon.svg" alt="Close modal" />
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Contact Information</h2>
                                    <!-- Contact info details -->
                                    @isset($data)
                                    <div class="fw-bold font-monospace">
                                        <p>Name: {{ $data->name }} </p>
                                        <p>Email: {{ $data->email }} </p>
                                        <p>Phone: {{ $data->phone }} </p>
                                        <p>Message: {{ $data->message }} </p>
                                    </div>
                                    @endisset
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <form id="contactForm" method="post" action="/contact">
                @csrf 
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input name="name" class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input name="email" class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input name="phone" class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea name="message" class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
      
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script>
            window.addEventListener('DOMContentLoaded', (event) => {
                // Reste du code ...

                // Vérifiez si les données de contact existent
                @isset($data)
                    // Déclenchez le modal après le chargement de la page
                    var myModal = new bootstrap.Modal(document.getElementById('contactModal'), {});
                    myModal.show();
                @endisset
            });
        </script>
    </body>
</html>
@endsection