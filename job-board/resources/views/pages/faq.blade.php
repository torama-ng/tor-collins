@extends('layouts.app')
@section('content')
<section class="inner-header-title" style="background-image:url(http://via.placeholder.com/1920x850);">
    <div class="container">
        <h1>FAQ</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- Accordion Design Start -->
<section class="accordion">
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <div class="simple-tab">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                   Our Work Process
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam congue leo in congue mattis. Phasellus leo augue, consequat vitae cursus ut, efficitur a elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What We Do?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam congue leo in congue mattis. Phasellus leo augue, consequat vitae cursus ut, efficitur a elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How We Do?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam congue leo in congue mattis. Phasellus leo augue, consequat vitae cursus ut, efficitur a elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
@endsection
