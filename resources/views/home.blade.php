@extends('layout.layout')

@section('title')
    @parent
    Home
@endsection

@section('content')
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris placerat sed quam ut facilisis. Suspendisse tortor neque, dignissim nec augue id, rutrum finibus ex. Quisque blandit, lorem et mattis fringilla, tellus purus maximus lacus, ac vehicula lectus nibh sed dolor. Sed felis lorem, consectetur id luctus quis, ornare quis ligula. Praesent vel sollicitudin diam. In hac habitasse platea dictumst. Proin suscipit varius ullamcorper. Aenean justo urna, consectetur non turpis non, bibendum imperdiet urna. </p>
    <br />
    <br />
    <div id="product_tab">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#new" aria-controls="new" role="tab" data-toggle="tab">Produk baru</a>
            </li>
            <li role="presentation" class="">
                <a href="#best" aria-controls="best" role="tab" data-toggle="tab">Banyak diminati</a>
            </li>
            <li role="presentation" class="">
                <a href="#most" aria-controls="most" role="tab" data-toggle="tab">Banyak dibeli</a>
            </li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="new">New</div>
            <div role="tabpanel" class="tab-pane" id="best">Best</div>
            <div role="tabpanel" class="tab-pane" id="most">Most</div>
        </div>
    </div>
@endsection