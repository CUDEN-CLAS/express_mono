<?php

/**
 * @file
 *
 * Template file for facebook like button bean.
 */
 ?>
<iframe class="iframe-facebook-like" src="//www.facebook.com/plugins/like.php?href=<?php print urlencode(render($content['field_fb_url'][0]['#element']['url'])); ?>&amp;send=false&amp;layout=standard&amp;show_faces=<?php print render($content['field_fb_like_faces'][0]['#markup']); ?>&amp;action=<?php print render($content['field_fb_verb'][0]['#markup']); ?>&amp;colorscheme=light&amp;font&amp;height=80&amp;appId=137301796349387" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%;" allowTransparency="true"></iframe>
