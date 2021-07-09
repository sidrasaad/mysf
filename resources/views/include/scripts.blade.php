<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/plugins/dropify/js/dropify.min.js"></script>

<script src="assets/js/core.js"></script>

<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/bundles/apexcharts.bundle.js"></script>
<script src="assets/bundles/counterup.bundle.js"></script>
<script src="assets/bundles/knobjs.bundle.js"></script>
<script src="assets/bundles/c3.bundle.js"></script>

<script src="assets/js/page/project-index.js"></script>

<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/bundles/fullcalendar.bundle.js"></script>

<script src="assets/js/page/calendar.js"></script>

<script>
    $(function() {
        "use strict";

        $('.dropify').dropify();

        var drEvent = $('#dropify-event').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });
    });
</script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
