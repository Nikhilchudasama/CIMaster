<div id="page_content">
    <div id="page_content_inner">
        <?php $this->load->view($this->folder . "/response_message.php"); ?>

        <h2 class="heading_b uk-margin-bottom">Advanced Wizard</h2>

        <div class="md-card uk-margin-large-bottom">
            <div class="md-card-content">
                <form class="uk-form-stacked" id="wizard_advanced_form">
                    <div id="wizard_advanced">

                        <!-- first section -->
                        <h3>Groom & Bride </h3>
                        <section>

                            <div class="uk-grid">

                                <div class="uk-width-medium-1-2 parsley-row">
                                    <div class="uk-form-row">
                                        <label for="groom_name">Groom Name<span class="req">*</span></label>
                                        <input type="text" name="groom_name" id="groom_name" required class="md-input" />                              <span class="md-input-bar "></span>

                                    </div>
                                    <div class="uk-form-row">
                                        <div class="md-input-wrapper">
                                            <label>About Groom</label>
                                            <textarea cols="30" rows="4"  name="about_groom" class="md-input autosized" style="overflow-x: hidden; word-wrap: break-word; height: 121px;"></textarea>
                                            <span class="md-input-bar "></span>
                                        </div>
                                    </div>
                                    <div class="uk-form-row">
                                        <div class="md-card">
                                            <div class="md-card-content">
                                                <h3 class="heading_a uk-margin-small-bottom">
                                                    Groom Photo
                                                </h3>
                                                <input type="file" name="groom_photo" id="input-file-b" class="dropify" data-default-file=""/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-form-row">
                                        <div class="md-input-wrapper">
                                            <label>Groom Birth Date</label>
                                            <input type="text" name="groom_birth_date" required class="md-input" value="<?= set_value('groom_birth_date') ?>"  data-uk-datepicker="{format:'DD-MM-YYYY'}" />
                                            <span class="md-input-bar "></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <div class="uk-form-row parsley-row">
                                        <div class="md-input-wrapper">
                                            <label>Bride Name</label>
                                            <input type="text" value="<?= set_value('bride_name') ?>" class="md-input" name="bride_name">
                                            <span class="md-input-bar "></span>
                                        </div>
                                    </div>
                                    <div class="uk-form-row parsley-row">
                                        <div class="md-input-wrapper">
                                            <label>About Bride</label>
                                            <textarea cols="30" rows="4" class="md-input autosized" style="overflow-x: hidden; word-wrap: break-word; height: 121px;"></textarea>
                                            <span class="md-input-bar "></span>
                                        </div>
                                    </div>
                                    <div class="uk-form-row parsley-row">
                                        <div class="md-card">
                                            <div class="md-card-content">
                                                <h3 class="heading_a uk-margin-small-bottom">
                                                    Bride Photo
                                                </h3>
                                                <input type="file" name="bride_photo" id="input-file-b" class="dropify" data-default-file=""/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-form-row parsley-row">
                                        <div class="md-input-wrapper ">
                                            <label>Bride Birth Date</label>
                                            <input type="text" name="bride_birth_date" required class="md-input" value="<?= set_value('bride_birth_date') ?>" data-uk-datepicker="{format:'DD-MM-YYYY'}" />
                                            <span class="md-input-bar "></span>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </section>

                        <!-- second section -->
                        <h3>Event</h3>
                        <section>



                            <div class="uk-grid">

                                <div class="uk-width-medium-1-2 parsley-row">
                                    <div class="uk-form-row">
                                        <label for="ganesh_sthapana_date">Ganesh Sthapana Date<span class="req">*</span></label>
                                        <input type="text" name="ganesh_sthapana_date" required class="md-input" value="<?= set_value('ganesh_sthapana_date') ?>" data-uk-datepicker="{format:'DD-MM-YYYY'}" />                                                         <span class="md-input-bar "></span>

                                    </div>
                                    <div class="uk-form-row">
                                        <label for="mandap_muhurat_date">Mandap Muhurat Date<span class="req">*</span></label>
                                        <input type="text" name="mandap_muhurat_date" required class="md-input" value="<?= set_value('mandap_muhurat_date') ?>" data-uk-datepicker="{format:'DD-MM-YYYY'}" />
                                        <span class="md-input-bar "></span>

                                    </div>
                                    <div class="uk-form-row">
                                        <label for="haldi_date">Haldi Date<span class="req">*</span></label>
                                        <input type="text" name="haldi_date" required class="md-input" value="<?= set_value('haldi_date') ?>" data-uk-datepicker="{format:'DD-MM-YYYY'}" />                                                         <span class="md-input-bar "></span>

                                    </div>
                                    <div class="uk-form-row">
                                        <label for="sangit_date">Sangeet Ceremony Date<span class="req">*</span></label>
                                        <input type="text" name="sangit_date" required class="md-input" value="<?= set_value('sangit_date') ?>" data-uk-datepicker="{format:'DD-MM-YYYY'}" />
                                        <span class="md-input-bar "></span>

                                    </div>
                                    <div class="uk-form-row">
                                        <label for="wedding_date">Wedding Ceremony Date<span class="req">*</span></label>
                                        <input type="text" name="wedding_date" required class="md-input" value="<?= set_value('sangit_date') ?>" data-uk-datepicker="{format:'DD-MM-YYYY'}" />
                                        <span class="md-input-bar "></span>

                                    </div>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <div class="uk-form-row">
                                        <label for="ganesh_sthapana_time">Ganesh Sthapama Time<span class="req">*</span></label>
                                        <input class="md-input" name="ganesh_sthapana_time" type="text" id="uk_tp_1" data-uk-timepicker="{format:'12h'}">        
                                        <span class="md-input-bar "></span>
                                    </div>
                                    <div class="uk-form-row">
                                        <label for="mandap_muhurat_time">Mandap Muhurat Time<span class="req">*</span></label>
                                        <input class="md-input" name="mandap_muhurat_time" type="text" id="uk_tp_1" data-uk-timepicker="{format:'12h'}">        
                                        <span class="md-input-bar "></span>
                                    </div>
                                    <div class="uk-form-row">
                                        <label for="haldi_time">Haldi Time<span class="req">*</span></label>
                                        <input class="md-input" name="haldi_time" type="text" id="uk_tp_1" data-uk-timepicker="{format:'12h'}">        
                                        <span class="md-input-bar "></span>
                                    </div>
                                    <div class="uk-form-row">
                                        <label for="sangit_time">Sangeet Ceremony Time<span class="req">*</span></label>
                                        <input class="md-input" name="sangit_time" type="text" id="uk_tp_1" data-uk-timepicker="{format:'12h'}">        
                                        <span class="md-input-bar "></span>
                                    </div>
                                    <div class="uk-form-row">
                                        <label for="wedding_time">Wedding Ceremony Time<span class="req">*</span></label>
                                        <input class="md-input" name="wedding_time" type="text" id="uk_tp_1" data-uk-timepicker="{format:'12h'}">        
                                        <span class="md-input-bar "></span>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- third section -->
                        <h3>Additional information</h3>
                        <section>
                            <h2 class="heading_a">
                                Additional information
                                <span class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                            </h2>
                            <hr class="md-hr"/>
                            <div class="uk-grid uk-margin-large-bottom" data-uk-grid-margin>
                                <div class="uk-width-1-1">
                                    <label class="uk-form-label">Location Where Vehicle is Principally Garaged</label>
                                    <div class="uk-grid" data-uk-grid-margin="">
                                        <div class="uk-width-medium-2-10 parsley-row">
                                            <span class="icheck-inline uk-margin-top uk-margin-left">
                                                <input type="radio" name="wizard_additional_location" id="wizard_status_location_city" class="wizard-icheck" value="City" />
                                                <label for="wizard_status_location_city" class="inline-label">City</label>
                                            </span>
                                        </div>
                                        <div class="uk-width-medium-2-10 parsley-row">
                                            <span class="icheck-inline uk-margin-top uk-margin-left">
                                                <input type="radio" name="wizard_additional_location" id="wizard_status_location_county" class="wizard-icheck" value="County" />
                                                <label for="wizard_status_location_county" class="inline-label">County</label>
                                            </span>
                                        </div>
                                        <div class="uk-width-medium-3-10 parsley-row">
                                            <div class="uk-input-group">
                                                <span class="uk-input-group-addon">
                                                    <input type="radio" name="wizard_additional_location" class="wizard-icheck" value="town" />
                                                </span>
                                                <label for="wizard_location_town">Town of</label>
                                                <input type="text" class="md-input" name="wizard_location_town" id="wizard_location_town" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="uk-alert uk-alert-info">If you would like your registration renewals sent to an address other than your residence/business address, enter it below.</span>
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-2-6 parsley-row">
                                    <label for="wizard_vehicle_registration_address">Registration Mailing Address</label>
                                    <input type="text" name="wizard_vehicle_registration_address" id="wizard_vehicle_registration_address" required class="md-input" />
                                </div>
                                <div class="uk-width-medium-1-6 parsley-row">
                                    <label for="wizard_vehicle_registration_city">City<span class="req">*</span></label>
                                    <input type="text" name="wizard_vehicle_registration_city" id="wizard_vehicle_registration_city" required class="md-input" />
                                </div>
                                <div class="uk-width-medium-1-6 parsley-row">
                                    <label for="wizard_vehicle_registration_state">State<span class="req">*</span></label>
                                    <input type="text" name="wizard_vehicle_registration_state" id="wizard_vehicle_registration_state" required class="md-input" />
                                </div>
                                <div class="uk-width-medium-1-6 parsley-row">
                                    <label for="wizard_vehicle_registration_zip">ZIP<span class="req">*</span></label>
                                    <input type="text" name="wizard_vehicle_registration_zip" id="wizard_vehicle_registration_zip" required class="md-input" />
                                </div>
                                <div class="uk-width-medium-1-6 parsley-row">
                                    <label for="wizard_vehicle_registration_code">Code<span class="req">*</span></label>
                                    <input type="text" name="wizard_vehicle_registration_code" id="wizard_vehicle_registration_code" required class="md-input" />
                                </div>
                            </div>
                        </section>

                    </div>
                </form>
            </div>
        </div>
        <script id="d_field_wizard" type="text/x-handlebars-template">
            <div class="uk-width-medium-1-1 parsley-row form_section">
            <div class="uk-input-group">
            <label for="wizard_address">Address<span class="req">*</span></lab                            el>
            <input type="text" name="wizard_address{{counter}}" id="wizard_address{{counter}}" required c                                       lass="md-input" />
            <span class="                                               uk-input-group-addon">
            <a href="#" class="btnSectionClone"><i class="material-icons md-24                                               ">&#xE146;</i></a>
            </span>
            </div>
            </div>
        </script>
    </div>
</div>