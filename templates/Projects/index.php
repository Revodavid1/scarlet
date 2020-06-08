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
        <div class="col s12 m9 l9">
            <div class="sc-projects-title-secondary section scrollspy" id="aviation">
                <i class="material-icons sc-text-shadow small right">airplanemode_active</i>
                Aviation
            </div>
            <div class="row">
                <div class="col s6 m4 l4">
                    <div class="card z-depth-2">
                        <div class="card-image">
                            <?=$this->Html->image('MIDWAYINTAIRPORTSTATICDISPLAYIMPROVEMENTS1.jpg', 
                                ['alt' => 'airport projects','class'=>'materialboxed','height'=>'100px']);?>
                        </div>
                        <div class="card-content sc-project-card-content">
                            <p class="text-regular center">Chicago Midway International Improvements</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4 l4">
                    <div class="card z-depth-2">
                        <div class="card-image">
                            <?=$this->Html->image('NutsonClarkOhareInternationalAirport.jpg', 
                                ['alt' => 'airport projects','class'=>'materialboxed','height'=>'100px']);?>
                        </div>
                        <div class="card-content sc-project-card-content">
                            <p class="text-regular center">Nuts on Clark @ O'Hare International Terminal 5</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4 l4">
                    <div class="card z-depth-2">
                        <div class="card-image">
                            <?=$this->Html->image('scc_starbucks.jpg', 
                                ['alt' => 'airport projects','class'=>'materialboxed','height'=>'100px']);?>
                        </div>
                        <div class="card-content sc-project-card-content">
                            <p class="text-regular center">Starbucks, O'Hare International Terminal 1</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4 l4">
                    <div class="card z-depth-2">
                        <div class="card-image">
                            <?=$this->Html->image('StarbucksOHareInternationalAirportTerminal2.jpg', 
                                ['alt' => 'airport projects','class'=>'materialboxed','height'=>'100px']);?>
                        </div>
                        <div class="card-content sc-project-card-content">
                            <p class="text-regular center">Starbucks, O'Hare International Terminal 2</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4 l4">
                    <div class="card z-depth-2">
                        <div class="card-image">
                            <?=$this->Html->image('WickerParkSeafoodSushi.jpg', 
                                ['alt' => 'airport projects','class'=>'materialboxed','height'=>'100px']);?>
                        </div>
                        <div class="card-content sc-project-card-content">
                            <p class="text-regular center">Wicker Park Sushi, O'Hare International Terminal 1</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sc-projects-title-secondary section scrollspy" id="healthcare">
                <i class="material-icons green-text small right">local_hospital</i>
                Health Care
            </div>
            <div class="row">
                <div class="col s6 m4 l4">
                    <div class="card z-depth-2">
                        <div class="card-image">
                            <?=$this->Html->image('JohnHStroger4thFloor.jpg', 
                                ['alt' => 'health care projects','class'=>'materialboxed','height'=>'100px']);?>
                        </div>
                        <div class="card-content sc-project-card-content">
                            <p class="text-regular center">John H. Stroger Cook County 4th Floor Renovation</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4 l4">
                    <div class="card z-depth-2">
                        <div class="card-image">
                            <?=$this->Html->image('scarlet.png', 
                                ['alt' => 'health care projects','class'=>'materialboxed','height'=>'100px']);?>
                        </div>
                        <div class="card-content sc-project-card-content">
                            <p class="text-regular center">The University of Chicago Harper Library Classroom Renovation</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4 l4">
                    <div class="card z-depth-2">
                        <div class="card-image">
                            <?=$this->Html->image('scarlet.png', 
                                ['alt' => 'health care projects','class'=>'materialboxed','height'=>'100px']);?>
                        </div>
                        <div class="card-content sc-project-card-content">
                            <p class="text-regular center">The University of Chicago Medicine Billings M5 Renovation</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4 l4">
                    <div class="card z-depth-2">
                        <div class="card-image">
                            <?=$this->Html->image('scarlet.png', 
                                ['alt' => 'health care projects','class'=>'materialboxed','height'=>'100px']);?>
                        </div>
                        <div class="card-content sc-project-card-content">
                            <p class="text-regular center">The University of Chicago Medicine Cummings 4th Floor</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4 l4">
                    <div class="card z-depth-2">
                        <div class="card-image">
                            <?=$this->Html->image('UniversityofChicagoBoneMarrowClinic.jpg', 
                                ['alt' => 'health care projects','class'=>'materialboxed','height'=>'100px']);?>
                        </div>
                        <div class="card-content sc-project-card-content">
                            <p class="text-regular center">The University of Medicine Outpatient Bone Marrow Transplant</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4 l4">
                    <div class="card z-depth-2">
                        <div class="card-image">
                            <?=$this->Html->image('scarlet.png', 
                                ['alt' => 'health care projects','class'=>'materialboxed','height'=>'100px']);?>
                        </div>
                        <div class="card-content sc-project-card-content">
                            <p class="text-regular center">University of Chicago Medicine Biological Sciences Learning Center</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sc-projects-title-secondary section scrollspy" id="highered">
                <i class="material-icons indigo-text small right">school</i>
                Higher Education
            </div>
            <div class="row">
                <div class="col s6 m4 l4">
                    <div class="card z-depth-2">
                        <div class="card-image">
                            <?=$this->Html->image('scarlet.png', 
                                ['alt' => 'higher education projects','class'=>'materialboxed','height'=>'100px']);?>
                        </div>
                        <div class="card-content sc-project-card-content">
                            <p class="text-regular center">Advocate Health Care Lobby Renovation</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4 l4">
                    <div class="card z-depth-2">
                        <div class="card-image">
                            <?=$this->Html->image('scarlet.png', 
                                ['alt' => 'higher education projects','class'=>'materialboxed','height'=>'100px']);?>
                        </div>
                        <div class="card-content sc-project-card-content">
                            <p class="text-regular center">CPS Various School Renovations</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4 l4">
                    <div class="card z-depth-2">
                        <div class="card-image">
                            <?=$this->Html->image('scarlet.png', 
                                ['alt' => 'higher education projects','class'=>'materialboxed','height'=>'100px']);?>
                        </div>
                        <div class="card-content sc-project-card-content">
                            <p class="text-regular center">Gwendolyn Brooks College Preparatory Academy Athletic Amenities</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s3 m3 l3 sticky-spy hide-on-small-only">
            <ul class="section table-of-contents">
                <li><a href="#aviation">Aviation</a></li>
                <li><a href="#healthcare">Health Care</a></li>
                <li><a href="#highered">Higher Education</a></li>
            </ul>
        </div>
    </div>
</div>