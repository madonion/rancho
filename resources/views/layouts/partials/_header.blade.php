<?php $thisPage =  Request::path() ?>
    <header>
        <div class="container">
            <div class="title-container">
                @if($thisPage == '/')
                    <h1 class="title">B&amp;B accommodation and weddings in Málaga, Andalucia</h1>
                    <span class="pull-right vtar">VTAR MA/0888</span>
                @endif
            </div>
            <a href="{{URL::to('/')}}">
            <img src="<?=Request::root()?>/images/logo.gif" class="logo center-block img-responsive" />
            </a>
        </div>
    </header>