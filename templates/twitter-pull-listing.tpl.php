<?php

/**
 * @file
 * Theme template for a list of tweets.
 *
 * Available variables in the theme include:
 *
 * 1) An array of $tweets, where each tweet object has:
 *   $tweet->id
 *   $tweet->username
 *   $tweet->userphoto
 *   $tweet->text
 *   $tweet->timestamp
 *   $tweet->time_ago
 *
 * 2) $twitkey string containing initial keyword.
 *
 * 3) $title
 *
 */
?>
<?php if ($lazy_load): ?>
  <?php print $lazy_load; ?>
<?php else: ?>

<div class="tweets-pulled-listing">

  <?php if (!empty($title)): ?>
    <div id="header-tw">
      <h2><?php print t('Tweets'); ?></h2>
      <span class="follow"><a href="https://twitter.com/teatrenacional" target="_blank" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @teatrenacional</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      </span>
    </div>
  <?php endif; ?>

  <?php if (is_array($tweets)): ?>
    <?php $tweet_count = count($tweets); ?>
    
    <ul class="tweets-pulled-listing">
    <?php foreach ($tweets as $tweet_key => $tweet): ?>
      <li>
        <div class="tweet-author-wrapper clearfix">
          <div class="tweet-author-info clearfix">
            <div class="tweet-authorphoto">
              <?php print l("<img src=\"$tweet->userphoto\" alt=\"$tweet->username\" />", 'https://twitter.com/' . $tweet->screenname, array('html' => TRUE)); ?>
            </div>
            <div class="tweet-author"><?php print l($tweet->username, 'https://twitter.com/' . $tweet->screenname); ?></div>
            <div class="tweet-screenname"><?php print l('@' . $tweet->screenname, 'https://twitter.com/' . $tweet->screenname); ?></div>
          </div>
          <?php// print l(t("Follow @$tweet->screenname"), 'https://twitter.com/' . $tweet->screenname, array('attributes'=> array(
             // 'class' => array('twitter-follow-button'),
             // 'data-show-count' => 'false',
             // 'data-lang' => $language,
             // 'data-width' => '75px',
          //  )));?>
        </div>
        <div class="tweet-text"><?php print twitter_pull_add_links($tweet->text); ?></div>
        <div class="tweet-footer">
          <div class="tweet-time"><?php print l($tweet->time_ago, 'http://twitter.com/' . $tweet->screenname . '/status/' . $tweet->id);?></div>
          <div class="tweet-actions">
            <?php print l('Reply', "https://twitter.com/intent/tweet?in_reply_to=$tweet->id", array('attributes' => array('class' => 'twitter-reply'))); ?>
            <?php print l('Retweet', "https://twitter.com/intent/retweet?tweet_id=$tweet->id", array('attributes' => array('class' => 'twitter-retweet'))); ?>
            <?php print l('Favorite', "https://twitter.com/intent/favorite?tweet_id=$tweet->id", array('attributes' => array('class' => 'twitter-favorite'))); ?>
          </div>
        </div>
        <?php if ($tweet_key < $tweet_count - 1): ?>
          <div class="tweet-divider"></div>
        <?php endif; ?>
        
      </li>
    <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>

<?php endif; ?>
