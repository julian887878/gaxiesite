<!-- footer content -->
<footer>
    <div class="pull-right">
        Administration du site - Développé par ALIAS Mickael & DE LA PENA Enzo - © GAXIEU 2017 - Tout droit reservé
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div> 
<!-- jQuery -->
<script src="public/admin/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="public/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="public/admin/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="public/admin/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="public/admin/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="public/admin/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="public/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="public/admin/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="public/admin/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="public/admin/vendors/Flot/jquery.flot.js"></script>
<script src="public/admin/vendors/Flot/jquery.flot.pie.js"></script>
<script src="public/admin/vendors/Flot/jquery.flot.time.js"></script>
<script src="public/admin/vendors/Flot/jquery.flot.stack.js"></script>
<script src="public/admin/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="public/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="public/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="public/admin/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="public/admin/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="public/admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="public/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="public/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="public/admin/vendors/moment/min/moment.min.js"></script>
<script src="public/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="public/admin/build/js/custom.min.js"></script>

<!-- bootstrap-wysiwyg -->
<script src="public/admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="public/admin/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="public/admin/vendors/google-code-prettify/src/prettify.js"></script>

<!-- jQuery Tags Input -->
<script src="public/admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="public/admin/vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="public/admin/vendors/select2/dist/js/select2.full.min.js"></script>

    <!-- Parsley -->
    <script src="public/admin/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="public/admin/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="public/admin/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="public/admin/vendors/starrr/dist/starrr.js"></script>
    
    <!-- Datatables -->
    <script src="public/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="public/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="public/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="public/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="public/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="public/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="public/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="public/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="public/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="public/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="public/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="public/admin/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="public/admin/vendors/jszip/dist/jszip.min.js"></script>
    <script src="public/admin/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="public/admin/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- bootstrap-daterangepicker -->
<script>
    $(document).ready(function () {
        $('#birthday').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_4"
        }, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
</script>
<!-- /bootstrap-daterangepicker -->

<!-- bootstrap-wysiwyg -->
<script>
    $(document).ready(function () {
        function initToolbarBootstrapBindings() {
            var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                'Times New Roman', 'Verdana'
            ],
                    fontTarget = $('[title=Font]').siblings('.dropdown-menu');
            $.each(fonts, function (idx, fontName) {
                fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
            });
            $('a[title]').tooltip({
                container: 'body'
            });
            $('.dropdown-menu input').click(function () {
                return false;
            })
                    .change(function () {
                        $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                    })
                    .keydown('esc', function () {
                        this.value = '';
                        $(this).change();
                    });

            $('[data-role=magic-overlay]').each(function () {
                var overlay = $(this),
                        target = $(overlay.data('target'));
                overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
            });

            if ("onwebkitspeechchange" in document.createElement("input")) {
                var editorOffset = $('#editor').offset();

                $('.voiceBtn').css('position', 'absolute').offset({
                    top: editorOffset.top,
                    left: editorOffset.left + $('#editor').innerWidth() - 35
                });
            } else {
                $('.voiceBtn').hide();
            }
        }

        function showErrorAlert(reason, detail) {
            var msg = '';
            if (reason === 'unsupported-file-type') {
                msg = "Unsupported format " + detail;
            } else {
                console.log("error uploading file", reason, detail);
            }
            $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

        initToolbarBootstrapBindings();

        $('#editor').wysiwyg({
            fileUploadError: showErrorAlert
        });

        window.prettyPrint;
        prettyPrint();
    });
</script>
<!-- /bootstrap-wysiwyg -->

<!-- Select2 -->
<script>
    $(document).ready(function () {
        $(".select2_single").select2({
            placeholder: "Select a state",
            allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
            maximumSelectionLength: 4,
            placeholder: "With Max Selection limit 4",
            allowClear: true
        });
    });
</script>
<!-- /Select2 -->

<!-- jQuery Tags Input -->
<script>
    function onAddTag(tag) {
        alert("Added a tag: " + tag);
    }

    function onRemoveTag(tag) {
        alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
        alert("Changed a tag: " + tag);
    }

    $(document).ready(function () {
        $('#tags_1').tagsInput({
            width: 'auto'
        });
    });
</script>
<!-- /jQuery Tags Input -->

<!-- Parsley -->
<script>
    $(document).ready(function () {
        $.listen('parsley:field:validate', function () {
            validateFront();
        });
        $('#demo-form .btn').on('click', function () {
            $('#demo-form').parsley().validate();
            validateFront();
        });
        var validateFront = function () {
            if (true === $('#demo-form').parsley().isValid()) {
                $('.bs-callout-info').removeClass('hidden');
                $('.bs-callout-warning').addClass('hidden');
            } else {
                $('.bs-callout-info').addClass('hidden');
                $('.bs-callout-warning').removeClass('hidden');
            }
        };
    });

    $(document).ready(function () {
        $.listen('parsley:field:validate', function () {
            validateFront();
        });
        $('#demo-form2 .btn').on('click', function () {
            $('#demo-form2').parsley().validate();
            validateFront();
        });
        var validateFront = function () {
            if (true === $('#demo-form2').parsley().isValid()) {
                $('.bs-callout-info').removeClass('hidden');
                $('.bs-callout-warning').addClass('hidden');
            } else {
                $('.bs-callout-info').addClass('hidden');
                $('.bs-callout-warning').removeClass('hidden');
            }
        };
    });
    try {
        hljs.initHighlightingOnLoad();
    } catch (err) {
    }
</script>
<!-- /Parsley -->

<!-- Autosize -->
<script>
    $(document).ready(function () {
        autosize($('.resizable_textarea'));
    });
</script>
<!-- /Autosize -->

<!-- jQuery autocomplete -->
<script>
    $(document).ready(function () {
        var countries = {AM: "Assistant(e) Maître d'Oeuvre", MO: "Maître d'Oeuvre", GP: "Graphiste"};

        var countriesArray = $.map(countries, function (value, key) {
            return {
                value: value,
                data: key
            };
        });

        // initialize autocomplete with custom appendTo
        $('#autocomplete-custom-append').autocomplete({
            lookup: countriesArray
        });
    });
</script>
<!-- /jQuery autocomplete -->

<!-- Starrr -->
<script>
    $(document).ready(function () {
        $(".stars").starrr();

        $('.stars-existing').starrr({
            rating: 4
        });

        $('.stars').on('starrr:change', function (e, value) {
            $('.stars-count').html(value);
        });

        $('.stars-existing').on('starrr:change', function (e, value) {
            $('.stars-count-existing').html(value);
        });
    });
</script>
<!-- /Starrr -->

<script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->

</body>
</html>
