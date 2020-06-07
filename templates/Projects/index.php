<?= $this->Html->css('default') ?>
<div class="center">
    <?= $this->Flash->render() ?>
</div>
<div class="parallax-container">
      <div class="parallax">
        <?=$this->Html->image('scc_mbarena_blackhawks.jpg', ['alt' => 'Projects Backdrop','height'=>'700px']);?>
      </div>
</div>
<div class="page-title-bar">
    <i class="medium material-icons left">business_center</i>    
    <h5>Projects</h5>
</div>
<div class="container">
    <div class="row">
        <div class="col s12 m6 l6">
            <div id="aviation" class="section scrollspy">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('StarbucksOHareInternationalAirportTerminal2.jpg', 
                        ['alt' => 'Projects','height'=>'200']);?>
                        <span class="card-title sc-projects-title"> <i class="material-icons white-text small">airplanemode_active</i>
                        Aviation
                        </span>
                        <a class="btn-floating halfway-fab waves-effect waves-light media-fab-bg">
                            <i class="material-icons">perm_media</i>
                        </a>
                    </div>
                    <div class="card-content" style="padding:0">
                        <ul class="collection sc-col-primary z-depth-3">
                            <li class="collection-item z-depth-1">Chicago Midway International Improvements</li>
                            <li class="collection-item z-depth-2">Nuts on Clark @ O'Hare International Terminal 5</li>
                            <li class="collection-item z-depth-3">Starbucks, O'Hare International Terminal 1</li>
                            <li class="collection-item z-depth-4">Starbucks, O'Hare International Terminal 2 </li>
                            <li class="collection-item z-depth-5">Wicker Park Sushi, O'Hare International Terminal 1</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="healthcare" class="section scrollspy">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('JohnHStroger4thFloor.jpg', 
                        ['alt' => 'Projects','height'=>'200']);?>
                        <span class="card-title sc-projects-title"> 
                            <i class="material-icons white-text small">local_hospital</i>
                            Health Care
                        </span>
                        <a class="btn-floating halfway-fab waves-effect waves-light media-fab-bg">
                            <i class="material-icons">perm_media</i>
                        </a>
                    </div>
                    <div class="card-content" style="padding:0">
                        <ul class="collection sc-col-primary z-depth-3">
                            <li class="collection-item z-depth-1">John H. Stroger Cook County 4th Floor Renovation</li>
                            <li class="collection-item z-depth-2">The University of Chicago Harper Library Classroom Renovation</li>
                            <li class="collection-item z-depth-3">The University of Chicago Medicine Billings M5 Renovation</li>
                            <li class="collection-item z-depth-4">The University of Chicago Medicine Cummings 4th Floor</li>
                            <li class="collection-item z-depth-5">The University of Medicine Outpatient Bone Marrow Transplant</li>
                            <li class="collection-item z-depth-5">University of Chicago Medicine Biological Sciences Learning Center</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="highered" class="section scrollspy">
                <div class="card">
                    <div class="card-image">
                        <?=$this->Html->image('scc_chicago_plibrary.jpg', 
                        ['alt' => 'Projects','height'=>'200']);?>
                        <span class="card-title sc-projects-title"> 
                            <i class="material-icons white-text small">school</i>
                            Higher Education
                        </span>
                        <a class="btn-floating halfway-fab waves-effect waves-light media-fab-bg">
                            <i class="material-icons">perm_media</i>
                        </a>
                    </div>
                    <div class="card-content" style="padding:0">
                        <ul class="collection sc-col-primary z-depth-3">
                            <li class="collection-item z-depth-1">Advocate Health Care Lobby Renovation</li>
                            <li class="collection-item z-depth-3">CPS Various School Renovations</li>
                            <li class="collection-item z-depth-5">Gwendolyn Brooks College Preparatory Academy Athletic Amenities</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col m3 l3 hide-on-small-only"></div>
        <div class="col s3 m3 l3 sticky-spy hide-on-small-only">
            <ul class="section table-of-contents">
                <li><a href="#aviation">Aviation</a></li>
                <li><a href="#healthcare">Health Care</a></li>
                <li><a href="#highered">Higher Education</a></li>
            </ul>
        </div>
    </div>
</div>