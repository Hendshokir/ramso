jQuery(document).ready(function ($) {
  var ajax_url = '/wp/wp-admin/admin-ajax.php';

  $('#autocomplete').autocomplete({
    minChars: 4,
    serviceUrl: ajax_url,
    type: 'POST',
    dataType: 'json',
    paramName: 'name',
    params: {
      action: 'get_listing_names',
    },
    beforeRender: function (container, suggestions) {
      container.find('.autocomplete-suggestion').each(function (i, suggestion) {
        $(suggestion).wrapInner('<div class="search-resulte"><h3></h3><time>' + suggestions[i].time + '</time><h5>' + suggestions[i].data + '</h5></div>');
        $('.search-form .fa').removeClass("fa-circle-o-notch fa-spin");
        $('.search-form .fa').addClass("fa-search");
      });
    },
    onSearchStart: function () {
        $('.search-form .fa').removeClass("fa-search");
        $('.search-form .fa').addClass("fa-circle-o-notch fa-spin");
    },
    onSelect: function (suggestion) {
      location.href = suggestion.url;
    },
  });
});
