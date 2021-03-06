
{{-- JS STYLE --}}
{!! Html::script('style/js/jquery.min.js', ['defer' => 'defer']) !!}
{!! Html::script('style/js/popper.min.js', ['defer' => 'defer']) !!}
{!! Html::script('style/js/bootstrap.min.js', ['defer' => 'defer']) !!}
{{-- JS REVOLUTION --}}
{!! Html::script('style/revolution/js/jquery.themepunch.tools.min.js', ['defer' => 'defer']) !!}
{!! Html::script('style/revolution/js/jquery.themepunch.revolution.min.js', ['defer' => 'defer']) !!}
{!! Html::script('style/revolution/js/extensions/revolution.extension.actions.min.js', ['defer' => 'defer']) !!}
{!! Html::script('style/revolution/js/extensions/revolution.extension.carousel.min.js', ['defer' => 'defer']) !!}
{!! Html::script('style/revolution/js/extensions/revolution.extension.kenburn.min.js', ['defer' => 'defer']) !!}
{!! Html::script('style/revolution/js/extensions/revolution.extension.layeranimation.min.js', ['defer' => 'defer']) !!}
{!! Html::script('style/revolution/js/extensions/revolution.extension.migration.min.js', ['defer' => 'defer']) !!}
{!! Html::script('style/revolution/js/extensions/revolution.extension.navigation.min.js', ['defer' => 'defer']) !!}
{!! Html::script('style/revolution/js/extensions/revolution.extension.parallax.min.js', ['defer' => 'defer']) !!}
{!! Html::script('style/revolution/js/extensions/revolution.extension.slideanims.min.js', ['defer' => 'defer']) !!}
{!! Html::script('style/revolution/js/extensions/revolution.extension.video.min.js', ['defer' => 'defer']) !!}

{!! Html::script('style/js/plugins.js', ['defer' => 'defer']) !!}
{!! Html::script('style/js/scripts.js', ['defer' => 'defer']) !!}

{{-- JS CUSTOM --}}
{!! Html::script('js/custom.js', ['defer' => 'defer']) !!}

{{-- JS PAGE CUSTOM --}}
@yield('js-custom')
