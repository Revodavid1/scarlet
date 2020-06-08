<?= $this->Html->css('default') ?>
<div class="center">
    <?= $this->Flash->render() ?>
</div>
<div class="parallax-container">
      <div class="parallax">
        <?=$this->Html->image('scc_crsl9026.jpg', ['alt' => 'Starbucks Project','height'=>'700px']);?>
      </div>
</div>
<div class="page-title-bar">
    <i class="medium material-icons left">people</i>    
    <h5>About Us</h5>
</div>
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card horizontal">     
                <div class="card-stacked">
                    <div class="card-content">
                        <h4 class="sc-col-primary"><?=$this->Html->image('scarlet.png', 
                            ['alt' => 'scarlet','class'=>'right', 'height'=>'45px']);?>Our Company</h4>
                        <p>Scarlet Construction was created 2015 to serve and provide the best quality work in Carpentry,
                             Drywall, Acoustical Ceiling, and Millwork. 
                             Our team has over 20 years of experience in high quality Carpentry work. 
                             We serve all the Chicagoland area and surrounding suburbs.</p>
                    </div>
                    <div class="card-action">
                        <?= $this->Html->Link($this->Html->tag('i','business', 
                            array('class'=>'material-icons tiny')) . ' Scarlet Services',
                            array('controller'=>'Services','action' => 'index'),
                            array('escape'=>false))
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container">
      <div class="parallax">
        <?=$this->Html->image('scc_crsl9026.jpg', ['alt' => 'Starbucks Project','height'=>'700px']);?>
      </div>
</div>
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card horizontal">
                <div class="card-stacked s12 m12">
                    <div class="card-content">
                        <h4 class="sc-col-primary"><?=$this->Html->image('scarlet.png', 
                            ['alt' => 'scarlet','class'=>'right', 'height'=>'45px']);?> Our Mission</h4>
                        <p>The mission of Scarlet Construction as a contractor is to provide our customers with cost 
                            effective solutions to construction needs without sacrificing quality and satisfaction. 
                            The key to the success of any construction project is a company committed to client 
                            satisfaction, possessing the skills and experience to exceed expectations. 
                            As a fully licensed, insured and bonded contractor, with a history of delivering work that
                            is perfectly tailored to our clients' vision and goals, Scarlet Construction is the ideal
                            company for your next project. </p>
                    </div>
                    <div class="card-action">
                        <?= $this->Html->Link($this->Html->tag('i','business', 
                            array('class'=>'material-icons tiny')) . ' Scarlet Services',
                            array('controller'=>'Services','action' => 'index'),
                            array('escape'=>false))
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

      