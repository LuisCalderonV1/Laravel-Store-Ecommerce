<div class="container my-5 px-0">
    <!--Carousel Wrapper-md-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item d-none d-md-block" data-ride="carousel">
        <!--Controls-->
        <div class="my-4">
            <a class="btn-primary px-3 py-2 mx-2 btn-floating rounded" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-primary px-3 py-2 mx-2 btn-floating rounded" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
        </div>
        <!--Slides-md-->
        <div class="carousel-inner" role="listbox">
            @if(isset($related[0]))
            <div class="carousel-item active">
                <div class="row">
                    <?php $n=0; ?>                
                    @foreach($related[0] as $product)
                        @if($n==0)
                        <div class="col-md-4"> 
                        @else
                        <div class="col-md-4 clearfix d-none d-md-block"> 
                        @endif                   
                        @include('frontend._product-card')
                        </div>
                    <?php $n++; ?>
                    @endforeach
                </div>
            </div>
            @endif
            @if(isset($related[1]))
            <div class="carousel-item">
                <div class="row">
                    <?php $n=0; ?>                
                    @foreach($related[1] as $product)
                        @if($n==0)
                        <div class="col-md-4"> 
                        @else
                        <div class="col-md-4 clearfix d-none d-md-block"> 
                        @endif                   
                        @include('frontend._product-card')
                        </div>
                    <?php $n++; ?>
                    @endforeach
                </div>
            </div>
            @endif
            @if(isset($related[2]))
            <div class="carousel-item">
                <div class="row">
                    <?php $n=0; ?>                
                    @foreach($related[2] as $product)
                        @if($n==0)
                        <div class="col-md-4"> 
                        @else
                        <div class="col-md-4 clearfix d-none d-md-block"> 
                        @endif                   
                        @include('frontend._product-card')
                        </div>
                    <?php $n++; ?>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
    <!--Carousel Wrapper-Small-->
    <div id="multi-item-example2" class="carousel slide carousel-multi-item d-block d-md-none" data-ride="carousel">
        <!--Controls-->
        <div class="my-4">
            <a class="btn-primary px-3 py-2 mx-2 btn-floating rounded" href="#multi-item-example2" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-primary px-3 py-2 mx-2 btn-floating rounded" href="#multi-item-example2" data-slide="next"><i class="fa fa-chevron-right"></i></a>
        </div>
        <!--Slides-sm-->
        <div class="carousel-inner d-block d-md-none" role="listbox">
            @if(isset($related[0]))
            <div class="carousel-item active">
                @foreach($related[0] as $product)
                <div class="row">
                    <div class="col-md-4">                   
                        @include('frontend._product-card')
                    </div>
                </div>
                @endforeach
            </div>
            @endif
            @if(isset($related[1]))
            <div class="carousel-item">
                @foreach($related[1] as $product)
                <div class="row">
                    <div class="col-md-4">                   
                        @include('frontend._product-card')
                    </div>
                </div>
                @endforeach
            </div>
            @endif
            @if(isset($related[2]))
            <div class="carousel-item">
                @foreach($related[2] as $product)
                <div class="row">
                    <div class="col-md-4">                   
                        @include('frontend._product-card')
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>