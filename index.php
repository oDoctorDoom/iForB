<?php
/*POST /{ig-user-id}/media?image_url={image-url}

POST graph.facebook.com/17841400008460056/media
  ?image_url=https//www.example.com/images/bronzed-fonzes.jpg
  &caption=#BronzedFonzes!
  &user_tags=
    [
      {
        username:'toDoctorDoom',
        x: 0.5,
        y: 0.8
      },
      {
        username:'toDoctorDoom',
        x: 0.3,
        y: 0.2
      }
    ]
?>
*/?>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '514488396201603',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v10.0'
    });
  };
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
<html>
GET /v10.0/{instagram-media-id} HTTP/1.1
Host: graph.facebook.com

</html>
