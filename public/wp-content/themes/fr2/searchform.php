<form action="/" method="get" id="blog-search-form">
    <fieldset>
        <label for="search">Search in <?php echo home_url( '/' ); ?></label>
        <input type="text" name="s" id="blog-search-term" value="<?php the_search_query(); ?>" placeholder="Enter Your Search Terms" />
        <input type="submit" name="search" id="blog-search-submit" />
    </fieldset>
</form>