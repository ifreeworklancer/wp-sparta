<?php
/*
* Template name: case page
* Template type: page
*/
 get_header('secondary'); ?>




<section id="case-page" data-color="dark">
    <?php $case = get_post(102); ?>
    <div class="container-fluid">
        <div class="row">
            <?php 
                $case_fields = get_field('case', $case->ID);
            ?>
            <?php foreach($case_fields as $case_field) : ?>
            <div class="col-sm-11 ml-auto mr-0 p-0">
                <div class="case-page-item">
                    <div class="case-page-item-img" style="background-image: url(<?php echo $case_field['case_images']['url']?>);"></div>
                    <div class="case-page-item-description">
                        <div class="case-page-item-description__title">
                            <?php echo $case_field['case_title']?>
                        </div>
                        <div class="case-page-item-description-content">
                            <div class="case-page-item-description-content-item">
                                <span class="case-page-item-description-content-item__title">Объект:</span>
                                <?php echo $case_field['case_object']?>
                            </div>
                            <div class="case-page-item-description-content-item">
                                <span class="case-page-item-description-content-item__title">Описание:</span>
                                <?php echo $case_field['case_desc']?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            
        </div>
    </div>
</section>


<?php 

get_footer();