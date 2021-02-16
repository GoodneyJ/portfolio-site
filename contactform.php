<?php 



if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "jarrod.goodney@jarrodg.dev";
    $headers = "From: ".$mailFrom;
    $txt = $headers." \n\nYou've received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);

    echo '<div id="email-submission-container">
            <h2>Email Sent!</h2>
            <p> Return to my site <a href="https://jarrodg.dev/">here!</a>
          </div>';

    echo '<div class="fixed-wrap">

            <div id="fixed">
            
                <div id="particles-js">

                </div>
            </div>
         </div>';


}
?>




<style>
    body {
        margin: 0;  
        background: #060a0c;
    }

    a {
        color: #ec7b13;
        font-weight: bold;
        text-decoration: none;
    }

    #email-submission-container {
        position: relative;
        z-index: 1000;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        font-family: 'Montserrat';
        text-align: center;
        width: 250px;
        height: 250px;
        margin: auto auto;
        transform: translateY(60%);
        color: white;
        background-color: #121e24;
        border-radius: 10px;
    }

    #email-submission-container h2{
        margin: 0;
    }




    #particles-js {   
        position: relative;
        width: 100%;
        height: 100%;
        background-image: url("");
        background-repeat: no-repeat;
        background-size: cover;
    }

</style>


<script src="particles.js"></script>
<script>

    
    
    particlesJS('particles-js',
  {
    "particles": {
      "number": {
        "value": 50,
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": "#ec7b13"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.5,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 3,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 100,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 0.5,
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "bounce": false,
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "window",
      "events": {
        "onhover": {
          "enable": true,
          "mode": "grab"
        },
        "onclick": {
          "enable": true,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 100,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200,
          "duration": 0.4
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": false,
    "config_demo": {
      "hide_card": false,
      "background_color": "#060a0c",
      "background_image": "",
      "background_position": "center",
      "background_repeat": "no-repeat",
      "background_size": "cover"
    }
  }

);


    
</script>