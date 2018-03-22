 <?php
  // Build out URI to reload from form dropdown
  // Need full url for this to work in Opera Mini
  $pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";

  if (isset($_POST['sg_uri']) && isset($_POST['sg_section_switcher'])) {
     $pageURL .= $_POST[sg_uri].$_POST[sg_section_switcher];
     $pageURL = htmlspecialchars( filter_var( $pageURL, FILTER_SANITIZE_URL ) );
     header("Location: $pageURL");
  }
 // Display title of each markup samples as a select option
  function listElementsAsOptions ($type) {
    $files = array();
    $handle=opendir($type.'/');
    while (false !== ($file = readdir($handle))):
        if(stristr($file,'.html')):
            $files[] = $file;
        endif;
    endwhile;
    echo '<div role="presentation" class="dropdown-header">'.$type.'</div>';
    sort($files);
    foreach ($files as $file):
        $filename = preg_replace("/\.html$/i", "", $file);
        $title = preg_replace("/\-/i", " ", $filename);
        $title = ucwords($title);
        echo '<a class="dropdown-item text-sm" href="#sg-'.$filename.'">'.$title.'</a>';
    endforeach;
  }
  // Display title of each markup samples as a select option
  function listMarkupAsOptions ($type) {
    $files = array();
    $handle=opendir('markup/'.$type);
    while (false !== ($file = readdir($handle))):
        if(stristr($file,'.html')):
            $files[] = $file;
        endif;
    endwhile;

    sort($files);
    foreach ($files as $file):
        $filename = preg_replace("/\.html$/i", "", $file);
        $title = preg_replace("/\-/i", " ", $filename);
        $title = ucwords($title);
        echo '<a class="dropdown-item text-sm" href="#sg-'.$filename.'">'.$title.'</a>';
    endforeach;
  }
    // Display docs elements
    function showDocs() {
      $files = array();
      $handle=opendir('docs/');
      while (false !== ($file = readdir($handle))):
          if(stristr($file,'.html')):
              $files[] = $file;
          endif;
      endwhile;

      sort($files);
      foreach ($files as $file):
          $filename = preg_replace("/\.html$/i", "", $file);
          $title = preg_replace("/\-/i", " ", $filename);
          echo '<div class="sg-section" id="sg-'.$filename.'">';
          echo '<h2 class="sg-h2">'.$title.'</h2>';
          include('docs/'.$file);
          echo '</div><!--/.sg-section-->';
      endforeach;
    }
  // Display foundation elements
  function showFoundation() {
    $files = array();
    $handle=opendir('foundation/');
    while (false !== ($file = readdir($handle))):
        if(stristr($file,'.html')):
            $files[] = $file;
        endif;
    endwhile;

    sort($files);
    foreach ($files as $file):
        $filename = preg_replace("/\.html$/i", "", $file);
        $title = preg_replace("/\-/i", " ", $filename);
        echo '<div class="sg-section" id="sg-'.$filename.'">';
        echo '<h2 class="sg-h2">'.$title.'</h2>';
        include('foundation/'.$file);
        echo '</div><!--/.sg-section-->';
    endforeach;
  }
  // Scaffolding
  function showScaffolding() {
    $files = array();
    $handle=opendir('scaffolding/');
    while (false !== ($file = readdir($handle))):
        if(stristr($file,'.html')):
            $files[] = $file;
        endif;
    endwhile;

    sort($files);
    foreach ($files as $file):
        $filename = preg_replace("/\.html$/i", "", $file);
        $title = preg_replace("/\-/i", " ", $filename);
        echo '<div class="sg-section" id="sg-'.$filename.'">';
        echo '<h2 class="sg-h2">'.$title.'</h2>';
        include('scaffolding/'.$file);
        echo '</div><!--/.sg-section-->';
    endforeach;
  }
  // Utilities
  function showUtilities() {
    $files = array();
    $handle=opendir('utilities/');
    while (false !== ($file = readdir($handle))):
        if(stristr($file,'.html')):
            $files[] = $file;
        endif;
    endwhile;

    sort($files);
    foreach ($files as $file):
        $filename = preg_replace("/\.html$/i", "", $file);
        $title = preg_replace("/\-/i", " ", $filename);
        echo '<div class="sg-section" id="sg-'.$filename.'">';
        echo '<h2 class="sg-h2">'.$title.'</h2>';
        include('utilities/'.$file);
        echo '</div><!--/.sg-section-->';
    endforeach;
  }
  // Display markup view & source
  function showMarkup($type) {
    $files = array();
    $handle=opendir('markup/'.$type);
    while (false !== ($file = readdir($handle))):
        if(stristr($file,'.html')):
            $files[] = $file;
        endif;
    endwhile;

    sort($files);
    foreach ($files as $file):
        $filename = preg_replace("/\.html$/i", "", $file);
        $title = preg_replace("/\-/i", " ", $filename);
        $documentation = 'usage/'.$type.'/'.$file;
        echo '<div class="sg-markup sg-section" id="sg-'.$filename.'" class="sg-anchor">';
        echo '<h2 class="sg-h2">'.$title.'</h2>';
        //echo '<div class="col-md-10 col-md-offset-1">';
        //echo '<div class="row"><div class="col-md-8">';
        //echo '<h3 class="sg-h3">Example</h3>';
        if (file_exists($documentation)) {
          echo '<div class="card card-highlight card-sm card-block text-sm sg-usage">';
          echo '<h3 class="text-uc text-muted m-b-sm">Usage Notes</h3>';
          include($documentation);
          echo '</div>';
        }
        include('markup/'.$type.'/'.$file);
        echo '<div class="sg-markup-controls"><a class="btn btn-info btn-sm sg-btn sg-btn--source" href="javascript:void()"><svg class="icon icon-code"><use xlink:href="#icon-code"></use></svg> View Source</a> <a class="btn btn-sm btn-primary sg-btn--top" href="#top">Back to Top</a> </div>';
        echo '<div class="sg-source sg-animated">';
        echo '<a class="btn btn-success m-r-sm btn-sm sg-btn sg-btn--select" href="javascript:void()">Copy Source</a>';
        echo '<pre class="prettyprint linenums"><code>';
        echo htmlspecialchars(file_get_contents('markup/'.$type.'/'.$file));
        echo '</code></pre>';
        echo '</div><!--/.sg-source-->';
        //echo '</div><!--/.colmd10-->';
        echo '</div><!--/.sg-section-->';
    endforeach;
  }
?>
