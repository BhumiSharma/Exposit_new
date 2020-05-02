<!DOCTYPE html>
<html class="no-js">
 <?php include("header.php"); ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ExpoSit</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Js -->
    
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/min/waypoints.min.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/google-map-init.js"></script>
    <script src="js/main.js"></script>
<style>
.main-timeline{position:relative}
.main-timeline:before{content:"";width:5px;height:100%;border-radius:20px;margin:0 auto;background:#8e43e7;position:absolute;top:0;left:0;right:0}
.main-timeline .timeline{display:inline-block;margin-bottom:50px;position:relative}
.main-timeline .timeline:before{content:"";width:20px;height:20px;border-radius:50%;border:4px solid #fff;background:#8e43e7;position:absolute;top:50%;left:50%;z-index:1;transform:translate(-50%,-50%)}
.main-timeline .timeline-icon{display:inline-block;width:130px;height:130px;border-radius:50%;border:3px solid #ec496e;padding:13px;text-align:center;position:absolute;top:50%;left:30%;transform:translateY(-50%)}
.main-timeline .timeline-icon i{display:block;border-radius:50%;background:#ec496e;font-size:64px;color:#fff;line-height:100px;z-index:1;position:relative}
.main-timeline .timeline-icon:after,.main-timeline .timeline-icon:before{content:"";width:100px;height:4px;background:#ec496e;position:absolute;top:50%;right:-100px;transform:translateY(-50%)}
.main-timeline .timeline-icon:after{width:70px;height:50px;background:#fff;top:89px;right:-30px}
.main-timeline .timeline-content{width:50%;padding:0 50px;margin:52px 0 0;float:right;position:relative}
.main-timeline .timeline-content:before{content:"";width:70%;height:100%;border:3px solid #ec496e;border-top:none;border-right:none;position:absolute;bottom:-13px;left:35px}
.main-timeline .timeline-content:after{content:"";width:37px;height:3px;background:#ec496e;position:absolute;top:13px;left:0}
.main-timeline .title{font-size:20px;font-weight:600;color:#ec496e;text-transform:uppercase;margin:0 0 5px}
.main-timeline .description{display:inline-block;font-size:16px;color:#404040;line-height:20px;letter-spacing:1px;margin:0}
.main-timeline .timeline:nth-child(even) .timeline-icon{left:auto;right:30%}
.main-timeline .timeline:nth-child(even) .timeline-icon:before{right:auto;left:-100px}
.main-timeline .timeline:nth-child(even) .timeline-icon:after{right:auto;left:-30px}
.main-timeline .timeline:nth-child(even) .timeline-content{float:left}
.main-timeline .timeline:nth-child(even) .timeline-content:before{left:auto;right:35px;transform:rotateY(180deg)}
.main-timeline .timeline:nth-child(even) .timeline-content:after{left:auto;right:0}
.main-timeline .timeline:nth-child(2n) .timeline-content:after,.main-timeline .timeline:nth-child(2n) .timeline-icon i,.main-timeline .timeline:nth-child(2n) .timeline-icon:before,.main-timeline .timeline:nth-child(2n):before{background:#f9850f}
.main-timeline .timeline:nth-child(2n) .timeline-icon{border-color:#f9850f}
.main-timeline .timeline:nth-child(2n) .title{color:#f9850f}
.main-timeline .timeline:nth-child(2n) .timeline-content:before{border-left-color:#f9850f;border-bottom-color:#f9850f}
.main-timeline .timeline:nth-child(3n) .timeline-content:after,.main-timeline .timeline:nth-child(3n) .timeline-icon i,.main-timeline .timeline:nth-child(3n) .timeline-icon:before,.main-timeline .timeline:nth-child(3n):before{background:#8fb800}
.main-timeline .timeline:nth-child(3n) .timeline-icon{border-color:#8fb800}
.main-timeline .timeline:nth-child(3n) .title{color:#8fb800}
.main-timeline .timeline:nth-child(3n) .timeline-content:before{border-left-color:#8fb800;border-bottom-color:#8fb800}
.main-timeline .timeline:nth-child(4n) .timeline-content:after,.main-timeline .timeline:nth-child(4n) .timeline-icon i,.main-timeline .timeline:nth-child(4n) .timeline-icon:before,.main-timeline .timeline:nth-child(4n):before{background:#2fcea5}
.main-timeline .timeline:nth-child(4n) .timeline-icon{border-color:#2fcea5}
.main-timeline .timeline:nth-child(4n) .title{color:#2fcea5}
.main-timeline .timeline:nth-child(4n) .timeline-content:before{border-left-color:#2fcea5;border-bottom-color:#2fcea5}
@media only screen and (max-width:1200px){.main-timeline .timeline-icon:before{width:50px;right:-50px}
.main-timeline .timeline:nth-child(even) .timeline-icon:before{right:auto;left:-50px}
.main-timeline .timeline-content{margin-top:75px}
}
@media only screen and (max-width:990px){.main-timeline .timeline{margin:0 0 10px}
.main-timeline .timeline-icon{left:25%}
.main-timeline .timeline:nth-child(even) .timeline-icon{right:25%}
.main-timeline .timeline-content{margin-top:115px}
}
@media only screen and (max-width:767px){.main-timeline{padding-top:50px}
.main-timeline:before{left:80px;right:0;margin:0}
.main-timeline .timeline{margin-bottom:70px}
.main-timeline .timeline:before{top:0;left:83px;right:0;margin:0}
.main-timeline .timeline-icon{width:60px;height:60px;line-height:40px;padding:5px;top:0;left:0}
.main-timeline .timeline:nth-child(even) .timeline-icon{left:0;right:auto}
.main-timeline .timeline-icon:before,.main-timeline .timeline:nth-child(even) .timeline-icon:before{width:25px;left:auto;right:-25px}
.main-timeline .timeline-icon:after,.main-timeline .timeline:nth-child(even) .timeline-icon:after{width:25px;height:30px;top:44px;left:auto;right:-5px}
.main-timeline .timeline-icon i{font-size:30px;line-height:45px}
.main-timeline .timeline-content,.main-timeline .timeline:nth-child(even) .timeline-content{width:100%;margin-top:-15px;padding-left:130px;padding-right:5px}
.main-timeline .timeline:nth-child(even) .timeline-content{float:right}
.main-timeline .timeline-content:before,.main-timeline .timeline:nth-child(even) .timeline-content:before{width:50%;left:120px}
.main-timeline .timeline:nth-child(even) .timeline-content:before{right:auto;transform:rotateY(0)}
.main-timeline .timeline-content:after,.main-timeline .timeline:nth-child(even) .timeline-content:after{left:85px}
}
@media only screen and (max-width:479px){.main-timeline .timeline-content,.main-timeline .timeline:nth-child(2n) .timeline-content{padding-left:110px}
.main-timeline .timeline-content:before,.main-timeline .timeline:nth-child(2n) .timeline-content:before{left:99px}
.main-timeline .timeline-content:after,.main-timeline .timeline:nth-child(2n) .timeline-content:after{left:65px}
}

/******************* Timeline Demo - 5 *****************/
.main-timeline5{overflow:hidden;position:relative}
.main-timeline5 .timeline{position:relative;margin-top:-79px}
.main-timeline5 .timeline:first-child{margin-top:0}
.main-timeline5 .timeline-icon,.main-timeline5 .year{margin:auto;position:absolute;top:0;left:0;bottom:0;right:0}
.main-timeline5 .timeline:after,.main-timeline5 .timeline:before{content:"";display:block;width:100%;clear:both}
.main-timeline5 .timeline:before{content:"";width:100%;height:100%;box-shadow:-8px 0 5px -5px rgba(0,0,0,.5) inset;position:absolute;top:0;right:0;z-index:2}
.main-timeline5 .timeline-icon{width:210px;height:210px;border-radius:50%;border:25px solid transparent;border-top-color:#660099;border-right-color:#660099;z-index:1;transform:rotate(45deg)}
.main-timeline5 .year{display:block;width:110px;height:110px;line-height:110px;border-radius:50%;background:#fff;box-shadow:0 0 20px rgba(0,0,0,.4);font-size:30px;font-weight:700;color:#660099;text-align:center;transform:rotate(-45deg)}
.main-timeline5 .timeline-content{width:35%;float:right;background:#660099;padding:30px 20px;margin:50px 0;z-index:1;position:relative}
.main-timeline5 .timeline-content:before{content:"";width:20%;height:15px;background:#660099;position:absolute;top:50%;left:-20%;z-index:-1;transform:translateY(-50%)}
.main-timeline5 .title{font-size:20px;font-weight:700;color:#fff;margin:0 0 10px}
.main-timeline5 .description{font-size:16px;color:#fff;line-height:24px;margin:0}
.main-timeline5 .timeline:nth-child(2n):before{box-shadow:8px 0 5px -5px rgba(0,0,0,.5) inset}
.main-timeline5 .timeline:nth-child(2n) .timeline-icon{transform:rotate(-135deg);border-top-color:#2f0b5a;border-right-color:#2f0b5a}
.main-timeline5 .timeline:nth-child(2n) .year{transform:rotate(135deg);color:#2f0b5a}
.main-timeline5 .timeline:nth-child(2n) .timeline-content{float:left}
.main-timeline5 .timeline:nth-child(2n) .timeline-content:before{left:auto;right:-20%}
.main-timeline5 .timeline:nth-child(2n) .timeline-content,.main-timeline5 .timeline:nth-child(2n) .timeline-content:before{background:#2f0b5a}
.main-timeline5 .timeline:nth-child(3n) .timeline-icon{border-top-color:#660099;border-right-color:#660099}
.main-timeline5 .timeline:nth-child(3n) .year{color:#660099}
.main-timeline5 .timeline:nth-child(3n) .timeline-content,.main-timeline5 .timeline:nth-child(3n) .timeline-content:before{background:#}
.main-timeline5 .timeline:nth-child(4n) .timeline-icon{border-top-color:#2f0b5a;border-right-color:#2f0b5a}
.main-timeline5 .timeline:nth-child(4n) .year{color:#2f0b5a}
.main-timeline5 .timeline:nth-child(4n) .timeline-content,.main-timeline5 .timeline:nth-child(4n) .timeline-content:before{background:#2f0b5a}
@media only screen and (max-width:1199px){.main-timeline5 .timeline{margin-top:-103px}
.main-timeline5 .timeline-content:before{left:-18%}
.main-timeline5 .timeline:nth-child(2n) .timeline-content:before{right:-18%}
}
@media only screen and (max-width:990px){.main-timeline5 .timeline{margin-top:-127px}
.main-timeline5 .timeline-content:before{left:-2%}
.main-timeline5 .timeline:nth-child(2n) .timeline-content:before{right:-2%}
}
@media only screen and (max-width:767px){.main-timeline5 .timeline{margin-top:0;overflow:hidden}
.main-timeline5 .timeline:before,.main-timeline5 .timeline:nth-child(2n):before{box-shadow:none}
.main-timeline5 .timeline-icon,.main-timeline5 .timeline:nth-child(2n) .timeline-icon{margin-top:-30px;margin-bottom:20px;position:relative;transform:rotate(135deg)}
.main-timeline5 .timeline:nth-child(2n) .year,.main-timeline5 .year{transform:rotate(-135deg)}
.main-timeline5 .timeline-content,.main-timeline5 .timeline:nth-child(2n) .timeline-content{width:100%;float:none;border-radius:0 0 20px 20px;text-align:center;padding:25px 20px;margin:0 auto}
.main-timeline5 .timeline-content:before,.main-timeline5 .timeline:nth-child(2n) .timeline-content:before{width:15px;height:25px;position:absolute;top:-22px;left:50%;z-index:-1;transform:translate(-50%,0)}
}
/******************************************** ICON TRAY ******************************************************/
.our-team-main
{
    width:100%;
    height:auto;
    border-bottom:5px #8e43e7 solid;
    border-right:5px #8e43e7 solid;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.829), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    background:#fff;
    text-align:center;
    border-radius:10px;
    overflow:hidden;
    position:relative;
    transition:0.5s;
    margin-bottom:28px;
}
.our-team-main img
{
    border-radius:50%;
    margin-bottom:20px;
    width: 90px;
}
.our-team-main h3
{
    font-size:20px;
    font-weight:700;
}
.our-team-main p
{
    margin-bottom:0;
}
.team-back
{
    width:100%;
    height:auto;
    position:absolute;
    top:0;
    left:0;
    padding:5px 15px 200px 15px;
    text-align:left;
    background:#8e43e7;
    color: #fff;
}
.team-front
{
    width:100%;
    height:auto;
    position:relative;
    z-index:3;
    background:#fff;
    padding:15px;
    bottom:0px;
    transition: all 0.5s ease;
}
.our-team-main:hover .team-front
{
    bottom:-200px;
    transition: all 0.5s ease;
}
.our-team-main:hover
{
    border-color:#8e43e7;
    transition:0.5s;
}
/*our-team-main*/
</style>
  </head>
 <head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    .bs-example{
      margin: 20px;
    }
    .modal-content iframe{
        margin: 0 auto;
        display: block;
    }
</style>
<script>
$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#cartoonVideo").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function(){
        $("#cartoonVideo").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal").on('show.bs.modal', function(){
        $("#cartoonVideo").attr('src', url);
    });

    var url1 = $("#cartoonVideo1").attr('src');
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal1").on('hide.bs.modal', function(){
        $("#cartoonVideo1").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal1").on('show.bs.modal', function(){
        $("#cartoonVideo1").attr('src', url1);
    });

     var url2 = $("#cartoonVideo2").attr('src');
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal2").on('hide.bs.modal', function(){
        $("#cartoonVideo2").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal2").on('show.bs.modal', function(){
        $("#cartoonVideo2").attr('src', url2);
    });

     var url3 = $("#cartoonVideo3").attr('src');
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal3").on('hide.bs.modal', function(){
        $("#cartoonVideo3").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal3").on('show.bs.modal', function(){
        $("#cartoonVideo3").attr('src', url3);
    });


         var url4 = $("#cartoonVideo4").attr('src');
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal4").on('hide.bs.modal', function(){
        $("#cartoonVideo3").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal4").on('show.bs.modal', function(){
        $("#cartoonVideo3").attr('src', url4);
    });

    var url5 = $("#cartoonVideo5").attr('src');
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal5").on('hide.bs.modal', function(){
        $("#cartoonVideo3").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal5").on('show.bs.modal', function(){
        $("#cartoonVideo5").attr('src', url5);
    });
});


</script></head>
  <body>
        <!-- Slider Start -->
    <section id="global-header">
        <div class="container" style="margin-left: -50px">
            <div class="row">
                <div class="col-md-1">
                    <div class="block">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
     <section id="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <div class="block">
              <div class="section-title">
                <h2>Augmented Reality</h2>
                <p>The beauty of Augmented Reality(AR) is that it can happen anytime and anywhere. An AR app allows you to interact with the real world in entirely new ways – which means that your next immersive brand experience could be right around the corner. AR enables brands and product owners to transform images, objects, and locations into interactive and immersive digital experiences by putting unforgettable AR experiences right at your audience’s fingertips (and straight onto their mobile device). Augmented Reality is the new battleground for tech giants and this creates a huge opportunity for your brand. It can be used to enhance the user experience. Show and present your products in more innovative and immersive manner.</p><p><a href="pricing.php" class="btn btn-default btn-call-to-action" style="background-color:#660099;color: #ffffff">Ask for Quotation</a></p>
              </div>
            </div>
          </div><!-- .col-md-7 close -->
          <div class="col-md-5 col-sm-12">
            <div class="block">
              <img src="img/ar_main.jpg" alt="Img">
            </div>
          </div><!-- .col-md-5 close -->
        </div>
      </div>
        
      <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12">
            <div class="block">
              <div class="bs-example">
                  <!-- Button HTML (to Trigger Modal) -->
                  <a href="#myModal" data-toggle="modal"><img src="img/4.png"></a>
                  <!-- Modal HTML -->
                  <div id="myModal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">YouTube Video</h4>
                              </div>
                              <div class="modal-body">
                                  <iframe id="cartoonVideo" width="560" height="315" src="https://www.youtube.com/embed/SoQlldZ1dds" frameborder="0" allowfullscreen></iframe>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> 
           </div>
          </div>
          <div class="col-md-7 col-sm-12">
            <div class="block">
              <div class="section-title">
                <h2>AUGMENTED REALITY PRODUCT DEMO</h2>
                <p>Why demonstrate your product with pictures from different angles, when you can use Augmented Reality and generate a 3D like miniature product for them to have a look from all angles. Let your product speak for itself. Give a unique and engaging ‘try before you buy’ experience to the audience. Bring your products to life with AR. Make your AR Product Demo Now</p>
              </div>
            </div>
          </div><!-- .col-md-7 close -->
        <!-- .col-md-5 close -->
        </div>
      </div>
       <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <div class="block">
              <div class="section-title">
                <h2>AR CATALOG</h2>
                <p>In an exhibition, meeting or presentation distinguish yourself from the rest by using this stunning technology and make your customers remember you and your products even after event. Also this will generate more interest in the readers reading the catalog.It will create an add on value to your presentation and create a huge impact on the audience. This innovative approach usually increases the conversation rate.</p>
              </div>
            </div>
          </div><!-- .col-md-7 close -->
          <div class="col-md-5 col-sm-12">
            <div class="block">
              <div class="bs-example">
                  <!-- Button HTML (to Trigger Modal) -->
                  <a href="#myModal1"  data-toggle="modal"><img src="img/6.png"></a>
                  <!-- Modal HTML -->
                  <div id="myModal1" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">YouTube Video</h4>
                              </div>
                              <div class="modal-body">
                                  <iframe id="cartoonVideo1" width="560" height="315" src="https://www.youtube.com/embed/ZkmkNZ7O1NA" frameborder="0" allowfullscreen></iframe>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> 
            </div>
          </div><!-- .col-md-5 close -->
        </div>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12">
            <div class="block">
              <div class="bs-example">
                  <!-- Button HTML (to Trigger Modal) -->
                  <a href="#myModal3"  data-toggle="modal"><img src="img/7.png"></a>
                  <!-- Modal HTML -->
                  <div id="myModal3" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">YouTube Video</h4>
                              </div>
                              <div class="modal-body">
                                  <iframe id="cartoonVideo3" width="560" height="315" src="https://www.youtube.com/embed/V1mmO_Gdx6o" frameborder="0" allowfullscreen></iframe>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> 
              
            </div>
          </div>
          <div class="col-md-7 col-sm-12">
            <div class="block">
              <div class="section-title">
                <h2>AR IN REAL ESTATE</h2>
                <p>With the help of AR technology, you can create the models of your real estate plans that look like a miniature of the actual property.This gives the customer a better experience and ease while buying the property. Let your customer live in their dream home before it is build, so they can choose their dream home accurately. Grab this opportunity and adopt this amazing technology before it becomes a technology of past.</p>
              </div>
            </div>
          </div><!-- .col-md-7 close -->
        <!-- .col-md-5 close -->
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <div class="block">
              <div class="section-title">
                <h2>AR EDUCATION</h2>
                <p>Augmented reality animated content in classroom lessons could catch students’ attention in our dynamic day and age, as well as motivate them to study. Adding extra data, e.g. a short bio of a person, fun facts, historical data about sites or events, visual 3D models, would give students a wider understanding of topics. While doing homework, students may scan certain elements of a book and receive text, audio or video tips from teachers. Or they may find useful information about the course, a teacher or other students which could lead to better communication.</p>
              </div>
            </div>
          </div><!-- .col-md-7 close -->
          <div class="col-md-5 col-sm-12">
            <div class="block">
              <div class="bs-example">
                  <!-- Button HTML (to Trigger Modal) -->
                  <a href="#myModal2" data-toggle="modal"><img src="img/8.png"></a>
                  <!-- Modal HTML -->
                  <div id="myModal2" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">YouTube Video</h4>
                              </div>
                              <div class="modal-body">
                                  <iframe id="cartoonVideo2" width="560" height="315" src="https://www.youtube.com/embed/GG90QEvwmEU" frameborder="0" allowfullscreen></iframe>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> 
             
            </div>
          </div><!-- .col-md-5 close -->
        </div>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12">
            <div class="block">
              <div class="bs-example">
                  <!-- Button HTML (to Trigger Modal) -->
                  <a href="#myModal4" " data-toggle="modal"><img src="img/9.png"></a>
                  <!-- Modal HTML -->
                  <div id="myModal4" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">YouTube Video</h4>
                              </div>
                              <div class="modal-body">
                                  <iframe id="cartoonVideo4" width="560" height="315" src="https://www.youtube.com/embed/fXyUk2MaKqI" frameborder="0" allowfullscreen></iframe>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> 
              
            </div>
          </div>
          <div class="col-md-7 col-sm-12">
            <div class="block">
              <div class="section-title">
                <h2>AR E-COMMERCE</h2>
                <p>Any technology that’s able to bring in massive improvements in user experience will make a great impact in the e-commerce field. Augmented reality (AR) is one such revolutionary technology. It superimposes digital information onto the physical environment, thus opening opportunities for novel consumer experiences. To enjoy AR-powered experiences, the end users don’t need any additional hardware. This makes adoption much easier.</p>
              </div>
            </div>
          </div><!-- .col-md-7 close -->
        <!-- .col-md-5 close -->
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <div class="block">
              <div class="section-title">
                <h2>AR AUTOMOBILE</h2>
                <p>In many ways, the benefits of AR in cars is not unlike that seen in current applications in the enterprise arena or the use cases envisioned for consumers, streamlining relevant information, such as speed, turn-by-turn directions, or the track information of a currently-playing song, into the user's field of view. And for cars, AR also serves as a safety feature as well as a convenience, allowing drivers to keep their eyes on the road rather than instrument panels or navigation and infotainment displays.</p>
              </div>
            </div>
          </div><!-- .col-md-7 close -->
          <div class="col-md-5 col-sm-12">
            <div class="block">

              <div class="bs-example">
                  <!-- Button HTML (to Trigger Modal) -->
                  <a href="#myModal5" data-toggle="modal"><img src="img/10.png"></a>
                  <!-- Modal HTML -->
                  <div id="myModal5" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">YouTube Video</h4>
                              </div>
                              <div class="modal-body">
                                  <iframe id="cartoonVideo5" width="560" height="315" src="https://www.youtube.com/embed/-aU0sCj2G5U" frameborder="0" allowfullscreen></iframe>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> 
                          </div>
          </div><!-- .col-md-5 close -->
        </div>
      </div>
    </section>
  
<!-- Call to action Start -->

    <!-- footer Start -->
   <?php include("footer.php"); ?>
    </body>
</html>
