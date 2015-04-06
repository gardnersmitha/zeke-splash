<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <!-- Other Basic <head> Stuff -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Zeke</title>
        <meta name="description" content="Vestia is a new product that helps homeowners understand and increase the value of their homes.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/png" href="favicon.png" />

        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700|Open+Sans:400,300,600' rel='stylesheet' type='text/css'>        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">

        <!-- Modernizr -->
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>


        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <!-- Our JS -->
        <script src="js/main.js"></script>

    </head>
    <body class="splash">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <header class="global-header"></header>

    <div class="container-fluid">

      <!-- Logo/Mark Container -->
      <div class="row masthead">
        <div class="col-xs-4 col-xs-offset-4 col-lg-2 col-lg-offset-5">
          <img id="logo" src="img/zeke-logo.svg" alt="Zeke Logo"/>
        </div>
      </div>

      <!-- Container for the Mockup -->
      <div class="row hero">
        <div id="mockup-container" class="col-xs-10 col-xs-offset-1 col-lg-4 col-lg-offset-4">
          <div id="mockup-content">
            <h1>Meet Zeke.</h1>
            <p>Get personalized answers to your home ownership questions in 24 hours or less.</p>
            <div class="cta-button ko">Request an Invite</div>
          </div>
        </div>
      </div>

      <div class="row features">

        <div class="feature-block col-xs-12 col-md-4">
          <p class="icon-wrap"><i class="fa fa-question-circle"></i></p>
          <h3>Personalized answers</h3>
          <p class="feature-detail">Ask Zeke a question and get a personalized answer from a real person in 24 hours.</p>
        </div>

        <div class="feature-block col-xs-12 col-md-4">
          <p class="icon-wrap"><i class="fa fa-book"></i></p>
          <h3>Useful tips</h3>
          <p class="feature-detail">Super simple tips and tasks to make you an expert about your home - before it breaks.</p>
        </div>

        <div class="feature-block col-xs-12 col-md-4">
          <p class="icon-wrap"><i class="fa fa-bell"></i></p>
          <h3>Smart reminders</h3>
          <p class="feature-detail"> Reminders specific to your home, delivered how and when you want them.</p>
        </div>

        <div class="col-xs-12 col-md-4 col-md-offset-4">
          <div class="cta-button blue">Request an Invite</div>
        </div>
      </div>

      <div class="row manifesto">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
          <h2>Zeke was built for the modern homeowner.</h2>
          <p class="large">We know that being a homeowner isn't always sunshine and rainbows. Sometimes it's snowstorms and ice dams. But we also know that there's a great sense of satisfaction in taking care of your home, and being able to solve problems when they happen.</p>
          <p class="large">Zeke was created to make you be a better, more capable homeowner. We combine data and technology (hooray internet!) with real people to answer your questions, provide bite-size guidance and education, and remind you about stuff you don't want to forget.</p>
          <p class="large">We hope you give Zeke a try. We think it can make your life just a little bit easier.</p>
        </div>

        <div class="col-xs-12 col-md-4 col-md-offset-4">
          <div class="cta-button ko">Get Your Invite</div>
        </div>
      </div>


    </div> <!-- /container-fluid -->

    <!-- Form. Will be hidden on load. -->
    <div class="signup-form modal">
      <div class="modal-dialog">
        <form id="signup-form" class="modal-content" accept-charset="UTF-8" action="https://formkeep.com/f/8ce2f3ae9282" method="POST">

          <h1>Get Zeke</h1>
          <p class="large">Leave us your email address and we'll send an invite your way soon.</p>
          <input type="hidden" name="utf8" value="✓">

          <div class="v-input">
            <input type="email" name="email" id="email-input" class="form-control" value="" placeholder="Your email address" required="required" pattern="" title="What's your email address?">
            <label for="email">Email</label>
          </div>

          <div class="cta-button ko">Get Your Invite</div>

        </form>
      </div>
    </div>

        <!-- Bootstrap -->
        <script src="js/vendor/bootstrap.min.js"></script>

        <!-- Segment.io  -->
        <script type="text/javascript">
          !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.0.1";
          analytics.load("YRQpzW61vvs9LTUAdtwwskajWKdcbQkd");
          analytics.page()
          }}();
        </script>

    </body>
</html>
