<!DOCTYPE html>
<html class="no-js">
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
 <?php include("header.php"); ?>
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
                <h2>VIRTUAL REALITY</h2>
                <p>Virtual reality is an artificial environment that is created with software and presented to the user in such a way that the user suspends belief and accepts it as a real environment. On a computer, virtual reality is primarily experienced through two of the five senses: sight and sound. In a virtual reality environment, a user experiences immersion, or the feeling of being inside and a part of that world. One is also able to interact with his environment in meaningful ways. User is bound to feel it as it is happening right beside them due to its amazing technicality and not to mention the experience. So through this technology of VR, you can provide your customers a thorough view of your product and it will help in explaining them the product’s features to its very extent.</p><p><a href="pricing.php" class="btn btn-default btn-call-to-action" style="background-color:#660099;color: #ffffff">Ask for Quotation</a></p>
              </div>
            </div>
          </div><!-- .col-md-7 close -->
          <div class="col-md-5 col-sm-12">
            <div class="block">
              <img src="img/vr.jpg" alt="Img">
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
                  <a href="#myModal" data-toggle="modal"><img src="img/11.png"></a>
                  <!-- Modal HTML -->
                  <div id="myModal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">YouTube Video</h4>
                              </div>
                              <div class="modal-body">
                                  <iframe id="cartoonVideo" width="560" height="315" src="https://www.youtube.com/embed/t-Qo_CNyHV8" frameborder="0" allowfullscreen></iframe>
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
                <h2>VR EDUCATION</h2>
                <p>Introducing a whole new concept in educational technology: A Virtual Reality headset complete with a unique student-friendly interface, gesture controls, embedded educational resources and simple-to-use teacher controls. VR is a ground-breaking new technology designed to help raise engagement and increase knowledge retention for students of all ages. This will help in enhancing their knowledge in coolest way possible.</p>
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
                <h2>VR REAL ESTATE</h2>
                <p>There isn’t a single organization on the face of the Earth that can survive without well-trained members. However, as much as everyone likes to boast about how effective their training program is, the simple fact is that nothing can beat on the job experience. Polishing one’s skills on real-life problems in day to day situations, despite all the technical innovation is ultimately what makes a professional valuable. And this one area where Virtual Reality training truly shines out.</p>
              </div>
            </div>
          </div><!-- .col-md-7 close -->
          <div class="col-md-5 col-sm-12">
            <div class="block">
              <div class="bs-example">
                  <!-- Button HTML (to Trigger Modal) -->
                  <a href="#myModal1"  data-toggle="modal"><img src="img/12.png"></a>
                  <!-- Modal HTML -->
                  <div id="myModal1" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">YouTube Video</h4>
                              </div>
                              <div class="modal-body">
                                  <iframe id="cartoonVideo1" width="560" height="315" src="https://www.youtube.com/embed/MN3aZ4QTAEU" frameborder="0" allowfullscreen></iframe>
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
                  <a href="#myModal2" data-toggle="modal"><img src="img/13.png"></a>
                  <!-- Modal HTML -->
                  <div id="myModal2" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">YouTube Video</h4>
                              </div>
                              <div class="modal-body">
                                  <iframe id="cartoonVideo2" width="560" height="315" src="https://www.youtube.com/embed/0NormS9SIow" frameborder="0" allowfullscreen></iframe>
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
                <h2>VR TRAINING</h2>
                <p>Virtual Reality (VR) is a game changer and it's already transforming the way the real estate industry functions. The power of VR technology can help real estate agents grow their business, get more clients, and deliver top-level services. It's particularly important to adopt this new technology today when – according to a survey by the National Association of Realtors – 95% of clients search for properties on the internet.</p>
              </div>
            </div>
          </div><!-- .col-md-7 close -->
        <!-- .col-md-5 close -->
        </div>
      </div>
      
    </section>
  
<!-- Call to action Start -->

    <!-- footer Start -->
   <?php include("footer.php"); ?>
    </body>
</html>
