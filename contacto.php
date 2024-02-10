<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/ticramon.css">
    </head>
    <body>
        <?php
            require 'html/base/header.html';
            require 'html/base/nav.html';
        ?>
        <main class="contenidoPrincipal">
            <div id="inicio">
                <section>
                    <form action="/action_page.php">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">

                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                        <label for="country">Country</label>
                        <select id="country" name="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                        </select>

                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                        <input type="submit" value="Submit">
                    </form>
                </section>
                <section>
                <a href="mailto:ramon.mendez.r12@gmail.com">ramon.mendez.r12@gmail.com</a> 
                </section>
                <section></section>
                <section></section>
            </div>
        <?php
            require 'html/base/aside.html';
            require 'html/base/footer.html';
        ?>
    </body>
</html>




    