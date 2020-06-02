<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <div class=""><div>Instructions:<br> Locate the Hotels Link above, go to the hotel's page to Add, Remove, Edit Hotel Information</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 comp-grid">
                    <div class=""><div>Welcome to the Hotel Collaboration Platform | <strong>A Project by NAVUGA MONICA</strong></div>
                    </div>
                </div>
                <div class="col-md-12 comp-grid">
                    <?php $rec_count = $comp_model->getcount_noofregisteredhotels();  ?>
                    <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("hotels/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="icon-globe"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">No of Registered Hotels</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
