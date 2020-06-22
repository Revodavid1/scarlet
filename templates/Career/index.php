<?= $this->Html->css('default') ?>
<div class="parallax-container">
      <div class="parallax">
        <?=$this->Html->image('job.jpg', ['alt' => 'Contact Backdrop','height'=>'700px']);?>
      </div>
</div>
<div class="page-title-bar">
    <i class="medium material-icons left">work</i>    
    <h5>Career</h5>
</div>
<div class="center">
    <?= $this->Flash->render() ?>
</div>
<div class="container">
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="card z-depth-2">
                <div class="card-content">
                    
                    <div class="sc-projects-title-secondary center">
                        <i class="material-icons sc-text-shadow small right">work</i>
                        Join Our Team 
                    </div>
                    <p class="center">Fill the form below or send your resume to 
                        <a href="mailto:careers@scarlet-us.com">careers@scarlet-us.com</a></p>
                    <?= $this->Form->create($career,array('type' => 'file'))?>
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
                            <?= $this->Form->control(('phone'),
                                ['type' => 'number','class'=>'validate']);?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <?= $this->Form->control(('address'),
                                ['type' => 'text','class'=>'validate']);?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <?= $this->Form->control(('additional_information'),
                                ['type'=>'textarea','class'=>'validate materialize-textarea']);?>
                        </div>
                    </div>
                    
                    <div class="row">
                        <label>Attach Resume (allowed:pdf,doc,docx; max-size: 1MB)</label>
                        <div class="input-field col s12">
                            <?= $this->Form->control(('attach_resume'),array('type' => 'file',
                                'label'=>false,'required'=>true,'class'=>'validate file-path', 
                                'accept'=>'.pdf,.doc,.docx, application/msword,
                                application/vnd.openxmlformats-officedocument.wordprocessingml.document')
                            );?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="g-recaptcha col s12" data-theme="dark" style="transform:scale(0.77);
                            -webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"
                        data-sitekey="<?php echo $publiccaptchakey;?>"></div>
                    </div>
                    <?= $this->Form->button(('Submit'),
                        ['type'=>'submit','name'=>'action','class'=>'btn waves-effect waves-light sc-secondary-bg']);?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container">
      <div class="parallax">
        <?=$this->Html->image('job.jpg', ['alt' => 'Starbucks Project','height'=>'700px']);?>
      </div>
</div>