var client = algoliasearch("VaseIdAplikace", "VasPublicApiKlic");
var index = client.initIndex('articles');
var myAutocomplete = autocomplete('#search-input', {hint: false}, [
    {
        source: autocomplete.sources.hits(index, {hitsPerPage: 5}),
        displayKey: 'title',
        templates: {
            suggestion: function (suggestion) {
                var sugTemplate = "<span>" + suggestion._highlightResult.title.value + "</span>";
                return sugTemplate;
            },
            empty: function (result) {
                return 'Bohužel jsme nenašli žádný článek pro slovo "' + result.query + '"';
            }
        }
    }
]).on('autocomplete:selected', function (event, suggestion, dataset) {
    window.location.href = window.location.origin + '/clanek/' + suggestion.slug;
});

document.querySelector(".searchbox [type='reset']").addEventListener("click", function () {
    document.querySelector(".aa-input").focus();
    this.classList.add("hide");
    myAutocomplete.autocomplete.setVal("");
});

document.querySelector("#search-input").addEventListener("keyup", function () {
    var searchbox = document.querySelector(".aa-input");
    var reset = document.querySelector(".searchbox [type='reset']");
    if (searchbox.value.length === 0) {
        reset.classList.add("hide");
    } else {
        reset.classList.remove('hide');
    }
});
