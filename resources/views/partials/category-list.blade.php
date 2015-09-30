
@if (count($index['subcategories']))
    <h3>{{ trans('kwiki::page.subcategories') }}</h3>
    <ol>
        @foreach ($index['subcategories'] as $subcategory)
            <li><a href="{{ $subcategory['href'] }}">{{ $subcategory['name'] }}</a></li>
        @endforeach
    </ol>
@endif

@if (count($index['files']))
    <h3>{{ trans('kwiki::page.posts') }}</h3>
    <ol>
        @foreach ($index['files'] as $file)
            <li><a href="{{ $file['href'] }}">{{ $file['name'] }}</a></li>
        @endforeach
    </ol>
@endif
