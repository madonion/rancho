<?php $thisPage =  Request::path() ?>
    <header>
        <div class="container">
            <div class="title-container">
                @if($thisPage == '/')
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="title">B&amp;B accommodation and weddings in Málaga, Andalucia</h1>
                        </div>
                        <div class="col-md-6">
                            <span class="pull-right vtar">VTAR MA/0888</span>
                        </div>
                    </div>


                @endif
            </div>
            <div class="row">
                <div class="center-block" style="width:250px">
                    <a href="{{URL::to('/')}}">
                        <img src="<?=Request::root()?>/images/logo.gif" class="logo img-responsive" />
                    </a>
                </div>
            </div>
        </div>
    </header>