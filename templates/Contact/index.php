<?= $this->Html->css('default') ?>
<div class="parallax-container">
      <div class="parallax">
        <?=$this->Html->image('chi.jpg', ['alt' => 'Starbucks Project','height'=>'700px']);?>
      </div>
</div>
<div class="page-title-bar">
    <i class="medium material-icons left">call</i>    
    <h5>Contact Us</h5>
</div>
<div class="center">
    <?= $this->Flash->render() ?>
</div>
<div class="container">
    <div class="row">
        <div class="col s12 m12 l8">
            <div class="card z-depth-2">
                <div class="card-content">
                    <div class="sc-projects-title-secondary center">
                        <i class="material-icons sc-text-shadow small right hide-on-small-only">email</i>
                        Contact Form
                        <div class="row hide-on-med-and-up">
                            <div class="col s6 center">
                                <i class="material-icons">contact_phone</i>
                                <p><a href="tel:773-675-9181" class="white-text">
                                    773-675-9181</a></p>
                            </div>
                            <div class="col s6">
                                <i class="material-icons">email</i>
                                    <p><a href="mailto:info@scarlet-us.com" class="white-text">
                                        info@scarlet-us.com</a></p>
                            </div>
                        </div>
                    </div>
                    <?= $this->Form->create($contact)?>
                    <div class="row">
                        <div class="input-field col s12">
                            <?= $this->Form->control(('fullname'),
                                ['type' => 'text','class'=>'validate']);?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <?= $this->Form->control(('email'),
                                ['type' => 'email','class'=>'validate']);?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <?= $this->Form->control(('message'),
                                ['type'=>'textarea','class'=>'validate materialize-textarea']);?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="g-recaptcha col s12" data-theme="dark" style="transform:scale(0.77);
                            -webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"
                        data-sitekey="6LfqLgEVAAAAABpdxG48ccID9hfb48Gbjx1TWamb"></div>
                    </div>
                    <?= $this->Form->button(('Submit'),
                        ['type'=>'submit','name'=>'action','class'=>'btn waves-effect waves-light sc-secondary-bg']);?>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l4 hide-on-med-and-down"> 
            <div class="row">
                <div class="card">
                    <div class="card-content sc-col-primary center z-depth-1">
                        <span class="card-title">Scarlet Construction</span>
                        <i class="material-icons black-text">business</i>
                        <p>20701 Oak Lane Drive,</p>
                        <p>Olympia Fields, IL 60461.</p>
                    </div>
                    <div class="card-action center z-depth-3">
                        <i class="material-icons sc-col-primary">contact_phone</i>
                        <p><a href="tel:773-675-9181">773-675-9181</a></p>
                    </div>
                    <div class="card-action center z-depth-5">
                        <i class="material-icons red-text">email</i>
                        <p><a href="mailto:info@scarlet-us.com">info@scarlet-us.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container">
      <div class="parallax">
        <?=$this->Html->image('chi.jpg', ['alt' => 'Starbucks Project','height'=>'700px']);?>
      </div>
</div>