<!--=========home banner start============-->
<div id="minimal-bootstrap-carousel" class="home5 carousel slide carousel-fade shop-slider full_width" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @foreach($slider as $key => $slide)
        <div class="item @if($key==1) active @endif slide-{{$key}}" style="background-image: url(<?php echo $slide->image ?>);background-position: center right;">
            <div class="carousel-caption">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content text-left">
                            <h1 data-animation="animated fadeInUp">{{ $slide->heading }}</h1>
                            <p data-animation="animated fadeInDown">{{ $slide->description }}</p>
                            @if($slide->button_1)
                            <a data-animation="animated fadeInUp" href="{{ $slide->button_1_url }}" class="header-requestbtn learn-more hvr-bounce-to-right">{{ $slide->button_1 }}</a>
                            @endif
                            @if($slide->button_1)
                            <a data-animation="animated fadeInUp" href="{{ $slide->button_2_url }}" class="header-requestbtn learn-more our-solution hvr-bounce-to-right">{{ $slide->button_2 }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        @endforeach
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev"> <i class="fa fa-angle-left"></i> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next"> <i class="fa fa-angle-right"></i> <span class="sr-only">Next</span> </a>
</div>