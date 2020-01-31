@include('layouts.master.header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
<section id="banner-main">
    <div class="container">
        <div class="row">
            <div class="page_heading">
                <h1>Offer Management</h1><br>
            </div>
            <div class="breadcrumb-section" style="margin-left:-430px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Offer Management</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<?php 

    $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://enews-api.ezzyr.xyz/api/get_category_index/?api_key=cda11IL1pchVgmX08Eij4UnbaRzMKSGFZ2NsDQHluOWy5w37er",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,        
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $json = curl_exec($curl);
        $result = json_decode($json);
        
?>
<section id="tabs" class="project-tab">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Submited Offers</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Active Offers</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Expired Offers</a>
                        <a class="nav-item nav-link" id="nav-hold-tab" data-toggle="tab" href="#nav-hold" role="tab" aria-controls="nav-hold" aria-selected="false">Hold Offers</a>                    
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table id="submit" class="display table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Offer ID</th>
                                    <th>Offer Title</th>
                                    <th>Product Category</th>
                                    <th>Offer Category</th>
                                    <th>Offer End Time</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @foreach($all_offers as $pending_offers)
                                <?php 
                                $format = ('F d, Y');
                                $format2 = ('g:i A');
                                $format3 = ('F d, Y g:i A');
                                    $current_time = strtotime(date('Y-m-d H:i:s')); 
                                    $end_offer = strtotime($pending_offers->offer_end); 
                                    $endtime = date($format3, strtotime($pending_offers->offer_end));
                                ?>
                                @if ($current_time < $end_offer && $pending_offers->status == "pending") 
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$pending_offers->product_id}}</td>
                                    <td>{{$pending_offers->title}}</td>
                                    <td>{{$pending_offers->product_cat}}</td>
                                    <td>{{$pending_offers->offer_cat}}</td>
                                    <td>{{$endtime}}</td>
                                    <td><a href='/submit-offer/{{$pending_offers->id}}' target='_blank' title='Update'><i class='fa fa-edit btn btn_table mr-2'></i></a><span>|</span><a href='javascript:void(0)' title='Delete'><i class='fa fa-trash btn btn_table ml-2'></i></a></td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <table id="active" class="display" style="width:100%">
                            <thead>
                                <tr>
                                <th>SN</th>
                                    <th>Offer ID</th>
                                    <th>Offer Title</th>
                                    <th>Product Category</th>
                                    <th>Offer Category</th>
                                    <th>Offer End Time</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $j = 0; ?>
                                @foreach($all_offers as $active_offer)
                                <?php 
                                $format = ('F d, Y');
                                $format2 = ('g:i A');
                                $format3 = ('F d, Y g:i A');

                                    $current_time = strtotime(date('Y-m-d H:i:s')); 
                                    $end_offer = strtotime($active_offer->offer_end); 
                                    $endtime = date($format3, strtotime($active_offer->offer_end));
                                ?>
                                @if ($current_time < $end_offer && $active_offer->status == "active" && $active_offer->visible == "on") 
                                <tr>
                                    <td>{{++$j}}</td>
                                    <td>{{$active_offer->product_id}}</td>
                                    <td>{{$active_offer->title}}</td>
                                    <td>{{$active_offer->product_cat}}</td>
                                    <td>{{$active_offer->offer_cat}}</td>
                                    <td>{{$endtime}}</td>
                                    <td><a href='/submit-offer/{{$active_offer->id}}' target='_blank' title='Update'><i class='fa fa-edit btn btn_table' style='padding: 5px;'></i></a><span>|</span><a href='javascript:void(0)' onclick='delete_offer({{$active_offer->id}},this)' title='Delete'><i class='fa fa-trash btn btn_table' style='padding: 5px;'></i></a><span>|</span><a onclick="put_on_hold({{$active_offer->id}},this,0)" href='javascript:void(0)' title='Put on hold'><i class='fa fa-exclamation-triangle btn' style='padding: 5px;'></i></a></td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <table id="expired" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Offer ID</th>
                                    <th>Offer Title</th>
                                    <th>Product Category</th>
                                    <th>Offer Category</th>
                                    <th>Offer End Time</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $k = 0; ?>
                                @foreach($all_offers as $expired_offers)
                                <?php 
                                $format = ('F d, Y');
                                $format2 = ('g:i A');
                                $format3 = ('F d, Y g:i A');
                                    $current_time = strtotime(date('Y-m-d H:i:s')); 
                                    $end_offer = strtotime($expired_offers->offer_end); 
                                    $endtime = date($format3, strtotime($expired_offers->offer_end));
                                ?>
                                @if ($current_time > $end_offer) 
                                <tr>
                                    <td>{{++$k}}</td>
                                    <td>{{$expired_offers->product_id}}</td>
                                    <td>{{$expired_offers->title}}</td>
                                    <td>{{$expired_offers->product_cat}}</td>
                                    <td>{{$expired_offers->offer_cat}}</td>
                                    <td>{{$endtime}}</td>
                                    <td><a href='/submit-offer/{{$expired_offers->id}}' target='_blank' title='Update'><i class='fa fa-edit btn btn_table'></i></a><span>|</span><a href='javascript:void(0)'  onclick='delete_offer({{$expired_offers->id}},this)' title='Delete'><i class='fa fa-trash btn btn_table ml-2'></i></a></td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-hold" role="tabpanel" aria-labelledby="nav-hold-tab">
                        <table id="onhold" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Offer ID</th>
                                    <th>Offer Title</th>
                                    <th>Product Category</th>
                                    <th>Offer Category</th>
                                    <th>Offer End Time</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $k = 0; ?>
                                @foreach($all_offers as $hold_offers)
                                <?php 
                                $format = ('F d, Y');
                                $format2 = ('g:i A');
                                $format3 = ('F d, Y g:i A');
                                    $current_time = strtotime(date('Y-m-d H:i:s')); 
                                    $end_offer = strtotime($hold_offers->offer_end); 
                                    $endtime = date($format3, strtotime($hold_offers->offer_end));
                                ?>
                                @if ($current_time < $end_offer && $hold_offers->visible == "off" && $hold_offers->status == "active") 
                                <tr>
                                    <td>{{++$k}}</td>
                                    <td>{{$hold_offers->product_id}}</td>
                                    <td>{{$hold_offers->title}}</td>
                                    <td>{{$hold_offers->product_cat}}</td>
                                    <td>{{$hold_offers->offer_cat}}</td>
                                    <td>{{$endtime}}</td>
                                    <td><a href='/submit-offer/{{$hold_offers->id}}' target='_blank' title='Update'><i class='fa fa-edit btn btn_table'></i></a><span>|</span><a href='javascript:void(0)' onclick='delete_offer({{$hold_offers->id}},this)' title='Delete'><i class='fa fa-trash btn btn_table'></i></a><span>|</span><a onclick="put_on_hold({{$hold_offers->id}},this,1)" href='javascript:void(0)' title='Put on hold'><i class='fa fa-exclamation-triangle btn'></i></a></td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#submit').DataTable();
        $('#active').DataTable();
        $('#expired').DataTable();
        $('#onhold').DataTable();
    });
</script>
<script src="{!! asset('js/sweetalert.min.js') !!}"></script>

<script>
function put_on_hold(id,the,action) {

$.ajax({

    url: '/put-on-hold',
    type: 'post',
    data: {
        id: id,
        action: action,
        '_token': $('meta[name="csrf-token"]').attr('content'),
    },
    dataType: 'json',
    success: function(response) {

        if (response==1) {

            $(the).closest("tr").fadeOut(200, function () {
                $(this).remove();
            });

            swal({
                title: "Offer is on hold",
                text: "Selected offer is now on hold",
                icon: "success",
                buttons: false,
            })

        }else if(response == 0){
            swal({
                title: "Error",
                text: "Please try again after some time !",
                icon: "error",
                buttons: false,
            })
        }else if(response == 2){
            $(the).closest("tr").fadeOut(200, function () {
                $(this).remove();
            });

            swal({
                title: "Offer released",
                text: "Selected offer is now open for sell",
                icon: "success",
                buttons: false,
            })
        }
            $(".swal-text").css('color', '#F55F3D');
            $(".swal-text").css('font-weight', '600');
            $(".swal-title").css('font-size', '18px');

        }
    });
}
function delete_offer(id,the) {

$.ajax({

    url: '/offer-delete',
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
</script>
@include('layouts.master.footer')