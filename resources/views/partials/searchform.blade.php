<ul id="inline-popups" class="mb-0">
  <li>
    <a href="#search-content" data-effect="mfp-zoom-in"><i class="fa fa-search"></i></a>
  </li>
</ul>


<!-- Popup itself -->
<div id="search-content" class="hidden-sm-down white-popup mfp-with-anim mfp-hide search-box">
  <div class="search-box slideInUp">
    <main class="main-wrap">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-12 col-sm-12 col-xs-12 m-auto">
            <form class="search-form" action="<?php bloginfo('url'); ?>">
              <div class="input-group col-12 p-0">
                <button type="submit" name="button" class=""><i class="fa fa-search"></i></button>
                <input id="autocomplete" class="search-input form-control" name="s" value="<?= get_search_query(); ?>" type="search" placeholder="<?php  _e('إكتب كلمة البحث ثم إضغط زر الإدخال','cbc');?>" autocomplete="off" spellcheck="false" maxlength="100">
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
