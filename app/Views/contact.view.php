{% set name = 'Contact Us' %}
{% include 'header.php' %}

<form name="contactForm" method="post" action="/send-email">
    <div class="col-sm-6" style="display: flex; flex-direction: column">
        <label for="fname">Your Full Name</label>
        <input id="fname" name="name" required>

        <label for="femail">Your Email</label>
        <input id="femail" name="email" required>

        <label for="fsubject">Subject</label>
        <input id="fsubject" name="subject" required>
    </div>

    <div class="col-sm-6" style="display: flex; flex-direction: column">
        <label for="fmessage">Message</label>
        <textarea name="message" id="fmessage" cols="30" rows="7" required></textarea>

        <div class="col-sm-12" style="display: flex; justify-content: center">
            <input type="submit" value="Submit">
        </div>
    </div>
</form>

{% include 'footer.php' %}
