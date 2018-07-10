@extends('site.layout')
@section('content')
    <div class="container">
        <div id="content">
            <div class="row">
                <div class="col-sm-9">

                    <div class="row">
                        <div class="col-sm-4">
                            <img src="source/image/product/{{$product->image}}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <div class="single-item-body">
                                <p class="single-item-title"><b>{{$product->name}}</b></p>
                                @if($product->promotion_price == 0)
                                <p class="single-item-price">
                                    <span>{{number_format($product->unit_price)}} VNĐ</span>
                                </p>
                                @else
                                <p class="single-item-price">
                                    <span class="flash-del">{{number_format($product->unit_price)}} VNĐ</span>
                                    <span class="flash-sale">{{number_format($product->promotion_price)}} VNĐ</span>
                                </p>
                                @endif
                            </div>

                            <div class="clearfix"></div>
                            <div class="space20">&nbsp;</div>

                            <p>Số lượng:</p>
                            <div class="single-item-options">
                                <input type="number" min="1" value="1" style="width: 70px;height: 34px">
                                <a class="add-to-cart" product_id="{{$product->id}}" href=""><i class="fa fa-shopping-cart"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="space40">&nbsp;</div>
                    <div class="woocommerce-tabs">
                        <ul class="tabs">
                            <li><a href="#tab-description">Mô tả</a></li>
                        </ul>

                        <div class="panel" id="tab-description">
                            <p>{{$product->description}}</p>
                        </div>
                    </div>
                    <div class="space50">&nbsp;</div>
                    <div class="beta-products-list">
                        <h4>Sản phẩm tương tự</h4>

                        <div class="row">
                            @foreach($sanphamtt as $row)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    @if($row->promotion_price != 0)
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{route('chitiet',$row->id)}}">
                                            <img src="source/image/product/{{$row->image}}" alt="" height="250px">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$row->name}}</p>
                                        @if($row->promotion_price == 0)
                                            <p class="single-item-price">
                                                <span>{{number_format($row->unit_price)}} VNĐ</span>
                                            </p>
                                        @else
                                            <p class="single-item-price">
                                                <span class="flash-del">{{number_format($row->unit_price)}} VNĐ</span>
                                                <span class="flash-sale">{{number_format($row->promotion_price)}} VNĐ</span>
                                            </p>
                                        @endif
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" product_id="{{$row->id}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{route('chitiet',$row->id)}}">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div> <!-- .beta-products-list -->
                </div>
                <div class="col-sm-3 aside">
                    <div class="widget">
                        <h3 class="widget-title">Sản phẩm bán chạy</h3>
                        <div class="widget-body">
                            <div class="beta-sales beta-lists">
                                @foreach($bestsell as $row)
                                    <div class="media beta-sales-item">
                                        <a class="pull-left" href="{{route('chitiet',['id' => $row->id])}}"><img src="source/image/product/{{$row->image}}" alt=""></a>
                                        <div class="media-body">
                                            <p>{{$row->name}}</p>
                                            @if($row->promotion_price == 0)
                                                <span class="beta-sales-price">{{number_format($row->unit_price)}} VNĐ</span>
                                            @else
                                                <span class="beta-sales-price">{{number_format($row->promotion_price)}} VNĐ</span>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div> <!-- best sellers widget -->
                    <div class="widget">
                        <h3 class="widget-title">Sản phẩm mới</h3>
                        <div class="widget-body">
                            <div class="beta-sales beta-lists">
                                @foreach($new_product as $row)
                                <div class="media beta-sales-item">
                                    <a class="pull-left" href="{{route('chitiet',['id' => $row->id])}}"><img src="source/image/product/{{$row->image}}" alt=""></a>
                                    <div class="media-body">
                                        <p>{{$row->name}}</p>
                                        @if($row->promotion_price == 0)
                                            <span class="beta-sales-price">{{number_format($row->unit_price)}} VNĐ</span>
                                        @else
                                            <span class="beta-sales-price">{{number_format($row->promotion_price)}} VNĐ</span>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div> <!-- best sellers widget -->
                </div>
            </div>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
