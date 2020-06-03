<div class="center">
    <?= $this->Flash->render() ?>
</div>
<div class="slider-top">
    <div class="slider">
        <ul class="slides">
            <li class="sc-slider-item">
                <?=$this->Html->image('scc_mbarena_blackhawks.jpg', ['alt' => 'Blackhawks Project']);?>
                <div class="caption left-align">
                    <h3 class="teal-text sc-text-shadow">Featured Projects</h3>
                    <h5 class="light white-text text-darken-3">Blackhawks Practice Facility</h5>
                </div>
            </li>
            <li class="sc-slider-item">
                <?=$this->Html->image('scc_starbucks.jpg', ['alt' => 'Starbucks Project']);?>
                <div class="caption left-align">
                    <h3 class="teal-text sc-text-shadow">Featured Projects</h3>
                    <h5 class="light white-text text-darken-3 sc-text-shadow">
                        Starbucks @ O'Hare International Terminal 1
                    </h5>
                </div>
            </li>
            <li class="sc-slider-item">
                <?=$this->Html->image('scc_chicago_plibrary.jpg', ['alt' => 'Chicago Public Library Project']);?>
                <div class="caption left-align">
                    <h3 class="teal-text sc-text-shadow">Featured Projects</h3>
                    <h5 class="light white-text text-darken-3">Chicago Public Library</h5>
                </div>
            </li>
            <li class="sc-slider-item">
                <?=$this->Html->image('scc_crsl9026.jpg', ['alt' => 'CRSL Project']);?>
                <div class="caption left-align">
                    <h3 class="teal-text sc-text-shadow">Featured Projects</h3>
                </div>
            </li>
            <li class="sc-slider-item">
                <?=$this->Html->image('scc_bb_court.jpg', ['alt' => 'Basketball Court Project']);?>
                <div class="caption left-align">
                    <h3 class="teal-text sc-text-shadow">Featured Projects</h3>
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
            <h4>Carpentary</h4>
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