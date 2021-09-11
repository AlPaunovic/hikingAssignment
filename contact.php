<?php include 'partials/header.php'; ?>

<!-- contact -->

<section class="contact container">
<hr>
<h2>Contact us</h2>
<div class="row">

    <article>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2847.91978749271!2d20.75171101552396!3d44.455315979102004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4750b0b796588af5%3A0x87fedd2e02b896ab!2s353!5e0!3m2!1ssr!2srs!4v1630865029115!5m2!1ssr!2srs" width="700" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </article>
    <article>
       
    <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">
        
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Your name</label> 
            <div class="fcf-input-group">
                <input type="text" id="Name" name="Name" class="fcf-form-control" required>
            </div>
        </div><br>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Your email address</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
            </div>
        </div><br>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Your message</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="1000" required></textarea>
            </div>
        </div><br>

        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
        </div>

        <div class="fcf-credit" id="fcf-credit">
        
        </div>

    </form>

        <hr id="hr">
        <p>Find us on: 
        
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-pinterest"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            
            </p>
        
    </article>
    <article>
    
    </div>

    </article>
    
</div>
</section>

<?php include 'partials/footer.php'; ?>