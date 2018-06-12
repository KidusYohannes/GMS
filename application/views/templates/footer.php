
</div>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2017 <a href="#">KAST IT Solution</a>.</strong> All rights
    reserved.
</footer>
</div>
<!-- jQuery 2.2.0 -->
<!--<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- Select2 -->
<script src="<?= base_url()?>assets/plugins/select2/select2.full.min.js"></script>
<script src="<?= base_url() ?>assets/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/datatables/dataTables.bootstrap.js"></script>
<script src="<?= base_url() ?>assets/datatables/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/datatables/buttons.bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/datatables/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/datatables/pdfmake.min.js"></script>
<script src="<?= base_url() ?>assets/datatables/vfs_fonts.js"></script>
<script src="<?= base_url() ?>assets/datatables/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/datatables/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/datatables/dataTables.fixedHeader.min.js"></script>
<script src="<?= base_url() ?>assets/datatables/dataTables.keyTable.min.js"></script>
<script src="<?= base_url() ?>assets/datatables/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/datatables/responsive.bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/datatables/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/date/daterangepicker.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!--<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>-->
<script>
    $(function () {
        $(".select2").select2();
        $("#example1").DataTable();
        $("#example3").DataTable();
        $("#example4").DataTable();
        $("#example2").DataTable();
    });
</script>
<script src="<?= base_url() ?>assets/pace/pace.min.js"></script>
<script>
    var handleDataTableButtons = function() {
            /*"use strict";*/
            0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                    extend: "copy",
                    className: "btn btn-primary btn-sm"
                }, {
                    extend: "csv",
                    className: "btn btn-primary btn-sm"
                }, {
                    extend: "excel",
                    className: "btn btn-primary btn-sm"
                }, {
                    extend: "pdf",
                    className: "btn btn-primary btn-sm"
                }, {
                    extend: "print",
                    className: "btn btn-primary btn-sm"
                }],
                responsive: !0,
                keys: true,
                fixedHeader: true
            })
        },
        TableManageButtons = function() {
            /*"use strict";*/
            return {
                init: function() {
                    handleDataTableButtons();
                }
            }
        }();
</script>
<script>
    var handleDataTableButtons1 = function() {
            "use strict";
            0 !== $("#datatable-buttons-1").length && $("#datatable-buttons-1").DataTable({
                dom: "Bfrtip",
                buttons: [{
                    extend: "copy",
                    className: "btn btn-primary btn-sm"
                }, {
                    extend: "csv",
                    className: "btn btn-primary btn-sm"
                }, {
                    extend: "excel",
                    className: "btn btn-primary btn-sm"
                }, {
                    extend: "pdf",
                    className: "btn btn-primary btn-sm"
                }, {
                    extend: "print",
                    className: "btn btn-primary btn-sm"
                }],
                responsive: !0,
                keys: true,
                fixedHeader: true
            })
        },
        TableManageButtons1 = function() {
            "use strict";
            return {
                init: function() {
                    handleDataTableButtons1()
                }
            }
        }();
</script>
<script>
    var handleDataTableButtons2 = function() {
            "use strict";
            0 !== $("#datatable-buttons-2").length && $("#datatable-buttons-2").DataTable({
                dom: "Bfrtip",
                buttons: [{
                    extend: "copy",
                    className: "btn btn-primary btn-sm"
                }, {
                    extend: "csv",
                    className: "btn btn-primary btn-sm"
                }, {
                    extend: "excel",
                    className: "btn btn-primary btn-sm"
                }, {
                    extend: "pdf",
                    className: "btn btn-primary btn-sm"
                }, {
                    extend: "print",
                    className: "btn btn-primary btn-sm"
                }],
                responsive: !0
            })
        },
        TableManageButtons2 = function() {
            "use strict";
            return {
                init: function() {
                    handleDataTableButtons2()
                }
            }
        }();
</script>
<script>
    var handleDataTableButtons3 = function() {
            /*"use strict";*/
            0 !== $("#datatable-buttons-3").length && $("#datatable-buttons-3").DataTable({
                dom: "Bfrtip",
                buttons: [{
                    extend: "copy",
                    className: "btn btn-primary btn-sm"
                }, {
                    extend: "csv",
                    className: "btn btn-primary btn-sm"
                }, {
                    extend: "excel",
                    className: "btn btn-primary btn-sm"
                }, {
                    extend: "pdf",
                    className: "btn btn-primary btn-sm"
                }, {
                    extend: "print",
                    className: "btn btn-primary btn-sm"
                }],
                responsive: !0,
                keys: true,
                fixedHeader: true
            })
        },
        TableManageButtons3 = function() {
            /*"use strict";*/
            return {
                init: function() {
                    handleDataTableButtons3()
                }
            }
        }();
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
            keys: true
        });
        $('#datatable-responsive').DataTable();
        $('#datatable-scroller').DataTable({
            ajax: "<?= base_url() ?>assets/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({
            fixedHeader: true
        });
    });
    TableManageButtons.init();
    TableManageButtons1.init();
    TableManageButtons2.init();
    TableManageButtons3.init();
</script>
</body>
</html>