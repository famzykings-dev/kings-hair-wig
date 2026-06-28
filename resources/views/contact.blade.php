
    @extends('layouts.contacts')

    @section('content')

<!--  CONTACT SECTION -->
<section class="contact-section py-5">
    <div class="container">

        <br><br><br>

        <!-- Title -->
         <br><br><br>
        <h2 class="text-center fw-bold mb-5">Contact Us</h2>

        <div class="row">

            <!--  LEFT SIDE (CONTACT INFO) -->
             
            <div class="col-lg-6 mb-4">
                  <br><br><br>
                <div class="contact-box p-4">
            
                    <h4 class="mb-3">Get In Touch</h4>

                    <p>
                        We’d love to hear from you! Reach out to us for orders, inquiries,
                        or support.
                    </p>

                    <p><b>📍 Address:</b> NO.4 Oko Street</p>
                    <p><b>📞 Call:</b> 08109529656</p>
                    <p><b>💬 WhatsApp:</b> 07010400454</p>
                    <p><b>📧 Email:</b> kingsfam1997@gmail.com</p>

                    <hr>

                    <p><b>🕒 Opening Hours:</b></p>
                    <p>MON - SAT : 9 am - 6 pm</p>
                    <p>SUN : 12 pm - 6 pm</p>

                </div>

            </div>

            <!--  RIGHT SIDE (FORM) -->
            <div class="col-lg-6">
                 <br><br><br>
                <div class="contact-box p-4">

                    <h4 class="mb-3">Send a Message</h4>

                    <form id="contactForm">

                        <div class="mb-3">
                            <input type="text" name="from_name" class="form-control" placeholder="Your Name" required>
                        </div>

                        <div class="mb-3">
                            <input type="email" name="from_email" class="form-control" placeholder="Your Email" required>
                        </div>

                        <div class="mb-3">
                            <textarea name="message" rows="5" class="form-control" placeholder="Your Message" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-dark w-100">
                            Send Message
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>
</section>
 @endsection
