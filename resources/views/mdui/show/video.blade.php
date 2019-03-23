@extends('mdui.layouts.main')
@section('css')
    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.2/plyr.css">
@stop
@section('js')
    <script src="https://cdn.plyr.io/3.5.2/plyr.js"></script>
    <script>
        const player = new Plyr('#player', {
            iconUrl: "https://cdn.plyr.io/3.5.2/plyr.svg",
        });
    </script>
@stop
@section('content')

    <div class="mdui-container-fluid">
        <div class="mdui-typo mdui-m-y-2">
            <div class="mdui-typo-subheading-opacity">{{ $file['name'] }}</div>
        </div>
        <div class="mudi-center" id="video-player">
            <video crossorigin playsinline controls poster="{!! $file['thumb'] !!}" id="player">
                <source src="{!! $file['download'] !!}" type="video/mp4">
            </video>
        </div>
        <br>
        <p class="text-danger">如无法播放或格式不受支持，推荐下载使用 <a href="https://pan.lanzou.com/b112173"
                                                      target="_blank">potplayer</a> 播放器在线播放</p>
        <div class="mdui-textfield">
            <label class="mdui-textfield-label" for="downloadUrl">下载地址</label>
            <input class="mdui-textfield-input" type="text" id="downloadUrl"
                   value="{{ route('download',\App\Helpers\Tool::getEncodeUrl($origin_path)) }}"/>
        </div>
    </div>
    <a href="{{ $file['download'] }}" class="mdui-fab mdui-fab-fixed mdui-ripple mdui-color-theme-accent"><i
            class="mdui-icon material-icons">file_download</i></a>
@stop
