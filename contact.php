<?php include 'header.php'; ?>
<div style="height: 100px; background: var(--primary-dark);"></div>

<section class="section-padding">
    <div class="container">
        <div class="section-header">
            <h2>Get In Touch</h2>
            <p>Ready to schedule a clean? Fill out the form below.</p>
        </div>

        <div class="contact-container">
            <div class="contact-info">
                <h3>Contact Information</h3>
                <p>We are available Mon-Sat, 8am - 6pm.</p>
                
                <div style="margin-top: 30px;">
                    <p><i class="fas fa-phone"></i> <strong>Phone:</strong><br> +263 780987162</p>
                    <br>
                    <p><i class="fas fa-envelope"></i> <strong>Email:</strong><br> mufarochigwedere@gmail.com</p>
                    <br>
                    <p><i class="fas fa-map-marker-alt"></i> <strong>HQ:</strong><br> harare<br>zimbabwe</p>
                </div>
            </div>

            <div class="contact-form-wrapper">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" name="name" required placeholder="John Doe">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" required placeholder="john@example.com">
                    </div>
                    <div class="form-group">
                        <label>Service Needed</label>
                        <input type="text" name="subject" placeholder="e.g. Full Car Detail">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" rows="5" placeholder="How can we help you?"></textarea>
                    </div>
                    <button type="submit" class="btn-cta btn-submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>