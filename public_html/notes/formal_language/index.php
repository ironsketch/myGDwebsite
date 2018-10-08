            
            echo "<h3>Formal Languages</h3>";
                 $path = "formal_language/";
                     if ($handle = opendir($path)) {
                         while (false !== ($file = readdir($handle))) {
                             if ('.' === $file) continue;
                             if ('..' === $file) continue;
                             $html = explode(".", $file);
                             if($html[1] === "html"){
                                 $title = get_title($path . $file);
                                 echo "<div id='cardFormal'><span class='cardtitle'>" . $title . "</span><p class='start'><a href='" . $path . $file . "' class='startLink'>Open</a></p></div>";
                             }
                         }
                         closedir($handle);
                     }
                 echo "<h3 class='homework'>Homework</h3>";
                  $path = "formal_language/hw/";
                      if ($handle = opendir($path)) {
                          while (false !== ($file = readdir($handle))) {
                              if ('.' === $file) continue;
                              if ('..' === $file) continue;
                              $html = explode(".", $file);
                              if($html[1] === "pdf"){
                                  echo "<p class='start'><a class='startLink' href='" . $path . $file . "'>" . $file . "</a></p>";
                              }
                          }
                          closedir($handle);
                      }
                 echo "</div>";
