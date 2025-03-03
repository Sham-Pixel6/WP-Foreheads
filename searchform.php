<section class="custom-searchform">
    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
        <label class="screen-reader-text" for="s"><?php _x('Search for:', 'label'); ?></label>

        <div class="search-input-wrapper">
            <input type="search" class="search-field outline" placeholder="Search News" value="<?php echo get_search_query(); ?>" name="s" id="s" />
            <button type="submit" id="searchsubmit" class="search-icon-btn">
                <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 -960 960 960" width="18px" style="max-width: none;" fill="#ffffff">
                    <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                </svg>
            </button>
        </div>
    </form>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("searchform").addEventListener("submit", function(event) {
            let searchInput = document.getElementById("s").value.trim();
            if (searchInput === "") {
                event.preventDefault();
                window.location.href = "<?php echo site_url('/blog'); ?>";
            }
        });
    });
</script>