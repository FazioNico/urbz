/*
 * load twitter feeds on the right column
 */
var feed_twitter_html = '';
var feed_twitter_data;

function generateHtml(obj) {

  var html = '<p class="tweet-text">' + obj.text;

  // replace tags & link
  if (obj.entities) {

    if (typeof obj.entities.hashtags != 'undefined') {
      var i, l = obj.entities.hashtags.length;
      for (i = 0; i < l; i++) {
        var regEx = new RegExp('#' + obj.entities.hashtags[i].text, "ig"),
            replace = '<a href="https://twitter.com/hashtag/' + obj.entities.hashtags[i].text + '" class="hashtag-link" target="_blank">#' + obj.entities.hashtags[i].text + '</a>';
        html = html.replace(regEx, replace);
      }
    }

    if (typeof obj.entities.user_mentions != 'undefined') {
      var i, l = obj.entities.user_mentions.length;
      for (i = 0; i < l; i++) {
        var regEx = new RegExp('@' + obj.entities.user_mentions[i].screen_name, "ig"),
            replace = '<a class="user-link" href="https://twitter.com/' + obj.entities.user_mentions[i].screen_name + '" target="_blankn">@' + obj.entities.user_mentions[i].screen_name + '</a>';
        html = html.replace(regEx, replace);
      }
    }

    if (typeof obj.entities.urls != 'undefined') {
      var i, l = obj.entities.urls.length;
      for (i = 0; i < l; i++) {
        var regEx = new RegExp(obj.entities.urls[i].url, "ig"),
            replace = '<a href="' + obj.entities.urls[i].url + '" target="_blank">' + obj.entities.urls[i].url + '</a>';
        html = html.replace(regEx, replace);
      }
    }


    if (typeof obj.entities.media != 'undefined') {
      var i, l = obj.entities.media.length;
      for (i = 0; i < l; i++) {
        var regEx = new RegExp(obj.entities.media[i].url, "ig"),
            replace = '<a href="' + obj.entities.media[i].url + '" target="_blank">' + obj.entities.media[i].url + '</a>';
        html = html.replace(regEx, replace);
      }
    }

  }

  html += '</p>';

  if (obj.extended_entities && obj.extended_entities.media) {
    html += '<div class="tweet-media">';
    var i, l = obj.extended_entities.media.length;
    for (i = 0; i < l; i++) {
      if (obj.extended_entities.media[i].type == 'photo') {
        html += '<a class="tweet-image-link" href="' + obj.extended_entities.media[i].url + '" target="_blank"><img src="' + obj.extended_entities.media[i].media_url_https + '"></a>'
      }
    }
    html += '</div>';
  }

  obj.html =
      '<div class="tweet">\n\
      <div class="tweet-head">\n\<!--<p class="tweet-source">Twitter</p>-->\n\
      </div>\n\
      <div class="tweet-body">\n\
        <p class="tweet-user-images"><img src="' + obj.user.profile_image_url_https + '"></p>' + html + '\n\
      </div>\n\
      <p class="tweet-date"><span>' + obj.day + '</span></p>\n\
    </div>';
}

jQuery(function () {
  jQuery.get("/themes/urbz/services/tweets/request.php", function (data) {
    var element = jQuery("#feed");
    feed_twitter_data = jQuery.parseJSON(data);
    if (typeof feed_twitter_data.timeline != 'undefined') {
      feed_twitter_data = feed_twitter_data.timeline;
    }
    ;
    jQuery.each(feed_twitter_data, function (index, tweet) {
      if (tweet.retweeted_status && tweet.retweeted_status.user && tweet.retweeted_status.user.profile_image_url_https) {
        tweet.user.profile_image_url_https = tweet.retweeted_status.user.profile_image_url_https;
      }
      time = Date.parse(tweet.created_at);
      date = new Date(time);
      tweet.day = date.toUTCString();
      generateHtml(tweet);
      // if it is a retweet
      feed_twitter_html += tweet.html;
    });
    element.append(feed_twitter_html);
  });
});
