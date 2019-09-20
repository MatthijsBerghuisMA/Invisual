<div class="container">
    <div class="contact">
        <form action="private/includes/contact.php" method="post">
            <div class="input-container">
                <input type="text" id="naam" name="naam" class="input" required>
                <label class="input_label" for="naam">Name *</label>
                <div class="input_underline"></div>
            </div>
            <div class="input-container">
                <input type="text" name="subject" id="subject" class="input" required>
                <label class="input_label" for="subject">Subject</label>
                <div class="input_underline"></div>
            </div>
            <div class="input-container">
                <input type="text" name="email" id="email" class="input" required>
                <label class="input_label" for="email">Email *</label>
                <div class="input_underline"></div>
            </div>
            <div class="input-container msg-container">
                <textarea class="input" name="message" id="bericht" required></textarea>
                <label for="bericht" class="input_label">Message *</label>
                <div class="input_underline"></div>
            </div>
            <input type="submit" name="submit" class="button " value="SEND">
        </form>
    </div>
</div>