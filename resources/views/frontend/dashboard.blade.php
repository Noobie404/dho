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
<section id="tabs" class="project-tab">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Submited Offers</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Active Offers</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Expired Offers</a>
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
                                    <td>{{$i+1}}</td>
                                    <td>{{$pending_offers->product_id}}</td>
                                    <td>{{$pending_offers->title}}</td>
                                    <td>{{$pending_offers->product_cat}}</td>
                                    <td>{{$pending_offers->offer_cat}}</td>
                                    <td>{{$endtime}}</td>
                                    <td><a href='/sell-domain/{{$pending_offers->id}}' title='Update'><i class='fa fa-edit btn btn_table mr-2'></i></a><span>|</span><a href='javascript:void(0)' title='Delete'><i class='fa fa-trash btn btn_table ml-2'></i></a></td>
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
                            <?php $i = 0; ?>
                                @foreach($all_offers as $active_offer)
                                <?php 
                                $format = ('F d, Y');
                                $format2 = ('g:i A');
                                $format3 = ('F d, Y g:i A');

                                    $current_time = strtotime(date('Y-m-d H:i:s')); 
                                    $end_offer = strtotime($active_offer->offer_end); 
                                    $endtime = date($format3, strtotime($active_offer->offer_end));
                                ?>
                                @if ($current_time < $end_offer && $active_offer->status == "active") 
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$active_offer->product_id}}</td>
                                    <td>{{$active_offer->title}}</td>
                                    <td>{{$active_offer->product_cat}}</td>
                                    <td>{{$active_offer->offer_cat}}</td>
                                    <td>{{$endtime}}</td>
                                    <td><a href='/sell-domain/{{$active_offer->id}}' title='Update'><i class='fa fa-edit btn btn_table mr-2'></i></a><span>|</span><a href='javascript:void(0)' title='Delete'><i class='fa fa-trash btn btn_table ml-2'></i></a></td>
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
                                    <td>{{$i+1}}</td>
                                    <td>{{$expired_offers->product_id}}</td>
                                    <td>{{$expired_offers->title}}</td>
                                    <td>{{$expired_offers->product_cat}}</td>
                                    <td>{{$expired_offers->offer_cat}}</td>
                                    <td>{{$endtime}}</td>
                                    <td><a href='/sell-domain/{{$expired_offers->id}}' title='Update'><i class='fa fa-edit btn btn_table mr-2'></i></a><span>|</span><a href='javascript:void(0)' title='Delete'><i class='fa fa-trash btn btn_table ml-2'></i></a></td>
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
    });
</script>
@include('layouts.master.footer')