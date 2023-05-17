<div class="col-lg-4 col-md-6">
    <div class="card" id="snowagent_scan_running_processes-widget">
        <div id="snowagent_scan_running_processes-widget" class="card-heading" data-container="body">
            <i class="fa fa-qrcode"></i> 
            <span data-i18n="snowagent.software_scan_running_processes"></span>
            <a href="/show/listing/snowagent/snowagent" class="pull-right"><i class="fa fa-list"></i></a>
        </div>
        <div class="card-body text-center"></div>
    </div><!-- /card -->
</div><!-- /col -->

<script>
$(document).on('appUpdate', function(e, lang) {

    $.getJSON( appUrl + '/module/snowagent/get_scan_running_processes', function( data ) {
        if(data.error){
            //alert(data.error);
            return;
        }

        var card = $('#snowagent_scan_running_processes-widget div.card-body'),
        baseUrl = appUrl + '/show/listing/snowagent/snowagent/#';
        card.empty();
        // Set blocks, disable if zero
        if(data.off != "0"){
            card.append(' <a href="'+baseUrl+'software_scan_running_processes = 0" class="btn btn-info"><span class="bigger-150">'+data.off+'</span><br>&nbsp;&nbsp;&nbsp;'+i18n.t('no')+'&nbsp;&nbsp;&nbsp;</a>');
        } else {
            card.append(' <a href="'+baseUrl+'software_scan_running_processes = 0" class="btn btn-info disabled"><span class="bigger-150">'+data.off+'</span><br>&nbsp;&nbsp;&nbsp;'+i18n.t('no')+'&nbsp;&nbsp;&nbsp;</a>');
        }
        if(data.on != "0"){
            card.append(' <a href="'+baseUrl+'software_scan_running_processes = 1" class="btn btn-success"><span class="bigger-150">'+data.on+'</span><br>&nbsp;&nbsp;&nbsp;'+i18n.t('yes')+'&nbsp;&nbsp;&nbsp;</a>');
        } else {
            card.append(' <a href="'+baseUrl+'software_scan_running_processes = 1" class="btn btn-success disabled"><span class="bigger-150">'+data.on+'</span><br>&nbsp;&nbsp;&nbsp;'+i18n.t('yes')+'&nbsp;&nbsp;&nbsp;</a>');
        }
    });
});

</script>
