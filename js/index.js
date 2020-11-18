const $SEARCH_FORM = $("form#search");
const $SEARCH_TERM_INPUT = $("input#search-term");
const $SEARCH_RESULTS_DIV = $("div#search-results");

// functions
async function doSearch(searchTerm) {
    let url = TMDB_API_URL + "/search/movie" + generateAPIQueryString({
        query: searchTerm
    });
    let response = await fetch(url);
    let data = await response.json();

    if (data) {
        return data.results;
        // intentionally ignoring that there may be
        // more pages of search results
        // they're likely not relevant anyway
    } else {
        // TODO: failed to get info or empty result
    }
}

function isFormValid() {
    var isValid = true;

    if ($SEARCH_TERM_INPUT.val().trim().length == 0) {
        isValid = false;
    }

    return isValid;
}

// event listeners
$SEARCH_TERM_INPUT.on("input change", function(event) {
    $SEARCH_FORM.find("button")
        .attr("disabled", !isFormValid());
});

$SEARCH_FORM.on("submit", async function(event) {
    event.preventDefault();

    // validate form
    if (!isFormValid()) {
        return;
    }

    let searchTerm = $SEARCH_TERM_INPUT.val().trim();
    let results = await doSearch(searchTerm);

    if (results.length == 0) {
        $SEARCH_RESULTS_DIV.html("No results found 😔");
    } else {
        $SEARCH_RESULTS_DIV.html("");
        results.slice(0, 12).forEach(function(result) {
            let favoriteMovies = getFavoriteMovieIds();
            let movieIsAFavorite = favoriteMovies.includes(result.id);
            $SEARCH_RESULTS_DIV.append(
                generateMovieCard(result.id, result.title, result.poster_path, result.overview, movieIsAFavorite)
            );
        });
        $SEARCH_RESULTS_DIV.show();

        $("button.favorite").on("click", function(event) {
            let movieId = $(this).data("id");
            let movieIsFavorite = onMovieFavorited(movieId);

            $(this).removeClass("btn-primary").removeClass("btn-danger");
            if (movieIsFavorite) {
                $(this).html("Unfavorite").addClass("btn-danger");
                $(this).closest(".movie-card").addClass("movie-card-favorite");
            } else {
                $(this).html("Favorite").addClass("btn-primary");
                $(this).closest(".movie-card").removeClass("movie-card-favorite");
            }
        });
    }
});