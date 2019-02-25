<?php

function admin_section_script(){
    if (get_post_type() == 'section'){
    ?>
        <script>
            (function($){
                $(document).ready(function(){

                    var getsectype = $("select[data-depend-id='section-type']").attr("value");
                    $(".mark-common-section").parents(".postbox ").hide();
                    $(".mark-common-section"+".mark-"+getsectype+"-section-field").parents(".postbox").show();
					
                    $("select[data-depend-id='section-type']").on("change", function(){
                        var getsectype = $("select[data-depend-id='section-type']").attr("value");
                        $(".mark-common-section").parents(".postbox ").hide();
                        $(".mark-common-section"+".mark-"+getsectype+"-section-field").parents(".postbox").show();
                    });
                });
            })(jQuery);
        </script>
<?php
}}
add_action('admin_print_scripts', 'admin_section_script', 1000);
?>