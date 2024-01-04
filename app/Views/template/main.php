<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sispak Ayam</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?= base_url() ?>plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>dist/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet" href="<?= base_url() ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="<?= base_url() ?>plugins/summernote/summernote-bs4.min.css">

    <!-- Datatables -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <script nonce="72851a05-7954-4909-b42c-7bb1baa98cf8">
        (function(w, d) {
            ! function(bg, bh, bi, bj) {
                bg[bi] = bg[bi] || {};
                bg[bi].executed = [];
                bg.zaraz = {
                    deferred: [],
                    listeners: []
                };
                bg.zaraz.q = [];
                bg.zaraz._f = function(bk) {
                    return function() {
                        var bl = Array.prototype.slice.call(arguments);
                        bg.zaraz.q.push({
                            m: bk,
                            a: bl
                        })
                    }
                };
                for (const bm of ["track", "set", "debug"]) bg.zaraz[bm] = bg.zaraz._f(bm);
                bg.zaraz.init = () => {
                    var bn = bh.getElementsByTagName(bj)[0],
                        bo = bh.createElement(bj),
                        bp = bh.getElementsByTagName("title")[0];
                    bp && (bg[bi].t = bh.getElementsByTagName("title")[0].text);
                    bg[bi].x = Math.random();
                    bg[bi].w = bg.screen.width;
                    bg[bi].h = bg.screen.height;
                    bg[bi].j = bg.innerHeight;
                    bg[bi].e = bg.innerWidth;
                    bg[bi].l = bg.location.href;
                    bg[bi].r = bh.referrer;
                    bg[bi].k = bg.screen.colorDepth;
                    bg[bi].n = bh.characterSet;
                    bg[bi].o = (new Date).getTimezoneOffset();
                    if (bg.dataLayer)
                        for (const bt of Object.entries(Object.entries(dataLayer).reduce(((bu, bv) => ({
                                ...bu[1],
                                ...bv[1]
                            }))))) zaraz.set(bt[0], bt[1], {
                            scope: "page"
                        });
                    bg[bi].q = [];
                    for (; bg.zaraz.q.length;) {
                        const bw = bg.zaraz.q.shift();
                        bg[bi].q.push(bw)
                    }
                    bo.defer = !0;
                    for (const bx of [localStorage, sessionStorage]) Object.keys(bx || {}).filter((bz => bz.startsWith("_zaraz_"))).forEach((by => {
                        try {
                            bg[bi]["z_" + by.slice(7)] = JSON.parse(bx.getItem(by))
                        } catch {
                            bg[bi]["z_" + by.slice(7)] = bx.getItem(by)
                        }
                    }));
                    bo.referrerPolicy = "origin";
                    bo.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bg[bi])));
                    bn.parentNode.insertBefore(bo, bn)
                };
                ["complete", "interactive"].includes(bh.readyState) ? zaraz.init() : bg.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url() ?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->

        <!-- header -->
        <?= $this->include('template/header'); ?>

        <!-- sidebar -->
        <?= $this->include('template/sidebar'); ?>

        <!-- content -->
        <div class="content-wrapper">

            <?= $this->renderSection('content'); ?>

        </div>

        <!-- footer -->
        <?= $this->include('template/footer'); ?>

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>



    <script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>

    <script src="<?= base_url() ?>plugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="<?= base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url() ?>plugins/chart.js/Chart.min.js"></script>

    <script src="<?= base_url() ?>plugins/sparklines/sparkline.js"></script>

    <script src="<?= base_url() ?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="<?= base_url() ?>plugins/jquery-knob/jquery.knob.min.js"></script>

    <script src="<?= base_url() ?>plugins/moment/moment.min.js"></script>
    <script src="<?= base_url() ?>plugins/daterangepicker/daterangepicker.js"></script>

    <script src="<?= base_url() ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="<?= base_url() ?>plugins/summernote/summernote-bs4.min.js"></script>

    <script src="<?= base_url() ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="<?= base_url() ?>dist/js/adminlte.js?v=3.2.0"></script>



    <script src="<?= base_url() ?>dist/js/pages/dashboard.js"></script>
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <script src="<?= base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url() ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url() ?>plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>



    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Get the current URL segment
            var currentUrlSegment = window.location.pathname.split('/').pop();

            // Remove the active class from all sidebar links
            $('.nav-sidebar .nav-link').removeClass('active');

            // Find the link with the current URL segment and add the active class
            $('.nav-sidebar .nav-link').each(function() {
                if ($(this).attr('href') === currentUrlSegment) {
                    $(this).addClass('active');
                    $(this).parents('.has-treeview').addClass('menu-open');
                }
            });
        });
    </script>

    <script>
        $('#sa-warning').click(function() {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: 'Yes, Logout Now!'
            }).then(function(result) {
                if (result.value) {
                    // Tempatkan tautan Log Out di sini
                    window.location.href = '<?= base_url('/') ?>';
                }
            });
        });
    </script>
</body>

</html>