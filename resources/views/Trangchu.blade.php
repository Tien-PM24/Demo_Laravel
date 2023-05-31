<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gon API</title>
</head>
<body>

@include('header')
<div class="rev-slider">
    <div class="fullwidthbaner-container">
        <div class="fullwidthbaner">
            <div class="banercontainer">
                <div class="baner">
                    <ul>
                        @foreach($slide as $sl)
                        <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden;
                        z-index: 18; visibility: hidden; opacity: 0;">
                        <div class="slotholder" style="width: 100%; height: 100%;" data-duration="undifined" data-zoomstart="undifined" data-zoomend="undifined"
                        data-bgposition="undifined" data-kenburns="undifined" data-easeme="undifined" data-bgfit="undifined" data-bgfitend="undifined" ></div>
                        </li>   
                            <img src="/source/image/slide/{{$sl->image}}" alt="It'ok">
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<h2>Sản phẩm mới</h2>
@foreach($new_product as $new)
<div class="col-sm-3">
    <div class="sigle-item">
        @if ($new->promotion_price!=0)
        <div class="ribbon-wrapper"></div>
        @endif

        <div class="sigle-item-header">
            <a href="product.html"><img src="/source/image/product/{{$new->image}}" alt=""></a>
        </div>
        <div class="sigle-item-body">
            <p class="sigle-item-title">{{$new->name}}</p>
            <p class="sigle-item-price">{{$new->name}}</p>
            @if ($new->promotion_price==0)
            <span class="flash-sale">{{$new->unit_price}} đồng</span>
            @else
            <span class="flash-dell">{{$new->unit_price}} đồng</span>
            <span class="flash-sale">{{$new->promotion_price}} đồng</span>
            @endif
        </div>
        <span class="flash-sale">{{$new->unit_price}} đồng</span>
    </div>
    <button class="buy">Buy</button>
    <button class="detail">Detail</button>
</div>
@endforeach

@include("master")

@include('footer')

@include('script')

</body>
</html>