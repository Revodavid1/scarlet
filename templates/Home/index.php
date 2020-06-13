<div class="center">
    <?= $this->Flash->render() ?>
</div>
<div class="slider-top">
    <div class="slider">
        <ul class="slides">
            <li class="sc-slider-item">
                <?=$this->Html->image('MG0329.jpg', ['alt' => 'Starbucks Project']);?>
                <div class="caption left-align">
                    <h3 class="sc-text-shadow sc-text-line">Featured Projects</h3>
                    <h5 class="light white-text text-darken-3 sc-text-shadow">
                        Starbucks @ O'Hare International Terminal 2
                    </h5>
                </div>
            </li>
            <li class="sc-slider-item">
                <?=$this->Html->image('lvc0121.jpg', 
                    ['alt' => 'Little Village Chicago Public Library']);?>
                <div class="caption left-align">
                    <h3 class="sc-text-shadow sc-text-line">Featured Projects</h3>
                    <h5 class="light white-text text-darken-3">Little Village Chicago Public Library</h5>
                </div>
            </li>
            <li class="sc-slider-item">
                <?=$this->Html->image('JohnHStroge4thFloorPatientArea.jpg', ['alt' => 'John H Stroger Patient Area']);?>
                <div class="caption left-align">
                    <h3 class="sc-text-shadow sc-text-line">Featured Projects</h3>
                    <h5 class="light white-text text-darken-3">John H Stroger Patient Area</h5>
                </div>
            </li>
            <li class="sc-slider-item">
                <?=$this->Html->image('DixmoorIndoorRecreationalCenter.jpg', 
                    ['alt' => 'Dixmoor Indoor Recreational Center']);?>
                <div class="caption left-align">
                    <h3 class="sc-text-shadow sc-text-line sc-text-line">Featured Projects</h3>
                    <h5 class="light white-text text-darken-3">Dixmoor Indoor Recreational Center</h5>
                </div>
            </li>
            <li class="sc-slider-item">
                <?=$this->Html->image('i-NL9Qq7S-M.jpg', ['alt' => 'Wicker Park Seafood & Sushi']);?>
                <div class="caption left-align">
                    <h3 class="sc-text-shadow sc-text-line">Featured Projects</h3>
                    <h5 class="light white-text text-darken-3">Wicker Park Seafood & Sushi</h5>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="center">
    <h4 class="sc-col-primary"> Our Services
        <?= $this->Html->Link($this->Html->tag('i','arrow_forward', 
            array('class'=>'material-icons center')),
            array('controller'=>'Services','action' => 'index'),
            array('escape'=>false))
        ?>
    </h4>
</div>
<div class="carousel center" style="height:150px">
        <div class="carousel-item white black-text">
            <h4>Carpentry</h4>
        </div>
        <div class="carousel-item white black-text">
            <h4>Drywall</h4>
        </div>
        <div class="carousel-item white black-text">
            <h4>Millwork</h4>
        </div>
        <div class="carousel-item white black-text">
            <h4>Taping</h4>
        </div>
        <div class="carousel-item white black-text">
            <h4>Acoustical Systems</h4>
        </div>
  </div>