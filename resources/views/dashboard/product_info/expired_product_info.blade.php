@section('ExpiredProductList', 'mm-active')
@include('layouts.header')
@include('layouts.sidebar')
<!-- Dashboard Header  section -->
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title app-page-title-simple">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                        <div class="page-title-head center-elem">
                            <span class="d-inline-block pr-2">
                                <i class="lnr-apartment opacity-6"></i>
                            </span>
                            <span class="d-inline-block">Expired Offer List</span>
                        </div>
                        <div class="page-title-subheading opacity-10">
                            <nav class="" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a>
                                            <i aria-hidden="true" class="fa fa-home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a>Dashboards</a>
                                    </li>
                                    <li class="active breadcrumb-item" aria-current="page">
                                        Filter Expired Offers
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="button" data-toggle="tooltip" data-placement="left" class="btn btn-dark" title="" data-original-title="Show a Toastr Notification!">
                        <i class="fa fa-battery-three-quarters"></i>
                    </button>
                </div>
            </div>
        </div>
<!-- table Section -->
        <div class="mbg-3 h-auto pl-0 pr-0 bg-transparent no-border card-header">
            <div class="card-header-title fsize-5 text-capitalize font-weight-normal"></div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                @include("layouts.includes.flash")
                <table style="width: 100%;" id="process_data_table" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>User Name</th>
                            <th>Offer ID</th>
                            <th>Title</th>
                            <th>Offer Start</th>
                            <th>Offer End</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>
                                <center>Action</center>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
<div class="modal fade bd-example-modal-xl" id="auth_edit_offer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal-body2">
                @include('dashboard.product_info.auth_edit_offer')
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
<script src="{!! asset('js/sweetalert.min.js') !!}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var fileref=document.createElement('script');
        fileref.setAttribute("type","text/javascript");
        fileref.setAttribute("src", "https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js");

        document.getElementById("to-be-ckcdn").appendChild(fileref);
        var table =
            $('#process_data_table').DataTable({
                processing: false,
                serverSide: true,
                paging: true,
                pageLength: 10,
                lengthChange: true,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false,
                dom: 'l<"#date-filter"><"#category-filter"><"#action-filter">fBrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                ajax: {
                    url: '/expired-product-list-dt',
                    type: 'POST',
                    data: function(d) {
                        d._token = "{{ csrf_token() }}";
                        d.user_id = "{{ Request::segment(2) }}";
                    }
                },
                columns: [
                    {
                        data: 'id',
                        name: 'id',
                        searchable: false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'username',
                        name: 'users.username',
                        searchable: true
                    },
                    {
                        data: 'product_id',
                        name: 'product_id',
                        searchable: true
                    },
                    {
                        data: 'title',
                        name: 'title',
                        searchable: true
                    },
                    {
                        data: 'offer_start',
                        name: 'offer_start',
                        searchable: false,
                        render: function(data, type, row) {
                            return moment(row.offer_start).format("MMMM Do YYYY, h:mm:ss A");
                        }
                    },
                    {
                        data: 'offer_end',
                        name: 'offer_end',
                        searchable: false,
                        render: function(data, type, row) {
                            return moment(row.offer_end).format("MMMM Do YYYY, h:mm:ss A");
                        }
                    },
                    {
                        data: 'product_cat',
                        name: 'product_cat',
                        searchable: true
                    },
                    {
                        data: 'status',
                        name: 'status',
                        id: 'id',
                        end_date: 'end_date',
                        searchable: true,
                        render: function(data, type, row) {
                            return '<div class="badge badge-pill badge-danger">Expire</div>'

                            // if(data == "cancel"){
                            //         return '<div class="badge badge-pill badge-warning">Cancel</div>'
                            // }else if (CurrentDate > compareTo || row.status == "pending") {
                            //         return '<div class="badge badge-pill badge-warning">Pending</div>'
                            // }else if (CurrentDate > compareTo || row.status == "active") {
                            // return '<div class="badge badge-pill badge-success">Active</div>'
                            // }else {
                            // return '<div class="badge badge-pill badge-danger">Expire</div>'
                            // }
                        }
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        searchable: false,
                        render: function(data, type, row) {
                            return moment(row.created_at).format("MMMM Do YYYY, h:mm:ss A");
                        }
                    },
                    {
                        data: 'id',
                        id: 'id',
                        searchable: false,
                        render: function(data, type, row) {
                            return "<a href='javascript:void(0)' title='View' onclick='append_offer_data("+ data + ")' class='btn-hover-shine btn-shadow btn btn-warning btn-sm'><i class='fa fa-edit'></i></a> | <a href='javascript:void(0)' onclick='delete_offer(" + row.id + ",this)' class='btn-hover-shine btn-shadow btn btn-danger btn-sm' title='Delete'><i class='fa fa-trash'></i></a>";
                            /* if (row.status == 2) {
                                return "<a href='/single-product-info/" + row.id + "' class='btn-hover-shine btn-shadow btn btn-warning btn-sm' target='_blank' title='View'><i class='fa fa-edit'></i></a> | <a href='javascript:void(0)' onclick='delete_offer(" + row.id + ",this)' class='btn-hover-shine btn-shadow btn btn-danger btn-sm' title='Delete'><i class='fa fa-trash'></i></a>";
                            } else {
                                return '<center><i class="fa fa-remove m--font-danger"></i></center>';
                            } */
                        }
                    },
                ]
            });
        $("table").wrapAll("<div style='overflow-x:auto;width:100%' />");
        $('.dataTables_wrapper').addClass('row');
        // $('.dataTables_processing').addClass('m-loader m-loader--brand');
        $('#process_data_table_length').addClass('col-lg-2 col-md-2 col-sm-2');
        $('#process_data_table_length select').addClass('custom-select custom-select-sm form-control form-control-sm');
        $('#date-filter').addClass('col-lg-4 col-md-4 col-sm-4 adjust');
        $('#action-filter').addClass('col-lg-2 col-md-2 col-sm-2');
        $('#category-filter').addClass('col-lg-2 col-md-2 col-sm-2');
        $('#process_data_table_filter').addClass('col-lg-2 col-md-2 col-sm-2');
        $('#process_data_table_filter input').addClass('form-control form-control-sm');

        $('div.dt-buttons').css({
            "position": "absolute",
            "right": "0",
            "top": "-44px"
        });
        var action_filter_html = '<select class="form-control-sm form-control" id="event_status" data-select2-id="2" tabindex="-1" aria-hidden="true">' +
            '<option value="">Select Status</option>' +
            '<option value="active">Active</option>' +
            '<option value="pending">Pending</option>' +
            '<option value="expire">Expire</option>' +
            // '<option value="Expired">Expired</option>' +
            '</select>'; 
        $('#action-filter').append(action_filter_html);

        $('#event_status').on('change', function() {
            var event_status = $(this).val();
            if (event_status != "") {
                table.columns(7).search(event_status).draw();
            }
        });
        var date_picker_html = '<div id="date_range" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;"> <i class="fa fa-calendar"> </i>&nbsp; <span> </span> <i class="fa fa-caret-down"></i></div>';
        $('#date-filter').append(date_picker_html);
        $(function() {
            var start = moment().subtract(365, 'days');
            var end = moment();
            function cb(start, end) {
                $('#date_range span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                var range = start.format("YYYY-MM-DD") + "~" + end.format("YYYY-MM-DD");
                table.columns(5).search(range).draw();
                //alert(range);
            }
            $('#date_range').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);
            $('#date_range span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        });
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function append_offer_data(id) {
        $.ajax({
            url: '{{url("auth-offer-info")}}',
            type: 'post',
            data: {
                id: id,
            },
            dataType: 'json',
            success: function(response) {
                if (response['product_cat'] == "Web-Server") {
                var cut = response['sub_title'].split("~");
                var cpu = cut[1];
                var ram = cut[3];
                var storage = cut[5];

                $("#sub_title_fadeIN2").val(ram);
                $("#sub_title_fadeIN1").val(cpu);
                $("#sub_title_fadeIN3").val(ram);
                }else if(response['product_cat'] == "Hosting") {
                var cut = response['sub_title'].split("~");
                var cpu = cut[1];
                var ram = cut[3];
                    
                $("#sub_title_fadeIN4").val(cpu);
                $("#sub_title_fadeIN5").val(ram);
                }
                $('#offer_starts').val(moment(response['offer_start']).format("MM/DD/YYYY hh:mm:ss A"));
                $('#offer_ends').val(moment(response['offer_end']).format("MM/DD/YYYY hh:mm:ss A"));
                $("#inputGroupSelect01").val(response['product_cat']).change();
                $("#offer_cat").val(response['offer_cat']).change();
                $("#title").val(response['title']);
                $("#sub_title_fade").val(response['sub_title']);
                $("#provider").val(response['provider']);
                $("#provider").val(response['provider']);
                $("#promo_code").val(response['promo_code']);
                $("#offer_note").val(response['offer_note']);
                $("#currency").val(response['currency']).change();
                $("#price").val(response['price']);
                $("#product_link").val(response['product_link']);
                $("#affiliate_link").val(response['affiliate_link']);
                $("#description").text('');
                $("#description").text(response['description']);
                $("#product_id").val(response['product_id']);
                $("#user_append_id").val(response['user_id']);
                $("#id").val(response['id']);
                $("#status").val(response['status']).change();
                $("#fullname").val(response['fullname']).change();
                $("#email").val(response['email']).change();
                CKEDITOR.remove('description');

                if (CKEDITOR.instances['description']){
                    CKEDITOR.instances['description'].destroy(true);
                }
                CKEDITOR.replace('description');

                $('#auth_edit_offer').modal();
            }
        });
    }

    function delete_offer(id,the) {

    $.ajax({

        url: '/delete-offer',
        type: 'post',
        data: {
            id: id,
            '_token': $('meta[name="csrf-token"]').attr('content'),
        },
        dataType: 'json',
        success: function(response) {

            if (response==1) {

                $(the).closest("tr").fadeOut(200, function () {
                    $(this).remove();
                });

                swal({
                    title: "Offer deleted successfully !",
                    text: "Selected offer is deleted",
                    icon: "success",
                    buttons: false,
                })

            }else{
                swal({
                    title: "Error",
                    text: "Please try again after some time !",
                    icon: "error",
                    buttons: false,
                })
            }
                $(".swal-text").css('color', '#F55F3D');
                $(".swal-text").css('font-weight', '600');
                $(".swal-title").css('font-size', '18px');

            }
        });
    }

    function change_status(id,the) {
        var optionVal = the.value;
        $.ajax({

        url: '{{url("auth-update-status")}}',
        type: 'post',
        data: {
            status: optionVal,
            id: id,
            '_token': $('meta[name="csrf-token"]').attr('content'),
        },
        dataType: 'json',
        success: function(response) {
            }
        });
    }
</script>

