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
                <?= $this->Html->Link($this->Html->image('scarlet.png', array('height'=>'70px')),
                array('controller'=>'Home','action' => 'index'),
                array('escape' => false))?>
            </div>
            <ul class="left hide-on-med-and-down">
                <li><h5>Scarlet Construction</h5></li>
            </ul>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right sc-col-primary hide-on-med-and-down">
                <li><?= $this->Html->Link('Home', ['controller'=>'Home','action' => 'index']) ?></li>
                <li><?= $this->Html->Link('About Us', ['controller'=>'About','action' => 'index']) ?> </li>
                <li><?= $this->Html->Link('Services', ['controller'=>'Services','action' => 'index']) ?> </li>
                <li><?= $this->Html->Link('Projects', ['action' => 'index']) ?> </li>
                <li><?= $this->Html->Link('Contact', ['action' => 'index']) ?></li>            
            </ul>
        </div>      
    </nav>
    <ul class="sidenav" id="mobile-nav">
        <div class="center sc-nav-logo">
                <?= $this->Html->Link($this->Html->image('scarlet.png', array('height'=>'100px')),
                array('controller'=>'Home','action' => 'index'),
                array('escape' => false))?>
                <h5 class="white-text sidenav-text">Scarlet Construction</h5>
        </div>
        <li class="z-depth-5"><?= $this->Html->Link('Home' . $this->Html->tag('i','home', 
                            array('class'=>'material-icons white-text small')),
                            array('controller'=>'Home','action' => 'index'),
                            array('escape' => false))
            ?>
        </li>
        <li class="z-depth-5"><?= $this->Html->Link('About Us' . $this->Html->tag('i','people', 
                            array('class'=>'material-icons white-text small')),
                            array('controller'=>'About','action' => 'index'),
                            array('escape' => false))
            ?>
        </li>
        <li class="z-depth-5"><?= $this->Html->Link('Services' . $this->Html->tag('i','business', 
                            array('class'=>'material-icons white-text small')),
                            array('controller'=>'Services','action' => 'index'),
                            array('escape' => false))
            ?>
        </li>
        <li class="z-depth-5"><?= $this->Html->Link('Projects' . $this->Html->tag('i','business_center', 
                            array('class'=>'material-icons white-text small')),
                            array('controller'=>'Services','action' => 'index'),
                            array('escape' => false))
            ?>
        </li>
        <li class="z-depth-5"><?= $this->Html->Link('Contact' . $this->Html->tag('i','call', 
                            array('class'=>'material-icons white-text small')),
                            array('controller'=>'Services','action' => 'index'),
                            array('escape' => false))
            ?>
        </li>  
    </ul>
    <script>
        $(document).ready(function(){
            $('.slider').slider({'height' : 550});
            $('.fixed-action-btn').floatingActionButton();
            $('.parallax').parallax();
            $('.carousel').carousel({numVisible:2,padding:50});
            $('.sidenav').sidenav();
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