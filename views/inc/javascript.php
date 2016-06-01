 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {

      var o;
      $('.parallax').parallax();
      $(".button-collapse").sideNav();
      $(".dropdown-button").dropdown();
      $('.modal-trigger').leanModal();
      $('select').material_select();
      
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
        
      $('.slider').slider({full_width: true});
      $(window).load(function () {
        setTimeout(function () {
          $('body').addClass('loaded');
        }, 200);
      });
      $(".btnuptodo").click(function(){
        var infos = $(this).parent().parent().parent().prev();
        var titre = infos.children(".title").html();
        var date = infos.children(".infotodo").children(".spandate").html();
        var real = parseInt(infos.children(".infotodo").children(".spanreal").html());
        var descr = infos.children(".infodescr").html();
        var idt = infos.children(".idt").html();
        $('#todotitre').val(titre);
        $('#tododate').val(date);
        $('#tododescr').val(descr);
        $('#todoreal').val(real);
        $('#tododescr').trigger('autoresize');
        $('#idtup').val(idt);
        $('.todotitrelab').addClass('active');
        $('.tododatelab').addClass('active');
        $(".confuptodo").attr("href","index.php?page=accueil&idt="+idt);
      });
      $(".btnuppensebete").click(function(){
        var infos = $(this).parent().parent().parent().prev();
        var titre = infos.children(".title").html();
        var date = infos.children(".infopb").children(".spandate").html();
        var descr = infos.children(".infodescrpb").html();
        var idpb = infos.children(".idpb").html();
        $('#pbtitre').val(titre);
        $('#pbdate').val(date);
        $('#pbdescr').val(descr);
        $('#idpbup').val(idpb);
        $('#pbdescr').trigger('autoresize');
        $('.pbtitrelab').addClass('active');
        $('.pbdatelab').addClass('active');
        $(".confuppb").attr("href","index.php?page=accueil&idpb="+idpb);
      });

       $(".real").click(function(){
        var d = parseInt($(this).prev().prev().prev().children(".spanreal").html());
        var idt = $(this).prev().prev().prev().prev().prev().html()
        $('#realrange').val(d);
        $('#idtupreal').val(idt);
        $(".confreal").attr("href","index.php?page=accueil&idt="+idt);
      });

       $(".deltodo").click(function(){
        var idt = $(this).prev().prev().prev().prev().html();
        o = this;
        var data = { 
          "type": "1" ,
          "id": idt
          }; 
        data = $(this).serialize() + "&" + $.param(data); 
        $.ajax({
            url: "views/inc/ajax.php",
            type: "post",
            data: data,
           datatype: 'json',
          success: function(data){
               $(o).parent().parent().remove();
               swal("Todo supprimé", "Le todo a bien été supprimé !", "success");
          },
          error:function(data){
              alert(data);
            }   
          }); 
      }); 
       $(".delpb").click(function(){
        var idpb = $(this).prev().prev().prev().prev().html();
        o = this;
        var data = { 
          "type": "2" ,
          "id": idpb
          }; 
        data = $(this).serialize() + "&" + $.param(data); 
        $.ajax({
            url: "views/inc/ajax.php",
            type: "post",
            data: data,
           datatype: 'json',
          success: function(data){
               $(o).parent().parent().remove();
              swal("Pense-Bête supprimé", "Le pense-bête a bien été supprimé !", "success");
          },
          error:function(data){
              alert(data);
            }   
          });
      });

      $("#btnfiltre").click(function(){
        if($("#staggered-test").css("display") == "none"){
          $("#staggered-test").fadeIn("slow");
          $(this).dequeue();
          $("#staggered-test").css("display","block");
        }else{
          $("#staggered-test").fadeOut("slow");
          $(this).dequeue();
          $("#staggered-test").css("display","none");
        }
      });
      $("#ajout_concerner").click(function(){
        if($("#div_ajout").css("display") == "none"){
          if($("#div_del").css("display") != "none"){
            $("#delete_concerner").trigger( "click" );
          }
          $("#div_ajout").fadeIn("slow");
          $(this).dequeue();
          $("#div_ajout").css("display","block");
        }else{
          $("#div_ajout").fadeOut("slow");
          $(this).dequeue();
          $("#div_ajout").css("display","none");
        }
      });
      $("#delete_concerner").click(function(){
        if($("#div_del").css("display") == "none"){
          if($("#div_ajout").css("display") != "none"){
            $("#ajout_concerner").trigger( "click" );
          }
          $("#div_del").fadeIn("slow");
          $(this).dequeue();
          $("#div_del").css("display","block");
        }else{
          $("#div_del").fadeOut("slow");
          $(this).dequeue();
          $("#div_del").css("display","none");
        }
      });
      $(".collection-item").click(function(){
        $(this).parent().children().removeClass("active");
        $(this).addClass("active");
        $('body').scrollSpy();
      });

      $(window).scroll(function() {
         if(!$('header').hasClass("fixedHeader") && ($(window).scrollTop() > $('header').offset().top)) {
         $('header').addClass("fixedHeader").data("top", $('header').offset().top);
         $('#content').addClass("fixedContent");
         } 
         else if ($('header').hasClass("fixedHeader") && ($(window).scrollTop() < $('header').data("top"))) {
         $('header').removeClass("fixedHeader");
          $('#content').removeClass("fixedContent");

         }
      });
  });
</script>