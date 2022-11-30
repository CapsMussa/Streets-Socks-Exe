<style>
    .mass_blocks{
        margin:20px;
        width:1100px;
        height: 1000px;
    }
    .block_t{
        padding: 5px;
        margin-right: 20px;
        margin-bottom:20px;
        float:left;
        width:237px;
        height: 315px;
        box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.5);
    }
    .block_t:hover{
        box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.5);
    }
</style>

@extends('/page/header')
@section('catalog')
    <div class="catalog_head">
        <a1>Каталог</a1>
    </div>
    @endsection

@section('block_t')
<div class="mass_blocks">
    <div class="block_t"></div>
    <div class="block_t"></div>
    <div class="block_t"></div>
    <div class="block_t"></div>
    <div class="block_t"></div>
</div>
@endsection
