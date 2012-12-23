<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contact QuickTags, the NFC bluetooth toggle stickers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Email QuickTags using the contact form. Request custom NFC tags">

    <!-- Le styles -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/assets/css/styles.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-1749798-30']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li><a href="/">Home</a></li>
          <li><a href="/faq">FAQ</a></li>
          <li><a href="/buy">Buy</a></li>
          <li class="active"><a href="/contact">Contact</a></li>
        </ul>
        <h3 class="muted"><a href="/"><img src="/assets/img/logo.png" alt="QuickTags"></a></h3>
      </div>

      <hr>

      <div class="row-fluid marketing">
        <div class="span12">
          <h1>Contact QuickTags</h1>
          <p>
            Got any questions for us?  Get in touch using the form below.
          </p>

          <h2>Custom Tags</h2>
          <p>
            We offer bespoke solutions for individuals or businesses for specific needs.
            An example of this could be tags installed within all of the tables in a restaurant,
            allowing customers to place their phone aganst the table to connect to the
            restaurant WiFi, open a web page asking to sign up to a newsletter or even
            download the menu to their device.
          </p>
          <p>
            If you are interested in a quote for a custom solution please use the form
            below.
          </p>
        </div>
      </div>

      <hr>

      <a name="contact"></a>

      <div class="row-fluid">
        <div class="span12">
          <h3>Contact Form</h3>

          <?php 

          $form = '          
          <form class="form-horizontal contact" method="post" action="#contact">
            <div class="control-group">
              <label class="control-label" for="inputName">Name</label>
              <div class="controls">
                <input type="text" id="inputName" placeholder="Name" name="name" value="'. (!empty($_POST['name']) ? $_POST['name'] : '') .'">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputEmail">Email</label>
              <div class="controls">
                <input type="email" id="inputEmail" placeholder="Email" name="email" value="'. (!empty($_POST['email']) ? $_POST['email'] : '') .'">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPhone">Phone</label>
              <div class="controls">
                <input type="tel" id="inputPhone" placeholder="Phone" name="tel" value="'. (!empty($_POST['tel']) ? $_POST['tel'] : '') .'">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputEnquiry">Enquiry</label>
              <div class="controls">
                <textarea id="inputEnquiry" name="enquiry">'. (!empty($_POST['enquiry']) ? $_POST['enquiry'] : '') .'</textarea>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <button type="submit" class="btn">Send</button>
              </div>
            </div>
          </form>';

          if(!empty($_POST)){

            if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['tel']) || empty($_POST['enquiry'])){
              ?>
              <div class="alert alert-error">
                Sorry, you need to fill out every field.
              </div>
              <?php
              echo $form;
            } else {
              $message = "Contact form used on QuickTags website\n\n";
              $message.= "Name:\t".$_POST['name']."\n";
              $message.= "Email:\t".$_POST['email']."\n";
              $message.= "Tel:\t".$_POST['tel']."\n";
              $message.= "Enquiry:\t".$_POST['enquiry']."\n";
              mail('mgriffiths@gmail.com', 'Contact form used on QuickTags website', $message, "From: ".$_POST['name']." <".$_POST['email'].">");
              ?>
              <div class="alert alert-success">
                Thanks, we will be in touch as soon as possible - usually within 1 business day.
              </div>
              <?php
            }

          } else {
            echo $form;
          } 
          ?>
        </div>
      </div>
      <hr>

      <div class="footer">
        <p>&copy; QuickTags 2012</p>
      </div>

    </div> <!-- /container -->


  </body>
</html>