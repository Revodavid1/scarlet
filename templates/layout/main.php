<!DOCTYPE html>
<html lang="en">
<head>
    <title class="">Scarlet Construction</title>
    <?= $this->Html->css('default') ?>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?=$this->Html->meta('icon')?>
</head>
<body>
    <nav>
        <div class="nav-wrapper sc-bg-none">
            <div class="brand-logo center sc-nav-logo hide-on-med-and-down">
                <?=$this->Html->image('scarlet.png', array('height'=>'70px'));?>
            </div>
            <ul class="left hide-on-med-and-down">
                <li><h5>Scarlet Construction</h5></li>
            </ul>
            <ul id="nav-mobile" class="right sc-col-primary">
                <?= $this->Html->Link('Contact', ['action' => 'index']) ?>       
            </ul>
            <ul id="nav-mobile" class="right sc-col-primary">
                <?= $this->Html->Link('Projects', ['action' => 'index']) ?>       
            </ul>
            <ul id="nav-mobile" class="right sc-col-primary">
                <?= $this->Html->Link('About Us', ['controller'=>'About','action' => 'index']) ?>       
            </ul>
            <ul id="nav-mobile" class="right sc-col-primary">
                <?= $this->Html->Link('Home', ['controller'=>'Home','action' => 'index']) ?>
            </ul>
        </div>      
    </nav>

    <script>
        $(document).ready(function(){
            $('.slider').slider({'height' : 550});
            $('.fixed-action-btn').floatingActionButton();
            $('.parallax').parallax();
            $('.carousel').carousel({numVisible:2,padding:50});
            autoplay();
            function autoplay() {
                $('.carousel').carousel('next');
                setTimeout(autoplay, 3500);
            }
        });
    </script>
    
        <div class="sc-home-content">
            <?php echo $this->fetch('content'); ?>
        </div>
    </div>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large sc-secondary-bg">
            <i class="large material-icons">contacts</i>
        </a>
        <ul>
            <li><a class="btn-floating cyan"><i class="material-icons">contact_phone</i></a></li>
            <li><a class="btn-floating red darken-1"><i class="material-icons">contact_mail</i></a></li>
        </ul>
    </div>
          
    <footer class="sc-secondary-bg page-footer sc-footer">
        <div class="row container">
            <div class="col s12 center" style="margin-bottom:8px">
                <h5 class="sc-footer-main-text"> <i class="material-icons">info</i> 
                    Let's Do Business</h5>
            </div>
              <div class="col l4 s12 center">
                <i class="material-icons">business</i>
                <p class="grey-text text-lighten-4">20701 Oak Lane Drive,</p>
                <p class="grey-text text-lighten-4"> Olympia Fields, IL 60461.</p>
              </div>
              <div class="col l4 s12 center">
                <i class="material-icons">contact_phone</i>
                <p><a href="tel:614-937-3364" class="white-text"> 614-937-3364</a></p>
              </div>
              <div class="col l4 s12 center">
                <i class="material-icons">email</i>
                <p><a href="mailto:admin@scarlet-us.com" class="white-text"> 
                    admin@scarlet-us.com</a></p>
              </div>
        </div>
          </div>
          <div class="footer-copyright">
            <div class="container center">
            © 2020 Scarlet Construction Inc.
            </div>
          </div>
    </footer>
</body>
</html>