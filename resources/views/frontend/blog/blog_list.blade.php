<div class="container">
    @foreach($blog as $blog)
        {!! $blog->seo_description !!}
    @endforeach
</div>
@section('title')
{!! $category->seo_title !!}
@endsection()
@section('description')
{!! $category->seo_description !!}
@endsection()
@section('seo_keywords')
{!! $category->seo_keywords !!}
@endsection()