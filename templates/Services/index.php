<?= $this->Html->css('default') ?>
<div class="center">
    <?= $this->Flash->render() ?>
</div>
<div class="parallax-container">
      <div class="parallax">
        <?=$this->Html->image('IMG_0125[1].jpg', ['alt' => 'Services Backdrop','height'=>'700px']);?>
      </div>
</div>
<div class="page-title-bar">
    <i class="medium material-icons left">business</i>    
    <h5>Services</h5>
</div>
<div class="row">
        <div class="col s12 m12">
            <div class="card">
            <div class="card-content">
            <?=$this->Html->image('scarlet.png', 
                    ['alt' => 'scarlet','class'=>'right', 'height'=>'100px']);?>
                <h4 class="sc-col-primary"> What We Offer</h4>
                <p>Our wide range of carpentry-related services including framing, drywall, finish carpentry, 
                    rough carpentry, blocking, millwork, doors/hardware and acoustical ceiling. 
                    We work with general contractors to ensure project completion within budget and on 
                    schedule while maintaining the highest standards of safety.
                </p>
            </div>
        </div>
    </div>
<div class="container">
    
    <div class="row">
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <?=$this->Html->image('carpentry/carpentary_CirrusSalesCenter.jpg', ['alt' => 'Temp']);?>
                    <span class="card-title sc-services-title">Carpentry</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light media-fab-bg modal-trigger" 
                        href="#modal-carpentry">
                        <i class="material-icons">perm_media</i></a>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <?=$this->Html->image('drywallntaping/OHareAirportPoliceStation-DrywallFraming2.jpeg', ['alt' => 'Temp']);?>
                    <span class="card-title sc-services-title">Drywall</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light media-fab-bg modal-trigger"
                        href="#modal-drywall-taping">
                        <i class="material-icons">perm_media</i></a>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <?=$this->Html->image('millwork/AmericanAirlinesGLSwapSwap-MillworkFAVORITE.jpeg', ['alt' => 'Temp']);?>
                    <span class="card-title sc-services-title">Millwork</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light media-fab-bg modal-trigger" 
                        href="#modal-millwork">
                        <i class="material-icons">perm_media</i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <?=$this->Html->image('drywallntaping/OHareAirportPoliceStation-DrywallandTaping3.jpeg', ['alt' => 'Temp']);?>
                    <span class="card-title sc-services-title">Taping</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light media-fab-bg modal-trigger"
                        href="#modal-drywall-taping">
                        <i class="material-icons">perm_media</i></a>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <?=$this->Html->image('acoustical/AmericanAirlinesG&LSwap-AcousticCeiling.jpeg', ['alt' => 'Temp']);?>
                    <span class="card-title sc-services-title">Acoustical Sytems</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light media-fab-bg modal-trigger"
                        href="#modal-acoustical">
                        <i class="material-icons">perm_media</i></a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Carpentry Modal -->
<div id="modal-carpentry" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h5>Carpentry Gallery </h5>
        <h6>(Expandable Images) </h6>
        <div class="row">
            <div class="col s4 m4">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('carpentry/carpenary_CirrusSalesCenter2.jpg', 
                        ['alt' => 'carpentry image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
            <div class="col s4 m4">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('carpentry/OHareAirportPoliceStation9-Carpentry.jpeg', 
                        ['alt' => 'carpentry image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
            <div class="col s4 m4">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('carpentry/carpentry_OHareAirportPoliceStation.jpeg', 
                        ['alt' => 'carpentry image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
            <div class="col s4 m4">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('carpentry/OHareAirportPoliceStation7-Carpentry.jpeg', 
                        ['alt' => 'carpentry image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
            <div class="col s4 m4">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('carpentry/OHareAirportPoliceStation2-Carpentry.jpeg', 
                        ['alt' => 'carpentry image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
            <div class="col s4 m4">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('carpentry/OHareAirportPoliceStation3-Carpentry.jpeg', 
                        ['alt' => 'carpentry image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>


<!-- Millwork Modal -->
<div id="modal-millwork" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h5>Millwork Gallery </h5>
        <h6>(Expandable Images) </h6>
        <div class="row">
            <div class="col s6 m6">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('millwork/CirrusSalesCenter-Millwork1.jpeg', 
                        ['alt' => 'carpentry image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
            <div class="col s6 m6">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('millwork/CirrusSalesCenter-Millwork.jpeg', 
                        ['alt' => 'carpentry image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
            <div class="col s6 m6">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('millwork/AmericanAirlinesGLSwapSwap-MillworkFAVORITE.jpeg', 
                        ['alt' => 'millwork image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>

<!-- Acoustical Modal -->
<div id="modal-acoustical" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h5>Millwork Gallery </h5>
        <h6>(Expandable Images) </h6>
        <div class="row">
            <div class="col s6 m6">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('acoustical/AmericanAirlinesG&LSwap-AcousticCeiling.jpeg', 
                        ['alt' => 'acoustical image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
            <div class="col s6 m6">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('acoustical/OHareAirportPoliceStation-AcousticalCeiling1.jpeg', 
                        ['alt' => 'acoustical image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
            <div class="col s6 m6">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('acoustical/OHareAirportPoliceStation-AcousticalCeiling.jpeg', 
                        ['alt' => 'acoustical image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>

<!-- Drywall and Taping Modal -->
<div id="modal-drywall-taping" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h5>Drywall, Taping & Framing Gallery </h5>
        <h6>(Expandable Images) </h6>
        <div class="row">
            <div class="col s4 m4">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('drywallntaping/AmericanAirlinesG&LSwap-DrywallandTaping.jpeg', 
                        ['alt' => 'drywall and framing image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
            <div class="col s4 m4">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('drywallntaping/OHareAirportPoliceStation-DrywallandTaping.jpeg', 
                        ['alt' => 'drywall and framing image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
            <div class="col s4 m4">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('drywallntaping/OHareAirportPoliceStation-DrywallFraming5.jpeg', 
                        ['alt' => 'drywall and framing image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
            <div class="col s4 m4">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('drywallntaping/OHareAirportPoliceStation-DrywallFraming1.jpeg', 
                        ['alt' => 'drywall and framing image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
            <div class="col s4 m4">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('drywallntaping/OHareAirportPoliceStation-DrywallandTaping5.jpeg', 
                        ['alt' => 'drywall and framing image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
            <div class="col s4 m4">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('drywallntaping/OHareAirportPoliceStation-Framing.jpeg', 
                        ['alt' => 'drywall and framing image','class'=>'materialboxed']);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>

    