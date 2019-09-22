<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Algolia search</title>

    <link href="{{ asset('css/algolia.css') }}" rel="stylesheet">
</head>
<body>
<form onsubmit="return false;" class="searchbox">
    <div role="search" class="searchbox__wrapper">
        <input id="search-input" type="search" name="search" placeholder="Vyhledat článek..." autocomplete="off" required="required" class="searchbox__input">
        <button type="submit" class="searchbox__submit">
            <svg class="aa-input-icon" viewBox="0 0 40 40">
                <path d="M26.806 29.012a16.312 16.312 0 0 1-10.427 3.746C7.332 32.758 0 25.425 0 16.378 0 7.334 7.333 0 16.38 0c9.045 0 16.378 7.333 16.378 16.38 0 3.96-1.406 7.593-3.746 10.426L39.547 37.34c.607.608.61 1.59-.004 2.203a1.56 1.56 0 0 1-2.202.004L26.807 29.012zm-10.427.627c7.322 0 13.26-5.938 13.26-13.26 0-7.324-5.938-13.26-13.26-13.26-7.324 0-13.26 5.936-13.26 13.26 0 7.322 5.936 13.26 13.26 13.26z" fill-rule="evenodd"/>
            </svg>
        </button>
        <button type="reset" title="Clear the search query." class="searchbox__reset hide">
            <svg role="img" aria-label="Reset" viewBox="0 0 40 40">
                <path d="M16.228 20L1.886 5.657 0 3.772 3.772 0l1.885 1.886L20 16.228 34.343 1.886 36.228 0 40 3.772l-1.886 1.885L23.772 20l14.342 14.343L40 36.228 36.228 40l-1.885-1.886L20 23.772 5.657 38.114 3.772 40 0 36.228l1.886-1.885L16.228 20z" fill-rule="evenodd"/>
            </svg>
        </button>
    </div>
</form>

<script src="//cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="//cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script src="{{ asset('js/algolia.js') }}"></script>

</body>
</html>
